@php
    $contacts = App\User::where("status", "1")->get();
    $user = App\User::where("id", Auth::user()->id)->first();
@endphp
<div class="contact">
    <h3 class="friend-request">Contacts</h3>
    <span class="req-a">
        <i class="fa fa-search search-contact"></i>
        <i class="ti-close search-cancel keep"></i>
    </span>
    <span class="req-a"><i class="fa fa-ellipsis-h"></i></span>
</div>
<input type="text" placeholder="Search friends" class="search-con form-control keep" id="search-me" name="search-me">
<div class="online-friends-search"></div>
<div class="online-friends-div">
    @foreach ($contacts as $contact)
        <div class="online-friends col-lg-12 col-md-12 col-sm-12 chatbox"  data-touserid="{{ $contact->id }}" data-tousername="{{ $contact->name }}" data-id="{{ $contact->id }}">
                @if ($contact->user_image == null)
                    <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                        <a href="/profile/{{$user->secrete_id}}">
                            <img src="/assets/images/default.png" class="req-image" alt="">
                            <span class="status-on f-online"></span>
                        </a>
                    </figure>
                @else
                    <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                        <a href="/profile/{{$user->secrete_id}}">
                            <img src="{{ asset("users") }}/{{ substr($contact->user_image, 0, 10) }}.{{$contact->secrete_id}}.jpg" class="req-image" style="height: 50px;" alt="{{$contact->name}}">
                            <span class="status-on f-online"></span>
                        </a>
                    </figure>
                @endif
            <div class="col-lg-10 col-md-10 col-sm-10">
                <h3 class="online-h3">{{ $contact->name }}</h3>
            </div>
        </div>
    @endforeach
</div>
<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/assets/vendor/emoji-picker/lib/js/config.js"></script>
<script src="/assets/vendor/emoji-picker/lib/js/util.js"></script>
<script src="/assets/vendor/emoji-picker/lib/js/jquery.emojiarea.js"></script>
<script src="/assets/vendor/emoji-picker/lib/js/emoji-picker.js"></script>
<script src="/assets/js/jquery-ui.js" type="text/javascript"></script>
<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

<script> 
    function make_chat_dialog_box(to_user_id, to_user_name)
        {
            var modal_content ='<div class="chat-box" id="user_dialog_'+to_user_id+'">';
                    modal_content +=    '<div class="chat-head">';
                        modal_content +=    '<span class="status f-online"></span>';
                        modal_content +=    '<h6>'+to_user_name+'</h6>';
                        modal_content +=    '<div class="more">';
                            modal_content +=    '<span class="more-optns">';
                                modal_content +=    '<i class="ti-more-alt"></i>';
                                modal_content +=    '<ul><li>block chat</li><li>unblock chat</li><li>conversation</li></ul>';
                                modal_content += '</span>';
                                modal_content +=    '<span class="ui-dialog-titlebar-close"><i class="ti-close"></i></span>';
                                modal_content += '</div>';
                            modal_content += '</div>';
    
                            modal_content +=    '<div class="chat-list">';
                                modal_content +=    '<ul id="chat_history_'+to_user_id+'" class="show-chats"></ul>';
                                    modal_content +='<li class="you" id="typing"></li>';
                                    modal_content +='<div class="lead emoji-picker-container">';
                                            modal_content +='<input name="chat_message" placeholder="Write to Chat..." class="form-control chat_message_status chat_message_'+to_user_id+'" data-id="'+to_user_id+'" data-emojiable="true" data-emoji-input="unicode" id="emojiinput">';
                                            modal_content +='<button type="button"  id="'+to_user_id+'" class="send_chat btn btn-primary"><i class="fa fa-telegram"></i></button>';
                                                modal_content +='</div>';
                                                modal_content += '<div class="smiles-bunch">';
                                                    modal_content +='<button></button>';
                                                modal_content +=  '</div>';
                                                    modal_content +='</div>';
                                                    modal_content +='</div>';

    
            $('#chat_users_box').html(modal_content);
            
        
        }
        function removeClassDiv(){
            const removeElements = (elms) => elms.forEach(el => el.remove());
            // Use like:
            removeElements( document.querySelectorAll(".chat-box") );
        }	
        $(document).ready(function(){
            //--- side message box	
            $('.chatbox').on('click', function() {
                var to_user_id = $(this).data('touserid');
                var to_user_name = $(this).data('tousername');
                    make_chat_dialog_box(to_user_id, to_user_name);
                    $("#user_dialog_"+to_user_id).dialog({
                        autoOpen:false,
                    });
                    $('#user_dialog_'+to_user_id).dialog("open");
                    $('.ui-dialog').addClass("show");
                    $('.chat-box').addClass("show");
                    fetch_user_chat_history(to_user_id);
                return false;
            });	
            $(document).on('focus', '.chat_message_status', function(){
                var is_typing = 'yes';
                var user_id = $(this).data("id");
                $.ajax({
                    url:"/update_is_typing_status",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                    method:"POST",
                    data:{
                        "is_typing":is_typing,
                        "user_id":user_id
                    },
                    success:function(data){
                        $("#typing").append(data);
                    }
                });
            });
            $(document).on('blur', '.chat_message_status', function(){
                var is_typing = 'no';
                var user_id = $(this).data("id");
                $.ajax({
                    url:"/update_is_typing_status",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                    method:"POST",
                    data:{
                        "is_typing":is_typing,
                        "user_id":user_id
                    },
                    success:function(data){
                        $("#typing").remove(data);
                    }
                })
            });


            $(document).on('click', '.send_chat', function(event){
                event.preventDefault();
                var to_user_id = $(this).attr('id');
                var chat_message = $('.chat_message_'+to_user_id).val();
                $.ajax({
                    url:"/insert_chat",
                    method:"POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                    data:{
                        "receiver_id":to_user_id, 
                        "message":chat_message
                    },
                success:function(data)
                {
                    showChat(to_user_id);
                }
                });
            });
            
       
            function showChat(to_user_id){
                $.ajax({
                    url:"/fetch_chat",
                    method:"POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                    success:function(response)
                    {
                      $('#chat_history_'+to_user_id).append(response)
                    }
                });
            }
            function fetch_user_chat_history(to_user_id)
            {
                $.ajax({
                    url:"/all_chats",
                    method:"POST",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                    data:{"to_user_id":to_user_id},
                    success:function(data){
                        $('#chat_history_'+to_user_id).html(data);
                    }
                });
            }
        $(document).on('click', '.ui-dialog-titlebar-close', function(e) {
            $('.chat-box').removeClass("show");
            $('.ui-dialog ').removeClass();
            removeClassDiv();
                return false;
          // do whatever
        });
    
        // $('.ui-dialog-titlebar-close').on('click', function() {
        //         alert("Iyin Ko ni tan lenu mi");
        //         $('.chat-box').removeClass("show");
        //         return false;
        //     });
            $(".ui-dialog-titlebar-close").click();
            $(function () {
            // Initializes and creates emoji set from sprite sheet
            // window.emojiPicker = new EmojiPicker({
            //     emojiable_selector: '[data-emojiable=true]',
            //     assetsPath: '/assets/vendor/emoji-picker/lib/img/',
            //     popupButtonClasses: '/assets/images/icon-smile'
            // });
    
            // window.emojiPicker.discover();
        }); 
    });

    // $("").on("click", function(){
    
    // });
    </script>
<script>
    $(document).ready(function(){
        
        $('#search-me').on('keyup', function(){
            var query = $(this).val();
            // alert("Am there!!!");
            $.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            if( !$(this).val() ) {                      //if it is blank. 
                $('.online-friends-search').addClass("keep");
                $('.online-friends-div').removeClass("keep");
                $('.online-friends-div').addClass("view");
            }else{
                $('.online-friends-search').removeClass("keep");
                $('.online-friends-search').addClass("view");

                $.ajax({
                    url:"/searchbox",
                    type:'GET',
                    data:{
                        'query':query,
                    },
                    dataType:'json',
                    success:function(res)
                    {
                        showContact();
                    }
                });
            }
        });
        function showContact() {
            $.ajax({
                url:"/fetch_search",
                method:"POST",
                success:function(response) {
                    $(".online-friends-div").addClass("keep");
                    $('.online-friends-search').html(response);
                }
            })
        }
    });
</script>
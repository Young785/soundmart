@php
    $query = session()->get('query');
    if($query != '')
    {
        $datas = App\User::where('status', '1')->where('name', 'like', '%'.$query.'%')->get();
    }
    else
    {
    $datas = App\User::orderBy('created_at', 'desc')
        ->get();
    }
@endphp
@if ($datas == null)
<div class="online-friends col-lg-12 col-md-12 col-sm-12 chatbox">
    <p class="online-p">No online searched friends is found!</p>
</div>
@else
    @foreach ($datas as $data)
        <div class="online-friends col-lg-12 col-md-12 col-sm-12 chatbox"  data-touserid="{{ $data->id }}" data-tousername="{{ $data->name }}" data-id="{{ $data->id }}">
            @if ($data->user_image == null)
                <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                    <a href="/profile/{{$data->secrete_id}}">
                        <img src="/assets/images/default.png" class="req-image" alt="">
                        <span class="status-on f-online"></span>
                    </a>
                </figure>
            @else
                <figure class="col-lg-2 col-md-2 col-sm-3 req-figure">
                    <a href="/profile/{{$data->secrete_id}}">
                        <img src="{{ asset("users") }}/{{ substr($data->user_image, 0, 10) }}.{{$data->secrete_id}}.jpg" class="req-image" style="height: 50px;" alt="{{$data->name}}">
                        <span class="status-on f-online"></span>
                    </a>
                </figure>
            @endif
            <div class="col-lg-10 col-md-10 col-sm-10">
                <h3 class="online-h3">{{ $data->name }}</h3>
            </div>
        </div>
    @endforeach
@endif
<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery-ui.js" type="text/javascript"></script>
{{-- 
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
                                modal_content +=    '<ul>';
                                    modal_content +=    '<li class="me">';
                                        modal_content +=    '<div class="chat-thumb">';
                                            modal_content +=    '<img src="/assets/images/resources/chatlist1.jpg" alt="">';
                                            modal_content +='</div>'
                                            modal_content += '<div class="notification-event">';
                                                modal_content +=    '<span class="chat-message-item">';
                                                    modal_content +=    'Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks ';
                                                    modal_content +=    'Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks ';
                                                    modal_content +=    'Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks ';
                                                    modal_content +=    'Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks ';
                                                    modal_content +=    'Hi James! Please remember to buy the food for tomorrow! I’m gonna be handling the gifts and Jake’s gonna get the drinks ';
                                                    modal_content +='</span>';
                                                    modal_content +='<span class="notification-date">';
                                                    modal_content += '<time datetime="2004-07-24T18:18" class="entry-date updated">Yesterday at 8:10pm</time>';
                                                    modal_content += '</span>';
                                                modal_content +='</div>';
                                            modal_content +='</li>';
                                            modal_content += '</ul>';
    
                                            modal_content +=  '<form class="text-box">';
                                                        modal_content +='<textarea placeholder="Post enter to post..."></textarea>';
                                                        modal_content +='<div class="add-smiles">';
                                                            modal_content +='<span title="add icon" class="em em-expressionless"></span>';
                                                            modal_content +='</div>';
                                                            modal_content += '<div class="smiles-bunch">';
                                                                modal_content +='<i class="em em---1"></i><i class="em em-smiley"></i><i class="em em-anguished"></i><i class="em em-laughing"></i><i class="em em-angry"></i><i class="em em-astonished"></i><i class="em em-blush"></i><i class="em em-disappointed"></i><i class="em em-worried"></i><i class="em em-kissing_heart"></i><i class="em em-rage"></i><i class="em em-stuck_out_tongue"></i>';
                                                         modal_content +=  '</div>';
                                                                modal_content +='<button type="submit"></button>';
                                                                modal_content +='</form>';
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
            
                return false;
            });	
           
    
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
            
    });
    </script>
 --}}

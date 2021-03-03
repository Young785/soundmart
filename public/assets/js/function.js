
    $(document).ready(function(){
        $(".post-form").submit(function(event){
            event.preventDefault();
            var post_name = $(".image_name").val();
            var post_image = new FormData(this);
            // var totalfiles = document.getElementById('files').files.length;
            // for (var index = 0; index < totalfiles; index++) {
            //     post_image.append("image[]", document.getElementById('files').files[index]);
            // }
            // console.log(post_name);
            // console.log(post_image);
            // console.log(index);
            // var commentValidate = document.forms["commentForm"]["comment"].value;
            $.ajax({
                url: '/newsfeed', 
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                data: post_image,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function (response) {
                    $(".postoverlay").fadeOut(500);
                    $(".post-normal-div").removeClass("keep");
                    $(".post-div-header ").removeClass("show");
                    $(".post-div-header ").addClass("keep");
                   showPost();
                }
            });
        });
        function showPost(){
            $.ajax({
                url: '/return-post', 
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
                success: function (response) {
                   $("#new-post").append(response);
                }
            });
        }
    });
    function com(com_id){
        $(".reply").hide();
        $("#"+com_id).show();
        $("#"+com_id).removeClass("keep");
        $("we-reply").addClass("keep-class");

        // alert(com_id);
        // let com_id = document.getElementById("com_id").innerHTML;
        // console.log(com_id);
    }
    $(document).on("click", ".keep-class", function(){
        $("we-reply").removeClass("keep-class");
        $("#"+com_id).addClass("keep");
    });
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
                                        modal_content +='<input name="chat_message" placeholder="Write to Chat..." style="display: block !important" type="text" class="form-control emoji-wysiwyg-editor chat_message_status chat_message_'+to_user_id+'" data-id="'+to_user_id+'" data-emojiable="true" data-emoji-input="unicode2" id="emojiinput">';
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
            window.emojiPicker = new EmojiPicker({
                emojiable_selector: '[data-emojiable=true]',
                assetsPath: '/assets/vendor/emoji-picker/lib/img/',
                popupButtonClasses: 'fa fa-smile-o',
                
            });
            window.emojiPicker.discover();
            $(".emoji-picker").addClass("emoji-right");
            
        });
        $(document).on('blur', '.chat_message_status', function(){
            // $(".emoji-picker").removeClass("emoji-right");
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
            if (chat_message == "") {
                
            }else{
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
            }
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
  
});

$(document).ready(function(){
        
    $('#search-me').on('keyup', function(){
        var query = $(this).val();
        // alert("Am there!!!");
        console.log(query);
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
$(document).ready(function(){
    $('.like').on('click', function(){
			var post_id = $(this).data('id');

		    $post = $(this);

			$.ajax({
				url: '/',
				type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data: {
					'liked': 1,
					'post_id': post_id
				},
				success: function(response){
					$post.parent().find('ins.likes_count').text(response);
					$post.addClass('hide');
					$(".like-li").addClass('hide');
					$(".dislike").removeClass('hide');
					$(".dislike-li").removeClass('hide');
				}
			});
        });

        $('.dislike').on('click', function(){
			var post_id = $(this).data('id');
		    $post = $(this);

			$.ajax({
				url: '/',   
				type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				data: {
					'disliked': 1,
					'post_id': post_id
				},
				success: function(response){
					$post.parent().find('ins.likes_count').text(response);
					$post.addClass('hide');
					$(".dislike-li").addClass('hide');
                    $(".like-li").removeClass('hide');
                    $(".like").removeClass('hide');
				}
			});
        });
    });
    $(document).ready(function(){
        $('.comment-form').on('submit', function(event) {
            event.preventDefault();
            var comment = $('.comment-message').val();
            var post_id = $('.post_id').val();
            var commentValidate = document.forms["commentForm"]["comment"].value;
            if (commentValidate == "") {
                alert("Comment must be filled out!");
                return false;
            }else{

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '/comment',
                    method: "POST",
                    data: {
                        "comment":comment,
                        "post_id":post_id
                    },
                    success: function(res) {
                        comment.value = "";
                        $('.comment-form')[0].reset();
                        $('.commentId').val('0');
                        showComments();
                    },
                });
            }
        });
    });
    function showComments() {
        $.ajax({
            url:"/fetch_comments",
            method:"POST",
            success:function(response) {
                $('#dis_comment').append(response);
            }
        });
    }
    $(".search-contact").on("click", function(){
            $('.search-contact').addClass("keep");
            $('.search-cancel').removeClass("keep");
            $('.search-cancel').addClass("view");
            $('.search-con').removeClass("keep");
            $('.search-con').addClass("view");
        });
        $(".search-cancel").on("click", function(){
            $('.search-cancel').removeClass("view");
            $('.search-cancel').addClass("keep");
            $('.search-con').removeClass("view");
            $('.search-con').addClass("keep");
            $('.search-contact').removeClass("keep");
            $('.search-contact').addClass("view");
            $('.online-friends-div').removeClass("keep");
            $('.online-friends-search').removeClass("view");
        });
// go far
    //  $(document).ready(function(){
    //     fetch_user();
    //     setInterval(function(){
    //         // update_last_activity();
    //         fetch_user();
    //         }, 10s0000);
    //     function fetch_user()
    //     {
    //         $.ajax({
    //             url:"/fetch_user",
    //             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
    //             method:"POST",
    //             success:function(data){
    //                 console.log(data);
    //                 $('#contacts-widget').html(data);
    //             }
    //         });
    //     }

    //     // function update_last_activity()
    //     // {
    //     //     $.ajax({
    //     //         url:"/update_last_activity",
    //     //         success:function()
    //     //         {

    //     //         }
    //     //     });
    //     // }
        

    // });


    var loadCoverFile = function(event) {
        var image = document.getElementById('result');
        $(".result-image").removeClass("keep");
        image.src = URL.createObjectURL(event.target.files[0]);
    };
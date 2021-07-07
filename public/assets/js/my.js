$(".search-click").on("click", function(){
        $(".mh-head").removeClass("keep");
        $(".mh-head").addClass("show");
        $(".search-click").addClass("remove-me");
        $(".search-click").removeClass("search-click");
});
function home(){
    location.href = '/';
};
$(document).on("click", ".remove-me", function(){
    alert("uhn?");
    $(".mh-head").removeClass("keep");
    $(".remove-me").addClass("search-click");
    $(".mh-head").addClass("show");
    $(".remove-me").removeClass("remove-me");
});
function markRead(){
    $.get("/markAsRead")
}

setTimeout(()=>{
    var alertId = document.getElementById('remove')
    alertId.classList.add('modal')
},3000);

$(function() {
// Initializes and creates emoji set from sprite sheet
window.emojiPicker = new EmojiPicker({
    emojiable_selector: '[data-emojiable=true]',
    assetsPath: '/assets/lib/img/',
    popupButtonClasses: 'fa fa-smile-o'
});
// Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
// You may want to delay this step if you have dynamically created input fields that appear later in the loading process
// It can be called as many times as necessary; previously converted input fields will not be converted again
window.emojiPicker.discover();
});

$('.user-img').on('click', function() {
    $('.dropDiv').toggleClass("active");
});
//------ scrollbar plugin
if ($.
isFunction($.fn.perfectScrollbar)) {
    $('.dropdowns, .twiter-feed, .invition, .followers, .chatting-area, .peoples, #people-list, .chat-list > ul, .message-list, .chat-users, .left-menu').perfectScrollbar();
}

//------- Notifications Dropdowns
$('.top-area > .setting-area > li > a').on("click",function(){
 var $parent = $(this).parent('li');
$parent.siblings().children('div').removeClass('active');
$(this).siblings('div').addClass('active');
  return false;
});



$('.rdrp').on('click', function(){
    alert("ibninoi");
    // $('.rdrp').addClass('drpDiv');
    // $('.dropUl').removeClass('show');
    // $('.rdrp').removeClass('rdrp');
});
$('.drpDiv').on('click', function(){
    $('.drpDiv').addClass('rdrp');
    $('.dropUl').addClass('show');
    $('.drpDiv').removeClass('drpDiv');
});

//------- remove class active on body
$("body *").not('.top-area > .setting-area > li > a').on("click", function() {
$(".top-area > .setting-area > li > div").not('.searched').removeClass('active');

});


     // Like Function   
    //     $('.like').on('click', function(){
    //             var post_id = $(this).data('id');
    
    //             $post = $(this);
    
    //             $.ajax({
    //                 url: '/',
    //                 type: 'post',
    //                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //                 data: {
    //                     'liked': 1,
    //                     'post_id': post_id
    //                 },
    //                 success: function(response){
    //                     $post.parent().find('ins.likes_count').text(response);
    //                     $post.addClass('hide');
    //                     $(".like-li").addClass('hide');
    //                     $(".dislike").removeClass('hide');
    //                     $(".dislike-li").removeClass('hide');
    //                 }
    //             });
    //  // Dislike Function   
    
    //         $('.dislike').on('click', function(){
    //             var post_id = $(this).data('id');
    //             $post = $(this);
    
    //             $.ajax({
    //                 url: '/',   
    //                 type: 'post',
    //                 headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
    //                 data: {
    //                     'disliked': 1,
    //                     'post_id': post_id
    //                 },
    //                 success: function(response){
    //                     $post.parent().find('ins.likes_co   unt').text(response);
    //                     $post.addClass('hide');
    //                     $(".dislike-li").addClass('hide');
    //                     $(".like-li").removeClass('hide');
    //                     $(".like").removeClass('hide');
    //                 }
    //             });
    //         });
    //     });
    //     // function refreshComments() {
    //     //                 $("#comment-response").html(data);
    //     //             });
    //     //         }
    
    //     //         setInterval(refreshComments,1000);
    //  // Comment Function   
        
    //         $('.comment-form').on('submit', function(event) {
    //             event.preventDefault();
    //             var comment = $('.comment').val();
    //             var post_id = $('.post_id').val();
    //             var commentValidate = document.forms["commentForm"]["comment"].value;
    //             if (commentValidate == "") {
    //                 alert("Comment must be filled out!");
    //                 return false;
    //             }else{
                
    //                 $.ajaxSetup({
    //                     headers: {
    //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //                     }
    //                 });
    //                 $.ajax({
    //                     url: '/comment',
    //                     method: "POST",
    //                     data: {
    //                         "comment":comment,
    //                         "post_id":post_id
    //                     },
    //                     success: function(res) {
    //                         $('.comment-form')[0].reset();
    //                         $('.commentId').val('0');
    //                         showComments();
    //                     },
    //                 });
    //             }
    //         });
    //     function showComments() {
    //         $.ajax({
    //             url:"/fetch_comments",
    //             method:"POST",
    //             success:function(response) {
    //                 $('#dis_comment').append(response);
    //             }
    //         });
    //     }
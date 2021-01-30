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
    $('.user-setting').toggleClass("active");
});
//------ scrollbar plugin
if ($.isFunction($.fn.perfectScrollbar)) {
    $('.dropdowns, .twiter-feed, .invition, .followers, .chatting-area, .peoples, #people-list, .chat-list > ul, .message-list, .chat-users, .left-menu').perfectScrollbar();
}

//------- Notifications Dropdowns
$('.top-area > .setting-area > li > a').on("click",function(){
 var $parent = $(this).parent('li');
$parent.siblings().children('div').removeClass('active');
$(this).siblings('div').addClass('active');
  return false;
});


//------- remove class active on body
$("body *").not('.top-area > .setting-area > li > a').on("click", function() {
$(".top-area > .setting-area > li > div").not('.searched').removeClass('active');

});

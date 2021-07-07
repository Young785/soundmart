// const { error } = require("jquery");

$(document).ready(function(){
    $('.postStory').on('click', function(){
        $('.searcher').addClass('keep');
        $('.user-section').addClass('keep');
        $('.story-upload').removeClass('keep');
        $('.allStory-div').addClass('keep');
    });
    $('.close-story').on('click', function(){
        $('.story-upload').addClass('keep');
        $('.searcher').removeClass('keep');
        $('.user-section').removeClass('keep');
    });
    
    $('.allStory').on('click', function(){
        $('.searcher').addClass('keep');
        $('.user-section').addClass('keep');
        $('.allStory-div').removeClass('keep');
        var id = $(this).data("id");

        $.ajax({
            url: '/story/get/'+id,
            type: 'get',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            
            success: function(res){
                sessionStorage.setItem('story_id', res.id);
                sessionStorage.setItem('rec_id', res.user_id);
                if (res.story_image == null) {
                    $('.keep_story').addClass('keep');
                    var story_p = '<h2 class="'+res.story_bg+' keep_story" id="story_name">'+res.story_name+'</h2>';
                    $('.sup-tadiv').append(story_p);
                }else{
                    var story_img = '<img src="/users/1614784260.4722497077.jpg" style="height: 100%; width: 100%;">';
                    $('.sup-tadiv').append(story_img);
                }
            }
        });
    });
    
    $('.close-allStory').on('click', function(){
        $('.searcher').removeClass('keep');
        $('.user-section').removeClass('keep');
        $('.allStory-div').addClass('keep');
        sessionStorage.removeItem('story_id');
    });

    $('.st-fdiv2').on('click', function(){
        $('.story-upload').addClass('keep');
        $('.story-upload1').removeClass('keep');
        $('.story-sd-mnav').removeClass('keep');
    });
    $('.close-tudiv').on('click', function(){
        $(".postoverlay").fadeIn(500);
        $('.story-div-header').removeClass('keep');
        $('.story-div-header').addClass('show');
    });
    $('.post-span').on('click', function(){
        $(".postoverlay").fadeOut(500);
        $('.story-div-header').removeClass('show');
        $('.story-div-header').addClass('keep');
    });
    $('.cancel-a').on('click', function(){
        $(".postoverlay").fadeOut(500);
        $('.story-div-header').removeClass('show');
        $('.story-div-header').addClass('keep');
    });
    $('.postoverlay').not('.close-tudiv').click(function() {
        $(".postoverlay").fadeOut(500);
        $('.story-div-header').removeClass('show');
        $('.story-div-header').addClass('keep');
    });
    // $('.create-pages').on('mouseout').click(function() {
    //     $('.createDiv ').removeClass('active');
    // });

    $('.cancel-button').on('click', function(){
        $('.story-sd-mnav').addClass('keep');
        $('.story-div-header').removeClass('show');
        $('.story-div-header').addClass('keep');
        $(".postoverlay").fadeOut(500);
        $('.story-upload').removeClass('keep');
    });
    $('.mini-img').on('click', function(){
        $('.searcher').addClass('keep');
        $('.user-section').addClass('keep');
        $('.allStory-div').removeClass('keep');
    });
    $('.story-settings').on('click', function(){
        $(".postoverlay").fadeIn(500);
        $('.story-settings-div').removeClass('keep');
    });
    $('.postoverlay').not('story-settings').click(function(){
        $('.story-settings-div').addClass('keep');
        $(".postoverlay").fadeOut(500);
    });
    $('.cancel-settings').on('click', function(){
        $('.story-settings-div').addClass('keep');
        $(".postoverlay").fadeOut(500);
    });

    $('.all-sCS').on('click', function(){
        $('.allStory-div').addClass('keep');
        $(".story-upload").removeClass("keep");
    });
    $('.cog-span').on('click', function(){
        $(".postoverlay").fadeIn(500);
        $('.storyPri-settings-div').removeClass('keep');
    });
    $('.cancel-Prisettings').on('click', function(){
        $('.storyPri-settings-div').addClass('keep');
        $(".postoverlay").fadeOut(500);
    });
    $('.postoverlay').not('story-settings').click(function(){
        $('.storyPri-settings-div').addClass('keep');
        $(".postoverlay").fadeOut(500);
    });
    // $('.create-sth').on('click', function(){
    //     alert("Senior Man");
    //     $('.ps-theme-default').addClass('active');
    // });
    $('.creategroup').on('click', function(){
        $('.searcher').addClass('keep');
        $('.user-section').addClass('keep');
        $('.user-setting').addClass('active');
        $('.story-upload').addClass('keep');
        $('.story-upload1').addClass('keep');
        $('.cs-main').removeClass('active');
        $('.create-group').removeClass('keep');
        // $('.story-upload').removeClass('keep');
    });
    $('.createadvert').on('click', function(){
        $('.searcher').addClass('keep');
        $('.user-section').addClass('keep');
        $('.user-setting').addClass('active');
        $('.story-upload').addClass('keep');
        $('.create-group').addClass('keep');
        $('.cs-main').removeClass('active');
        $('.marketplace').removeClass('keep');
        // $('.story-upload').removeClass('keep');
    });
    $('.close-Cadvert').on('click', function(){
        $('.searcher').removeClass('keep');
        $('.user-section').removeClass('keep');
        $('.user-setting').removeClass('active');
        $('.marketplace').addClass('keep');
        // $('.story-upload').removeClass('keep');
    });
    $('.close-Cgroup').on('click', function(){
        $('.searcher').removeClass('keep');
        $('.user-section').removeClass('keep');
        $('.user-setting').removeClass('active');
        $('.create-group').addClass('keep');
        // $('.story-upload').removeClass('keep');
    });
    // View Type
    $('.tv-view').on('click', function(){
        $('.cg-div').removeClass('keep');
        $('.mcg-div').addClass('keep');
    });
    $('.mobile-view').on('click', function(){
        $('.cg-div').addClass('keep');
        $('.mcg-div').removeClass('keep');
    });


    
    $('#story-image').on('submit', function(){
        var image = $('#story-image').val();
        if (!$(this).val()) {

        }else{
            sessionStorage.setItem("image", image);
            $('.images-mdiv').removeClass('keep');
            $('.story-upload').addClass('keep');
            var loadCoverFile = function(event) {
                var image_result = document.getElementById('story-result');
                $(".story-image").removeClass("keep");
                image_result.src = URL.createObjectURL(event.target.files[0]);
            };

        }
    });
    $('#text-input').on('keyup', function(){
        if ($('#text-input').val() == '') {
            $(".sup-col3-bdivb2").attr("disabled", true);
            document.getElementById("sup-tp").innerHTML = 'Start Typing';
        }else{
            $(".sup-col3-bdivb2").attr("disabled", false);
            var x = document.getElementById('text-input').value;
            document.getElementById("sup-tp").innerHTML = x;
        }
    }); 
    $('#pg-name').on('keyup', function(){
        if ($('#pg-name').val() == '') {
            document.getElementById("pg-name-show").innerHTML = 'Page Name';
            $(".create-group").attr("disabled", true);
            $(".create-page").attr("disabled", true);
        }else{
            var x = document.getElementById('pg-name').value;
            document.getElementById("pg-name-show").innerHTML = x;
            $(".create-group").attr("disabled", false);
            $(".create-page").attr("disabled", false);
        } 
    });
    $('.create-group').on('click', function(){
        $(".create-group").attr("disabled", false);
    });
    $('#pg-category').on('keyup', function(){
        if ($('#pg-category').val() == '') {
            document.getElementById("pg-category-show").innerHTML = 'Category';
        }else{
            var x = document.getElementById('pg-category').value;
            document.getElementById("pg-category-show").innerHTML = x;
        } 
    }); 

    $('#pg-description').on('keyup', function(){
        if ($('#pg-description').val() == '') {
            document.getElementById("pg-description-show").innerHTML = 'Description';
        }else{
            var x = document.getElementById('pg-description').value;
            document.getElementById("pg-description-show").innerHTML = x;
        }
    }); 
    $('.selectColor').on('click', function(){
        var result = sessionStorage.getItem("addpClass");
        if (result != null) {
            $('.sup-tdiv').removeClass(result);
            $('.story_bg').removeData(result);
            sessionStorage.removeItem("addpClass");
        }else{
        }
        var dataId = $(this).data('id');
        var idSplit = dataId.match(/\d/g);
        var id = idSplit.join('');
        var add = '.add'+dataId;
        var add1 = 'addp'+id;
        sessionStorage.setItem("addpClass", add1);

        $('.textRemoval').removeClass('text-active');
        var ty = document.getElementById("story_bg").innerHTML = add1;
        var showInput = document.getElementById("story_bg").innerHTML;
        alert(showInput);
        // $('.story_bg').add('value', 'add'+id);
        $('.sup-tdiv').addClass('addp'+id);
        $(add).addClass('text-active');
    });

    $('.story-form').on('submit', function(event) {
        event.preventDefault();
        // $(".sup-col3-bdivb2").attr("disabled", true);
        
        var story_name = $('.text-input').val();
        var story_bg = $('.story_bg').val();
        var story_text = $('.story_text').val();
        var story_image = $('.story_image').val();
        var storyValidate = document.forms["storyPost"]["text_story"].value;
        
        if (storyValidate == "") {
            alert("Story input must be filled out!");
            return false;
        }else{
            $.ajax({
                url: '/story/create',
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    'story_name': story_name,
                    'story_bg': story_bg,
                    'story_text': story_text,
                    'story_image':story_image,
                },
                success: function(res){
                    $('.story-sd-mnav').addClass('keep');
                    $('.searcher').removeClass('keep');
                    $('.user-section').removeClass('keep');
                    $('.allStory').addClass('keep');

                    var res_substr = res.user_image.substr(0,10);
                    var postedStory = '<div class="uwtps allStory" data-id="'+res.story_id+'">';
                        postedStory +=    '<a href="" class="fs--uimg-a">';
                        postedStory +=       '<span>';
                        postedStory +=          '<img src="/users/'+res_substr+'.'+res.secrete_id+'.jpg" class="fs--uimg" alt="">';
                        postedStory +=        '</span>';
                        postedStory +=     '</a>';
                        postedStory +=     '<div class="fs--mini-div">';
                        postedStory +=          '<p class="fs-p">'+res.name+'</p>'
                        postedStory +=               '<div alt="" class="mini-img '+res.story_bg+'">';
                        postedStory +=                  '<div class="story-texts">'+res.story_name+'</div>';
                        postedStory +=               '</div>';
                        postedStory +=            '</div>'
                        postedStory +=   '</div>';
                    $('#postStory').append(postedStory);
                    
                }
            });
        }
    });
    $('.allStory-input').on('keyup',function(){
        var input = $('.allStory-input').val();
        if (input == '') {
            $('.allStory-button').addClass('keep');
        }else{
            $('.allStory-button').removeClass('keep');
        }
    });
    $('.allStory-button').on('click',function(){
        var story_reply = $('.allStory-input').val();
        var id = sessionStorage.getItem('story_id');
        var rec_id = sessionStorage.getItem('rec_id');

        if (story_reply == '') {

        }else{
            $('.allStory-input').val('');
            $('.allStory-button').addClass('keep');
            $.ajax({
                url: '/reply_to_story/'+id,
                type: 'post',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                  'story_reply':story_reply,
                  'rec_id':rec_id,
                },
                success: function(res){
                    if(res != ''){
                        alert('Reply Sent.');
                    }else{
                        // return error();
                    }
                }
            });
        }
    });
});
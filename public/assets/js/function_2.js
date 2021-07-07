$(document).ready(function(){
    $(document).on("click",".add-friend",function(){
        $(".add-friend").attr("disabled", true);
        var add_id = $(this).data("id");

        $.ajax({
            url:"/profile/friend-request/"+add_id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            method:"POST",
            // beforeSend : function()
            // {
            //     $("#preview").fadeOut();
            //     $("#err").fadeOut();
            // },
            success:function(res){
                // setInterval(function(){
                //     fetch_user(res);
                //     }, 10000
                // );
                $(".add-friend").addClass("keep");
                $(".friends-button").removeClass("cancel-request");
                var removebtn = '<button type="submit" class="friends-button dropdown-item cancel-request" value="'+res+'">Cancel Request</button>';
                $("#cancel-req").append(removebtn);
            }
        });
    });

    $(document).on("click",".cancel-request",function(){
        $(".cancel-request").attr("disabled", true);
        var add_id = $(".f-input").val();
        var id = $(".cancel-request").val();
     
        $.ajax({
            url:"/profile/cancel-request/"+id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            method:"POST",
            success:function(data){
                $(".cancel-request").addClass("keep");
                $(".friends-div").addClass("keep");
                var addbtn = '<button data-ripple="" type="submit" class="friends-button add-friend" data-id="'+add_id+'">Add Friend</button>';
                $("#add_btn").append(addbtn);
            }
        });
    }); 
    $(document).on("click",".confirm-request",function(){
        $(".confirm-request").attr("disabled", true);
        var add_id = $(".f-input").val();
        var req_id = $(".confirm-request").val();
    
        $.ajax({
            url:"/profile/friend-requests/confirm/"+req_id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            method:"POST",
            success:function(data){
                
                $(".respond-div").addClass("keep");
                $(".confirm-request").addClass("keep");
                var confbtn = '<div class="add-btn friends-div">';
                    confbtn+=       '<div class="dropdown">';
                    confbtn+=           '<button class="btn btn-blue dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Friends';
                  confbtn+=                  '<i class="fa fa-user timeline-i"></i>'
                  confbtn+=             '</button>';
                confbtn+=               '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
                confbtn+=                   '<button class="dropdown-item cancel-request" value="'+req_id+'" type="submit">Unfriend</button>';
                confbtn+=                   '<button class="dropdown-item">Message</button>';
                confbtn+=              '</div>'
                confbtn+=          '</div>';
                confbtn+=      '</div>';
                $("#conf_req").append(confbtn);
            }
        });
    });
    function fetch_user(res)
    {
        $.ajax({
            url:'/fetch_on_user/'+res,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            method:"POST",
            success:function(data){
                $('#add_btn').html(data);
            }
        });
    }
}); 

var loadUserImage = function(event) {
    var image = document.getElementById('u_imageResult');
    image.src = URL.createObjectURL(event.target.files[0]);
};

var loadCoverImage = function(event) {
var image = document.getElementById('imageResult');
image.src = URL.createObjectURL(event.target.files[0]);
};

$(document).ready(function(){
    $("#userImageForm").submit(function(e){
        e.preventDefault();
        var sec_id = $(".userImageButton").data("id");
        var u_image = $(".user_image").val();
        var userimage = new FormData(this);

        $.ajax({
            url:"/profile/"+sec_id,
            method:"POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            data: userimage,
            processData: false,
            contentType: false,
            cache: false,
            success:function(data)
            {
                $("#uploadPhoto").modal("hide");
                $("#uploadPhoto").removeClass("show");
                $(".modal-backdrop").remove();
                $(".previous-image").addClass("keep");
                var data_substr = data.user_image.substr(0,10);
                var res =       '<figure class="previous-image">';
                    res +=          '<img src="/users/'+data_substr+'.'+data.secrete_id+'.jpg" class="profile-picture" alt="'+data.name+'" title="'+data.name+'">';
                    res +=          '<form class="edit-phto">';
                    res +=               '<i class="fa fa-camera-retro"></i>';
                    res +=             '<label class="fileContainer">';
                    res +=                  'Edit Display Photo';
                    res +=                  '<button type="button" class="btn btn-default keep profile-button" data-toggle="modal" data-target="#uploadPhoto"></button>';
                    res +=              '</label>';
                    res +=         '</form>'
                    res +=      '</figure>';
                    $(".user-image").html(res);
            }
        });
      });
    });
    $(document).ready(function(e){
        $("#userCoverForm").submit(function(e){
        e.preventDefault();
        var coversec_id = $(".userCoverButton").data("id");
        var formData = $("#userCoverForm")[0];
        //   var coverImage = new FormData(this[0]);
        var coverImage = new FormData(formData);

        $.ajax({
            url:"/profile/cover/"+coversec_id,
            method:"POST",
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},  
            processData: false,
            contentType: false,
            cache: false,  
            data: coverImage,
            //   beforeSend : function()
            //     {
            //         //$("#preview").fadeOut();
            //         $("#err").fadeOut();
            //     },
            success:function(response)
            {
                $("#uploadCoverPic").modal("hide");
                $("#uploadCoverPic").removeClass("show");
                $(".modal-backdrop").remove();
                $(".previous-cover").addClass("keep");
                var response_substr = response.user_cover_image.substr(0,10);
                var res = '<figure class="timeline-figure previous-cover col-lg-8">';
                        res += '<img src="/cover/'+response_substr+'.'+response.secrete_id+'.jpg" class="sub" alt="'+response.name+'" title="'+response.name+'">';
                        res += '</figure>'; 
                $(".append-img").append(res);
            }
        });
        });
    });
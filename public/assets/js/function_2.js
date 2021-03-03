$(document).ready(function(){
    $(document).on("click",".add-friend",function(){
        var add_id = $(this).data("id");
        // alert(add_id);
        $.ajax({
            url:"/profile/friend-request/"+add_id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            method:"POST",
            success:function(res){
                // setInterval(function(){
                //     fetch_user(res);
                //     }, 10000
                // );
                console.log(res);
                $(".add-friend").addClass("keep");
                $(".friends-button").removeClass("cancel-request");
                var removebtn = '<button type="submit" class="friends-button dropdown-item cancel-request" value="'+res+'">Cancel Request</button>';
                $("#cancel-req").append(removebtn);
            }
        });
    });

    $(document).on("click",".cancel-request",function(){
        var add_id = $(".f-input").val();
        var id = $(".cancel-request").val();
        // alert(add_id);
        // alert(id);
        $.ajax({
            url:"/profile/cancel-request/"+id,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},    
            method:"POST",
            success:function(data){
                $(".cancel-request").addClass("keep");
                var addbtn = '<button data-ripple="" type="submit" class="friends-button add-friend" data-id="'+add_id+'">Add Friend</button>';
                $("#add_btn").append(addbtn);
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
                console.log(data);
                $('#add_btn').html(data);
            }
        });
    }
}); 
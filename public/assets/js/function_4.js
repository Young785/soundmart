$('#pg-name').on('keyup', function(){
    var cn = $('#pg-name').val();
    if (cn == "") {
        $('.pnspan').addClass('keep');
    }else{
        $.ajax({
            url: "/check_name/"+cn,
            type: 'get',
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            data: {
                'cn': cn,   
            },
            success: function(res){
                $('.pnspan').addClass('keep');
                if (res != '') {
                    $(".create-page").attr("disabled", true);
                    var rpnr = '<span class="pnspan" style="background: #f02849 !important">';
                            rpnr +=   '<i class="fa fa-close" style="margin-left: -16px;"></i>';
                            rpnr += '</span>';   
                }else{
                    $(".create-page").attr("disabled", false);
                    var rpnr = '<span class="pnspan" style="background: #00a300 !important">';
                                   rpnr +=   '<i class="fa fa-check" style="margin-left: -16px;"></i>';
                               rpnr += '</span>'; 
                }
                $('#pn-p').append(rpnr);
            }
        });
    }
}); 
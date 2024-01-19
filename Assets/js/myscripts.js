$(document).ready(function(){
   

    //dlt-btn
    $('.dlt-btn').on('click',function(){
        let id = $(this).data('id');
        if(confirm('Are you sure want to delete it?')){
            $('#hid').val(id);
            $('#dltForm').submit();
        }else{
            return false;
        }
       
    });

    //add-btn
    $('.add-btn').on('click',function(){
        let id = $(this).data('id');
        $('#getId').val(id);
        $('.booking-box').addClass('show');
        
        
    });
    $('.close-btn').on('click',function(){
        $('.booking-box').removeClass('show');
    });


})
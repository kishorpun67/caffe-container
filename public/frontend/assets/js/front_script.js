$(document).ready(function(){
    $(".size").on('click', function(){
        var sizeClass = "size";
        var size = get_filter(sizeClass);
        var addonClass = 'add-on';
        var addon =  get_filter(addonClass);
        $.ajax({
            type: 'get',
            url:'price/',
            data:{
                size:size,
                addon:addon,
            },
            success:function(response){
                if(response==0){
                }else{
                    $("#item-price").html(response);
                    $("#total_price").val(response);
                }
            },error:function(){
                alert('error');
            }
        });
    });
});

    $(".add-on").on('click', function(){
        var addonClass = 'add-on';
        var sizeClass = "size";
        var addon = get_filter(addonClass);
        var size =  get_filter(sizeClass);
        $.ajax({
            type: 'get',
            url:'/price',
            data:{
                size :size,
                addon:addon,
            },
            success:function(response){
                $("#item-price").html(response);
                $("#total_price").val(response);
            },error:function(){
                alert('error');
            }
        });
    });
    $(".claculate").on('click', function(){
        var addonClass = 'add-on';
        var sizeClass = "size";
        var addon = get_filter(addonClass);
        var size =  get_filter(sizeClass);
        var item_no = $("#item_num").val();
        $.ajax({
            type: 'get',
            url:'/calculate',
            data:{
                addon :addon,
                total_price:total_price
            },
            success:function(response){
                if(response==0){
                }else{
                    $("#item-price").html(response);
                    $("#total_price").val(response);
                }
            },error:function(){
                alert('error');
            }
        });

    })

        function get_filter(class_name){
            var filter = [];
            $('.' + class_name + ':checked').each(function(){
                filter.push($(this).val());
            });
                return filter;
        }

     ;

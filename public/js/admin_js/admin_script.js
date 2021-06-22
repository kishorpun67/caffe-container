
$(document).ready(function() {
    // Check Admin Password is correct or not
    $("#current_password").keyup(function () {
        var current_password = $("#current_password").val();
        // alert(current_password);

        $.ajax({
            type:'post',
            url:'/admin/check-current-password',
            data:{
                current_password:current_password
            },
            success:function(response) {
                if(response=="false")
                {
                    $("#checkCurrentPassword").html("<font color=red>Current Password is Incorrect.");
                }else if(response=="true")
                {
                    $("#checkCurrentPassword").html("<font color=green>Current Password is Correct.");
                }
            },error:function(){
                alert("Error");
            }
        });

    });


    // updatsection  admin status
    $(".updateAdmintStatus").click(function() {
        var status = $(this).text();
        var admin_id= $(this).attr("admin_id");
        $.ajax({
            type:'post',
            url:'/super/update-admin-status',
            data:{
                status:status,
                admin_id:admin_id
            },
            success:function(response) {
                if(response['status']==0) {
                    $("#admin-"+admin_id).html("<a  class='updateAdmintStatus'  href='javascript:(0);'>Inctive</a>");
                }else if(response['status']==1){
                    $("#admin-"+admin_id).html(" <a  class='updateAdmintStatus'  href='javascript:(0);'>Active</a>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });




    // Delete category prodcut
    $(".delete_form").click(function(){
        var id =$(this).attr('rel');
        var record =$(this).attr('record');
        // alert(id);
        swal({
            title: "Are you sure?",
            text: "You will not able to recover this record again!",
            icon: "warning",
            showCancelButton : true,
            confirmButtonClass :"btn-danger",
            confirmButtonText :"Yes, delete it",
        },
        function() {
            window.location.href = "delete-"+record+"/"+id;
        }
        );
    });
 });


    $(document).ready(function(){
        var maxField = 20; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = `<div  style="padding-top:5px;">
        <input type="text" name="add_on[]" id="add_on" placeholder="Size Addons" value="" required/>
        <input type="number" name="price[]" id="price" placeholder="Price" value="" required/>
        <a href="javascript:void(0);" class="remove_button">Remove</a></div>`;
        var x = 1; //Initial field counter is 1

            //Once add button is clicked
            $(addButton).click(function(){
                //Check maximum number of input fields
                if(x < maxField){
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });

            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function(e){
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
    });
    var maxField = 20; //Input fields increment limitation
    var addButton = $('.add_size'); //Add button selector
    var wrapper = $('.field_wrappers'); //Input field wrapper
    var fieldHTML = `<div  style="padding-top:5px;">
    <input type="text" name="size[]" id="size" placeholder="Size" value="" required/>
    <input type="number" name="price[]" id="price" placeholder="Price" value="" required/>
    <a href="javascript:void(0);" class="remove_buttons">Remove</a></div>`;
    var x = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_buttons', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
$(document).ready(function(){

    $("#names").keyup(function(){
        var name = $(this).val();
        if(name != ''){
        // alert(name);

           $.ajax({
              method: "get",
              url: "show-name",
              data: { name: name},
              success: function(data){
                // console.log(data);
                $("#show-name").fadeIn("fast").html(data);
              }
           });
        }else{
          $("#show-name").fadeOut();
        }
      });

      $(document).on('click','#show-name li',function(){
        $('#names').val($(this).text());
        $("#show-name").fadeOut();
      });

    $("#addresss").keyup(function(){
    var address = $(this).val();
    // alert(address);
    if(address != ''){
    // alert(name);

        $.ajax({
            method: "get",
            url: "purchase-address",
            data: { address: address},
            success: function(data){
            // console.log(data);
            $("#address").fadeIn("fast").html(data);
            }
        });
    }else{
        $("#address").fadeOut();
        }
    });

    $(document).on('click','#address li',function(){
        $('#addresss').val($(this).text());
        $("#address").fadeOut();
    });

    $("#pans").keyup(function(){
        var pan_no = $(this).val();
        // alert(address);
        if(pan_no != ''){
        // alert(name);

            $.ajax({
                method: "get",
                url: "purchase-pan_no",
                data: { pan_no: pan_no},
                success: function(data){
                // console.log(data);
                $("#pan_no").fadeIn("fast").html(data);
                }
            });
        }else{
            $("#pan_no").fadeOut();
        }
    });
    $(document).on('click','#pan_no li',function(){
        $('#pans').val($(this).text());
        $("#pan_no").fadeOut();
    });


    // for supplier
    $("#supplier_name").keyup(function(){
        var supplier_name = $(this).val();
        // alert(address);
        if(supplier_name != ''){
        // alert(name);

            $.ajax({
                method: "get",
                url: "supplier-name",
                data: { supplier_name: supplier_name},
                success: function(data){
                // console.log(data);
                $("#supplier-name").fadeIn("fast").html(data);
                }
            });
        }else{
            $("#supplier-name").fadeOut();
        }
    });
    $(document).on('click','#supplier-name li',function(){
        $('#supplier_name').val($(this).text());
        $("#supplier-name").fadeOut();
    });

    $("#supplier_address").keyup(function(){
        var supplier_address = $(this).val();
        // alert(address);
        if(supplier_address != ''){
        // alert(name);

            $.ajax({
                method: "get",
                url: "supplier-address",
                data: { supplier_address: supplier_address},
                success: function(data){
                // console.log(data);
                $("#supplier-address").fadeIn("fast").html(data);
                }
            });
        }else{
            $("#supplier-address").fadeOut();
        }
    });
    $(document).on('click','#supplier-address li',function(){
        $('#supplier_address').val($(this).text());
        $("#supplier-address").fadeOut();
    });

    $("#supplier_pan_no").keyup(function(){
        var supplier_pan_no = $(this).val();
        // alert(address);
        if(supplier_pan_no != ''){
        // alert(name);

            $.ajax({
                method: "get",
                url: "supplier-pan_no",
                data: { supplier_pan_no: supplier_pan_no},
                success: function(data){
                // console.log(data);
                $("#supplier-pan_no").fadeIn("fast").html(data);
                }
            });
        }else{
            $("#supplier-pan_no").fadeOut();
        }
    });
    $(document).on('click','#supplier-pan_no li',function(){
        $('#supplier_pan_no').val($(this).text());
        $("#supplier-pan_no").fadeOut();
    });
});


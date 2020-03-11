$(document).ready(function(){
    var DOMAIN="http://localhost:8080/xampp/inventoryms/public_html/";
     $("#register_form").on("submit",function(){
         var status=false;
         var name=$("#username");
         var email=$("#email");
         var pass1=$("#password1");
         var pass2=$("#password2");
         var typeuser=$("#usertype");
         var e_patt=new RegExp (/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
 
         //name 
         if(name.val()=="" || name.val().length < 6){
             name.addClass("border-danger");
             $("#u_error").html("<span class='text-danger'>Please Enter Name and Name should be more than 6 char</span>")
             status=false;
         }
         else{
             name.removeClass("border-danger")
             $("#u_error").html("");
             status=true;
         }
         //email
         
         if(!e_patt.test(email.val())){
             email.addClass("border-danger");
             $("#e_error").html("<span class='text-danger'>Please Enter Valid Email Address</span>")
             status=false;
         }
         else{
             email.removeClass("border-danger")
             $("#e_error").html("");
             status=true;
         }
 
         //password
         if(pass1.val()==""|| pass1.val().length < 9){
             pass1.addClass("border-danger");
             $("#p1_error").html("<span class='text-danger'>Please Enter more than 9 digit password</span>")
             status=false;
         }
         else{
             pass1.removeClass("border-danger")
             $("#p1_error").html("");
             status=true;
         }
 
         //re pass
         if(pass2.val()==""|| pass2.val().length < 9){
             pass2.addClass("border-danger");
             $("#p2_error").html("<span class='text-danger'>Please Enter more than 9 digit password</span>")
             status=false;
         }
         else{
             pass2.removeClass("border-danger")
             $("#p2_error").html("");
             status=true;
         }
 
         //type
         if(typeuser.val()==""){
             typeuser.addClass("border-danger");
             $("#t_error").html("<span class='text-danger'>Please Enter Choose</span>")
             status=false;
         }
         else{
             typeuser.removeClass("border-danger")
             $("#t_error").html("");
             status=true;
         }
 
         //cjeck
     if ((pass1.val()== pass2.val()) && status==true ){
        $(".overlay").show();

         $.ajax({
                         url : DOMAIN+"/include/process.php",
                         method : "POST",
                         data : $("#register_form").serialize(),
                         success : function(data){
                             if (data == "email exist"){
                                $(".overlay").hide();

                                 alert("User Id is already used");
                             } else if (data == "some error"){
                                $(".overlay").hide();

                                 alert("Something is Wrong");
                             }else {
                                $(".overlay").hide();

                                 window.location.href = encodeURI(DOMAIN+"/index.php?msg=You are registered Now you can login");
                             }
                             alert(data);
             } })
         }else{
             pass2.addClass("border-danger");
             $("#p2_error").html("<span class='text-danger'> Password is not Matching</span>")
             status=true;
         }
     })

   //login f
     $("#formlogin").on("submit",function(){
        var pass=$("#log_password");
        var email12=$("#log_email");
        var status=false;

        //name 
        if(email12.val()==""){
            email12.addClass("border-danger");
            $("#e_error").html("<span class='text-danger'>Please Enter Email Address</span>")
            status=false;
        }
        else{
            email12.removeClass("border-danger")
            $("#e_error").html("");
            status=true;
        }


        if(pass.val()==""){
            pass.addClass("border-danger");
            $("#p_error").html("<span class='text-danger'>Please Enter Password</span>")
            status=false;
        }
        else{
            pass.removeClass("border-danger")
            $("#p_error").html("");
            status=true;
        }
        if(status){
            $(".overlay").show();

            $.ajax({
                url : DOMAIN+"/include/process.php",
                method : "POST",
                data : $("#formlogin").serialize(),
                success : function(data){
                    if (data == "not_registerd"){
                        $(".overlay").hide();

                        email12.addClass("border-danger");
                        $("#e_error").html("<span class='text-danger'>It seems like you are not registered </span>")
                        
                    } else if (data == "password_not_matching"){
                        $(".overlay").hide();

                        pass.addClass("border-danger");
                        $("#p_error").html("<span class='text-danger'>Please Enter Correct Password</span>")
                        status=false;               
                         }else {
                            $(".overlay").hide();

                        console.log(data);
                        window.location.href = DOMAIN+  "/dashbord.php";         
                                 }
                    
                        }
                    })
                    }
                    })

        // fetch row category 
        fetch_category();
        function fetch_category(){
            $.ajax({
                url : DOMAIN+"/include/process.php",
                method : "POST",
                data : {getCategory:1},
                success :function(data){
                    var root="<option value='0'>Root</option>";
                    var choose="<option value=''>Choose Category</option>";

                    $("#parent_cat").html(root+data);
                    $("#select_cat").html(choose+data);

                }
            })
        }
         // fetch row brand 
         fetch_brand();
         function fetch_brand(){
             $.ajax({
                 url : DOMAIN+"/include/process.php",
                 method : "POST",
                 data : {getBrand:1},
                 success :function(data){
                     var choose="<option value=''>Choose Brand</option>";
                      $("#select_brand").html(choose+data);
 
                 }
             })
         }
            //add category

            $("#category_form").on("submit",function(){
                if($("#category_name").val()==""){
                    $("#category_name").addClass("border-danger");
                    $("#cat_error").html("<span class='text-danger'>Please Enter Category Name</span>")
                }else{
                    $.ajax({
                        
                        url : DOMAIN+"/include/process.php",
                        method : "POST",
                        data : $("#category_form").serialize(),
                        success :function(data){
                        if (data=="CATEGORY_ADDED")  {
                            $("#category_name").removeClass("border-danger");
                            $("#cat_error").html("<span class='text-success'>New Category Added Successfully</span>");
                            $("#category_name").val("");
                            fetch_category();

                        }else{
                            alert(data);
                        }
            }

                })
            }
            })

          $("#brand_form").on("submit",function(){
                if($("#brand_name").val()==""){
                    $("#brand_name").addClass("border-danger");
                    $("#brand_error").html("<span class='text-danger'>Please Enter brand Name</span>");
                }
               else{
                  $.ajax({
                        
                        url : DOMAIN+"/include/process.php",
                        method : "POST",
                        data : $("#brand_form").serialize(),
                        success :function(data){
                        if (data=="brand_ADDED")  {
                            $("#brand_name").removeClass("border-danger");
                       
                            $("#brand_error").html("<span class='text-success'>New brand Added Successfully</span>");
                            $("#brand_name").val("");
                            fetch_brand();

                        }else {
                            alert(data);

                        }
                        
                        }
                })
            }
        })
        //add product
        $("#product_form").on("submit",function(){
       
              $.ajax({
                    
                    url : DOMAIN+"/include/process.php",
                    method : "POST",
                    data : $("#product_form").serialize(),
                    success :function(data){
                    if (data=="PRODUCT_ADDED")  {
                      alert("new product add");

                    }else {
                        console.log(data);
                        alert(data);

                    }
                    
                    }
            })
        
    })



     //manage category 
     managecategory();
     function managecategory(){
        $.ajax({
            url : DOMAIN+"/include/process.php",
            method : "POST",
            data :{managecategory:1},
            success :function(data){
                            $("#get_category").html(data);
                            

            }
            });


            }
          })
            
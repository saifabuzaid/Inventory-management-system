$(document).ready(function(){
    var DOMAIN="http://localhost:8080/xampp/inventoryms/public_html/";
    managecategory();
    function managecategory(){
       $.ajax({
           url : DOMAIN+"/include/process.php",
           method : "POST",
           data :{managecategory:1},
           success :function(data){
                           $("#get_category").html(data);
                           

           }
           })


           }

           $("body").delegate(".page-link","click",function(){
               var pn=$(this).attr("pn");
               managecategory(pn);
           
        })
        $("body").delegate(".del_cat","click",function(){
        var did=$(this).attr("did");
        if(confirm("Are you sure? You want to delete")){
            $.ajax({
                url : DOMAIN+"/include/process.php",
                method : "POST",
                data :{deleteCategory:1},
                success :function(data){
                    if(data=="DEPENDENT_CATEGORY"){
                 alert("sorry");                                
                   
                }else 
                if(data=="CATEGORY_DELETED"){
                    alert("category deleted successfully");                      
                }
                else 
                if(data=="DELETED"){
                    alert(" deleted successfully");                      
                }else {
                    alert(data);
                }

                }
                })
        }else{
            alert("no");
        }
                   
    })
})

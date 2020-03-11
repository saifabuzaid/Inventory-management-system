<?php 
include_once("./database/constants.php");
if(!isset($_SESSION["userid"])){
    header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>inventory management system</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="./js/main.js"></script>
    </head>
<body>

<?php include_once("./template/header.php");?>
<br><br>
<div class="container">
    <div class="row">
    <div class="col-md-4">
                <div class="card mx-auto" style="width: 20rem;">
                <img style="width:60%;" src="./images/computer-icons-user-profile-password-login-png-favpng-a5KCGVCAsuair5v9BArYfpjLK.jpg" class="card-img-top mx-auto" alt="...">
                <div class="card-body">
                <h5 class="card-title">Profile info</h5>
                <p class="card-text"><i class="fa fa-user"></i> Saif abuzaid</p>
                <p class="card-text"><i class="fa fa-user"></i> Admin</p>
                <p class="card-text">Last login :<?php echo date("yy-m-d");?></p>
                <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i> Edit profile</a>
                </div>
                </div>
</div>
        <div class="col-md-8"> 
        <div class="jumbotron" style="width:100%;height:90%;">
        <h1>Welcome Admin </h1>
        <div class="row">
        <div class="col-sm-6">
        <iframe src="http://free.timeanddate.com/clock/i73girpr/n11/szw110/szh110/hocfff/cf100/hncfff" frameborder="0" width="110" height="110"></iframe>

        </div>
            <div class="col-sm-6">
    
            <div class="card">
            <div class="card-body">
            <h5 class="card-title">New Order</h5>
            <p class="card-text">Here you can make invoices and create new orders </p>
            <a href="#" class="btn btn-primary">New orders</a>
            </div>
        </div>


        </div></div>


    </div>
    </div>
    <br>
<div class="container">
    <div class="row">

    <div class="col-md-4">
    <div class="card">
            <div class="card-body">
            <h5 class="card-title">Categories</h5>
            <p class="card-text">Here you can Manage your Categories and you add new parent and sub categories </p>
            <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#catogory">Add </a>
            <a href="manage_category.php" class="btn btn-primary">Manage </a>
            </div>
            </div>
            </div>
    <div class="col-md-4">
    <div class="card">
            <div class="card-body" style="width:20rem;">
            <h5 class="card-title">Brand</h5>
            <p class="card-text">Here you can Manage your brand and you add new brand </p>
            <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#brand">Add </a>
            <a href="#" class="btn btn-primary">Manage </a>
            </div>
            </div>
            </div>
    <div class="col-md-4">
    <div class="card">
            <div class="card-body" style="width:20rem;">
            <h5 class="card-title">Products</h5>
            <p class="card-text">Here you can Manage your Products and you add new Products</p>
            <a href="#" class="btn btn-primary"data-toggle="modal" data-target="#product">Add </a>
            <a href="#" class="btn btn-primary">Manage </a>
            </div>
            </div>
            </div>
    </div>
</div>

<?php include_once("./template/category.php"); ?> 
<?php include_once("./template/brand.php"); ?> 
<?php include_once("./template/product.php"); ?> 



</body>
</html>

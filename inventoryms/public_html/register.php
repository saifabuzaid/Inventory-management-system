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
        <script src='main.js'type='text/javascript'></script>
        </head>
    <body>

    <?php include_once("./template/header.php");?>
    <br><br>
    <div class="container">
        <div class="card mx-auto" style="width:30rem;margin:0 auto;">
        <div class="card-header">Register</div>
        <div class="card-body">
        <form id ="register_form" onsubmit="return false" autocomplete="off">
        <div class="form-group">
        <label for ="username">Full name</label>
        <input type ="text" name="username" class="form-control" id="username" placeholder="Enter username">
        <small id="u_error" class="form-text text-muted"></small>

        </div>

        <div class="form-group">
        <label for ="email">Email Address</label>
        <input type="email" name="email" class="form-control" id="email"
        aria-describedby="emailHelp" placeholder="Enter email">
        <small id="e_error" class="form-text text-muted">we'll never share your email with anyone else</small>
        </div>

        <div class="form-group">
        <label for ="password1">Password</label>
        <input type="password" name="password" class="form-control" id="password1"
         placeholder="password">
         <small id="p1_error" class="form-text text-muted"></small>

        </div>

        <div class="form-group">
        <label for ="password2"> Re-enter Password</label>
        <input type="password" name="password2" class="form-control" id="password2"
         placeholder="password">
         <small id="p2_error" class="form-text text-muted"></small>

        </div>
        
        <div class="form-group">
        <label for ="usertype"> User type</label>
        <select name="usertype" class="form-control" id="usertype">
        <option value="">Choose user</option>
        <option value="1">Admin</option>
        <option value="0">other</option>
        </select>
        <small id="t_error" class="form-text text-muted"></small>

        </div>

            <button type="submit"name="user_register" class="btn btn-primary">
            <span class="fa fa-user"></span> Register</button>
            <span> <a href="index.php">Login</a></span>
</form>
    </div>
<div class="card-footer text-muted">
</div>
</div>
</div>
    </body>
    </html>

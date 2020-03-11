<?php
include_once("../database/constants.php");
include_once("user.php");
include_once("DBopertion.php");
include_once("manage.php");

// for register
if(isset($_POST["username"]) AND isset($_POST["email"])){
    $user=new user();
    $result=  $user->createuserAccount($_POST["username"],$_POST["email"],$_POST["password"],$_POST["usertype"]);
      echo $result;
      exit();
}

//for login 
if(isset($_POST["log_email"]) AND isset($_POST["log_password"])){
  $user=new user();
  $result=  $user->userLogin($_POST["log_email"],$_POST["log_password"]);
    echo $result;   
    exit();
}

// fetch category
if(isset($_POST["getCategory"])){
  $obj=new DBopertion();
  $rows=$obj->getAllRecord("categories");
  foreach ($rows as $row ) {
    echo"<option value='".$row["cid"]."'>".$row["category_name"]."</option>";   
  }
exit();
}

//add category 


//for login 
if(isset($_POST["category_name"]) AND isset($_POST["parent_cat"])){
  $obj=new DBopertion();
  $result=  $obj->addCategory($_POST["parent_cat"],$_POST["category_name"]);
    echo $result;   
    exit();
}
//add brand
if(isset($_POST["brand_name"])){
  $obj=new DBopertion();
  $result=  $obj->addbrand($_POST["brand_name"]);
    echo $result;   
    exit();
}


// fetch brand
if(isset($_POST["getBrand"])){
  $obj=new DBopertion();
  $rows=$obj->getAllRecord("brand");
  foreach ($rows as $row ) {
    echo"<option value='".$row["bid"]."'>".$row["brand_name"]."</option>";   
  }
exit();
}
//add product
if(isset($_POST["added_date"]) AND isset($_POST["product_name"])){
  $obj=new DBopertion();
  $result=  $obj->addproduct(
    $_POST["select_cat"]
    ,$_POST["select_brand"]
    ,$_POST["product_name"]
    ,$_POST["product_price"]
    ,$_POST["product_qty"]
    ,$_POST["added_date"]
  );
    echo $result;   
    exit();
}



//manage category
if (isset($_POST["managecategory"])) {
	$m = new Manage();
	$result = $m->manageRecordWithPagination("categories",1);
	$rows = $result["rows"];
	$pagination = $result["pagination"];
	if (count($rows) > 0) {
		$n = 0;
		foreach ($rows as $row) {
			?>
				<tr>
			        <td><?php echo $n; ?></td>
			        <td><?php echo $row["category"]; ?></td>
			        <td><?php echo $row["parent"]; ?></td>
			        <td><a href="#" class="btn btn-success btn-sm">Active</a></td>
			        <td>
			        	<a href="#" did="<?php echo $row['cid']; ?>" class="btn btn-danger btn-sm del_cat">Delete</a>
			        	<a href="#" eid="<?php echo $row['cid']; ?>" data-toggle="modal" data-target="#form_category" class="btn btn-info btn-sm edit_cat">Edit</a>
			        </td>
			      </tr>
			<?php
			$n++;
		}
		?>
			<tr><td colspan="5"><?php echo $pagination; ?></td></tr>
		<?php
		exit();
	}
}


//Delete Category
if (isset($_POST["deleteCategory"])) {
	$m = new Manage();
	$result = $m->deleteRecord("categories","cid",$_POST["id"]);
	echo $result;
}

?>
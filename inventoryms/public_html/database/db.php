<?php
class Database{
    private $con;
    public function connect(){
include_once("constants.php");
$this->con=new mysqli(HOST,USER,PASS,DB);
if($this->con){
  //  echo"connect";
    return $this->con;
}
return "database fail";



    }
}
//$db=new Database();
//$db->connect();
?>
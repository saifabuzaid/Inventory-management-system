<?php
class DBopertion{
    private $con;
    function __construct() {
        include_once("../database/db.php");
        $db=new Database();
        $this->con=$db->connect();  
    }

    //add categories
  public function addCategory($parent,$cat){
    $status=1;
    $pre_stmt=$this->con->prepare("INSERT INTO `categories`( `parent_cat`, `category_name`, `status`) VALUES (?,?,?)");
    $pre_stmt->bind_param("isi",$parent,$cat,$status);
    $result=$pre_stmt->execute() or die($this->con->error);
    if($result){
    return "CATEGORY_ADDED";
    }else{
        return 0;
    }
    }  
        //add brand
    public function addbrand($brand_name){
        $status=1;
        $pre_stmt=$this->con->prepare("INSERT INTO `brand`( `brand_name`, `status`) VALUES (?,?)");
        $pre_stmt->bind_param("si",$brand_name,$status);
        $result=$pre_stmt->execute() or die($this->con->error);
        if($result){
        return "brand_ADDED";
        }else{
            return 0;
        }
        } 


        //add product
        public function addproduct($cid,$bid,$pro_name,$price,$stock,$date){
            $status=1;
            $pre_stmt=$this->con->prepare("INSERT INTO `product`( `cid`, `bid`, `product_name`, `product_price`, `product_stock`, `added_date`, `p_status`) 
            VALUES (?,?,?,?,?,?,?)");
            $pre_stmt->bind_param("iisdisi",$cid,$bid,$pro_name,$price,$stock,$date,$status);
            $result=$pre_stmt->execute() or die($this->con->error);
            if($result){
            return "PRODUCT_ADDED";
            }else{
                return 0;
            }
            } 
        
   // row of database for table 
    public function getAllRecord($table){
        $pre_stmt=$this->con->prepare("SELECT * FROM ".$table);
        $pre_stmt->execute() or die($this->con->error);
        $result=$pre_stmt->get_result();
        $rows=array();
        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                $rows[]=$row;

            }
            return $rows;
        }
        return "NO_data";

    }

}
/*$ope=new DBopertion();
echo $ope->addproduct(1,2,"f",6,5,2019-5-5);
echo "<pre>";
print_r($ope->getAllRecord("categories"));
echo "</pre>";
*/
?>
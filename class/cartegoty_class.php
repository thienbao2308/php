<?php
include "../database.php";  
?>
<?php
class cartegory{
    private $db;

    private function __construct()
    {
        $this -> db=new Database();
    }
    public function insert_cartegory($cartgory_name) {
        $query="INSERT IN tbl_cartegory(cartegory_name) VALUES('$cartgory_name')";
        $result= $this ->db ->insert($query) ;
        return $result;
        

    }
}
?>

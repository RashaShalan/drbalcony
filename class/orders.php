<?php

Class orders
{
    public $conn; 
    public function __construct()
    {
        require_once "conn.php";
        $this->conn=$conn;
    }
    function checkusers()
    {
        $q=$_REQUEST['q'];
        $sql="Select id,CONCAT_WS(' ',firstname,lastname) as `name` from users where firstname  LIKE '%".$q."%' OR lastname LIKE '%".$q."%' OR email LIKE '%".$q."%'";
        $result = $this->conn->query($sql);
        $data=[];
        $i=0;
        while($row = $result->fetch_assoc()) {
          /*   $data[$i]['id']=$row["id"];
            $data[$i]['name']=$row["name"]; */
            $data[$row["id"]]=$row["name"];
            $i++;
        } 
        echo json_encode($data);

    }

    /**
     * saveOrders
     */
    function save()
    {
        $sql2 = "INSERT INTO orders (user_id, product_name, quantity,`price`,total_price,creation_date)
                    VALUES ('".$_REQUEST['user_id']."', '".$_REQUEST['product_name']."', '".$_REQUEST['quantity']."','".$_REQUEST['price']."','".$_REQUEST['total_price']."','".date('Y-m-d h:i:s')."')";
        
                    if ($this->conn->query($sql2) === TRUE) {
                        $data['status']=true;
                        $data['msg']= "Sucessfully save Order";
                    } else {
                        $data['status']=false;
                        $data['msg']='Error in saving';
                    }
                    echo json_encode($data);

    }
}
?>
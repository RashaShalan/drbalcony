<?php

Class Register
{
    public $conn; 
    public function __construct()
    {
        require_once "conn.php";
        $this->conn=$conn;
    }
    function index()
    {
        $sql="Select * from users where email ='".$_REQUEST['email']."'";
        $result = $this->conn->query($sql);
        $data=[];
        if ($result->num_rows > 0) {
            $data['status']=false;
            $data['msg']= "This email is already registered with us";
        } else {
          //echo "0 results";
          $sql2 = "INSERT INTO users (firstname, lastname, email,`password`,creation_date)
                    VALUES ('".$_REQUEST['firstName']."', '".$_REQUEST['lastName']."', '".$_REQUEST['email']."','".$_REQUEST['password']."','".date('Y-m-d h:i:s')."')";
        
                    if ($this->conn->query($sql2) === TRUE) {
                        $data['status']=true;
                        $data['msg']= "Sucessfully register with us";
                    } else {
                        $data['status']=false;
                        $data['msg']='Error in connection';
                    }
        }
        echo json_encode($data);

    }
}
?>
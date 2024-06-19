<?php

Class Report
{
    public $conn; 
    public function __construct()
    {
        require_once "conn.php";
        $this->conn=$conn;
    }
    function index()
    {
      /*   $sql="SELECT users.id,CONCAT_WS(' ',users.firstname,users.lastname) as `name`,users.creation_date,count(orders.ID) as numOrders ,(SELECT  last.creation_date from orders as last WHERE last.user_id=users.id ORDER BY last.id DESC LIMIT 1) as lastOrder,IF(count(orders.ID)>5,'active','in active') as `status` from users LEFT JOIN orders ON orders.user_id=users.id  GROUP BY users.id ORDER BY numOrders DESC";
        $result = $this->conn->query($sql);
        $data=[];
        $i=0;
        while($row = $result->fetch_assoc()) {
             $data[$i]['id']=$row["id"];
            $data[$i]['name']=$row["name"]; 
            $data[$i]['creation_date']=$row["creation_date"]; 
            $data[$i]['numOrders']=$row["numOrders"]; 
            $data[$i]['lastOrder']=$row["lastOrder"]; 
            $data[$i]['status']=$row["status"];
            $i++;
        } 
        echo json_encode($data); */
        // DB table to use
$table = 'users';

// Table's primary key
$primaryKey = 'id';

// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => '', 'dt' => '0' ),
	array( 'db' => 'id', 'dt' => '1' ),
	array( 'db' => "CONCAT_WS(' ',users.firstname,users.lastname)",  'dt' => '2' ),
	array( 'db' => 'creation_date',   'dt' => '3','formatter' => function( $d, $row ) {
			return date( 'jS M y', strtotime($d));
		} ),
	array( 'db' => '(Select count(orders.id) from orders where user_id=users.id)', 'dt' => '4' ),
	array(
		'db'        => '(SELECT  creation_date from orders  WHERE user_id=users.id ORDER BY orders.id DESC LIMIT 1)',
		'dt'        => '5' ),
	array(
		'db'        => "(Select IF(count(orders.id)>=5,'active','inactive') from orders where user_id=users.id)",
		'dt'        => '6'
	)
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'drbalcony_codetest',
	'host' => 'localhost'
);


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */

require( 'ssp.class.php' );

echo json_encode(
	SSP::complex( $_POST, $sql_details, $table, $primaryKey, $columns )
);

    }

    
}
?>
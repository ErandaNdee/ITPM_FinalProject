<?php

//fetch.php

include('config.php');

$column = array('email', 'InTime', 'OutTime', 'Date');

$query = "SELECT * FROM attendance ";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE email LIKE "%'.$_POST['search']['value'].'%" 
 OR InTime LIKE "%'.$_POST['search']['value'].'%" 
 OR OutTime LIKE "%'.$_POST['search']['value'].'%" 
 OR Date LIKE "%'.$_POST['search']['value'].'%"  
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY ID DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();
//ID, email, InTime, OutTime, Date
foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['email'];
 $sub_array[] = $row['InTime'];
 $sub_array[] = $row['OutTime'];
 $sub_array[] = $row['Date'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM attendance";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>

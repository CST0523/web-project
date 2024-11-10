<?php

$connect = new PDO("mysql:host=localhost;dbname=web_project", "admin", "admin");


$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM tbl_bus 
 WHERE Num REGEXP '".$search."' 
 OR startPoint REGEXP '".$search."' 
 OR endPoint REGEXP '".$search."' 
 OR color REGEXP '".$search."' 
 OR operationHour REGEXP '".$search."'
 OR frequency REGEXP '".$search."'
 OR type REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM tbl_bus ORDER BY transportID
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);
?>

<?php 


$conc = include('db.php');


$sql = "SELECT * FROM taarangana";
$query = mysqli_query($conc, $sql);


$f = fopen('php://memory', 'w'); 

while($row = mysqli_fetch_assoc($query)) {

$data = array();
	
$data = $row;
	
$data['team_preference'] = implode(", ", unserialize($row['team_preference']));

fputcsv($f, $data, ';');

}

fseek($f, 0);
header('Content-Type: application/csv');

header('Content-Disposition: attachment; filename="Students.csv";');

fpassthru($f);

exit;


?>
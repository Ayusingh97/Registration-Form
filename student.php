<?php 
$conc = include('db.php');
if( isset($_POST['studentname']) && !empty($_POST['studentname'])
	&& isset($_POST['Branch']) && !empty($_POST['Branch'])
	&& isset($_POST['Year']) && !empty($_POST['Year'])
	&& isset($_POST['Phonenumber']) && !empty($_POST['Phonenumber'])
	&& isset($_POST['emailid']) && !empty($_POST['emailid'])
	&& isset($_POST['teamPreference']) && !empty($_POST['teamPreference']) && is_array($_POST['teamPreference']) && count($_POST['teamPreference']) > 0 && count($_POST['teamPreference']) <= 3
	&& isset($_POST['Whatdoestaaranganameantoyou']) && !empty($_POST['Whatdoestaaranganameantoyou'])
) {
	$student_name = $_POST['studentname'];
	$branch = $_POST['Branch'];
	$year = $_POST['Year'];
	$contact_number = $_POST['Phonenumber'];
	$email = $_POST['emailid'];
	$team_preference = serialize($_POST['teamPreference']);
	$arrange_name = $_POST['Whatdoestaaranganameantoyou'];
	
	$sql = "INSERT INTO taarangana (student_name, branch, year, contact_number, email, team_preference, arrange_name) VALUES ('".$student_name."', '".$branch."', '".$year."', '".$contact_number."', '".$email."', '".$team_preference."', '".$arrange_name."')";
	$query = mysqli_query($conc, $sql);
	echo "Form is successfully submitted";
} else {
	echo "All fields not filled Proper";
}
?>
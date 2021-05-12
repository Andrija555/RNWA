<?php 
$conn = mysqli_connect("localhost", "root", "", "fido") or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if(isset($_GET['building_UID'])) {	
	$building_UID = $_GET['building_UID']; 
	$sql_query = "select building_UID, location_UID, level, description, lastMod 
	from building b
	inner join location l on b.building_UID=l.fk_building_UID
	where building_UID = $building_UID";
	
	$response = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));	
	$rows = array();
	if(mysqli_num_rows($response)!=0){
	while($r = mysqli_fetch_assoc($response)) {
    $rows[] = $r;
	}
	print json_encode($rows);
	}else{
		echo "Nema podataka za prikaz!";
	}	
}
?>	
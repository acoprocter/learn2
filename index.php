<?php 

ini_set("DISPLAY_ERRORS", "ON");

$active = $_GET["p"];

$mysqli = new mysqli("localhost", "procter_learn2", "learn2", "procter_learn2");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

/* Insert rows */
$result=$mysqli->query("SELECT * FROM pages");


$page=array();

while ($row = $result->fetch_assoc()) {
        $page[$row["name"]]=$row;
	
}


?>

<?php require_once 'header.php'; ?>


<?php echo $page[$active]["content"]; ?>
		


<?php require_once 'footer.php'; ?>
      

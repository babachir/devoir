<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flux_colis";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>


<html>
<head>
    <title>Ajout</title>
    <link rel="stylesheet" type="text/css" href="http://w2ui.com/src/w2ui-1.4.2.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://w2ui.com/src/w2ui-1.4.2.min.js"></script>
</head>
<body>


<form method="post" action="ajoutPersonne.php" id="form1">
   nom
   <p><input type="text" name="name" /></p>
   	adresse
   <p><input type="text" name="adresse" /></p>
<button type="submit" form="form1" value="Submit">Submit</button>
</form>


<?php

if(!empty($_POST))
{
		
	$sql = "INSERT INTO personnes (nom,adresse) VALUES ('".$_POST["name"]."','".$_POST["adresse"]."')";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo true;
	} else {
	    echo  false ;
	}	
}

?>

<script type="text/javascript">


</script>

</body>
</html>
<?php

$username = "root";
$password = "";
$server = 'localhost:3307';
$db = 'loginei';

// $database = 'curdyoutube';
//इसे नीचे वाले में कनेक्ट करने के लिए db से database कर दिया है 

$con = mysqli_connect($server, $username, $password, $db);

//एक दूसरा तरीका है जिसमे $db को ऊपर से हटाकर नीचे का कोड लिखकर कनेक्ट कर सकते है 
// $db = mysqli_select_db($con,$database);

if ($con) {

?>
    <script>
        alert('connection successful');
    </script>

<?php
    // echo "Connection successful";
} else {
    echo "No Connection";
    // die("No connection" .mysqli_connect_error());
}
?>
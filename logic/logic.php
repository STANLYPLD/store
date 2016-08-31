<?php


$servername = "localhost";
$username = "root";
$password = "";
$db_name = "store";

$conn = new mysqli($servername, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: VGZ " . mysqli_connect_error());
}
 // echo "Connected successfully";

$query = 'show tables;';
$res = $conn->query($query);

//echo $res;
//PullValues($res);
//  var_dump($res);  

$q = array();
while($row = $res->fetch_assoc()) {
    $q[] = $row;
}


if($conn) $conn->close();


class AAA{
    public $a = 'ja, ja';
    
    function __construct($a){
        $this->a = $a;
    }
    
    function oi(){
        return 'oioi';
    }
}

$aaa = new AAA('kjhgf');
echo $aaa->a;
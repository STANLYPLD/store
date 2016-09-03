<?php

class DB {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "store";
    
    private $db = false;


    public function __construct(){
        $this->db = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
        if(!$this->db) die('Cannot connect to database');
    }

    public function __destruct(){
        if($this->db) $this->db->close(); 
    }

    

    function select($sql, $params = array()){
        $out = array();
        $st = $this->db->prepare($sql);
        
        foreach($params as $param){
            if(is_string($param)) $st->bind_param('s', $param);
            elseif (is_numeric($param)) $st->bind_param('d', $param);
            else $st->bind_param('b', $param);
        }
        
        $st->execute();
        $result = $st->get_result();
        
        while ($row = $result->fetch_assoc()){
            $out[] = $row;
        }
        
        $st->close();
        
        return $out;
    }
}// end class








/*

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

*/

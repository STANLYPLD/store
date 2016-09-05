<?php

class DB{
	private $host	= 'localhost';
	private $user	= 'root';
	private $pass	= '';
	private $dbname = 'store';
	private $db		= false;
	
	function __construct(){
		$this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
		if(!$this->db) die('cannot connect to database server');
	}
	
	function __destruct(){
		if($this->db) $this->db->close();
	}
	
function refValues($arr){
	if (strnatcmp(phpversion(),'5.3') >= 0){ //Reference is required for PHP 5.3+
		$refs = array();
        foreach($arr as $key => $value)
            $refs[$key] = &$arr[$key];
        return $refs;
    }
    return $arr;
}

function paramTypes($params = array()){
	$types = '';
	
	foreach($params as $param){
		if(is_numeric($param)) $types .= 'd';
		elseif(is_string($param)) $types .= 's';
		else $types .= 'b';
	}
	return $types;
}
	
function select($sql, $params = array()){
	$out = array();
	$st = $this->db->prepare($sql);
    
    if(!empty($params)){
    	$types = $this->paramTypes($params);
        call_user_func_array(array($st, "bind_param"), array_merge(array($types), $this->refValues($params)));
    }
	$st->execute();
	$result = $st->get_result();
	
	while($row = $result->fetch_assoc()) $out[] = $row;
	
	$st->close();
	return $out;
}

function insert($sql, $params = array()){
	$st = $this->db->prepare($sql);
	$types = $this->paramTypes($params);
    
	call_user_func_array(array($st, "bind_param"), array_merge(array($types), $this->refValues($params)));
	$st->execute();
	$st->close();
	return $this->db->insert_id;
}

function update($sql, $params = array()){		// delete e syshtoto
	$st = $this->db->prepare($sql);
	$types = $this->paramTypes($params);
	call_user_func_array(array($st, "bind_param"), array_merge(array($types), $this->refValues($params)));
	$st->execute();
	$st->close();
	return $this->db->affected_rows;
}


}//class

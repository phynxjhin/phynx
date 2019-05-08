<?php 
class DBconnector{
    var $servername = "ec2-184-72-237-95.compute-1.amazonaws.com";
    var $username = "gbbjsqbviefcxn";
    var $password = "
6162d0821f24b6c0f86d203b2f02c82e72cd858bd8a8f441d57b147f86edff10";
    var $dbname = "d6naj5qmj9hoe0";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
			$conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            $result = pg_query($conn, $sql);
            $rows = pg_fetch_all($result);
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            $result = pg_query($conn, $sql);
            $conn=pg_close($conn);
            return $result;   
           }
} ?>
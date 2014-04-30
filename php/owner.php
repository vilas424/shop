<?php
    
    mysql_connect("localhost","root","") or die("Unable to connect to MySQL");
    $db=mysql_select_db("RetailShop");
    
    if(isset($_POST['add']))
    { 
        $res=$_POST['name'];
        $res1=$_POST['oid'];
        $res2=$_POST['pass'];
        $query1="insert into OWNER values('$res1','$res','$res2')";
        mysql_query($query1);
        header("location: ../html/ownerControl.html");
    }
    
    if(isset($_POST['rem']))
    {
        $res=$_POST['name'];
        $res1=$_POST['pass'];
        $query1="delete from OWNER where PASS='$res1' and NAME='$res'";
        mysql_query($query1);
        header("location: ../html/ownerControl.html");
    }

?>
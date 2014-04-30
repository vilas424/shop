<?php
    
    mysql_connect("localhost","root","") or die("Unable to connect to MySQL");
    $db=mysql_select_db("RetailShop");
    
    if(isset($_POST['Add']))
    { 
        $res=$_POST['name'];
        $res1=$_POST['id'];
        $res2=$_POST['pass'];
        $res6=$_POST['day'];
        $res7=$_POST['month'];
        $res8=$_POST['year'];
        $query1="insert into WORKER values('$res1','$res','$res2','$res8-$res7-$res6');";
        mysql_query($query1);
        header("location: ../html/ownerControl.html");
    }
    
    if(isset($_POST['rem']))
    {
        $res=$_POST['name'];
        $res1=$_POST['pass'];
        $query1="delete from WORKER where PASS='$res1' and NAME='$res'";
        mysql_query($query1);
        header("location: ../html/ownerControl.html");
    }

?>
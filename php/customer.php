<?php
    
    mysql_connect("localhost","root","") or die("Unable to connect to MySQL");
    $db=mysql_select_db("RetailShop");
        
    
    if(isset($_POST['add']))
    {        
        $total=0;$cal=0;
        $res=$_POST['name'];
        $res1=$_POST['email'];
        $res2=$_POST['cid'];
        $res3=$_POST['address'];
        $res4=$_POST['phone'];
        
        $query1="insert into CUSTOMER values('$res2','$res','$res3','$res4','$res1')";
        mysql_query($query1);
        
        $query1="update ORDER_INFO set CUSTOMER_ID='$res2' where STATUS='Billed';";
        mysql_query($query1);
        
        $query1="select PRODUCT_ID,CUSTOMER_ID,QUANTITY from ORDER_INFO where STATUS='Billed';";
        $res = mysql_query($query1);
        if(mysql_num_rows($res)>0)
        {
            print"<link rel=stylesheet type=text/css href=../css/style2.css />";
            print"<center>";
            print"<br>";
            print"<img src=../img/bill.png>";
            print"<br><br>";
            print"</center>";
            print"<div class=container>";
            print"<section id=content>";
            print"<form>";
            print"<h3>Bill</h3>";
            print"<table align=center border=2 cellspacing=5>";
            print"<tr align=center><td><b>NAME</b><td><b>PRODUCT_ID</b></td><td><b>CUSTOMER_ID</b></td><td><b>QUANTITY</b></td><td><b>COST</b></td><td><b>Total</b></td></tr>";
            $res = mysql_query($query1);
            while($row=mysql_fetch_array($res))
            {
                $query2="select NAME,COST_EACH from PRODUCT where PRODUCT_ID='$row[0]';";
                $ress = mysql_query($query2);
                if(mysql_num_rows($ress)>0)
                {
                    while($rows=mysql_fetch_array($ress))
                    {
                        $cal=$row[2]*$rows[1];
                        print"<tr align=center><td>$rows[0]</td><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$rows[1]</td><td>$cal</td></tr><br>";           
                        $total=$total+($row[2]*$rows[1]);                        
                    }
                }
            } 
            print"</table>";
            $tax=0.13*$total;
            $query1="update ORDER_INFO set STATUS='DONE' where CUSTOMER_ID='$res2';";
            mysql_query($query1);
            print"<br>";
            print"<label>Total : <b>$total<b></label>";
            print"<br>";
            print"<label>Service Tax : <b>$tax<b></label>";
            print"<br>";
            $sub=$total+$tax;
            print"<label>Sub Total : <b>$sub<b></label>";
            print"<br>";
            print"<input type=submit value=Home name=HOME onclick=window.open('../html/ownerControl.html')>";
            print"</form>";
            print"<div>";
            print"<section>";
        }
        else
        {
            header("location: ../html/ownerControl.html");
        }
    }
    
    if(isset($_POST['rem']))
    {
        $res=$_POST['name'];
        $res1=$_POST['id'];
        $query1="delete from CUSTOMER where NAME='$res' and CUSTOMER_ID='$res1'";
        mysql_query($query1);
        header("location: ../html/ownerControl.html");
    }

?>
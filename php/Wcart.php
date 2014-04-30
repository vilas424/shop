<!DOCTYPE html>
<html>
    <head>
        <title>Cart</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
        
        mysql_connect("localhost","root","") or die("Unable to connect to MySQL");
        $db=mysql_select_db("RetailShop");
    
        if(isset($_POST['click']))
        {
            $res=$_POST['remove'];
            $query1="delete from ORDER_INFO where PRODUCT_ID='$res'";
            mysql_query($query1);
        }
        
        if(isset($_POST['shop']))
        {
            header("location: ../php/WsellProduct.php");
        }
        
        $query1="select PRODUCT_ID,QUANTITY from ORDER_INFO where STATUS='Cart';";
        $res = mysql_query($query1);
        if(mysql_num_rows($res)>0)
        {
            print"<link rel=stylesheet type=text/css href=../css/style3.css />";
            print"<div class=container>";
            print"<section id=content>";
            print"<form>";
            print"<h3>Cart Items</h3>";
            print"<table align=center border=2 cellspacing=5>";
            print"<tr align=center><td><b>NAME</b><td><b>PRODUCT_ID</b></td><td><b>QUANTITY</b></td><td><b>COST</b></td></tr>";
            $res = mysql_query($query1);
            while($row=mysql_fetch_array($res))
            {
                $query2="select NAME,COST_EACH from PRODUCT where PRODUCT_ID='$row[0]';";
                $ress = mysql_query($query2);
                if(mysql_num_rows($ress)>0)
                {
                    while($rows=mysql_fetch_array($ress))
                    {
                        $cart=$row[1]*$rows[1];
                        print"<tr align=center><td>$rows[0]</td><td>$row[0]</td><td>$row[1]</td><td>$cart</td></tr><br>";           
                    }
                }
            } 
            print"</table>";
            print"</form>";
        }
        
        ?>
        <center>
        <form action="../php/Wcart.php" method="post">
            <br>
            <input type="submit" name="click" value="Remove" /><br>
            <input type="text" name="remove" placeholder="Product ID" />            
            <div><input type="submit" name="shop" value="Shop" /></div>
        </form>
        </center>
    </body>
</html>
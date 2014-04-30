<?php
    
    mysql_connect("localhost","root","") or die("Unable to connect to MySQL");
    $db=mysql_select_db("RetailShop");
    
    if(isset($_POST['cont']))
    { 
         header("location: ../php/WsellProduct.php");
    }
    
    if(isset($_POST['confirm']))
    { 
        $query1="select PRODUCT_ID,QUANTITY from ORDER_INFO where STATUS='Cart';";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {
                $count=0;
                $pro=$row[$count];
                $quan=$row[$count+1];
                $query2="select QUANTITY from PRODUCT where PRODUCT_ID='$pro';";
                $result1=mysql_query($query2);
                if(mysql_num_rows($result1)>0)
                {
                    while($rows=mysql_fetch_array($result1))
                    {
                       if($rows[0]>0)
                       {
                            $final=$rows[0]-$quan;
                            $query3="update PRODUCT set QUANTITY='$final' where PRODUCT_ID='$pro';";
                            mysql_query($query3);
                            $status="Billed";
                            $query4="update ORDER_INFO set STATUS='$status' where PRODUCT_ID='$pro';";
                            mysql_query($query4);
                        }
                     }
                }        
                $count=$count+1;
            }
        }
        header("location: ../html/WaddCustomer.html");
    }
    
    if(isset($_POST['add']))
    { 
        $res1=$_POST['id'];
        $res2=$_POST['dealer'];
        $res3=$_POST['day1'];
        $res4=$_POST['month1'];
        $res5=$_POST['year1'];
        $res6=$_POST['day'];
        $res7=$_POST['month'];
        $res8=$_POST['year'];
        $res9=$_POST['quantity'];
        $res10=$_POST['tcost'];
        $res11=$_POST['ecost'];
        $query1="update PRODUCT set DEALER='$res2' where PRODUCT_ID='$res1';";
        mysql_query($query1);
        $query2="update PRODUCT set DATE_IN='$res5-$res4-$res3' where PRODUCT_ID='$res1';";
        mysql_query($query2);
        $query3="update PRODUCT set EXPIRY_DATE='$res8-$res7-$res6' where PRODUCT_ID='$res1';";
        mysql_query($query3);
        $query4="update PRODUCT set QUANTITY='$res9' where PRODUCT_ID='$res1';";
        mysql_query($query4);
        $query5="update PRODUCT set TOTAL_COST='$res10' where PRODUCT_ID='$res1';";
        mysql_query($query5);
        $query6="update PRODUCT set COST_EACH='$res11' where PRODUCT_ID='$res1';";
        mysql_query($query6);
        header("location: ../html/workerControl.html");
    }
    
    
    if(isset($_POST['quan1a']))
    { 
        $res=$_POST['cashew'];
        $name="Cashew";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['cashew'];
                $res5="Cart";
                $res6=($_POST['cashew']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan2a']))
    { 
        $res=$_POST['dates'];
        $name="Dates";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['dates'];
                $res5="Cart";
                $res6=($_POST['dates']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan3a']))
    { 
        $res=$_POST['dryApricot'];
        $name="Dry Apricot";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['dryApricot'];
                $res5="Cart";
                $res6=($_POST['dryApricot']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan4a']))
    { 
        $res=$_POST['dryDates'];
        $name="Dry Dates";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['dryDates'];
                $res5="Cart";
                $res6=($_POST['dryDates']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan5a']))
    { 
        $res=$_POST['dryFigs'];
        $name="Dry Figs";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['dryFigs'];
                $res5="Cart";
                $res6=($_POST['dryFigs']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan6a']))
    { 
        $res=$_POST['dryPear'];
        $name="Dry Pear";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['dryPear'];
                $res5="Cart";
                $res6=($_POST['dryPear']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan7a']))
    { 
        $res=$_POST['dryGrapes'];
        $name="Dry Grapes";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['dryGrapes'];
                $res5="Cart";
                $res6=($_POST['dryGrapes']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan8a']))
    { 
        $res=$_POST['pista'];
        $name="Pista";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['pista'];
                $res5="Cart";
                $res6=($_POST['pista']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan9a']))
    { 
        $res=$_POST['saffron'];
        $name="Saffron";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['saffron'];
                $res5="Cart";
                $res6=($_POST['saffron']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan10a']))
    { 
        $res=$_POST['walnut'];
        $name="Walnut";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['walnut'];
                $res5="Cart";
                $res6=($_POST['walnut']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_DryFruits.html");
            }
        }
    }
    
    if(isset($_POST['quan1b']))
    { 
        $res=$_POST['basmati'];
        $name="Basmati";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['basmati'];
                $res5="Cart";
                $res6=($_POST['basmati']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan2b']))
    { 
        $res=$_POST['chana'];
        $name="Chana Dal";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['chana'];
                $res5="Cart";
                $res6=($_POST['chana']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan3b']))
    { 
        $res=$_POST['dhania'];
        $name="Dhania";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['dhania'];
                $res5="Cart";
                $res6=($_POST['dhania']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan4b']))
    { 
        $res=$_POST['sugar'];
        $name="Sugar";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['sugar'];
                $res5="Cart";
                $res6=($_POST['sugar']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan5b']))
    { 
        $res=$_POST['wheat'];
        $name="Wheat";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['wheat'];
                $res5="Cart";
                $res6=($_POST['wheat']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan6b']))
    { 
        $res=$_POST['blackpepper'];
        $name="Black Pepper";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['blackpepper'];
                $res5="Cart";
                $res6=($_POST['blackpepper']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan7b']))
    { 
        $res=$_POST['masoordal'];
        $name="Masoor Dal";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['masoordal'];
                $res5="Cart";
                $res6=($_POST['masoordal']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan8b']))
    { 
        $res=$_POST['mungdal'];
        $name="Mung Dal";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['mungdal'];
                $res5="Cart";
                $res6=($_POST['mungdal']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan9b']))
    { 
        $res=$_POST['uraddal'];
        $name="Urad Dal";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['uraddal'];
                $res5="Cart";
                $res6=($_POST['uraddal']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan10b']))
    { 
        $res=$_POST['toordal'];
        $name="Toor Dal";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['toordal'];
                $res5="Cart";
                $res6=($_POST['toordal']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Cereals.html");
            }
        }
    }
    
    if(isset($_POST['quan1c']))
    { 
        $res=$_POST['cerelac1'];
        $name="Cerelac 1";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['cerelac1'];
                $res5="Cart";
                $res6=($_POST['cerelac1']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan2c']))
    { 
        $res=$_POST['cerelac2'];
        $name="Cerelac 2";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['cerelac2'];
                $res5="Cart";
                $res6=($_POST['cerelac2']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan3c']))
    { 
        $res=$_POST['lactogen1'];
        $name="Lactogen 1";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['lactogen1'];
                $res5="Cart";
                $res6=($_POST['lactogen1']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan4c']))
    { 
        $res=$_POST['lactogen2'];
        $name="Lactogen 2";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['lactogen2'];
                $res5="Cart";
                $res6=($_POST['lactogen2']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan5c']))
    { 
        $res=$_POST['lactogen3'];
        $name="Lactogen 3";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['lactogen3'];
                $res5="Cart";
                $res6=($_POST['lactogen3']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan6c']))
    { 
        $res=$_POST['lactogen4'];
        $name="Lactogen 4";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['lactogen4'];
                $res5="Cart";
                $res6=($_POST['lactogen4']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan7c']))
    { 
        $res=$_POST['jlotion'];
        $name="Johnson Lotion";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['jlotion'];
                $res5="Cart";
                $res6=($_POST['jlotion']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan8c']))
    { 
        $res=$_POST['joil'];
        $name="Johnson Oil";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['joil'];
                $res5="Cart";
                $res6=($_POST['joil']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan9c']))
    { 
        $res=$_POST['jpowder'];
        $name="Johnson Powder";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['jpowder'];
                $res5="Cart";
                $res6=($_POST['jpowder']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan10c']))
    { 
        $res=$_POST['jsoap'];
        $name="Johnson Soap";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['jsoap'];
                $res5="Cart";
                $res6=($_POST['jsoap']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Baby.html");
            }
        }
    }
    
    if(isset($_POST['quan1d']))
    { 
        $res=$_POST['axe'];
        $name="Axe Powder";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['axe'];
                $res5="Cart";
                $res6=($_POST['axe']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan2d']))
    { 
        $res=$_POST['axedenim'];
        $name="Axe Denim";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['axedenim'];
                $res5="Cart";
                $res6=($_POST['axedenim']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan3d']))
    { 
        $res=$_POST['cinthol'];
        $name="Cinthol";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['cinthol'];
                $res5="Cart";
                $res6=($_POST['cinthol']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan4d']))
    { 
        $res=$_POST['cleannclear'];
        $name="Clean and Clear";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['cleannclear'];
                $res5="Cart";
                $res6=($_POST['cleannclear']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan5d']))
    { 
        $res=$_POST['denim'];
        $name="Denim Deodorant";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['denim'];
                $res5="Cart";
                $res6=($_POST['denim']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan6d']))
    { 
        $res=$_POST['fairhandsome'];
        $name="Fair and Handsome";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['fairhandsome'];
                $res5="Cart";
                $res6=($_POST['fairhandsome']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/product_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan7d']))
    { 
        $res=$_POST['garniercolour'];
        $name="Garnier Colour";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['garniercolour'];
                $res5="Cart";
                $res6=($_POST['garniercolour']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan8d']))
    { 
        $res=$_POST['listerine'];
        $name="Listerine";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['listerine'];
                $res5="Cart";
                $res6=($_POST['listerine']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan9d']))
    { 
        $res=$_POST['handwash'];
        $name="Lifebuoy Hand Wash";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['handwash'];
                $res5="Cart";
                $res6=($_POST['handwash']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan10d']))
    { 
        $res=$_POST['fair'];
        $name="Fair and Lovely";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['fair'];
                $res5="Cart";
                $res6=($_POST['fair']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_BodyCare.html");
            }
        }
    }
    
    if(isset($_POST['quan1e']))
    { 
        $res=$_POST['tatateagold'];
        $name="Tata Tea Gold";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['tatateagold'];
                $res5="Cart";
                $res6=($_POST['tatateagold']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Packets.html");
            }
        }
    }
    
    if(isset($_POST['quan2e']))
    { 
        $res=$_POST['nescafe'];
        $name="Nescafe";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['nescafe'];
                $res5="Cart";
                $res6=($_POST['nescafe']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Packets.html");
            }
        }
    }
    
    if(isset($_POST['quan3e']))
    { 
        $res=$_POST['corn'];
        $name="Cornflakes";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['corn'];
                $res5="Cart";
                $res6=($_POST['corn']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Packets.html");
            }
        }
    }
    
    if(isset($_POST['quan4e']))
    { 
        $res=$_POST['oats'];
        $name="Oats";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['oats'];
                $res5="Cart";
                $res6=($_POST['oats']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Packets.html");
            }
        }
    }
    
    if(isset($_POST['quan5e']))
    { 
        $res=$_POST['garam'];
        $name="Garam Masala";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['garam'];
                $res5="Cart";
                $res6=($_POST['garam']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Packets.html");
            }
        }
    }
    
    if(isset($_POST['quan1f']))
    { 
        $res=$_POST['comfort'];
        $name="Comfort";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['comfort'];
                $res5="Cart";
                $res6=($_POST['comfort']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Home.html");
            }
        }
    }
    
    if(isset($_POST['quan2f']))
    { 
        $res=$_POST['harpic'];
        $name="Harpic";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['harpic'];
                $res5="Cart";
                $res6=($_POST['harpic']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Home.html");
            }
        }
    }
    
    if(isset($_POST['quan3f']))
    { 
        $res=$_POST['odonil'];
        $name="Odonil";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['odonil'];
                $res5="Cart";
                $res6=($_POST['odonil']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Home.html");
            }
        }
    }
    
    if(isset($_POST['quan4f']))
    { 
        $res=$_POST['pril'];
        $name="Pril";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['pril'];
                $res5="Cart";
                $res6=($_POST['pril']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Home.html");
            }
        }
    }
    
    if(isset($_POST['quan5f']))
    { 
        $res=$_POST['tide'];
        $name="Tide";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['tide'];
                $res5="Cart";
                $res6=($_POST['tide']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Home.html");
            }
        }
    }
    
    if(isset($_POST['quan1g']))
    { 
        $res=$_POST['ghee'];
        $name="Ghee";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['ghee'];
                $res5="Cart";
                $res6=($_POST['ghee']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Dairy.html");
            }
        }
    }
    
    if(isset($_POST['quan2g']))
    { 
        $res=$_POST['icechocobar'];
        $name="Ice Chocobar";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['icechocobar'];
                $res5="Cart";
                $res6=($_POST['icechocobar']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Dairy.html");
            }
        }
    }
    
    if(isset($_POST['quan3g']))
    { 
        $res=$_POST['icecreamvanilla'];
        $name="Ice Vanilla";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['icecreamvanilla'];
                $res5="Cart";
                $res6=($_POST['icecreamvanilla']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Dairy.html");
            }
        }
    }
    
    if(isset($_POST['quan4g']))
    { 
        $res=$_POST['icestrawberry'];
        $name="Ice Strawberry";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['icestrawberry'];
                $res5="Cart";
                $res6=($_POST['icestrawberry']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Dairy.html");
            }
        }
    }
    
    if(isset($_POST['quan5g']))
    { 
        $res=$_POST['mcheese'];
        $name="Cheese";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['mcheese'];
                $res5="Cart";
                $res6=($_POST['mcheese']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Dairy.html");
            }
        }
    }
    
    if(isset($_POST['quan1h']))
    { 
        $res=$_POST['bingo'];
        $name="Bingo";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['bingo'];
                $res5="Cart";
                $res6=($_POST['bingo']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Snacks.html");
            }
        }
    }
    
    if(isset($_POST['quan2h']))
    { 
        $res=$_POST['bis'];
        $name="Biscuit";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['bis'];
                $res5="Cart";
                $res6=($_POST['bis']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Snacks.html");
            }
        }
    }
    
    if(isset($_POST['quan3h']))
    { 
        $res=$_POST['maggi'];
        $name="Maggi";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['maggi'];
                $res5="Cart";
                $res6=($_POST['maggi']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Snacks.html");
            }
        }
    }
    
    if(isset($_POST['quan4h']))
    { 
        $res=$_POST['milkbis'];
        $name="Milk Biscuits";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['milkbis'];
                $res5="Cart";
                $res6=($_POST['milkbis']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Snacks.html");
            }
        }
    }
    
    if(isset($_POST['quan5h']))
    { 
        $res=$_POST['pasta'];
        $name="Pasta";
        $query1="select PRODUCT_ID,COST_EACH from PRODUCT where NAME='$name' and QUANTITY>='$res'";
        $result=mysql_query($query1);
        if(mysql_num_rows($result)>0)
        {
            while($row=mysql_fetch_array($result))
            {        
                $res1="";
                $res2="$row[0]";
                $res3="customer";
                $res4=$_POST['pasta'];
                $res5="Cart";
                $res6=($_POST['pasta']*$row[1]);
                $query2="insert into ORDER_INFO values('$res1','$res2','$res3','$res4','$res5','$res6');";
                mysql_query($query2);
                header("location: ../html/Wproduct_Snacks.html");
            }
        }
    }
<?php
    
    mysql_connect("localhost","root","") or die("Unable to connect to MySQL");
    $db=mysql_select_db("RetailShop");
    
    if(isset($_POST['click']))
    {
        $res=$_POST['loginname'];
        $query1="select OWNER_ID,PASS from OWNER where OWNER_ID='$res'";
        $res1=mysql_query($query1);
        if(mysql_num_rows($res1)>0)
        {
            while($row=mysql_fetch_array($res1))
            {
                $password=$_POST['loginpass'];
                if($row[1]==$password)
                {
                    header("location: ../html/ownerControl.html");
                }
            }                        
        }
        else
        {
                $query2="select WORKER_ID,PASS from WORKER where WORKER_ID='$res'";
                $res2=mysql_query($query2);
                if(mysql_num_rows($res2)>0)
                {
                    while($row=mysql_fetch_array($res2))
                    {
                        $password=$_POST['loginpass'];
                        if($row[1]==$password)
                        {
                        header("location: ../html/workerControl.html");
                        }
                    }                        
                }
        }
        print"<center>";
        print"<form>";
        print"<br>";
        print"<label>Invalid Username</label>";
        print"<br>";
        print"<input type=button value=Login onclick=window.open('../html/login.html')>";
        print"</form>";
        print"</center>";
    }

?>
<HTML>
<HEAD>
        <title>Change Password</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
</HEAD>
<BODY>
            <div class="container">
            <section id="content">
            <form method="post" action="../php/changePassword.php">
                <h1>Change Password</h1>
                <div>
                    <input type="text" name="id" placeholder="User ID" />
                </div>
                <div>
		    <input type="password" name="cp" placeholder="Current Password" />
                </div>
                <div>                    
                    <input type="password" name="np" placeholder="New Password" />
		</div>
                <div>
                    <input type="submit" value="Change" name="click"/>
                    <a href="../html/login.html">Login</a>
		</div>		
            </form>
            </section>
            </div>    
    <?php
        mysql_connect("localhost","root","") or die("Unable to connect to MySQL");
        $db=mysql_select_db("RetailShop");
    
        if(isset($_POST['click']))
        {
            $res=$_POST['id'];
            $res1=$_POST['cp'];
            $res2=$_POST['np'];
            $query1="select OWNER_ID,PASS from OWNER where Owner_ID='$res'";
            mysql_query($query1);
            $res10 = mysql_query($query1);
            if(mysql_num_rows($res10)>0)
            {
                while($row=mysql_fetch_array($res10))
                {
                        if($res1==$row[1])
                        {
                            $query1="update OWNER set PASS='$res2' where Owner_ID='$res'";
                            mysql_query($query1);
                            print"<center>";
                            print"<table>";
                            print"<br>";
                            print"<label>$res updated to $res2</label>";
                            print"<br>";
                            print"</table>";
                            print"</center>";
                        }
                        else
                        {
                            print"<center>";
                            print"<table>";
                            print"<br>";
                            print"<label>$res password didn't Match</label>";
                            print"<br>";
                            print"</table>";
                            print"</center>";
                        }
                }      
            }
            else
            {
                $query1="select WORKER_ID,PASS from WORKER where WORKER_ID='$res'";
                mysql_query($query1);
                $res20 = mysql_query($query1);
                if(mysql_num_rows($res20)>0)
                {
                    while($row=mysql_fetch_array($res20))
                    {
                        if($res1==$row[1])
                        {
                            $query1="update WORKER set PASS='$res2' where WORKER_ID='$res'";
                            mysql_query($query1);
                            print"<center>";
                            print"<table>";
                            print"<br>";
                            print"<label>$res password updated to $res2</label>";
                            print"<br>";
                            print"</table>";
                            print"</center>";
                        }
                        else
                        {
                            print"<center>";
                            print"<table>";
                            print"<br>";
                            print"<label>$res password didn't Match</label>";
                            print"<br>";
                            print"</table>";
                            print"</center>";
                        }
                    }             
                }
                else
                {
                    print"<center>";
                    print"<table>";
                    print"<br>";
                    print"<label>User ID didn't Match</label>";
                    print"<br>";
                    print"</table>";
                    print"</center>";
                }
            }
        }
    ?>
</BODY>
</HTML>
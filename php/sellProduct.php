<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Sell Product</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/sliderman1.css" />
        <link rel="stylesheet" type="text/css" href="../css/menu.css" />
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/productMenu.css" />
    
        <meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="slideman, sliderman.js, javascript slider, jquery, slideshow, effects" />
	<meta name="description" content="Sliderman.js - will do all the sliding for you :)" />
	
        <style type="text/css">
		* { margin: 0; outline: none; }
		body { background-color: #DCDDDF; }
		.c { clear: both; }
		#wrapper { margin: 20 auto; padding: 0 20px 20px 380px;}
		h2 { padding: 0px 0 10px 0; font-size: 32px; line-height: 40px; font-weight: normal; color: #A0522D; text-shadow: 0 1px 3px #AAAAAA; }
	</style>

	<script type="text/javascript" src="../js/sliderman.js"></script>
      
<script>

function showResult(str)
{
if (str.length==0)
  {
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","livesearch.php?q="+str,true);
xmlhttp.send();
}
</script>

    </head>
    <body>
        <ul id="menu-bar">
            <li class="active"><a href="../html/ownercontrol.html">Home</a></li>
            <li><a href="#">Products</a>
                <ul>
                    <li><a href="../html/addProduct.html">Add Product</a></li>                    
                </ul>
            </li>
            <li><a href="#">About</a>
                <ul>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Web Page</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Complaints</a></li>
                </ul>
            </li>
            <li><a href="#">Contact Us</a>
                <ul>
                    <li><a href="#">Karthik S K</a></li>
                    <li><a href="#">Suraj M H</a></li>
                    <li><a href="#">Vineetkumar P</a></li>
                    <li><a href="#">Deepa S P</a></li>
                </ul>
            </li>
        </ul>
        
        
         
        <div id="wrapper">    
                <div id="examples_outer">
			<div id="slider_container_2">
				<div id="SliderName_2" class="SliderName_2">
					<a href="../html/product_BodyCare.html"><img src="../img/10.jpg" width="600" height="350" title="first" /></a>
					<div class="SliderName_2Description">Garnier Color <strong>FREE</strong>Garnier Face Wash</div>
					<a href="../html/product_Snacks.html"><img src="../img/11.jpg" width="600" height="350" title="second" /></a>
					<div class="SliderName_2Description">Maggi Noodles <strong>Chicken</strong></div>
					<a href="../html/product_Snacks.html"><img src="../img/12.jpg" width="600" height="350" title="third" /></a>
					<div class="SliderName_2Description">Bingo Chips <strong>Potato</strong></div>
					<a href="../html/product_Dairy.html"><img src="../img/13.jpg" width="600" height="350" title="fourth" /></a>
					<div class="SliderName_2Description">Amul <strong>Cheese</strong></div>
				</div>
				<div class="c"></div>
				<div id="SliderNameNavigation_2"></div>
				<div class="c"></div>

				<script type="text/javascript">
					effectsDemo2 = 'rain,stairs,fade';
					var demoSlider_2 = Sliderman.slider({container: 'SliderName_2', width: 600, height: 350, effects: effectsDemo2,
						display: {
							autoplay: 3000,
							loading: {background: '#000000', opacity: 0.5, image: '../img/loading.gif'},
							buttons: {hide: true, opacity: 1, prev: {className: 'SliderNamePrev_2', label: ''}, next: {className: 'SliderNameNext_2', label: ''}},
							description: {hide: true, background: '#000000', opacity: 0.4, height: 50, position: 'bottom'},
							navigation: {container: 'SliderNameNavigation_2', label: '<img src="../img/clear.gif" />'}
						}
					});
				</script>

				<div class="c"></div>
			</div>
			<div class="c"></div>
		</div>
		<div class="c"></div>                
                </div>
        
        
        <div class="container">
	<section id="content">
		<form name="remove" action="../php/product.php" method="post">
			<div>
                            <input type="text" name="name" placeholder="Search Product" id="search" onkeyup="showResult(this.value)" />
			</div>
                        <div>
                            <a href="../html/ownerControl.html">Back</a>
			</div>
                        <p id="livesearch"></p>
		</form>
	</section>
        </div>
        
        <ul id="menu">
            <li><a href="#" class="drop">Category</a>
    
            <div class="dropdown_4columns">
        
                <div class="col_4">
                    <h2>Select Category to buy Product</h2>
                </div>
            
                <div class="col_1">
            
                    <h3>Groceries</h3>
                    <ul>
                        <li><a href="../html/product_Cereals.html">Cereals & Pulses</a></li>
                        <li><a href="../html/product_DryFruits.html">Dry Fruits</a></li>
                    </ul>   
                 
                </div>
    
                <div class="col_1">
            
                    <h3>Personal Care</h3>
                    <ul>
                        <li><a href="../html/product_BodyCare.html">Body Care</a></li>
                        <li><a href="../html/product_Baby.html">Baby & Child Care</a></li>
                    </ul>   
                 
                </div>
    
                <div class="col_1">
            
                    <h3>Home care</h3>
                    <ul>
                        <li><a href="../html/product_Home.html">Cleaners</a></li>
                        <li><a href="../html/product_Packets.html">Household Needs</a></li>
                    </ul>   
                 
                </div>
    
                <div class="col_1">
            
                    <h3>Foods & Bakeries</h3>
                    <ul>
                        <li><a href="../html/product_Dairy.html">Diary Products</a></li>
                        <li><a href="../html/product_Snacks.html">Snacks</a></li>
                    </ul>   
                 
               </div>
            
            </div>
    
            </li>

        </ul>
    </body>
</html>
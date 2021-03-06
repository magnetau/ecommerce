<?php
include './connection.php';
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
        <title>Tools Shop</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <!--[if IE 6]>
        <link rel="stylesheet" type="text/css" href="iecss.css" />
        <![endif]-->
        <script type="text/javascript" src="js/boxOver.js"></script>
    </head>
    <body>

        <div id="main_container">

            <div id="header">

                <div class="top_right">

                    <div class="languages">
                        <div class="lang_text">Languages:</div>
                        <a href="#" class="lang"><img src="images/en.gif" alt="" title="" border="0" /></a>
                        <a href="#" class="lang"><img src="images/de.gif" alt="" title="" border="0" /></a>       
                    </div>

                    <div class="big_banner">
                        <a href="#"><img src="images/banner728.jpg" alt="" title="" border="0" /></a>
                    </div>

                </div>


                <div id="logo">
                    <a href="index.php"><img src="images/logo.png" alt="" title="" border="0" width="182" height="85" /></a>
                </div>




            </div>

            <div id="main_content"> 

                <div id="menu_tab">
                    <ul class="menu">
                        <li><a href="index.php" class="nav">  Home </a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="nav">Products</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="nav">Specials</a></li>
                        <li class="divider"></li>
                        <li><a href="#" class="nav">My account</a></li>
                        <li class="divider"></li>
                        <li><a href="signup.php" class="nav">Sign Up</a></li>
                        <li class="divider"></li>                         
                        <li><a href="#" class="nav">Shipping </a></li>
                        <li class="divider"></li>
                        <li><a href="contact.html" class="nav">Contact Us</a></li>
                        <li class="divider"></li>
                        <li><a href="logout.php" class="nav">log out</a></li>

                    </ul>

                </div><!-- end of menu tab -->

                <div class="crumb_navigation">
                    Navigation: <span class="current">Home</span>

                </div>        

                <div class="left_content">
                    <div class="title_box">Categories</div>

                    <ul class="left_menu">
                        <li class="odd"><a href="details.html">Power Tools</a></li>
                        <li class="even"><a href="details.html">Air Tools</a></li>
                        <li class="odd"><a href="details.html">Hand Tools</a></li>
                        <li class="even"><a href="details.html">Accessories</a></li>
                        <li class="odd"><a href="details.html">Workwear</a></li>
                        <li class="even"><a href="details.html">Spare Parts</a></li>
                        <li class="odd"><a href="details.html">Power Tools</a></li>
                        <li class="even"><a href="details.html">Air Tools</a></li>
                        <li class="odd"><a href="details.html">Hand Tools</a></li>
                        <li class="even"><a href="details.html">Accessories</a></li>
                        <li class="odd"><a href="details.html">Workwear</a></li>
                        <li class="even"><a href="details.html">Spare Parts</a></li>
                    </ul> 


                    <div class="title_box">Special Products</div>  
                    <div class="border_box">
                        <div class="product_title"><a href="details.html">Makita 156 MX-VL</a></div>
                        <div class="product_img"><a href="details.html"><img src="images/p1.jpg" alt="" title="" border="0" /></a></div>
                        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                    </div>  


                    <div class="title_box">Newsletter</div>  
                    <div class="border_box">
                        <input type="text" name="newsletter" class="newsletter_input" value="your email"/>
                        <a href="#" class="join">subscribe</a>
                    </div>  

                    <div class="banner_adds">

                        <a href="#"><img src="images/bann2.jpg" alt="" title="" border="0" /></a>
                    </div>    


                </div><!-- end of left content --> 



                <div class="center_content">

                    <div class="oferta">
                        <img src="images/p1.png" width="165" height="113" border="0" class="oferta_img" alt="" title="" />

                        <div class="oferta_details">
                            <div class="oferta_title">Power Tools BST18XN Cordless</div>
                            <div class="oferta_text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            </div>
                            <a href="details.html" class="prod_buy">details</a>
                        </div>
                    </div>


                    <div class="center_title_bar">Latest Products</div>
                    <?php
                    $res = $db->query("SELECT * FROM produit");
                    while ($row = $res->fetch()) {
                        ?>
                        <div class="prod_box">

                            <div class="center_prod_box">            
                                <div class="product_title"><a href="details.php?id=<?php echo $row['id']; ?>"><?php echo $row['nom']; ?></a></div>
                                <div class="product_img"><a href="details.php?id=<?php echo $row['id']; ?>"><img src="images/<?php echo $row['img']; ?>" alt="" title="" border="0" width="100" height="80" /></a></div>
                                <div class="prod_price"><span class="price"><?php echo $row['prix']; ?>$</span></div>                        
                            </div>

                            <div class="prod_details_tab">
                                <a href="<?php
                    if (!isset($_SESSION['id_user'])) {
                       echo 'login.php';
                    }else{
                        echo 'add_item.php?id='.$row['id'];
                    }
                        ?>" class="prod_buy">Add to Cart</a>          
                                <a href="details.php?id=<?php echo $row['id']; ?>" class="prod_details">Details</a>            
                            </div>                     
                        </div>
<?php } ?>

                </div><!-- end of center content -->



                <div class="right_content">

                    <div class="title_box">Search</div>  
                    <div class="border_box">
                        <input type="text" name="newsletter" class="newsletter_input" value="keyword"/>
                        <a href="#" class="join">search</a>
                    </div>  




                    <div class="shopping_cart">
                        <div class="title_box">Shopping cart</div>

                        <div class="cart_details">
                            <?php $count=0;
                            $prix=0;
                            if (!isset($_SESSION['id_user'])) {
                       echo $count;
                    }else{$user=$_SESSION['id_user'];
                        $res =$db->query("SELECT * FROM chart WHERE id_user='$user'");
                        
                    while ($row = $res->fetch()) {$count++;
                    $id_prod=$row['id_produit'];
                    $res1 =$db->query("SELECT * FROM produit WHERE id='$id_prod'");
                    while ($row1 = $res1->fetch()) {$prix+=$row1['prix'];}
                    }
                    echo $count;} ?>  items <br />
                            <span class="border_cart"></span>
                            Total: <span class="price"><?php echo $prix; 
                            $_SESSION['prix']=$prix;?>$</span>
                        </div>

                        <div class="cart_icon"><a title="" href="<?php
                    /*if (!isset($_SESSION['id_user'])) {
                       echo '';
                    }else{
                        echo 'Remerciment.php?prix='.$prix.'&user='.$user;
                    }*/
                        echo 'chart.php'
                        ?>"><img src="images/shoppingcart.png" alt="" title="" width="35" height="35" border="0" /></a></div>

                    </div>


                    <div class="title_box">What’s new</div>  
                    <div class="border_box">
                        <div class="product_title"><a href="details.html">Motorola 156 MX-VL</a></div>
                        <div class="product_img"><a href="details.html"><img src="images/p2.jpg" alt="" title="" border="0" /></a></div>
                        <div class="prod_price"><span class="reduce">350$</span> <span class="price">270$</span></div>
                    </div>  



                    <div class="title_box">Manufacturers</div>

                    <ul class="left_menu">
                        <li class="odd"><a href="services.html">Bosch</a></li>
                        <li class="even"><a href="services.html">Samsung</a></li>
                        <li class="odd"><a href="services.html">Makita</a></li>
                        <li class="even"><a href="services.html">LG</a></li>
                        <li class="odd"><a href="services.html">Fujitsu Siemens</a></li>
                        <li class="even"><a href="services.html">Motorola</a></li>
                        <li class="odd"><a href="services.html">Phillips</a></li>
                        <li class="even"><a href="services.html">Beko</a></li>
                    </ul>      

                    <div class="banner_adds">

                        <a href="#"><img src="images/bann1.jpg" alt="" title="" border="0" /></a>
                    </div>        

                </div><!-- end of right content -->   



            </div><!-- end of main content -->



            <div class="footer">


                <div class="left_footer">
                    <img src="images/footer_logo.png" alt="" title="" width="89" height="42"/>
                </div>

                <div class="center_footer">
                    Template name. All Rights Reserved 2008<br />
                    <a href="http://csscreme.com/freecsstemplates/" title="free css templates"><img src="images/csscreme.jpg" alt="free css templates" border="0" /></a><br />
                    <img src="images/payment.gif" alt="" title="" />
                </div>

                <div class="right_footer">
                    <a href="index.php">home</a>
                    <a href="details.html">about</a>
                    <a href="details.html">sitemap</a>
                    <a href="details.html">rss</a>
                    <a href="contact.html">contact us</a>
                </div>   

            </div>                 


        </div>
        <!-- end of main_container -->
    </body>
</html>



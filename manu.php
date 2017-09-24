<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <title>sobujbanglagrocery</title>

        <link rel="stylesheet" href="css/glayout.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/menu.css" type="text/css" media="screen">  
        <link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />


        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/ddsmoothmenu.js"></script>

        <script type="text/javascript">

            ddsmoothmenu.init({
                mainmenuid: "tooplate_menu", //menu DIV id
                orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu', //class added to menu's outer DIV
                //customtheme: ["#1c5a80", "#18374a"],
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })
        </script>
    </head>
    


    <body>
   <div id="tooplate_wrapper">
    <div id="tooplate_header">
        <div id="site_title"><h1><b>SobujBangla.com</b></h1></div>
        
        <div id="tooplate_menu" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.php" class="selected"><span></span>HOME</a></li>
                    
                   
                    
                    <li><a href="contact.php"><span></span>CONTUCT</a></li>
                    <li><a href="blog.php"><span></span>LOGOUT</a></li>
                </ul>
                <br style="clear: left" />
            </div> <!-- end of tooplate_menu -->
            </div>
        </div>


        <div class="container">

            <ul id="nav">
                <li><a href="grocery.php"><img src="images/t1.png" />GROCERY</a></li>
                <li><a href="#" class="sub" tabindex="1"><img src="images/t2.png" />READY-MADE</a><img src="" alt="" />
                    <ul>
                        <li><a href="slide/boys.php"><img src="images/empty.gif" />BOYS</a></li>
                        <li><a href="girls.php"><img src="images/empty.gif" />GIRLS</a></li>
                        <li><a href="#"><img src="images/empty.gif" />KYDDS</a></li>
                    </ul>
                </li>
                <li><a href="jwellary.php"><img src="images/t2.png" />JWELLARY</a></li>
               
        
                <li><a href="index.php"><img src="images/t2.png" />BACK</a></li>
            </ul>

        </div>

         <div id="tooplate_footer">
                
            <div class="copyright">
                <p>Copyright (c) 2017, microo_dot ltd</p>
            </div>   
            <div class="design">
                <p>Design by | A.N.Chowdhury</p>
                <div class="cleaner"></div>
            </div>
        
    </div> <!-- end of forever header -->
    </body>
</html>
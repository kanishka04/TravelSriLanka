<?php

?>


<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
    <title>Admin Page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script type="text/javascript" src ="js/index.js"></script>
</head>
<body class="subpage">

<!-- Header -->
<header id="header">
    <div class="logo"><a href="index.php">Powered <span>By Zone x 24</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="ellaSriLanka.php">ella Srilanka</a></li>
        <li><a href="Anuradhapura.php">anuradhapura</a></li>
        <li><a href="galleSriLanka.php">galle srilanka</a></li>
        <li><a href="udawalaweSrilanka.php">udawalawe srilanka</a></li>
        <li><a href="#">Log Out</a></li>
    </ul>
</nav>

<!-- Banner -->
<section class="banner half">
    <article>
        <img src="images/galle.jpg"  alt="" />
        <div class="inner">
            <header>
                <p></p>
                <h3 style="font-size: 30px">Welcome to Adminstrative Page !!</h3>
            </header>
        </div>
    </article>

</section>

<!-- Main -->
<div id="main" class="container">

    <!-- Elements -->
    <h2 id="elements" style="color: black; " >Ella - Sri Lanka</h2>
    <div class="row 200%">
        <div class="6u 12u$(medium)">

            <!-- Text stuff -->
            <p style="color: black">Enter the ID to View Comment</p>
            <div class="id23" style="display: inline" >
                <form action="controller/adminControl.php" method = "get">
                    <input type="text" name ="ella_id">
                    <input style="background-color: green; color:white;width:100%; margin-top: 20px;  alignment: center; float: right; height: 40px; font-size: 10px;" type ="submit" name="submit" value="View comment"/>
                </form>
            </div>
            <div id="id12324" style="margin-top: 100px;">
            <form action=""method="post">
                <p style="margin-top: 10px; margin-bottom:0px;">Comment</p>
                <textarea rows="4" cols="50" name ="comment"></textarea>
                <h1 style="padding-top: 10px; padding-bottom: 2px;">Name</h1>
                <input type="text" id="text1" name ="name">
                <h1 style=" padding-top: 10px; padding-bottom: 2px; " name ="email">Email</h1>
                <input type="text" id="email" name ="email">
                <h1 style="padding-top: 10px; padding-bottom: 2px;">WebSite</h1>
                <input type="text" id="website" name ="website">
                <div style="display: inline">
                    <input style="background-color: green; color:white;width: 150px alignment: center; margin-top: 20px; float: left" type ="submit" name="submit" value="Update comment"/>
                    <input style="background-color: red; alignment: center; margin-top: 20px; float: right" type ="submit" name="submit" value="DELETE COMMENT"/>
                </div>
            </form>
            </div>
            <br/>
            <br/>
            <hr />
            <hr />

            <header>
                <h2>Heading with a Subtitle</h2>
                <p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
            </header>
            <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
            <div class="element" style="margin-top: 100px;">
                <!-- Text stuff -->
                <h2 id="elements" style="color: black; " >Galle - Sri Lanka</h2>
                <p style="color: black">Enter the ID to View Comment</p>
                <div class="id23" style="display: inline" >
                    <input type="text" id="website" name ="website" style="height: 25px; width: 150px; float: left; margin-top: 15px;">
                    <input style="background-color: green; color:white;width:100px  alignment: center; margin-top: 5px; float: right; height: 40px; font-size: 10px; margin-left: -5px;" type ="submit" name="submit" value="View comment"/>
                </div>
                <div id="id12324" style="margin-top: 100px;">
                    <form action=""method="post">
                        <p style="margin-top: 10px; margin-bottom:0px;">Comment</p>
                        <textarea rows="4" cols="50" name ="comment"></textarea>
                        <h1 style="padding-top: 10px; padding-bottom: 2px;">Name</h1>
                        <input type="text" id="text1" name ="name">
                        <h1 style=" padding-top: 10px; padding-bottom: 2px; " name ="email">Email</h1>
                        <input type="text" id="email" name ="email">
                        <h1 style="padding-top: 10px; padding-bottom: 2px;">WebSite</h1>
                        <input type="text" id="website" name ="website">
                        <input style="background-color: green; color:white;width: 150px alignment: center; margin-top: 20px;" type ="submit" name="submit" value="Update comment"/>
                    </form>
                </div>
                <hr />
                <br/>
                <p style="color: black">Enter the ID of the comment you want to delete</p>
                <input type="text" id="website" name ="website" style="height: 25px; width: 150px">
                <input style="background-color: red; alignment: center; margin-top: 20px;" type ="submit" name="submit" value="DELETE COMMENT"/>
                <hr />
                <hr />
            </div>

            <!-- correct -->
            <h2 id="elements" style="color: black; margin-right: 300px;" >Anuradhapura Sri Lanka</h2>
                <p style="color: black">Enter the ID to View Comment</p>
                <div class="id23" style="display: inline" >
                    <input type="text" id="website" name ="website" style="height: 25px; width: 150px; float: left; margin-top: 15px;">
                    <input style="background-color: green; color:white;width:100px  alignment: center; margin-top: 5px; float: right; height: 40px; font-size: 10px; margin-left: -5px;" type ="submit" name="submit" value="View comment"/>
                </div>
                <div id="id12324" style="margin-top: 100px;">
                    <form action=""method="post">
                        <p style="margin-top: 10px; margin-bottom:0px;">Comment</p>
                        <textarea rows="4" cols="50" name ="comment"></textarea>
                        <h1 style="padding-top: 10px; padding-bottom: 2px;">Name</h1>
                        <input type="text" id="text1" name ="name">
                        <h1 style=" padding-top: 10px; padding-bottom: 2px; " name ="email">Email</h1>
                        <input type="text" id="email" name ="email">
                        <h1 style="padding-top: 10px; padding-bottom: 2px;">WebSite</h1>
                        <input type="text" id="website" name ="website">
                        <input style="background-color: green; color:white;width: 150px alignment: center; margin-top: 20px;" type ="submit" name="submit" value="Update comment"/>
                    </form>
                </div>
                <hr />
                <br/>
                <p style="color: black">Enter the ID of the comment you want to delete</p>
                <input type="text" id="website" name ="website" style="height: 25px; width: 150px">
                <input style="background-color: red; alignment: center; margin-top: 20px;" type ="submit" name="submit" value="DELETE COMMENT"/>


                <hr />
                <hr />
        </div>
        <div class="6u$ 12u$(medium)">

            <!-- Image -->
            <h3 style="color: #002a80">Beautiful Places </h3>
            <span class="image fit"><img src="images/udawalawe.jpg" alt="" /></span>
            <div class="box alt">
                <div class="row 50% uniform">
                    <div class="4u"><span class="image fit"><img src="images/elephants1.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/ele2.jpg" alt="" /></span></div>
                    <div class="4u$"><span class="image fit"><img src="images/galle5.jpg" alt="" /></span></div>
                    <!-- Break -->
                    <div class="4u"><span class="image fit"><img src="images/deer1.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/galle6.jpg" alt="" /></span></div>
                    <div class="4u$"><span class="image fit"><img src="images/haggala.jpg" alt="" /></span></div>
                    <!-- Break -->
                    <div class="4u"><span class="image fit"><img src="images/anuradhapura.jpg" alt="" /></span></div>
                    <div class="4u"><span class="image fit"><img src="images/miriisa.jpg" alt="" /></span></div>
                    <div class="4u$"><span class="image fit"><img src="images/kandy.jpg" alt="" /></span></div>
                </div>
            </div>
            <div class="element" style="margin-top: 100px;">
                <!-- Text stuff -->
                <h2 id="elements" style="color: black; " >Udawalawe Sri Lanka</h2>
                <p style="color: black">Enter the ID to View Comment</p>
                <div class="id23" style="display: inline" >
                    <input type="text" id="website" name ="website" style="height: 25px; width: 150px; float: left; margin-top: 15px;">
                    <input style="background-color: green; color:white;width:100px  alignment: center; margin-top: 5px; float: right; height: 40px; font-size: 10px; margin-left: -5px;" type ="submit" name="submit" value="View comment"/>
                </div>
                <div id="id12324" style="margin-top: 100px;">
                    <form action=""method="post">
                        <p style="margin-top: 10px; margin-bottom:0px;">Comment</p>
                        <textarea rows="4" cols="50" name ="comment"></textarea>
                        <h1 style="padding-top: 10px; padding-bottom: 2px;">Name</h1>
                        <input type="text" id="text1" name ="name">
                        <h1 style=" padding-top: 10px; padding-bottom: 2px; " name ="email">Email</h1>
                        <input type="text" id="email" name ="email">
                        <h1 style="padding-top: 10px; padding-bottom: 2px;">WebSite</h1>
                        <input type="text" id="website" name ="website">
                        <input style="background-color: green; color:white;width: 150px alignment: center; margin-top: 20px;" type ="submit" name="submit" value="Update comment"/>
                    </form>
                </div>
                <hr />
                <br/>
                <p style="color: black">Enter the ID of the comment you want to delete</p>
                <input type="text" id="website" name ="website" style="height: 25px; width: 150px">
                <input style="background-color: red; alignment: center; margin-top: 20px;" type ="submit" name="submit" value="DELETE COMMENT"/>
                <hr />
                <hr />
            </div>
            <!-- Box -->
            <h3>Box</h3>
            <div class="box">
                <p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus lorem ipsum dolor sit amet nullam.</p>
            </div>

            <!-- Preformatted Code -->

        </div>
    </div>

</div>
<!-- Footer -->
<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <div class="content">
            <section>
                <h3>Sri Lanka</h3>
                <p>Sri Lanka (formerly Ceylon) is an island nation south of India in the Indian Ocean. Its diverse landscapes range from rainforest and arid plains to highlands and sandy beaches. It’s famed for its ancient Buddhist ruins, including the 5th-century citadel Sigiriya, with its palace and frescoes. The city of Anuradhapura, Sri Lanka's ancient capital, has many ruins dating back more than 2,000 years.</p>
            </section>
            <section>
                <h4>Sem turpis amet semper</h4>
                <ul class="alt">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="#">Pages</a></li>
                </ul>
            </section>
            <section>
                <h4>Magna sed ipsum</h4>
                <ul class="plain">
                    <li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
                    <li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
                    <li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
                </ul>
            </section>
        </div>
        <div class="copyright">
            &copy; Alright Reserved.<a href="login.php">Login<a/> A Zone x 24 creation</a>.
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
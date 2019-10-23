<!DOCTYPE HTML>

<html>
<head>
    <title>Travel Sri Lanka</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script language="JavaScript" type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/js/jquery.scrollex.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="assets/js/skel.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src ="js/index.js"></script>
<!--    <script type="text/javascript" src ="js/form.js"></script>-->
    <script>
        function myFunction() {
            console.log('pasan kamburugamuwa');
            var name=document.getElementById("name").value;
            var comment=document.getElementById("comment").value;
            var website=document.getElementById("website").value;
            var email=document.getElementById("email").value;
            var dataString = '&name=' + name +  '&comment=' + comment +  '&website=' + website +  '&email=' + email;
            console.log('pasan kamburugamuwa');
            $.ajax({
                type: "POST",
                url: "../controller/Ellasrilanka.php",
                data: dataString,
                cache: false,
                success: function() {
                    console.log('pasan kamburugamuwa');
                    alert("Succesfully Registered");
                    document.getElementById("form").reset();
                }
            });
        }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src ="js/index.js"></script>

</head>
<body class="subpage">

<!-- Header
 -->
<header id="header">
    <div class="logo"><a href="index.php">Powered <span>By Zone x 24</span></a></div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="#two">Description</a></li>
        <li><a href="#three">Top Sights in Ella</a></li>
        <li><a href="#four">Comments</a></li>
    </ul>
</nav>

<!-- Banner -->
<section class="banner half">
    <article>
        <img src="images/ella2.jpg"  alt="" />
        <div class="inner">
            <header>
                <p>Fall in love with the surroundings.</p>
                <h3>Ella</h3>
            </header>
        </div>
    </article>

</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center">
                    <p>maecenas sapien feugiat ex purus</p>
                    <h2 style="color:darkblue;">Ella-Sri Lanka</h2>
                </header>
                <p style="color:black;">Ella is a small town in the Badulla District of Uva Province, Sri Lanka governed by an Urban Council. It is approximately 200 kilometres east of Colombo and is situated at an elevation of 1,041 metres above sea level. The area has a rich bio-diversity, dense with numerous varieties of flora and fauna</p>
                <p style="color:black;">Ella in Sri Lanka is a small laid-back town surrounded by the beautiful greens of tea. There are a lot of things to do in Ella. Take one of the most beautiful train rides from Nuwara Eliya to Ella and fall in love with the surroundings. You will probably end up staying longer than you actually planned to. Ella has a comfortable climate where the nights are cool and the daytime around 28 degrees.</p>
                <ul style="color: black" >
                    <li>Nine Arch Bridge</li>
                    <li>Lipton's Seat</li>
                    <li>Diyaluma Waterfall</li>
                    <li>Ravana Waterfall</li>
                    <li>Ella Spice Garden</li>
                    <li>Hotels in Ella</li>
                    <li>Little Adam's Peak</li>
                </ul>
                <h1><b>1. Nine Arch Bridge</b></h1>
                <p style="color:black;">This is now a world famous brigde situated just outside of Ella town and on the same way of Little 	Adam's Peak.</p>
                <p style="color:black;">The stone train bridge, built by the British, with its nine beautiful arches, is located between Ella and Demodara station. The train ride in the highlands with the Kandy to Ella train is named as one of the most beautiful train rides in the world.</p>
                <h1><b>2. Lipton's Seat</b></h1>
                <p style="color:black;">Lipton’s Seat in Haputale is a great morning or afternoon trip from Ella. </p>
                <p style="color:black;">The Scottish tea baron Sir Thomas Lipton used to survey his burgeoning empire from here. Lipton’s seat is a panoramic overlooking destination in Sri lanka. Handapanagala lake, Chandrika lake, Uda walwe lake, Wedi hiti Kanda mountains, and also the hambanthota harbor alocated in the in the southern coastal area nd five provinces in Sri Lanka can be seen remarkably. The Dambetenna longest tea factor</p>
                <h1><b>3. Diyaluma Waterfall</b></h1>
                <p style="color:black;">To visit the Diyaluma falls you will probably need the whole day, or at least if you are planning to visit it from the top. About an hour drive out of Ella is the foot of the 2nd highest waterfall in Sri Lanka. Once you have explored the foot, drive 30 minutes more to the top. Hike about 45 minutes and reach a waterfall with many natural pools on different levels.</p>
                <h1><b>4. Ravana Waterfall</b></h1>
                <p style="color:black;">The Ravana Falls (popularly known as Ravana Ella-රාවණා ඇල්ල in Sinhala) is a popular sightseeing attraction in Sri Lanka. It currently ranks as one of the widest falls in the country.</p>
                <p style="color:black;">This waterfall measures approximately 25 m (82 ft) in height and cascades from an oval-shaped concave rock outcrop. During the local wet season, the waterfall turns into what is said to resemble an areca flower with withering petals. But this is not the case in the dry season, where the flow of water reduces dramatically. The falls form part of the Ravana Ella Wildlife Sanctuary, and is located 6 km (3.7 mi) away from the local railway station at Ella.</p>
                <h1><b>5. Hotels in Ella</b></h1>
                <p style="color:black;">Ella has a lot of hostels, guesthouses, and hotels to offer but where should you stay? See all hotels in Ella under $50 a night.
                    We got you a $15 discount at <a href ="https://www.booking.com/index.html">Booking.com</a> if you book via this link, you’re welcome!</p>

            </div>

        </div>
    </div>
</section>




<!-- Three -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <header class="align-center">
            <p class="special"style="color:black;">See the beauty of nature</p>
            <h2>Top Sights in ella - Sri Lanka</h2>
        </header>
        <div class="gallery">
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/ella5.jpg" alt="" /></a>
                </div>
                <div class="content">
                    <header class="align-center">
                        <p>See the trains comming</p>
                        <h2>Walk on the Nine Arch Bridge</h2>
                    </header>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/ella8.jpg" alt="" /></a>
                </div>
                <div class="content">
                    <header class="align-center">
                        <p>maecenas sapien feugiat ex purus</p>
                        <h2>Diyaluma Waterfall</h2>
                    </header>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/ella7.png" alt="" /></a>

                </div>
                <div class="content">
                    <header class="align-center">
                        <p>maecenas apien feugiat ex purus</p>
                        <h2>Lipton's Seat </h2>
                    </header>
                </div>
            </div>
            <div>
                <div class="image fit">
                    <a href="#"><img src="images/ella9.jpg" alt="" /></a>
                </div>
                <div class="content">
                    <header class="align-center">
                        <p>maecenas sapien feugiat ex purus</p>
                        <h2>Ravana Waterfall</h2>
                    </header>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="four" class="wrapper style2">
    <div class="inner">
        <div class="box">
            <div class="content">
                <h1 style ="color: #002a80; font-family:Trattatello, fantasy; font-size: 30px">Blog Comments</h1>
                <?php
                include_once('controller/db.php');
                $t="select * from ella_srilanka";
                $y=$con->query($t);
                foreach ($y as $q)
                {?>
                <div class ="container-fluid">



                    <div id ="id123" style="display: inline">
                        <p style="float: left; color: blue; margin-left:20px;"><?php echo $q['name'];?></p>
                        <P style ="color:blue; float: right; margin-right: 80px;"><?php echo $q['date_time'];?></P>
                    </div>
                    <br/>
                    <br/>
                    <div >
                        <p id ="idasd" style=" color: #0b0b0b; margin-right: 5px;"><?php echo $q['comment'];?> </p>
                    </div>

    <!--                   <input style=" margin-top:-4px; margin-bottom: 15px; margin-right:40px; float:right;" type ="button" id = "button2" value="Reply"/>-->
                    <hr/>
                </div>
                <?php }?>
                <h1 style="alignment: center; margin-top: 100px;"><b>Please share your experience in Ella -Sri Lanka with others</b></h1>
                <h1>Comments</h1>

                <form action="controller/Ellasrilanka.php" method="post">
                    <textarea rows="4" cols="50" name ="comment" id="comment"></textarea>
                    <span class="error" style="color: red"></span>
                    <h1 style="padding-top: 10px; padding-bottom: 2px;">Name</h1>
                    <input type="text" id="name" name ="name" >
                    <span class="error" style="color: red"></span>
                    <h1 style=" padding-top: 10px; padding-bottom: 2px; " name ="email">Email</h1>
                    <input type="text" id="email" name ="email">
<<<<<<< HEAD
                    <span class="error" style="color: red">* <?php echo $emailError;?></span>

                <form action="controller/Ellasrilanka.php" method="post">
                    <textarea rows="4" cols="50" name ="comment" id="comment" required="Please enter comment"></textarea>
                    <span class="error" style="color: red"></span>
                    <h1 style="padding-top: 10px; padding-bottom: 2px;">Name</h1>
                    <input type="text" id="name" name ="name" required="Please enter name" >
                    <span class="error" style="color: red"></span>
                    <h1 style=" padding-top: 10px; padding-bottom: 2px; " name ="email">Email</h1>
                    <input type="email" id="email" name ="email" required="Please enter email">
                    <span class="error" style="color: red"></span>

=======
                    <span class="error" style="color: red"></span>
>>>>>>> ca515a4e14e33d17f05f2b9686fa30591299f0ca
                    <h1 style="padding-top: 10px; padding-bottom: 2px;">WebSite</h1>
                    <input type="text" id="website" name ="website">
                    <input style="background-color: #002a80; alignment: center; margin-top: 20px;" onclick="myFunction();" type ="submit" name="submit" id="submit" value="SUBMIT"/>
<!--                    <input id="submit" onclick="myFunction()" type="button" value="Submit">-->
                </form>
            </div>
        </div>
    </div>
</section>

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
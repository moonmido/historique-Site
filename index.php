
<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISTORY</title>
    <link href="./css/Style.css"  rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body onload="scrol()">

    <script src="./js/opt.js"></script>
    <header>
<nav>
    <h1>HISTORY</h1>
<ul class="nav-cat">
    <li><a href="#faut">Fautures</a></li>
    <li><a href="#ser">Services</a></li>
    <li><a href="#con">Download</a></li>
    <?php 
session_start();
?>
<?php 
if (isset($_SESSION['email'])): ?>
    <li><a href="#"><?php echo htmlspecialchars($_SESSION['email']); ?></a></li>
    <li><a href="logout.php">Logout</a></li>
<?php endif; ?>
</ul>
<ul class="log">
    <?php if (!isset($_SESSION['email'])): ?>
    <li><a href="signin.html">Login</a></li>
    <li id="signup"><a href="signup.html">Sign Up</a></li>
<?php endif; ?>

</ul>
<ul class="phone-nav">
    <li><a href="#" class="btn" onclick="enternav()"><i  class="fa-solid fa-bars"></i></a></li>
</ul>

</nav>
<div class="phone-nav-all">
    <li class="exitnav" ><a href="#"   onclick="exitnav()"><i class="fa-solid fa-xmark" style="color: rgb(97, 96, 96);"></i></a></li>
    <li><a href="#faut">Fautures</a></li>
    <li><a href="#ser">Services</a></li>
    <li><a href="#con">Download</a></li>
    <?php 
if (isset($_SESSION['email'])): ?>
    <li><a href="#"><?php echo htmlspecialchars($_SESSION['email']); ?></a></li>
    <li><a href="logout.php">Logout</a></li>
<?php endif; ?>

    <?php if(!isset($_SESSION['email'])) : ?>
    <li><a href="signup.html">Sign up</a></li>
    <li><a href="signin.html">Sign in</a></li>
<?php endif; ?>

</div>

    </header>

<section class="first" id="about">
<div class="down-sec">
    <h1>Algerian Chronicles Your Gateway to History</h1>
    <p>Step into the past with Algerian Chronicles, the ultimate app for exploring Algeria's rich and multifaceted history. Whether you're a history buff, student, or curious traveler, Algerian Chronicles brings centuries of historical knowledge right to your fingertips.</p>
    <button type="button">Download App <i class="fa-solid fa-arrow-right" style="padding-left: 10px;"></i></button>
</div>
<div class="img-home">
    <img src="./Images/Mobile-phone-white-cover-with-blank-screen-isolated-on-transparent-background-PNG.png" width=60%>
        </div>
    <div class="more-sec">
        <p>Whether you’re a student, a teacher, or simply curious about Algeria's story, our app provides an intuitive and immersive learning experience.</p>
    </div>

</section>

<section class="second" id="faut">
<div class="fautures-info">
    <h1>Embark on a Journey Through Algeria’s Fascinating History</h1>
     <p><span>HISTORY</span> isn’t just another history app. It’s your ultimate gateway to exploring Algeria’s vibrant and fascinating past. With a blend of educational content and interactive features, HISTORY brings the nation’s story to life in an engaging and accessible way for everyone. Here’s what you can expect:</p>
    </div>
<div class="all-card">
     <div class="card">

        <div class="card-comp">
        <i class="fa-solid fa-timeline"></i>
        <h2>Interactive Timeline</h2>
        <p>Seamlessly scroll through centuries of Algerian history, from the rise of the Berber kingdoms and the influence of the Roman Empire, to the pivotal moments of the War of Independence and modern Algeria. Each period is clearly marked, helping you see how events unfold over time.</p>
   
    </div>





    <div class="card-comp">
        <i class="fa-solid fa-landmark" style="color: #8A8AD4; box-shadow: 0px 5px 20px #6d6df392 ;"></i>
                <h2>Detailed Historical Profiles </h2>
        <p>Explore comprehensive profiles of key historical figures who shaped Algeria’s history. From ancient leaders like King Jugurtha to national heroes like Emir Abd el-Kader, each profile provides rich details about their lives, achievements, and impact on the country.</p>
   
    </div>



    <div class="card-comp">
        <i class="fa-solid fa-wifi" style="color: #E481C2; box-shadow: 0px 5px 20px #f33fb489 ;"></i>
        <h2>Offline Access</h2>
        <p>With Offline Access, you can explore Algeria’s history without needing an internet connection. This feature ensures that you’re always able to dive into the rich content of HISTORY, no matter where you are.</p>
   
    </div>



    </div>
</div>



</section>


<section class="three" id="ser">
<div class="fautures-info">
    <h1>Where every moment inspires a journey through time.</h1>
    <p>Explore the depths of Algeria’s past with 'HISTORY'—where education meets engagement. From interactive timelines and detailed landmark information to personalized learning paths and vibrant community discussions, our app offers a comprehensive and immersive experience. Embrace the journey through Algeria’s rich history and unlock a world of knowledge with us today.</p>
</div>
<div class="all-three">

<div class="main-cat">
<div class="cat">
<h1><span class="counter">01</span> <span class="title"> User-Friendly Tutorials</span></h1>
<p>Step-by-step guides and video tutorials that help users navigate the app and website with ease. These tutorials will explain how to access different features, customize learning paths, and manage offline content.</p>
</div>
<div class="cat">
    <h1><span class="counter">02</span> <span class="title" style="margin-left: 1.9%;"> Dark Mode for Comfortable Reading </span></h1>
    <p>For ease of reading in low-light environments, offer a dark mode option. This enhances the usability and accessibility of the app and website for night-time learners.</p>
    </div>
    <div class="cat">
        <h1><span class="counter" >03</span> <span class="title" style="margin-left: 1.7%;"> Personalized Learning Experience</span></h1>
        <p>Tailor your historical exploration with our personalized learning paths. Easily select topics of interest and receive customized content that aligns with your preferences, making learning about Algeria’s history both relevant and engaging.</p>
        </div>

</div>
<div class="img-cat">
    <img  src="./Images/1609705_P2PEJ60-removebg-preview-transformed.png" width=10%>
</div>
</div>
</section>
<section class="four" id="con">
    <div class="all-app">
<div class="app-info">
<h1>Download 'HISTORY' and explore Algeria’s past today!</h1>
<p>Explore Algeria’s history with an interactive, engaging experience.</p>
<button type="button" class="btn">Download for Android <i class="fa-brands fa-android"></i></button>
<button type="button" class="btn">Download for IOS <i class="fa-brands fa-apple"></i></button>

</div>

<div class="app-img">
    <img src="./Images/—Pngtree—two mobile phones with a_14960205.png" width="100%">
</div>
</div>

</section>


<footer class="final">
<div class="all-foot">

<div class="logo-foot">
    <h1>HISTORY</h1>
    <p>HISTORY © 2024<br>ALL RIGHTS RESERVED</p>
</div>

<div class="about-foot">
    <h2>ABOUT</h2>
    <p><a href="#">About</a></p>
    <p><a href="#">Benefit</a></p>
    <p><a href="#">Project</a></p>
</div>

<div class="about-foot">
    <h2>INFO</h2>
    <p><a href="#">Blog</a></p>
    <p><a href="#">Contact</a></p>
    <p><a href="#">FAQ</a></p>
</div>
<div class="link-foot">
    <p>Curious about new developments and updates? follow out social media</p>
    <a href="#"><i class="fa-brands fa-facebook"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-github"></i></a>
</div>

</div>


</footer>

</body>
</html>

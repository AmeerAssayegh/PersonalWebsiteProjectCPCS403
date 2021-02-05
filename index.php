<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ameer's personal website.">
        <meta name="theme-color" content="#534c4c">

        <title>ameer-a.com | Home</title>
        
        <link rel="stylesheet" type="text/css" href="global/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="global/css/animate.css">
        <link rel="stylesheet" type="text/css" href="global/css/style.css">
        <link rel="stylesheet" type="text/css" href="global/css/queries.css">
        
        <!-- fonts from google  -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
        
    </head>
    
    <body>
        <!-- include header page  -->
        <?php include ("includes/theHeader.php"); ?>
        <!-- Section1: welcom  -->
        <section class="welcom js--section1 js--wp-1">
            <div class="row">
                <h2>Welcom in My Website</h2>
                <p>Hi, I am Ameer. This is my personal website I created by my self when I was taking Internet Application programming course in University. I am back to my site to improve my web development skills and for more about my website click on <a id="aboutLink" href="#">About</a>. Also for more about me visit MyResume.<br/> </p>

                <p>Thank you for visiting, Have a nice Day!</p>
            </div>
        </section>
        
        <!-- Section2: PrayerTime  -->
        <section class="PrayerTime js--pTime js--wp-2" id="p-Time">
            <div class="row">
                <div id="pTime">
                    <h2>Prayer Time</h2>
                    <p><iframe id="tpwindow" name="prayertimes" src="http://timesprayer.com/widgets.php?name=makkah.html&amp;frame=1&amp;lang=en&amp;sound=true&amp;avachang=true&amp;fcolor=2b6c88&amp;scolor=ffffe6&amp;tcolor=1f4d61&amp;frcolor=66adcc" width="260" height="190" style="border: none;border-radius: 15px;" ></iframe></p>
                    </div>
                </div>
            
        </section>
        <!-- Ameer -->
        <!-- Section3: myLinks  -->
        <section class="myLinks js--Links js--wp-3" id="my-links">
            
            <div class="links-containt " >
                <h2>My Important Links</h2>
                <h4>King Abdulaziz University Page</h4>
                <p><a href="https://kau.edu.sa" target="_blank">kau.edu.sa</a></p>
                
                <h4>King Abdulaziz University &#40;E&#45;Services &#41;</h4>
                <p><a href="https://odusplus-ss.kau.edu.sa" target="_blank">odusplus-ss.kau.edu.sa</a></p>
                
                <h4>Udemy Online Courses</h4>
                <p><a href="https://udemy.com" target="_blank">Udemy.com</a></p>
                
                <h4>Doroob &#40; دروب &#41;</h4>
                <p><a href="https://www.doroob.sa/ar" target="_blank">doroob.sa</a></p>
                
                
                
            </div>
            
        </section>
        
        <!-- Section4: myBlog  -->
        <section class="myBlogSec js--wp-4">
            <h2>Blog</h2>
            <p>Blog by WordPress. In my Blog I am trying to write something Benefit, but not regularly <a href="http://blog.ameer-a.com/"> &#40;Click here&#41;.</a> </p>
        </section>
        
        <!-- include header page  -->
        <?php include ("includes/footer.php"); ?>
        
        <!-- java script jQuary -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="global/js/vendors/jquery.waypoints.min.js"></script>
        <script src="global/js/scripts.js"></script>
       
    </body>
    
    
</html>
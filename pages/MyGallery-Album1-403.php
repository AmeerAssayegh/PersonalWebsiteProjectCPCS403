<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ameer's personal website.">
        <meta name="theme-color" content="#534c4c">

        <title>ameer-a.com | MyGallery_403</title>
        
        <link rel="stylesheet" type="text/css" href="../global/css/style.css">
        <link rel="stylesheet" type="text/css" href="../global/css/queries.css">
        <link rel="stylesheet" type="text/css" href="../global/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="../global/css/ionicons.min.css">
        <!-- fonts from google  -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
        
    </head>
    
    <body>
        <!-- include header page  -->
        <?php include ("../includes/theHeader2.php"); ?>
        
        <section class="MyGallery-403 js--section1" >
            <h2>For CPCS403 project</h2>
            
            <div class="back-link">
                <h3><a href="MyGallery.php">Back</a></h3>
            </div>
            
            <div class="row">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 7</div>
                        <img src="../images/albums/Album1_403/MakkahClock.jpg" alt="1" style="width:100%" />
                        <div class="text">Makkah Clock picuter taken in 2015 in Ramdan</div>
                    </div>
                    
                    
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 7</div>
                        <img src="../images/albums/Album1_403/KAU.jpg" alt="2" style="width:100%" />
                        <div class="text">I took this picture in King Abdulaziz University in Jeddah</div>
                    </div>
                    
                    
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 7</div>
                        <img src="../images/albums/Album1_403/InCollage.jpg"  alt="3" style="width:100%" />
                        <div class="text">In Collage With My Friends From left Abdumajeed,Faisal,Luqman,Salem,and Me</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">4 / 7</div>
                        <img src="../images/albums/Album1_403/jeddah2.jpg" alt="4" style="width:100%" />
                        <div class="text">With my friends in Jeddah Corniche Luqman,Abdulmajeeed,Me,and Salem</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">5 / 7</div>
                        <img src="../images/albums/Album1_403/TaifShafa-DahhahMountain.jpg" alt="5" style="width:100%" />
                        <div class="text">Dakkah Maountain in Shafa near Taif</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">6 / 7</div>
                        <p><img class="al1-long-img" src="../images/albums/Album1_403/KAUST.jpg" alt="6" /></p>
                        <div class="text">I took picture When I went to King Abdullah University &#40;KAUST&#41; in Thuwal</div>
                    </div>
                    
                    <div class="mySlides fade">
                        <div class="numbertext">7 / 7</div>
                        <p><img class="al1-long-img" src="../images/albums/Album1_403/KingAbdullahMonument.jpg" alt="7"  /></p>
                        <div class="text">King Abdullah Monument at King Abullah University</div>
                    </div>
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                
                <br>
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                    <span class="dot" onclick="currentSlide(5)"></span> 
                    <span class="dot" onclick="currentSlide(6)"></span> 
                    <span class="dot" onclick="currentSlide(7)"></span> 
                </div>
                <script src="../global/js/galleryScript1.js"></script>
                
            </div>
            
            <div class="row">
                <div class="Albym-video">
                    <h3><a href="MyGallery-Album1-403-Video.php"><img src="../images/icons/videoIcon2.png" alt="videoIcon"><br/>Album Videos</a></h3>
                </div>
            </div>
            
        </section>
        
        
        <!-- include header page  -->
        <?php include ("../includes/footer2.php"); ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../global/js/vendors/jquery.waypoints.min.js"></script>
        <script src="../global/js/scripts.js"></script>
    </body>
</html>








<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ameer's personal website.">
        <meta name="theme-color" content="#534c4c">

        <title>ameer-a.com | Contact</title>
        
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
        <!-- Section1: welcom  -->
        <section class="contactMe js--section1" id="form">
            <h2>Contact with Ameer</h2>
            <p>Contact me on the  Following E&#45;Mail Address </p>
            <p id="mail-me"><i class="ion-email"></i><a href="mailto:ameer.assayegh@ameer-a.com">ameer.assayegh@ameer-a.com</a></p>
            
            
            
            <div class="row">
                
                <form method="post" action="mailer.php" class="contact-form">
                    <p>Or Fill the Following Form </p>
                    
                    <!-- ATTENTION HERE!!
                    <div class="form-messages sucess">
                        Thank You! Your message has been sent.
                    </div> --> 

                    <div class="row">
                        <?php 
                            if ($_GET ['success'] == 1){
                                echo "<div class=\"form-messages success\">Thank You! Your message has been sent.</div>";
                            }

                            if ($_GET['success'] == -1){
                                echo "<div class=\"form-messages error\">Oops! Something went wrong. Pleas try again.</div>";
                            }

                        ?>
                    </div>
                    
                    <div class="contentForm">
                        <div class="row">


                            <div class="input-label">
                                <label for="name">Your Name:</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="name" id="name" placeholder="Full Name" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-label">
                                <label for="email">Your email:</label>
                            </div>
                            <div class="input-data">
                                <input type="text" name="email" id="email" placeholder="ex: abcd@abc.com" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-label">
                                <label >Your Message:</label>
                                <!--<label for="vMessage">Your Message:</label>-->
                            </div>
                            <div class="input-data">
                                <textarea name="message" placeholder="Write Your Message"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-data">
                                <input id="btnEmail" type="submit" value="Send it!">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            
            <div class="row">
                <p id="feedb-link">To submit your feedback about my website please <strong><a href="Feedback.php">click here</a></strong> </p>
            </div>
            
        </section>
        
        
        <!-- include header page  -->
        <?php include ("../includes/footer2.php"); ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../global/js/vendors/jquery.waypoints.min.js"></script>
        <script src="../global/js/scripts.js"></script>
    </body>
</html>




<!-- 
Form Contact editit soon:


-->



<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ameer's personal website.">
        <meta name="theme-color" content="#534c4c">

        <title>ameer-a.com | Your Feedback</title>
        
        <link rel="stylesheet" type="text/css" href="../global/css/style.css">
        <link rel="stylesheet" type="text/css" href="../global/css/queries.css">
        <link rel="stylesheet" type="text/css" href="../global/css/Grid.css">
        <link rel="stylesheet" type="text/css" href="../global/css/ionicons.min.css">
        <!-- fonts from google  -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:500" rel="stylesheet">
        <!-- validation submit javascript -->
        <script type="text/javascript" src="../global/js/fbValidate.js"></script>
        
        
    </head>
    
    <body>
        <!-- include header page  -->
        <?php include ("../includes/theHeader2.php"); ?>
        <!-- Section1: welcom  -->
        <section class="feedback js--section1">
            <h2>Your Feedback</h2>
            <!--<p id="soonText">SOON! <br/>
                Still Working on this page <br/>
            Updated on Dec 10, 2017</p>-->
            
            <div class="row">
                <div class="feedback-form">
                    <form onsubmit="return fbValidate()" id="feedbackF" class="feedbackF" method="post" action="../mySQLDB/ufdDB.php">
                        
                        <p id="feed-msg"><span>*</span> required to submit</p>
                        <fieldset id="visitorInfo" class="visitorInfo">
                            <legend>Visitor Information</legend>
                            <!-- firstName-->
                            <label for="fname" class="blocklabel">First Name: <span>*</span>
                                <input type="text" name="fname" id="fname" class="inputFText" />
                            </label>
                            <!-- LastName -->
                            <label for="lname" class="blocklabel">Last Name: <span>*</span>
                                <input type="text" name="lname" id="lname" class="inputFText"/>
                            </label>
                            <!-- Gender -->
                            <label for="pGender" class="blocklabel">Gender:
                                <select name="gender" id="pGenderS">
                                    <option value="Not Selected">&#40;optional&#41; </option>
                                    <option value="Male">Male </option>
                                    <option value="Female">Female </option>
                                </select>
                            </label>
                            <!-- Email -->
                            <label for="email" class="blocklabel">Email: <span>*</span>
                                <input type="text" name="emails" id="email" class="inputFText"/>
                            </label>
                            <!-- country -->
                            <label for="country" class="blocklabel">Country <span>*</span>
                                <select name="countries" id="countryS">
                                    <option value="Not Selected">Not selected</option>
                                    <option value="KSA">King Saudia Arabia </option>
                                    <option value="UAE">United Arab Emirates</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="India">India</option>
                                </select>
                            </label>
                            
                            
                        </fieldset>
                        
                        <fieldset class="feedback-usr">
                        <legend>Your Evaluation and Feedback</legend>
                            
                            <!-- Q1 -->
                            <div class="FeedbackQuestions">
                                <label>Q1. How do you see my Website design &#63; <span>*</span></label><br/>
                                <input type="radio" name="q1" class="fbAns" id="Exce1" value="Excellent"/>
                                <label>Excellent</label>

                                <input type="radio" name="q1" class="fbAns" id="Average1" value="Average"/>
                                <label>Average</label>

                                <input type="radio" name="q1" class="fbAns" id="bad1" value="Bad"/>
                                <label>Bad</label>
                            </div>
                            <!-- Q2 -->
                            <div class="FeedbackQuestions">
                                <label>Q2. How do you see my pages as pages order and content&#63; <span>*</span></label><br/>
                                <input type="radio" name="q2" class="fbAns" id="Exce2" value="Excellent"/>
                                <label>Excellent</label>

                                <input type="radio" name="q2" class="fbAns" id="Average2" value="Average"/>
                                <label>Average</label>

                                <input type="radio" name="q2" class="fbAns" id="bad2" value="Bad"/>
                                <label>Bad</label>
                            </div>
                            <!-- Q3 -->
                            <div class="FeedbackQuestions">
                                <label>Q3. Do you have any comment or sugesstion for my website
                                    notedown here: <span>*</span></label><br/>
                                <textarea id="comments" name="comment" rows="15"></textarea>
                            </div>
                            
                            <!-- submit and cancel buttons -->
                            <div class="fbButtons">
                                <h2>
                                    <button class="fb-btn" type="submit" value="Submint">Submit</button>

                                    <button class="fb-btn" type="reset" value="reset">Cancel/Reset</button>
                                </h2>
                            </div>
                            
                            
                        </fieldset>
                        
                    </form>
                </div>
            </div>-->
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



<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ameer's personal website.">
        <meta name="theme-color" content="#534c4c">

        <title>ameer-a.com | Your Feedback</title>
        
        <link rel="stylesheet" type="text/css" href="../global/css/style.css">
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
        <section class="feedback">
            <h2>Your Feedback</h2>
            
            <div class="row">
                <div class="dataSent">
                    
                    <!-- Connecting with database and sending data -->
                    <?php
			//echo "1<br>";	
			$servername = "localhost";
			//echo "2<br>";	
			$username = "";
			//echo "3<br>";	
			$password = "";
			//echo "4<br>";	
			$dbname = "db1ameer";
			//echo "5<br>";	
			// Create connection and select databaseName
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			//echo "6<br>";	
			//for arabic
			$conn->query("SET NAMES utf8");
			$conn->query("SET CHARACTER SET utf8 utf8");
			// Check connection
			if (!$conn) {
			//echo "7<br>";	
			echo "Database Connected failed";
			    die("Connection failed: " . mysqli_connect_error());
			    }
			    else{
			    //echo "Connected successfully<br>";	
			    //echo "77<br>";	
			    }
			    
			    //echo "8<br>";
			    $fname = $_POST['fname'];
			    //echo "9<br>";
			    $lname = $_POST['lname'];
			    //echo "10<br>";
  				$gender = $_POST['gender'];
  				//echo "11<br>";
  				$email = $_POST['emails'];
  				//echo "12<br>";
  				$countries = $_POST['countries'];
  				//echo "13<br>";
  				$q1 = $_POST['q1'];
  				//echo "14<br>";
 				$q2 = $_POST['q2'];
 				//echo "15<br>";
 				$comment = $_POST['comment'];
 				//echo "16<br>";
			    
				$sql = "INSERT INTO userfeedback (fname, lname, gender, emails, countries, q1, q2, comment)
				VALUES ('$fname', '$lname', '$gender','$email' , '$countries', '$q1', '$q2', '$comment')";
				
				//echo "17<br>";
				if ($conn->query($sql) === TRUE) {
				//echo "18<br>";
				    echo "<br><br>Your feedback received successfully<br> ";
				    } 
				    else {
				    echo "1818<br>";
				        echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
				        }
				        
				        //close sql connection
				        $conn->close();
			    echo "Thank for your feedback <br><br><br> Have a nice day!! <br>"
			    
			?>
                    
                </div>
            </div>
        </section>
        
        
        <!-- include header page  -->
        <?php include ("../includes/footer2.php"); ?>
    </body>
</html>




<!-- 
Form Contact editit soon:


-->



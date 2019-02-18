<!DOCTYPE html>

<html lang="en">

<head>
    <title>Ace in the Hole Multisport Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.less" rel="stylesheet/less" type="text/css"> 
    <link href="https://fonts.googleapis.com/css?family=Muli:700" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
</head>

<body>
    
<?php include "../includes/header.inc.html.php"; ?>
    
<main>
  
<?php include "../includes/nav.inc.html.php"; ?>
    
    <aside>
        
        <p>Weather feed, event info, and social media feed go here</p>
    
    </aside>
    
    <article>
        
        <h2>REGISTRATION FORM</h2>
        
        <p>Enter your information in the form, then click submit to register for the event.<br>Required fields are marked with an asterisk (*).</p>
            
        <form method="post" id="registration" action=" ">
                <label for="name">*Name:</label>
                <input type="text" name="name" class="name" required><br>
                <br>                
                <label for="email">*Email address:</label>
                <input type="email" name="email" class="email" required><br>
                <br>                
                <label for="gender">*Gender:</label>
                <input type="radio" name="gender" class="gender" value="Male" checked>Male
                <input type="radio" name="gender" class="gender" value="Female">Female
                <input type="radio" name="gender" class="gender" value="Nonbinary">Non-binary<br>
                <br>
                <label for="age">*Age:</label>
                <input type="number" name="age" class="age" required><br>
                <br>                
                <label for="role">*Role:</label>
                <input type="radio" name="role" class="role" value="Athlete" checked>Athlete
                <input type="radio" name="role" class="role" value="Volunteer">Volunteer<br>
                <br>
                <label for="event">*Event registering for (one option must be selected for each day)</label><br>
                <br>
                <span>March 23 (Saturday)</span><br>
                <div class="event1">
                    <input type="radio" name="event1" value="Long Course Triathlon">Long Course Triathlon
                    <input type="radio" name="event1" value="Olympic Triathlon">Olympic Triathlon
                    <input type="radio" name="event1" value="10k">10K
                    <input type="radio" name="event1" value="Half Marathon">Half Marathon<br>
                    <input type="radio" name="event1" value="Volunteer">Volunteer<br>
                    <input type="radio" name="event1" value="None" checked>None
                </div><br>
                <br>
                <span>March 24 (Sunday)</span><br>
                <div class="event2"> 
                    <input type="radio" name="event2" value="Sprint Triathlon">Sprint Triathlon
                    <input type="radio" name="event2" value="Try-a-Tri">Try-a-Tri
                    <input type="radio" name="event2" value="Splash n Dash">Splash n Dash<br>
                    <input type="radio" name="event2" value="Volunteer">Volunteer<br>
                    <input type="radio" name="event2" value="None" checked>None<br>
                </div><br>
                <label for="emergency_name">Emergency name:</label>
                <input type="text" name="emergency_name" class="emergency_name"><br>
                <br>               
                <label for="emergency_contact">Emergency phone number:</label>
                <input type="tel" name="emergency_contact" class="emergency_contact"><br>
                <br>
                <label for="accommodations">Accommodations:</label>
                <textarea name="accommodations" class="accommodations" rows="3"></textarea><br>
                <br>
                <button class="submit">Submit</button>
            </form> 
    
    </article>
    
</main>
                   
<?php include "../includes/footer.inc.html.php"; ?>    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../script/style.js"></script>
 
</body>

</html>
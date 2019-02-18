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
        
        <h2>CONTACT FORM</h2>
        
        <p>Enter your information and either your question or comment in the form, then click submit.</p>
            
        <form method="post" id="contact" action=" ">
                <label for="name">Name:</label>
                <input type="text" name="name" class="name" required><br>
                <br>                
                <label for="email">Email address:</label>
                <input type="email" name="email" class="email" required><br>
                <br>                
                <label for="">Role:</label>
                <input type="radio" name="role" class="role" value="Athlete" checked>Athlete
                <input type="radio" name="role" class="role" value="Volunteer">Volunteer
                <input type="radio" name="role" class="role" value="Others (interested party)">Others (interested party)<br>
                <br>
                <label for="comment">Question or Comment:</label>
                <textarea name="comment" class="comment" rows="4" required></textarea><br>
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
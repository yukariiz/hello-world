<!DOCTYPE html>

<html lang="en">

<head>
    <title>Ace in the Hole Multisport Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.less" rel="stylesheet/less" type="text/css"> 
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
    <!-- Font Awesome CDN -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- Font Awesome External link --> 
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    
<?php include "../includes/header.inc.html.php"; ?>
    
<?php include "../includes/nav.inc.html.php"; ?>
    
<main>
    
    <article class="success-page">
        
        <div class="textblock">
        
        <h2 class="form-submit">Thank you! You successfully registered for the event!</h2>
        
            <p>Our records show you submitted the following:<br>
            <br>
              <b>Name</b>: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Email address</b>: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Gender</b>: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Age</b>: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Role</b>: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Event registering for</b>: March 23, <?php echo htmlspecialchars($event1, ENT_QUOTES, 'UTF-8'); ?> / March 24, <?php echo htmlspecialchars($event2, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Emergency name</b>: <?php echo htmlspecialchars($e_name, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Emergency phone number</b>: <?php echo htmlspecialchars($e_contact, ENT_QUOTES, 'UTF-8'); ?><br>
              <b>Accomodations</b>: <?php echo htmlspecialchars($accommodations, ENT_QUOTES, 'UTF-8'); ?>
            </p>
            
            <a href="<?php echo BASE_URL; ?>index.html.php"><button class="submit">Back to Home</button></a>
            
         </div>
        
    </article>
    
</main>
                   
<?php include "../includes/footer.inc.html.php"; ?>    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../script/style.js"></script>
 
</body>

</html>
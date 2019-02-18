<!DOCTYPE html>

<html lang="en">

<head>
    <title>Ace in the Hole Multisport Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.less" rel="stylesheet/less" type="text/css"> 
    <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.min.js"></script>
</head>

<body>
    
<?php include "../includes/header.inc.html.php"; ?>
    
<main>
  
<?php include "../includes/nav.inc.html.php"; ?>
    
    <aside>
        
        <p>Weather feed and Event info go here</p>
    
    </aside>
    
    <article>
        
        <h2>Thank you! You successfully registered for the event!</h2>
        
            <p>Our records show you submitted the following:<br>
            <br>
              Name: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
              Email address: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
              Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
              Age: <?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?><br>
              Role: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br>
              Event registering for: March 23, <?php echo htmlspecialchars($event1, ENT_QUOTES, 'UTF-8'); ?> / March 24, <?php echo htmlspecialchars($event2, ENT_QUOTES, 'UTF-8'); ?><br>
              Emergency name: <?php echo htmlspecialchars($e_name, ENT_QUOTES, 'UTF-8'); ?><br>
              Emergency phone number: <?php echo htmlspecialchars($e_contact, ENT_QUOTES, 'UTF-8'); ?><br>
              Accomodations: <?php echo htmlspecialchars($accommodations, ENT_QUOTES, 'UTF-8'); ?>
            </p>
        
    </article>
    
</main>
                   
<?php include "../includes/footer.inc.html.php"; ?>    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../script/style.js"></script>
 
</body>

</html>
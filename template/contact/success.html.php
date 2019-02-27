<!DOCTYPE html>

<html lang="en">

<head>
    <title>Ace in the Hole Multisport Events</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.less" rel="stylesheet/less" type="text/css"> 
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli:700" rel="stylesheet">
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
      
    <article>
        
        <div class="textblock">
        
        <h2 class="form-submit">Thank you! The contact form was successfully submitted!</h2>
        
              <p>Our records show you submitted the following:<br>
              <br>
              <b>Name</b>: <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?><br>
              <br>
              <b>Email address</b>: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br><br>
              <b>Role</b>: <?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?><br><br>
              <b>Question or comment</b>: <?php echo htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?>
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
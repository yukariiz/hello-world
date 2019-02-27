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
        
        <h2>CONTACT FORM</h2>
        
        <p>Enter your information and either your question or comment in the form, then click submit.</p>
            
        <form method="post" id="contact" action=" ">
            
                <div class="contact-list">
                <label for="name">Name:</label>
                <input type="text" name="name" class="name" required><br>
                </div>    
            
                <div class="contact-list">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="email" required><br>
                </div> 
            
                <div class="contact-list">
                <label for="">Role:</label>
                <div class="role-text">
                <input type="radio" name="role" class="role" value="Athlete" checked>Athlete
                <input type="radio" name="role" class="role" value="Volunteer">Volunteer<br>
                <input type="radio" name="role" class="role" value="Others (interested party)">Others (interested party)</div><br>
                </div>
            
                <div class="contact-list">
                <label for="comment">Question or Comment:</label>
                <textarea name="comment" class="comment" rows="4" required></textarea><br>
                </div>
            
                <button class="submit">Submit</button>
            </form> 
            
        </div>
    
    </article>
    
    <aside>
        
        <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="retro-sky" >PORTLAND WEATHER</a>
    <script>
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
    </script>
        
        <div class="facebook-block">
        
        <p>Share our facebook page!</p>

        <center><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2F&tabs=timeline%2C%20events%2C%20messages&width=280&height=220&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="280" height="220" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></center>
            
        </div>
        
        <div class="twitter-block">
        
        <p>- Tweets - Follow us!</p>
        <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Any weather is training weather!</p>&mdash; CAS 222 (@pcccas222) <a href="https://twitter.com/pcccas222/status/1055566270580445185?ref_src=twsrc%5Etfw">October 25, 2018</a></blockquote>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
    
    </aside>
    
</main>
                   
<?php include "../includes/footer.inc.html.php"; ?>    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../script/style.js"></script>
 
</body>

</html>
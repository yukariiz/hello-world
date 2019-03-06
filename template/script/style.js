/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint

//Hamburger menu

$(document).ready(function() {
    
    $(".cross").hide();
    
    $(".hamburger").on("click", function() {
        
        $(".menu").slideDown("slow");
        
        $(".cross").show();
        
        $(".hamburger").hide();  
        
    });
    
    $(".cross").on("click", function() {
       
        $(".menu").slideUp("slow");
        
        $(".cross").hide();
        
        $(".hamburger").show();
        
    });
    
     $(".event-list").on("click", function() {
       
        $(".dropdown").slideToggle("slow");
         
    });

});

//FAQs

$(document).ready(function(){
  
    $(".question1").click(function(){
    
        $(".answer1").slideToggle("slow");
        
    });
    
    $(".question2").click(function(){
    
        $(".answer2").slideToggle("slow");
        
    });
    
    $(".question3").click(function(){
    
        $(".answer3").slideToggle("slow");
        
    });
    
    $(".question4").click(function(){
    
        $(".answer4").slideToggle("slow");
        
    });
    
    $(".question5").click(function(){
    
        $(".answer5").slideToggle("slow");
        
    });   
    
});

// Get the modal
var modal1 = document.getElementById('myModal1');
var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
var modal4 = document.getElementById('myModal4');
var modal5 = document.getElementById('myModal5');
var modal6 = document.getElementById('myModal6');

// Get the image and insert it inside the modal
var img1 = document.getElementById('myImg1');

img1.onclick = function(){
    modal1.style.display = "block";
}

var img2 = document.getElementById('myImg2');

img2.onclick = function(){
    modal2.style.display = "block";
}

var img3 = document.getElementById('myImg3');

img3.onclick = function(){
    modal3.style.display = "block";  
}

var img4 = document.getElementById('myImg4');

img4.onclick = function(){
    modal4.style.display = "block";
}

var img5 = document.getElementById('myImg5');

img5.onclick = function(){
    modal5.style.display = "block";
}

var img6 = document.getElementById('myImg6');

img6.onclick = function(){
    modal6.style.display = "block";
}


// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];
var span5 = document.getElementsByClassName("close5")[0];
var span6 = document.getElementsByClassName("close6")[0];

// When the user clicks on <span> (x), close the modal
span1.onclick = function() { 
  modal1.style.display = "none";
}

span2.onclick = function() { 
  modal2.style.display = "none";
}

span3.onclick = function() { 
  modal3.style.display = "none";
}

span4.onclick = function() { 
  modal4.style.display = "none";
}

span5.onclick = function() { 
  modal5.style.display = "none";
}

span6.onclick = function() { 
  modal6.style.display = "none";
}





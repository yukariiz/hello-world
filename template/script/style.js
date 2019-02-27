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

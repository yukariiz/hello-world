/*eslint-disable no-unused-vars*/
/*global $, document, alert, window*/
/*jshint browser: true, unused: false, no-unused-vars: true*/
/*jslint devel: true, node: true, vars: true*/
"use strict"; // required by jslint


//Hamburger Menu

$(document).ready(function() {

    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").show();

    $(".hamburger").on("click", function() {
          
            $(".menu").slideToggle("slow");
        
            $(".cross").show();
        
            $(".hamburger").hide();  
        
    });
    
    $(".cross").on("click", function() {
       
        $(".menu").slideToggle("slow");
        
        $(".cross").hide();
        
        $(".hamburger").show();
        
    });

});
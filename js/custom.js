/*global $, alert , console*/

$(function () {
    
    'use strict';
     
     // Adjust Header Height
     
    var myHeader = $('.header'),
         
        mySlider = $('.bxslider');
     
    myHeader.height($(window).height());
     
    $(window).resize(function () {
        
        myHeader.height($(window).height());
    });
//links add active/current class
    
    $('.links li').click(function () {
        $(this).parent().addClass('current').siblings().removeClass('current');
    });

    // Adjust Bxslider List Item Center
     
    $('.bxslider').each(function () {
        
        $(this).css('paddingTop', ($(window).height() - $('.bxslider li').height()) / 2);
         
    });
     
     // Trigger The Bx Slider
     
    $('.bxslider').bxSlider({
         
        pager: false
         
    });
    
    //smooth scroll to div
    
    $('.links li a').click(function () {
        
        $('html , body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top
       
        }, 1000);

    });

    // auto slider code
    
    (function autoSlider() {
        
        $('.slider .active').each(function () {
            
            if (!$(this).is(':last-child')) {
            
                $(this).delay(8000).fadeOut(1000, function () {
            
                    $(this).removeClass('active').next().addClass('active').fadeIn();
                    autoSlider();
                    
                });
            
            } else {
                $(this).delay(6000).fadeOut(1000, function () {
                    $(this).removeClass('active');
                    $('.slider div').eq(0).addClass('active').fadeIn();
                    autoSlider();
            
                });
            }
            
        });
            
    }());
  
});
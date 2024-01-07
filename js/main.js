'use strict';

$(function(){
    // console.log('い');
    $('.menu-item-pulldown').mouseover(function(){
        // console.log('あ');
        $('.js_menu_pulldown-item').slideDown();
        // console.log('あ');
    });
    $('.menu-item-pulldown').mouseleave(function(){
        $('.js_menu_pulldown-item').slideUp();
    });
});
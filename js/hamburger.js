'use strict';

$(function(){
    $('.toggle_btn').on('click',function(){
        $('#mask').toggleClass('active');
        $(this).toggleClass('active');
        $('.hamburger-navi').toggleClass('active');
    });
});
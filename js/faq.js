'use strict';

$(function(){
    $('.open').on('click',function(){
        $(this).next().slideToggle();
        $(this).toggleClass('activation');
    });
});
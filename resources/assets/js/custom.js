/*------------------------------------------------------------------
Project:    Highland
Author:     Simpleqode
URL:        http://simpleqode.com/
            https://twitter.com/YevSim
            https://www.facebook.com/simpleqode
Version:    1.5.1
Created:        11/03/2014
Last change:    06/07/2015
-------------------------------------------------------------------*/


// Sign in & sing out nav bar demo. To be removed on an operational website
// ========================================================================

$('#sign-in').on('click', function() {
  $("#sign-up").toggleClass('show hidden');
  $("#sign-in").toggleClass('show hidden');
  $("#cogs-menu").toggleClass('show hidden animated fadeIn');
  $("#profile-menu").toggleClass('show hidden animated fadeIn');
  return false;
});
$('#sign-out').on('click', function() {
  $("#sign-up").toggleClass('show hidden');
  $("#sign-in").toggleClass('show hidden');
  $("#cogs-menu").toggleClass('show hidden animated fadeIn');
  $("#profile-menu").toggleClass('show hidden animated fadeIn');
  return false;
});


// Search box toggle
// =================

$('#search-btn').on('click', function() {
  $("#search-icon").toggleClass('fa-search fa-times margin-2');
  $("#search-box").toggleClass('show hidden animated fadeInUp');
  return false;
});


// Smooth scrolling for UI elements page
// =====================================

$(document).ready(function(){
   $('a[href*=#buttons],a[href*=#panels], a[href*=#info-boards], a[href*=#navs], a[href*=#alerts], a[href*=#thumbnails], a[href*=#social], a[href*=#section-header],a[href*=#page-tip], a[href*=#block-header], a[href*=#tags]').bind("click", function(e){
    var anchor = $(this);
    $('html, body').stop().animate({
     scrollTop: $(anchor.attr('href')).offset().top
    }, 1000);
    e.preventDefault();
   });
   return false;
});


// 404 error page smile
// ====================

$('#search-404').on('focus', function() {
  $("#smile").removeClass("fa-meh-o flipInX");
  $("#smile").addClass("fa-smile-o flipInY");
});

$('#search-404').on('blur', function() {
  $("#smile").removeClass("fa-smile-o flipInY");
  $("#smile").addClass("fa-meh-o flipInX");
});


// Sign up popovers
// ================

$(function(){
  $('#exampleInputName1').popover();
});

$(function(){
  $('#exampleInputUsername1').popover();
});

$(function(){
  $('#exampleInputEmail1').popover();
});

$(function(){
  $('#exampleInputPassword1').popover();
});

$(function(){
  $('#exampleInputPassword2').popover();
});


// Profile - Status Update 
// =======================

$('#update-status').on('click', function() {
  $(".user-status > p").toggleClass("show hidden");
  $(".user-status > form").toggleClass("hidden show");
  return false;
});

$('.user-status > form > button').on('click', function() {
  $(".user-status > p").toggleClass("show hidden");
  $(".user-status > form").toggleClass("hidden show");
  return false;
});

var uploading = (function () {
        var pleaseWaitDiv = $('<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
            '<div class="modal-dialog modal-m">' +
            '<div class="modal-content">' +
            '<div class="modal-header"><h3 style="margin:0;">Uploaden...</h3></div>' +
            '<div class="modal-body">' +
            '<div class="progress progress-striped active" style="margin-bottom:0;">' +
            '<div class="progress-bar" id="progress-bar2" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:100%"></div></div>' +
            '</div>' +
            '</div></div></div>');
        return {
            show: function () {
                pleaseWaitDiv.modal('show');
            },
            hide: function () {
                pleaseWaitDiv.modal('hide');
            }

        };
    })();
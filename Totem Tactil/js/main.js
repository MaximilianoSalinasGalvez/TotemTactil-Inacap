$(document).ready(function(){
   $('open').click(function(){
   		$('.modal1').toggle('slow');
   });
   $('.modal1').click(function(){
   		$(this).css({display: "none"});
   });
});
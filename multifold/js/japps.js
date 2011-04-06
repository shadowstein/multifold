/**
 * @author iPackage, modified only
 */
$(document).ready(function() { 
    $('#pictures') 
    .before('<div id="nav" class="nav">') 
    .cycle({ 
       fx:     'fade', 
       speed:  699, 
       next: '#pictures',
       timeout: 5000, 
       pager:  '#nav'
    });
  }); 

  function listcollapse() {
	$('#accordion div#list_content').hide();
	$('#accordion h3').click(
		function() {
			$(this).next().slideToggle('normal');			
		}	
	);
}
$(document).ready(function() {listcollapse();});

$(document).ready(function(){
    $(window).mousemove(function(){
      //console.log($(document).width());
      if (parseInt($(window).width()) > 1024)
      {
        $("#header-background, #menu-background, #content-background, #footer-background").css('width','100%');
        console.log($(window).width());
      } 
      else
      {
        $("#header-background, #menu-background, #content-background, #footer-background").css('width','1200px');
        console.log($(window).width()); 
      }
    });
});
function initMenu() {
  $('#content h3').hide();
  $('#content h3:first').show();
  $('#content h3').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('h3')) && (checkElement.is(':visible'))) {
        return false;
        }
      if((checkElement.is('h3')) && (!checkElement.is(':visible'))) {
        $('#content h3:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );
  }
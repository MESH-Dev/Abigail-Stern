jQuery(document).ready(function($){
  //Are we loaded?
  console.log('hell yeah!');

  //Let's do something awesome!
  console.log(AStern.ajaxurl);

  $('body').click( function() {
    //$thisID = $(this).attr('data-id');
    jQuery.post(
      AStern.ajaxurl,
      {
      'action': 'my_action',
      'nextID': '12'
      },
      function(response){
          console.log(response);
      }
      );
  });

});

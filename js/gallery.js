$('#event2').click(function(){
  $('.active-display').addClass('hide-display');
  $('.active-display').removeClass('active-display');
  $('.event2').removeClass('hide-display');
  $('.event2').addClass('active-display');
});
$('#event3').click(function(){
  $('.active-display').addClass('hide-display');
  $('.active-display').removeClass('active-display');
  $('.event3').removeClass('hide-display');
  $('.event3').addClass('active-display');
});
$('#event4').click(function(){
  $('.active-display').addClass('hide-display');
  $('.active-display').removeClass('active-display');
  $('.event4').removeClass('hide-display');
  $('.event4').addClass('active-display');
});
$('#event1').click(function(){
  $('.active-display').addClass('hide-display');
  $('.active-display').removeClass('active-display');
  $('.event1').removeClass('hide-display');
  $('.event1').addClass('active-display');
});
$('a[data-imagelightbox="f"]').imageLightbox({
      activity: true,
      button: true,
      caption: true,
      navigation: true,
      overlay: true,
      selector: 'a[data-imagelightbox="f"]'
    });

$('a[data-imagelightbox="a"]').imageLightbox({
          activity: true,
          button: true,
          caption: true,
          navigation: true,
          overlay: true,
          selector: 'a[data-imagelightbox="a"]'
        });

$('a[data-imagelightbox="b"]').imageLightbox({
          activity: true,
          button: true,
          caption: true,
          navigation: true,
          overlay: true,
          selector: 'a[data-imagelightbox="b"]'
        });

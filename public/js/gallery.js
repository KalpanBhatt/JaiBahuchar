$('#event2').click(function(){
  $('.active-display').addClass('hide-display');
  $('.active-display').removeClass('active-display');
  $('.event2').removeClass('hide-display');
  $('.event2').addClass('active-display');
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

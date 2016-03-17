var $frame = $('#photo-viewer');  
  $thumbs = $('.thumb');           

$(document).on('click', 'a', function(e){
  var $img,                      
    src = this.href;            
  
  e.preventDefault();         
  $img = $('<img/>');           
  
  $thumbs.removeClass('active');   
  $(this).addClass('active');      

  $img.attr({                     
    'src': src,                     
    'alt': this.title || ''           
  });
  
  $img.on('load', function(){
      $img.css({
        marginLeft: -$img.width()/2,
        marginTop: -$img.height()/2
      });
  });
   
  $frame.empty().append($img);
});

$('.thumb.active').eq(0).click();

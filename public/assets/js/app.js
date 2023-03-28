<script>
  $(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if (target.length) {
        event.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  });

  {/* $(window).on('scroll', function() {
  var sections = $('section');
  var nav = $('nav');
  var nav_height = nav.outerHeight();
  
  var current_scroll = $(this).scrollTop();
  
  sections.each(function() {
    var section = $(this);
    var section_top = section.offset().top - nav_height;
    var section_bottom = section_top + section.outerHeight();
    
    if (current_scroll >= section_top && current_scroll < section_bottom) {
      var target_id = '#' + section.attr('id');
      var active_link = nav.find('a[href="' + target_id + '"]');
      active_link.addClass('active');
      nav.find('a').not(active_link).removeClass('active');
    }
  });
}); */}
</script>


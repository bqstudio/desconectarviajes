<script type="text/javascript">
$ = jQuery.noConflict();        
$(document).ready(function () {
$('.grid').isotope({
  itemSelector: '.grid-item',
    percentPosition: true,
  masonry: {
    columnWidth: '.grid-sizer',
    gutter: 10
    }
});
});
</script>
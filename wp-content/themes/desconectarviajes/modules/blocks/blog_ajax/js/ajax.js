$ = jQuery.noConflict();    
$(document).ready(function () {

$('.block-blog_ajax .filters button').on('click',function(e){
	e.preventDefault();
    $('.block-blog_ajax .filters button.active').removeClass('active');
    $(this).addClass('active');
    cat = $(this).data('id');
    loadBlog( cat, 1 );
});

$('.block-blog_ajax .blogpagination').on('click','a', function (e) {
    e.preventDefault();
    cat = $('.block-blog_ajax .filters .active').data('id');
    var params={};
    $(this).attr('href').replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str,key,value) {
        params[key] = value;
    });
    loadBlog( cat, params.paged );
});


function loadBlog( cat, page ) {
    jQuery.post(
        WP.ajaxurl, 
        {
            action: 'loadBlog',
            cat: cat,
            security: $('.bloglist').data('security'),
            page: page,
            base: window.location.href
        },
        function(data){
            if ( data == 0 ) {
                $('.bloglist').html( 'No posts' );
                $('.blogpagination').html( '' );    
            } else {
                try {
                    data = JSON.parse( data );
                    $('.bloglist').html( data.posts );
                    $('.blogpagination').html( data.pagination );
                } catch (e) {
                    return false;
                }
            }
            
        }
    );
}

});
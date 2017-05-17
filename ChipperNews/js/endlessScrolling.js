$(window).on('scroll', function(){
    if( $(window).scrollTop() > $(document).height() - $(window).height() ) {
        alert("end");
    }
}).scroll();
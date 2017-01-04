$(document).on('click', 'a', function(event){
    if(this.id.indexOf('scroller-')== 0) {
        event.preventDefault();
        
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top - 30
        }, 500);
    }
});

/*=========== BADASS HEADER ===========*/
$(window).scroll(function() {

    if ($(this).scrollTop()>30)
     {
        document.getElementById('jb-logo').style.height = "50px";
        document.getElementById('jb-logo').style.width = "50px";

        document.getElementById('jb-title').style.opacity = "1";
        document.getElementById('jb-header').style.opacity = "0";

        document.getElementById('header-overlay').style.opacity = "0.5";
     }
    else
     {
        document.getElementById('jb-logo').style.height = "100px";
        document.getElementById('jb-logo').style.width = "100px";

        document.getElementById('jb-title').style.opacity = "0";
        document.getElementById('jb-header').style.opacity = "1";

        document.getElementById('header-overlay').style.opacity = "0";
     }
 });

EPPZScrollTo.scrollVerticalToElementById('signup_form', 20);
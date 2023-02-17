$(function () {

    $(".session-details-preview").each(function () {
        $(this).click(function () {
            let opened = $("#music-session-details .is-open");
            let form = $(this).next();
            if (form.hasClass("is-open")) {
                form.removeClass('is-open');
                form.addClass('is-closed');
                form.css('height', 0);
                opened.prev().css('background', '');
                opened.prev().find('svg').css('transform', 'rotate(0deg)');
            } else {
                if (opened) {
                    opened.removeClass('is-open');
                    opened.addClass('is-closed');
                    opened.css('height', 0);
                    opened.prev().css('background', '');
                    opened.prev().find('svg').css('transform', 'rotate(0deg)');
                }
                form.addClass('is-open');
                form.removeClass('is-closed');
                form.css('height', form.attr('extended-height'));
                $(this).css({ 'background': 'rgb(209 179 129 / 0.4)' });
                $(this).find('svg').css('transform', 'rotate(405deg');
            }
        })
    })

    $(".file_upload_trigger").click(function(){
        $(this).prev().click();
    })
    $(".form_finish").each(function(){
        $(this).click(function(){
            $(this).toggleClass('finish_button');
            setTimeout(() => {
                $(this).removeClass('finish_button');
            }, 200);
        })
    })

    $(".form_proper").each(function(){
        
    })
})

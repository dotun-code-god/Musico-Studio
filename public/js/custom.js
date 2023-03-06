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
                form.css('height', form.attr('extended-height')+'rem');
                $(this).css({ 'background': 'rgb(209 179 129 / 0.4)' });
                $(this).find('svg').css('transform', 'rotate(405deg');
            }
        })
    })

    $(".file_upload_trigger").click(function(){
        let inputFile = $(this).prev();
        inputFile.click();
        // inputFile.change(function(){
        //     $(this).find('i').show();
        //     $(this).find('svg').hide();
        //     $('#processing').removeClass('hidden');

        //     // console.log($(this)[0].files[0]);
        //     let $file = $(this)[0].files[0];
        //     $.ajax({
        //         url: $('#form1').attr('form-action'),
        //         type: 'POST',
        //         contentType: false,
        //         data: {
        //             'audio_comp': $file
        //         },
        //         success: function(response){
        //             $('#processing').addClass('hidden');
        //             console.log("success => ",response);
        //         },
        //         error: function(response){
        //             console.log("error => ", response);
        //         }
        //     })

        // })

        // inputFile.change(function(){
        //     let file = inputFile.files[0];

        //     $(this).find('i').show();
        //     $(this).find('svg').hide();

        //     $.ajax({
        //         type: "POST",
        //         url: $(this).parent().parent().attr('form-action'),
        //         data: {
        //             // '' : file
        //         },
        //         // dataType: "dataType",
        //         success: function (response) {

        //         }
        //     });
        // })

        // inputFile.on('change', function () {
        //     var file = this.files[0];
        //     var formData = new FormData();
        //     formData.append('file', file);

        //     var xhr = new XMLHttpRequest();
        //     xhr.open('POST', '/upload');
        //     xhr.upload.addEventListener('progress', function (e) {
        //         var percent = Math.round((e.loaded / e.total) * 100);
        //         $('#progress-bar').css('width', percent + '%').text(percent + '%');
        //     });
        //     xhr.send(formData);
        // });
    })
    $(".form_finish").each(function(){
        $(this).click(function(){
            $(this).toggleClass('button_click');
            setTimeout(() => {
                $(this).removeClass('button_click');
            }, 200);
        })
    })

})

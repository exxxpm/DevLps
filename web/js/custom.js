function animateControlBar(show) {
    const $bottomControlBar = $('.bottom-control-bar');

    if (show) {
        $bottomControlBar.slideDown('fast');
    } else {
        $bottomControlBar.slideUp('fast');
    }
}

function checkStatusBar(count) {
    if (count === 0) {
        $('body').removeClass('page-with-control-bar');
        if ($('.bottom-control-bar').is(':visible')) {
            $('.bottom-control-bar').slideUp('fast');
        }
    } else {
        $('body').addClass('page-with-control-bar');
        if ($('.bottom-control-bar').is(':hidden')) {
            $('.bottom-control-bar').slideDown('fast');
        }
    }
}

$(document).ready(function() {
    count = $('.main-table input[type="checkbox"]:checked').length;
    checkStatusBar(count);
    animateControlBar(count > 0);

    $('body').on('click', '.main-table__toggle-dropdown', function(event) {
        event.preventDefault();

        let $parentTR = $(this).closest("tr");
        let $innerTR = $parentTR.next(".inner-level");

        if ($parentTR.hasClass("active")) {
            $parentTR.removeClass("active");
            $innerTR.find('td > div').slideToggle(350, function() {
                $innerTR.remove();
            });
        } else {
            let model = $(this).attr('data-model');
            let id = $(this).attr('data-id');


            if ($innerTR.length > 0) {
                $innerTR.find('td > div').slideToggle(350, function() {
                    $innerTR.remove();
                });
            }

            $.ajax({
                url: '/web/ajax/generator',
                data: { 'model': model, 'id': id },
                type: 'POST',
                success: function(data) {
                    let decodedHtml = JSON.parse(data).html;

                    $parentTR.addClass("active");
                    $parentTR.after(decodedHtml);
                    $innerTR = $parentTR.next(".inner-level");
                    $innerTR.find('td > div').hide().slideToggle('slow');
                }
            });
        }
    });

    $('body').on('change', '.main-table input[type="checkbox"]', function() {
        const $table = $(this).closest('.main-table');
        const $bottomControlBar =  $('.bottom-control-bar');

        if ($(this).prop('checked')) {
            $table.find('input[type="checkbox"]:not(:checked)').prop('disabled', true);
            $(this).closest('tr').siblings('tr:not(.inner-level)').find('input[type="checkbox"]').prop('disabled', false);
            count += 1;
        } else {
            if ($table.find('input[type="checkbox"]:checked').length === 0) {
                $table.find('input[type="checkbox"]').prop('disabled', false);
                animateControlBar(false);
            }
            count -= 1;
        }

        $('.bottom-control-bar').find('p span').html(count);
        checkStatusBar();
    });

    $('body').on('click', '.bottom-control-bar__btn--delete', function(event) {
        event.preventDefault();

        var dataArray = [];

        $(".custom-input__input:checked").each(function() {
            var dataModel = $(this).data("model");
            var dataId = $(this).data("id");
            dataArray.push({ model: dataModel, id: dataId });
        });

        console.log(dataArray);

        $.ajax({
            url: '/web/ajax/delete',
            data: { 'arr': dataArray },
            type: 'POST',
            success: function(data) {
                location.reload();
            }
        });
    });

    $('body').on("change", ".custom-select--js", function() {
        var status_id = $(this).val();
        var object_id = $(this).data("id");

        $.ajax({
            type: "POST",
            url: "/web/ajax/update-status",
            data: {
                object_id: object_id,
                status_id: status_id
            },
            success: function(response) {
            },
            error: function(error) {
                console.log("Pizda")
            }
        });
    });

    $('.date-create').on('DOMSubtreeModified', function() {
        if ($(this).text() !== 'Указать дату начала') {
            $('.custom-error-create').hide();
        }
    });

    $('.date-finish').on('DOMSubtreeModified', function() {
        if ($(this).text() !== 'Указать дату завершения') {
            $('.custom-error-finish').hide();
        }
    });

    // $(document).ready(function() {
    //     $('#upload-form').on('change', function() {
    //         $('#upload-form').submit();
    //     });
    // });

    $('#upload-form').on('change', function() {
        $('#upload-form').submit();
    });

    $('body').on('click', '.file-item__btn-delete', function() {
        let id = $(this).data("id");

        $.ajax({
            url: '/web/ajax/delete-file',
            data: { 'id': id },
            type: 'POST',
            success: function(data) {
                location.reload();
            }
        });
    });

    $('body').on('click', '.upload-avatar__delete-photo', function() {
        let id = $(this).data("id");

        $('#user_img').attr('src', '/web/img/svg/user.svg');
        $('.img-wrap-center img[class="object-fit-js"]').attr('src', '/web/img/svg/user.svg');

        $.ajax({
            url: '/web/ajax/delete-user-img',
            data: { 'id': id },
            type: 'POST',
            success: function(data) {
            }
        });
    });

    $('body').on('change', '#view-user', function() {
        $('#view-user').submit();
    });
});

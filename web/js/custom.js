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
            $innerTR.find('td > div').slideToggle('slow', function() {
                $innerTR.remove();
            });
        } else {
            let model = $(this).attr('data-model');
            let id = $(this).attr('data-id');


            if ($innerTR.length > 0) {
                $innerTR.find('td > div').slideToggle('slow', function() {
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
});

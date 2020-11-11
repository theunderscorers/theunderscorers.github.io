$(document).ready(function() {
    $('.reviews_slider').bxSlider({
        pager: false,
        adaptiveHeight: true,
        nextText: '',
        prevText: ''
    });

    $('.insta_slider').bxSlider({
        pager: false,
        adaptiveHeight: true,
        nextText: '',
        prevText: ''
    });
    fightSlider = $('.why_fight__list').bxSlider();
    neverHelpSlider = $('.never_help__list').bxSlider();
    naturalListSlider = $('.natural__list').bxSlider();
    methodsSlider = $('.methods_usage__list').bxSlider();
    var mobSliderConfig = {
        minSlides: 1,
        maxSlides: 1,
        adaptiveHeight: true,
        controls: true,
        pager: false,
        nextText: '',
        prevText: ''
    }

    function bxslider() {
        var width = window.innerWidth;
        if (width < 768) {
            fightSlider.reloadSlider(mobSliderConfig);
            neverHelpSlider.reloadSlider(mobSliderConfig);
            naturalListSlider.reloadSlider(mobSliderConfig);
            methodsSlider.reloadSlider(mobSliderConfig);
        } else {
            fightSlider.destroySlider();
            neverHelpSlider.destroySlider();
            naturalListSlider.destroySlider();
            methodsSlider.destroySlider();
        }
    }
    bxslider();
    var resizeId;
    $(window).on('load', function() { $(this).resize() });
    $(window).resize(function() {
        clearTimeout(resizeId);
        resizeId = setTimeout(doneResizing, 300);
    });

    function doneResizing() {
        clearTimeout(resizeId);
        bxslider();
    }

});

$(function() {
    // countdownStart
    var storageCountdownReset = "countdownResetAirbag",
        storageCountdownTime = "countdownTimeAirbag",
        countdownResetTimeVal = 41,
        nowDateTime = new Date().getTime(),
        countdownReset = localStorage.getItem(storageCountdownReset);
    if (countdownReset == null) {
        localStorage.setItem(storageCountdownReset, nowDateTime)
    } else {
        if (nowDateTime - countdownReset > countdownResetTimeVal * 60 * 1000) {
            var countdownTime = (new Date).getTime() + 44e5;
            localStorage.setItem(storageCountdownTime, countdownTime);
            localStorage.setItem(storageCountdownReset, nowDateTime);
        }
    }

    if (localStorage.getItem(storageCountdownTime)) {
        var countdownTime = localStorage.getItem(storageCountdownTime);
    } else {
        countdownTime = (new Date).getTime() + 44e5;
    }

    $(".timer").countdown(countdownTime, function(s) {
        $(this).html(s.strftime('' +
            '<div class="countdown__item unit days"><div class="value">%H</div><div class="desc">tage</div></div>' +
            '<div class="countdown__item unit hours"><div class="value">%H</div><div class="desc">stunden</div></div>' +
            '<div class="countdown__item unit minutes"><div class="value">%M</div><div class="desc">minuten</div></div>' +
            '<div class="countdown__item unit seconds"><div class="value">%S</div><div class="desc">sekunden</div></div>'
        ));
    }).on('update.countdown', function(e) {
        countdownTime = e.finalDate.getTime();
        localStorage.setItem(storageCountdownTime, countdownTime);
    }).on('finish.countdown', function(e) {
        $('.timer').countdown('stop');
    });
    // countdownEnd
})
$( document ).ready(function() {
    $('.js-register-order-mobile').click(function() {
        $('.side-basket-cosen').css('display', 'block');
        $('.side-basket-cosen').css('left', '0');
        $('.side-basket-cosen').css('width', '100%');
        $('.js-order-sucsess').css('display', 'none');
        $('.contain').css('display', 'none');
        $('.js-register-order-mobile').css('display', 'none');
    });
    // $('.js-back-button').click(function() {
    //     $('.side-basket-cosen').css('display', 'none');
    //     $('.contain').css('display', 'block');
    //     $('.js-register-order-mobile').css('display', 'block');
    // });
    $('.js-order-submit-buttin').click(function() {
        if (document.documentElement.clientWidth < 707) {
            $('body').addClass('blur');
            $('.side-basket-cosen').css('display', 'none');
            $('.contain').css('display', 'block');
            $('.js-basket-sucsess-mobile').addClass('is-visivle');
            $('.js-basket-sucsess-mobile').css('display', 'flex');
            // вызов функции контроля клика вне компонета
            visibleControl();
        }
    });  

    var element = document.querySelector(".js-register-order-mobile");
    document.onscroll = function() {
        if (document.documentElement.clientWidth < 707) {
    if ((document.body.scrollHeight - 1200) < window.pageYOffset) 
    {
        element.style.display = "none";
    }
    if((document.documentElement.scrollHeight - 1200) > window.pageYOffset)
    {
        element.style.display = "block";s
    }
}
};
    function visibleControl () {
        const orderSucsess = $('.js-basket-sucsess-mobile'),
                btnSucsess = $('.js-order-submit-buttin');

        $(document).click(function (e) {
            console.log(e);
            if ( !orderSucsess.is(e.target) && !btnSucsess.is(e.target) && orderSucsess.has(e.target).length === 0) {
                if (orderSucsess.hasClass('is-visivle')) {
                    $('body').removeClass('blur');
                    orderSucsess.hide();
                }
            };
        });
    }
       $('.bottom-basket-input-address').on('input', function () {
            if($('.bottom-basket-input-address').val() !== '' &&  $('.top-basket-input-name').val() !== '' &&  $('.middle-basket-input-phone').val !== ''){
                $('.basket-more-button-submit').css('background','#EB5C05');
                $('.basket-more-button-submit').css('color','white');
            }
    });
    $('.top-basket-input-name').on('input', function () {
        if($('.bottom-basket-input-address').val() !== '' &&  $('.top-basket-input-name').val() !== '' &&  $('.middle-basket-input-phone').val !== ''){
                $('.basket-more-button-submit').css('background','#EB5C05');
                $('.basket-more-button-submit').css('color','white');
            }
    });
    $('.middle-basket-input-phone').on('input', function () {
        if($('.bottom-basket-input-address').val() !== '' &&  $('.top-basket-input-name').val() !== '' &&  $('.middle-basket-input-phone').val !== ''){
            $('.basket-more-button-submit').css('background','#EB5C05');
            $('.basket-more-button-submit').css('color','white');
        }
    });

});

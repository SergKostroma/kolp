$( document ).ready(function() {
$('.js-input-quantity .js-minus').click(function() {
    let $input = $(this).parent().find('.js-quantity-input');
    let count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
});
$('.js-input-quantity .js-plus').click(function() {
    let $input = $(this).parent().find('.js-quantity-input');
    let count = parseInt($input.val()) + 1;
    count = count > parseInt($input.data('max-count')) ? parseInt($input.data('max-count')) : count;
    $input.val(parseInt(count));
});
});
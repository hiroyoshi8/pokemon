$('#pop').on('click', function() {
    $('.test2').addClass("show").fadeIn();
});

$('.close').on("click", function() {
    $('.test2').fadeOut();
});

$('#send').on('click', function() {
    $('.send_img').addClass("show").fadeIn();
});

$('#aa').on("click", function() {
    $('.send_img').fadeOut();
    $('.test2').fadeOut();
});

$('#no').on("click", function() {
    $('.test2').fadeOut();
});

$('.rireki').on('click', function() {
    $('.rireki1').addClass("show").fadeIn();
});

$('.rireki1').on("click", function() {
    $('.rireki1').fadeOut();
});
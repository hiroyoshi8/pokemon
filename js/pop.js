var no;
var price;
var sum;
var count;
var mames;
var goukei = 0;

$("label").on('click', function() {
    no = $(this).attr("class");
    names = $('.' + no).find('p').text();
    price = $('.o' + no).find('#sum').text();
    $('.o' + no).addClass("show").fadeIn();
});

$(".button1").on('click', function() {
    count = $('.o' + no).find('.spinner').val();
    sum = count * price;
    goukei += sum;
    $('.tables').append
    ('<tr class="123"><td>' + names + '</td><td>' + count + '<td>' + price + 
    '円</td><td>' + sum + '円</td><td>');
    $('.order').find('.qaz').text(goukei);
    $('.o' + no).find('#sum').text(price);
    $('.o' + no).fadeOut();
    $('.o' + no).find('.spinner').val(1);
}); 

$('.close').on("click", function() {
    $('.o' + no).fadeOut();
    $('.o' + no).find('.spinner').val(1);
    $('.o' + no).find('#sum').text(price);
});

$(".spinner-sub").on('click', function() {
    count = Number($('.o' + no).find('.spinner').val());
    if(count > 1){
        count--;
        $('.o' + no).find('.spinner').val(count);
        sum = count * price;
        $('.o' + no).find('#sum').text(sum);
    }
});

$(".spinner-add").on('click', function() {
    count = Number($('.o' + no).find('.spinner').val());
    count++;
    $('.o' + no).find('.spinner').val(count);
    sum = count * price;
    $('.o' + no).find('#sum').text(sum);
});

$(".cart").on('click', function() {
    $('.order').addClass("show").fadeIn();
});

$('.close1').on("click", function() {
    $('.order').fadeOut();
});

$(".decision").on('click', function() {
    $('.order').fadeOut();
    $('.order_img').addClass("show").fadeIn();  
});

$('.order_img').on("click", function() {
    $('.123').remove();
    $('.order').find('.qaz').text(0);
    $('.order_img').fadeOut();
});
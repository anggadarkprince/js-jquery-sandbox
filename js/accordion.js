$(function(){
    $(".faq dt").click(function(e){
        e.preventDefault();
        $(this).next().slideToggle();
    });
});
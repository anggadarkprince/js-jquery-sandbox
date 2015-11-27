$(function(){
    $(".gallery div").hover(
        function(){
            $(this).find("img").fadeIn();
        },
        function(){
            $(this).find("img").fadeOut();
        }
    );
});
$(function(){
     $(".thumbnail").animate({
         left: "400px",
         top: "100px"
     }, 2000, function(){
         // callback function
     });

    $(".thumbs li img").hover(
        function(){
            $(this).animate({
                width: "200px",
                height: "134px"
            }, 500);
        },
        function(){
            $(this).animate({
                width: "150px",
                height: "101px"
            }, 500);
        }
    );
});
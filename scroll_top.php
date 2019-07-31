<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/scroll_top.css">
        <link rel="stylesheet" href="css/all.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>scrolling</title>
    </head>
    <body>
        <div class="scroll_to_top">
            <div class="scroll_up">
                <i class="fa fa-angle-double-up"></i>
            </div>
        </div>

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(window).scroll(function () {
                if ($(this).scrollTop() > 350) {
                    $('.scroll_to_top').fadeIn();
                } else {
                    $('.scroll_to_top').fadeOut();
                }
            });

            $('.scroll_up').click(function () {
                $("html,body").animate({
                    scrollTop: 0
                },600);
                return false;
            });


        </script>
    </body>
</html>

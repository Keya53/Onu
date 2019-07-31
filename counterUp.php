<html>
    <link rel="stylesheet" href="css/bootstrap.min.css">   
    <link rel="stylesheet" href="css/counterup.css">
    <body>
        <section id="counterup">
            <div class="counter-overlay">
            <div class="container">
                <div class="counter-content text-center" >
                    <div class="col-sm-6 col-md-3">
                        <div class="count">
                            <span class="counter">200</span>
                            <h3>Project completed</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count">
                            <span class="counter">50</span>
                            <h3>Happy clients</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count">
                            <span class="counter">500</span>
                            <h3>Cups of coffee offered</h3>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="count">
                            <span class="counter">25</span>
                            <h3>Articles published</h3>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </section>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>

        <?php
         include './scroll_top.php';
        ?>
    </body> 
</html>

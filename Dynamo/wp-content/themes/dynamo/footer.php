        <footer>
            <p>Copyright &copy; 2019 - Dynamo Theme</p>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/js/unslider-min.js"></script>
        <?php wp_footer(); ?>

        <script>
            $(document).ready(function() {
                $(".my-slider").unslider({
                    arrows: {
                        prev: '<a class="unslider-arrow prev"><i class="fa fa-3 fa-arrow-circle-left"></i></a>',
                        next: '<a class="unslider-arrow next"><i class="fa fa-3 fa-arrow-circle-right"></i></a>',
                    }
                });

                $("#tabs").tabs();
            });
        </script>
    </body>
</html>

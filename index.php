<!DOCTYPE html>
<html>
    <head>
        <title>
            Test Bootstrap Lagi
        </title>
        
        <link rel="stylesheet" type="text/css" href="css\custom.css">
        <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="bootstrap\js\bootstrap.min.js" ></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <script>
            $trigger_scroll = 0;
            $(window).on( "scroll", function() {
                $('#navigasi').removeClass('bg-transparent', $(this).scrollTop() > 300);
                $('#navigasi').addClass('custom-turun', $(this).scrollTop() > 300);
                $('#navbar-container').removeClass('container', $(this).scrollTop() > 300);
                $('#navbar-container').addClass('container-fluid', $(this).scrollTop() > 300);
                $trigger_scroll = 1;

                if($(this).scrollTop()<300){
                    if($trigger_scroll == 1){
                        $('#navigasi').removeClass('custom-turun', $(this).scrollTop() < 300);
                        $('#navigasi').addClass('bg-transparent', $(this).scrollTop() < 300);
                        $('#navbar-container').removeClass('container-fluid', $(this).scrollTop() < 300);
                        $('#navbar-container').addClass('container', $(this).scrollTop() < 300);
                        $trigger_scroll = 0;
                    }
                }
            });
        </script>
        
        
    </head>
    <body class="custom-full">
        <div class="media">
            <a class="d-flex align-self-center" href="#">
                  <img src="source/gambar/gif/RNKN6na.gif" alt="">
            </a>
            <div class="media-body">
                <h5>BANNER DISINI</h5>
                <p>LALALALA</p>
            </div>
        </div>
        <div id="navbar-container" class="sticky-top container">
            <?php include('navigasi/navigasi.php');?>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                    <h1>test</h1>
                </div>
                <div class="col-md-auto">
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                    <h1> world </h1>
                </div>
            </div>
        </div>    
    </body>

</html>
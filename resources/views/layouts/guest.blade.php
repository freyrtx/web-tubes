<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TOSERLINE</title>
        <link rel="icon" href="https://yt3.ggpht.com/JEWTUFpkCihutXvc2kf-nQGVy0tFRGOgfwNhV5Fur7_LI9PuCRa_IXJPjDZC7YWqD-1WTihm=w48-h48-c-k-nd">
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link href="{{url('css/bootstrap.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><label for="">TOSERLINE</label></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
@yield('navbar')
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">
                </div>
            </div>
        </header>

@yield('content')

        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-lg-center">Copyright © <?php echo date("Y")?></div>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{url('js/scripts.js')}}"></script>
    </body>
</html>

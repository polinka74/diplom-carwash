<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/mystyle.css">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&amp;family=Ubuntu:wght@400;500&amp;display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/c7743386ed.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn; top: -100px;">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <h4 class="mb-0 text-primary"> <img src="images/logo.png" alt="" style="width:180px;"></h4>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-2 p-lg-0">
                <a href="/" class="nav-item nav-link">Главная</a>
                <a href="/wash" class="nav-item nav-link">Как мыть?</a>
                <a href="/price" class="nav-item nav-link">Прайс</a>
                <a href="/contact" class="nav-item nav-link">Контакты</a>
            </div>
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                @guest
                <a href="/login" class="nav-item nav-link act">Войти</a>
                <a href="/register" class="nav-item nav-link">Регистрация</a>
                @endguest
                @auth()
                <a href="admin/main" class="nav-item nav-link">{{Auth::user()->name}}</a>
                <a href="/logout" class="nav-item nav-link">Выход</a>
                @endauth
            </div>
            @auth()
            <a href="/reviews " class="btn btn-primary rounded-0 py-2 px-lg-4 d-none d-lg-block">Отзывы</a>
            @endauth
        </div>
    </nav>

    
    @yield('content')


    
    
    <footer>
        <div class="fact7 bg-dark p-4 mt-4">

                <div class="mx-sm-5 px-5">
                    <div class="container-fluid  text-light footer mt-3 wow fadeIn" data-wow-delay="0.1s">
                        <div class="container py-2">
                            <div class="row g-5">
                                <div class="col-lg-4 col-md-6 text-left ">
                                    <h4 class="text-light mb-4 text-center">Меню</h4>
                                    <a href="/"
                                        class="nav-item nav-link text-light text-uppercase p-0 text-center">Главная</a>
                                    <a href="/wash"
                                        class="nav-item nav-link text-light text-uppercase p-0 text-center">Как
                                        мыть?</a>
                                    <a href="/price"
                                        class="nav-item  nav-link text-light text-uppercase p-0 text-center">Прайс</a>
                                    <a href="/contact"
                                        class="nav-item  nav-link text-light text-uppercase p-0 text-center">Контакты</a>
                                </div>
                                <div class="col-lg-4 col-md-6 ml-4">
                                    <h4 class="text-light mb-4 text-center ">Адреса</h4>
                                    <p class="mb-2 text-center"><i
                                            class="fa fa-map-marker-alt me-3 text-primary "></i>г.Челябинск,
                                        Гагарина.7</p>
                                    <p class="mb-2 text-center"><i class="fa fa-phone-alt me-3 text-primary"></i>+7 902
                                        61 555 99</p>
                                    <p class="mb-2 text-center"><i
                                            class="fa fa-envelope me-3 text-primary"></i>polina-polina-1991@list.ru</p>
                                    <!--  -->
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <h4 class="text-light mb-4 text-center">Время работы</h4>
                                    <h6 class="text-light text-center">Понедельник - Воскресение:</h6>
                                    <p class="mb-4 text-center"><i class="fa-solid fa-clock text-primary me-2"></i>24/7
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><span style="font-size:20px">↑</span> </button>
    <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
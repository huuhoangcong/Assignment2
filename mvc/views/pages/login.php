<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="http://localhost/Assignment2/Home">Coffee<small>Blend</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="http://localhost/Assignment2/Home" class="nav-link">Home</a>
                </li>
                <!-- <li class="nav-item"><a href="" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="" class="nav-link">Blog</a></li> -->
                <li class="nav-item"><a href="http://localhost/Assignment2/About" class="nav-link">About</a></li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="">Shop</a>
                        <a class="dropdown-item" href="">Single Product</a>
                        <a class="dropdown-item" href="">Cart</a>
                        <a class="dropdown-item" href="">Checkout</a>
                    </div>
                </li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                <li class="nav-item cart"><a href="" class="nav-link"><span class="icon icon-shopping_cart"></span><span
                            class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a>
                </li> -->
                <li class="nav-item active"><a href="http://localhost/Assignment2/Login" class="nav-link">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Login Page</h1>

                    <div class="overlay"></div>

                    <div class="container-wrap">
                        <div class="row no-gutters d-md-flex align-items-center">
                            <div class="col-md-12 appointment ftco-animate">
                                <form action="http://localhost/Assignment2/Login/login" class="appointment-form"
                                    method="POST">
                                    <div class="d-md-flex">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username" value=""
                                                name="username">
                                        </div>
                                    </div>
                                    <div class="d-md-flex">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" value=""
                                                name="password">
                                        </div>
                                    </div>
                                    <div class="d-md-flex">
                                        <div class="form-group ml-md-4">
                                            <input type="submit" value="Log In" name="login"
                                                class="btn btn-primary py-3 px-4">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<?php
include('Controllers/Session.php');
(new Session)->getCurrentSession();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <script defer src="script.js"></script>
    <title>Welcome to the car shop where you can find the car to suit you,
        and give it a new home!</title>
</head>
<body>
<!--Navigation bar with search-->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <!--Search-->
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


<!--Search-->
<!--<nav class="navbar bg-light">-->
<!--    <div class="container-fluid">-->
<!--        <form class="d-flex" role="search">-->
<!--            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--        </form>-->
<!--    </div>-->
<!--</nav>-->

<!--Banner / Carousel-->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src=
                 "https://images.unsplash.com/photo-1556189250-72ba954cfc2b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                 class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src=
                 "https://images.unsplash.com/photo-1616276143706-99cf5a26038a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1165&q=80"
                 class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        </div>
    </div>

<!--Filters-->
        <div>
            <label for="myInput"></label><input type="text" id="myInput"
                   onkeyup="filterFunction()" placeholder="Search for cars:">

            <ul id="myUL">
                <li><a href="#">BMW</a></li>
                <li><a href="#">Mercedes</a></li>

                <li><a href="#">Jaguar</a></li>
                <li><a href="#">...</a></li>

                <li><a href="#">...</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">...</a></li>
            </ul>
        </div>

<!--Results-->
        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">Car 1</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">Car 2</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">Car 3</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Car 4</a>
                </div>
            </div>
            <div class="col-8">
                <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <h4 id="list-item-1">Car 1</h4>
                    <p>BMW ...</p>
                    <h4 id="list-item-2">Car 2</h4>
                    <p>...</p>
                    <h4 id="list-item-3">Car 3</h4>
                    <p>...</p>
                    <h4 id="list-item-4">Car 4</h4>
                    <p>...</p>
                </div>
            </div>
        </div>

<!--Pagination-->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

<!--Footer-->
        <footer>
            <p>The Refurbished Cars</p>
            <p><a href="mailto:therefurbishedcars@example.com">therefurbishedcars@example.com</a></p>
        </footer>

<!-- Sign up or login-->
<div><h2>Sign up or login here!</h2></div>

<div class="sign-up">
    <a href="/signupPage.html"><button class=sign-up-btn">Sign up here!</button></a>
</div>
<div class="login">
    <a href="/login.html"><button class="login-btn">Login here!</button></a>
</div>
</body>
</html>

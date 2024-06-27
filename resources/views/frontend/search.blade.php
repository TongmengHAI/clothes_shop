<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="theme.css" rel="stylesheet">
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css'" rel="stylesheet"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>    
        <header>
            <div class="container">
                <div class="logo">
                    <a href="">
                        <!-- <img src="../uploads/{{$Logo[0]->thumbnail}}" width="180px"> -->
                        <h1>
                            KH FASHION
                        </h1> 
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="shop">SHOP</a>
                    </li>
                    <li>
                        <a href="news">NEWS</a>
                    </li>
                </ul>
                <div class="search">
                    <form action="/search" method="get">
                        <input type="text" name="s" class="box" placeholder="SEARCH HERE">
                        <button>
                            <div style="background-image: url(uploads/search.png);
                                        width: 28px;
                                        height: 28px;
                                        background-position: center;
                                        background-size: contain;
                                        background-repeat: no-repeat;
                            "></div>
                        </button>
                    </form>
                </div>
            </div>
        </header>

        <main class="shop">

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">
                                Product Result
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="">
                                        <img src="https://placehold.co/450x670" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price "><strike> US 15</strike></div>
                                        <div class="sale-price ">US 12</div>
                                    </div>
                                    <h5 class="title">T-Shirt 001</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="">
                                        <img src="https://placehold.co/450x670" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price "><strike> US 15</strike></div>
                                        <div class="sale-price ">US 12</div>
                                    </div>
                                    <h5 class="title">T-Shirt 001</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="">
                                        <img src="https://placehold.co/450x670" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price "><strike> US 15</strike></div>
                                        <div class="sale-price ">US 12</div>
                                    </div>
                                    <h5 class="title">T-Shirt 001</h5>
                                </div>
                            </figure>
                        </div>
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <div class="status">
                                        Promotion
                                    </div>
                                    <a href="">
                                        <img src="https://placehold.co/450x670" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <div class="price-list">
                                        <div class="price d-none">US 10</div>
                                        <div class="regular-price "><strike> US 15</strike></div>
                                        <div class="sale-price ">US 12</div>
                                    </div>
                                    <h5 class="title">T-Shirt 001</h5>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
        
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-12">
                            <h3 class="main-title">
                                News Result
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <figure>
                                <div class="thumbnail">
                                    <a href="">
                                        <img src="https://placehold.co/300x300" alt="">
                                    </a>
                                </div>
                                <div class="detail">
                                    <h5 class="title">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born</h5>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>
        
        </main>

        <footer>
            <span>
                AllRight Recieved @ 2023
            </span>
        </footer>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</html>
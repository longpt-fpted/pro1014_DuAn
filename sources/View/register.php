<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome 5 -->
    <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro@4cac1a6/css/all.css" rel="stylesheet" type="text/css" />

    <!-- Jquery -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Slick JS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=1303126910149001&autoLogAppEvents=1" nonce="geF2GnV4"></script>
    <main>
        <article class="search-modal" id="search-box">
                <form action="" method="post" class="modal-container">
                    <input type="text" name="search-input" id="search-input">
                    <button type="button" name="search-submit" id="search-submit">
                        <i class="fal fa-search"></i>
                    </button>
                </form>
                <button id="search-modal-close">
                    <i class="fal fa-times-circle"></i>
                </button>
        </article>
        <article class="cart-modal" id="cart-modal">
            <div class="modal-container">
                <div class="modal-head">
                    <div class="modal--title">
                        <i class="fal fa-shopping-bag"></i>
                        <p>Your cart</p>
                        <p class="cart-modal--total-quantity">
                            (0)
                        </p>
                    </div>
                    <button id="cart-modal-close">
                        <i class="fal fa-times-circle"></i>
                    </button>
                    
                </div>
                <div class="modal-body">
                    <article class="product-box">
                        <a class="product-box__thumbnail" href="#">
                            <img src="./assets/images/elden-ring.jpg" alt="product thumbnail">
                        </a>
                        <div class="product-box__detail">
                            <div class="product-box__desc">
                                <div class="product-box__title" href="#">
                                    <a href="#">Elden Ring</a>
                                    <a href="#"><i class="fal fa-trash"></i></a>
                                </div>
                                <div class="product-box__quantity">
                                    <form>
                                        <button type="button" name="minus" id="minus">
                                            <i class="far fa-minus"></i>
                                        </button>
                                        <input type="number" name="product-quantity">
                                        <button type="button" name="plus" id="plus">
                                            <i class="far fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="product-box__price">
                                    <p class="product-box__totalprice">
                                        790000
                                    </p>
                                    <p class="product-box__fullprice">
                                        800000
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="modal-footer">
                    <ul class="cart-modal-price-list">
                        <!-- 9.000.000.000đ -->
                        <li class="cart-modal-price-item">
                            <p>
                                Tổng giá:
                            </p>
                            <p>
                                9.000.000.000đ
                            </p>
                        </li>
                        <li class="cart-modal-price-item">
                            <p>
                                Giảm giá:
                            </p>
                            <p>
                                9.000.000.000đ
                            </p>
                        </li>
                        <li class="cart-modal-price-item">
                            <p>
                                Số tiền trong tài khoản:
                            </p>
                            <p>
                                9.000.000.000đ
                            </p>
                        </li>
                        <li class="cart-modal-price-item">
                            <p>
                                Còn thiếu:
                            </p>
                            <p>
                                9.000.000.000đ
                            </p>
                        </li>
                        <li class="cart-modal-price-item">
                            <p>
                                Tổng thanh toán:
                            </p>
                            <p>
                                9.000.000.000đ
                            </p>
                        </li>
                    </ul>
                    <a href="#" class="cart-modal-checkout">
                        Check out
                    </a>
                </div>
            </div>
        </article>
        <?php include('.\header.php') ?>
        <section class="main-content">
            <article class="content-container">
                <h2 class="content-title">
                    đăng kí
                </h2>
                <section class="content-box">
                    <form action="../Controller/RegisterController.php" method="post" enctype="multipart/form-data" class="account-box">
                        <div class="input-box">
                            <label for="fullname">Họ và tên:</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Họ và tên" required>
                        </div>
                        <div class="input-box">
                            <label for="username">Tên tài khoản:</label>
                            <input type="text" name="username" id="username" placeholder="Tên tài khoản" required>
                        </div>

                        <div class="input-box">
                            <label for="password">Mật khẩu:</label>
                            <input type="text" name="password" id="password" placeholder="Mật khẩu" required>
                        </div>

                        <div class="input-box">
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" placeholder="Email" required>
                        </div>
                        <div class="input-box" style="flex-wrap: nowrap; gap: 1em;">
                            <input type="checkbox" name="confirm" id="confirm" style="width: 1em;" required>
                            <label for="confirm" style="width: fit-content; font-size: .75em;">Bằng việc click vào đây là bạn đã đồng ý với các điều khoản của chúng tôi</label>
                        </div>
                        <div class="validate">
                            <h4 id="baoloi" style="color:red;"></h4>
                        </div>
                        <div class="input-box">
                            <input type="submit" name="submit" id="submit" value="Đăng kí">
                        </div>
                    </form>
                </section>
            </article>
        </section>            
        <?php include('.\footer.php') ?>
        <article class="modal" id="form-modal">
            <div class="modal-container">
                <div class="modal-head" style="border: none; padding-bottom: 0;">
                    <button class="modal-close" id="modal-close">
                        <i class="fal fa-times-circle"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="form-edit">
                        <label for="phone">Nhập số điện thoại mới:</label>
                        <div class="input-box">
                            <i class="fal fa-phone"></i>
                            <input type="text" id="phone" name="phone" placeholder="Số điện thoại...">
                        </div>
                        <button class="submit">
                            Thay đổi
                        </button>
                    </form>
                    <form action="" method="post" class="form-edit">
                        <label for="mail">Nhập địa chỉ mail mới:</label>
                        <div class="input-box">
                            <i class="fal fa-envelope"></i>
                            <input type="text" id="mail" name="mail" placeholder="Email...">
                        </div>
                        <button class="submit">
                            Thay đổi
                        </button>
                    </form>
                    <form action="" method="post" class="form-edit">
                        <label for="phone">Nhập mật khẩu cũ:</label>
                        <div class="input-box">
                            <i class="fal fa-key"></i>
                            <input type="text" id="old-pass" name="old-pass" placeholder="Mật khẩu cũ">
                        </div>
                        <label for="phone">Nhập mật khẩu mới:</label>
                        <div class="input-box">
                            <i class="fal fa-key"></i>

                            <input type="text" id="new-passs" placeholder="Mật khẩu mới">
                        </div>
                        <button class="submit">
                            Xác nhận
                        </button>
                    </form>
                </div>
            </div>
        </article>
        <?php include('./header.php') ?>
        <section class="main-content">
            <section class="content-container">
                <section class="content-box">
                    <article class="user-controller">
                        <article class="user-method active">
                            <i class="fal fa-user"></i>
                            <p class="user-method--title">
                                Thông tin cá nhân
                            </p>
                        </article>                        
                        <article class="user-method">
                            <i class="fal fa-shopping-cart"></i>
                            <p class="user-method--title">
                                Quản lí đơn hàng
                            </p>
                        </article>                        
                        <article class="user-method">
                            <i class="fal fa-credit-card-front"></i>
                            <p class="user-method--title">
                                Thông tin thanh toán
                            </p>
                        </article> 
                        <article class="user-method">
                            <i class="fal fa-newspaper"></i>
                            <p class="user-method--title">
                                Bài viết của tôi
                            </p>
                        </article>
                        <article class="user-method">
                            <i class="fal fa-star"></i>
                            <p class="user-method--title">
                                Đánh giá của tôi
                            </p>
                        </article>
                        <article class="user-method">
                            <i class="fal fa-heart"></i>
                            <p class="user-method--title">
                                Sản phẩm yêu thích
                            </p>
                        </article>
                    </article>
                    <article class="user-container">
                        <article class="user-box">
                            <div class="user-box__title">
                                Thông tin cá nhân
                            </div>
                            <div class="user-box__dashboard">
                                <form action="" method="post" class="main-info">
                                    <div class="form-info">
                                        <div class="form-avatar">
                                            <img src="./assets/images/man.png" alt="user avatar">
                                            <input type="file" name="user-avatar" id="user-avatar" hidden>
                                            <label for="user-avatar">
                                                <i class="fal fa-pencil"></i>
                                            </label>
                                        </div>
                                        <div class="form-name">
                                            <div class="input-box">
                                                <label for="username">Họ & Tên</label>
                                                <input type="text" name="username" id="username">
                                            </div>
                                            <div class="input-box">
                                                <label for="phone">Số điện thoại</label>
                                                <input type="text" name="phone" id="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="submit-form">
                                        Lưu thay đổi
                                    </button>
                                </form>
                                <div class="form-container">
                                    <div class="form-info">
                                        <i class="fal fa-phone"></i>
                                        <p>
                                            Số điện thoại<br>
                                            +84 000 000 000
                                        </p>
                                        <button class="form-edit-btn">Cập nhật</button>
                                    </div>
                                    <div class="form-info">
                                        <i class="fal fa-envelope"></i>
                                        <p>
                                            Địa chỉ email<br>
                                            longptps19740@fpt.edu.vn
                                        </p>
                                        <button class="form-edit-btn">Cập nhật</button>
                                    </div>
                                    <div class="form-info">
                                        <i class="fal fa-key"></i>
                                        <p>
                                            Đổi mật khẩu
                                        </p>
                                        <button class="form-edit-btn">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="user-box">
                            <article class="order-box">
                                <div class="order-box__title">
                                    Quản lí đơn hàng
                                </div>
                                <div class="order-box__dashboard">
                                    <section class="order-detail-box">
                                        <article class="order-detail-box__head">
                                            <i class="fal fa-box-check"></i>
                                            Giao hàng thành công
                                        </article>
                                        <article class="order-detail-box__body">
                                            <article class="order">
                                                <div class="order-thumbnail">
                                                    <img src="./assets/images/elden-ring.jpg" alt="">
                                                    <p class="quantity">
                                                        20
                                                    </p>
                                                </div>
                                                <div class="order-title">
                                                    Elden ring
                                                </div>
                                                <div class="order-totalprice">
                                                    9.000.000đ
                                                </div>
                                            </article>
                                        </article>
                                        <article class="order-detail-box__foot">
                                            <div class="price">
                                                <span>Tổng tiền:</span> 9.000.000đ
                                            </div>
                                            <a href="#" class="detail">
                                                Xem chi tiết
                                            </a>
                                        </article>
                                    </section>
                                    <section class="order-detail-box">
                                        <article class="order-detail-box__head">
                                            <i class="fal fa-box-check"></i>
                                            Giao hàng thành công
                                        </article>
                                        <article class="order-detail-box__body">
                                            <article class="order">
                                                <div class="order-thumbnail">
                                                    <img src="./assets/images/elden-ring.jpg" alt="">
                                                    <p class="quantity">
                                                        20
                                                    </p>
                                                </div>
                                                <div class="order-title">
                                                    Elden ring
                                                </div>
                                                <div class="order-totalprice">
                                                    9.000.000đ
                                                </div>
                                            </article>
                                            <article class="order">
                                                <div class="order-thumbnail">
                                                    <img src="./assets/images/elden-ring.jpg" alt="">
                                                    <p class="quantity">
                                                        20
                                                    </p>
                                                </div>
                                                <div class="order-title">
                                                    Elden ring
                                                </div>
                                                <div class="order-totalprice">
                                                    9.000.000đ
                                                </div>
                                            </article>
                                            <article class="order">
                                                <div class="order-thumbnail">
                                                    <img src="./assets/images/elden-ring.jpg" alt="">
                                                    <p class="quantity">
                                                        20
                                                    </p>
                                                </div>
                                                <div class="order-title">
                                                    Elden ring
                                                </div>
                                                <div class="order-totalprice">
                                                    9.000.000đ
                                                </div>
                                            </article>
                                        </article>
                                        <article class="order-detail-box__foot">
                                            <div class="price">
                                                <span>Tổng tiền:</span> 9.000.000đ
                                            </div>
                                            <a href="#" class="detail">
                                                Xem chi tiết
                                            </a>
                                        </article>
                                    </section>
                                    <section class="order-detail-box">
                                        <article class="order-detail-box__head">
                                            <i class="fal fa-box-check"></i>
                                            Giao hàng thành công
                                        </article>
                                        <article class="order-detail-box__body">
                                            <article class="order">
                                                <div class="order-thumbnail">
                                                    <img src="./assets/images/elden-ring.jpg" alt="">
                                                    <p class="quantity">
                                                        20
                                                    </p>
                                                </div>
                                                <div class="order-title">
                                                    Elden ring
                                                </div>
                                                <div class="order-totalprice">
                                                    9.000.000đ
                                                </div>
                                            </article>
                                        </article>
                                        <article class="order-detail-box__foot">
                                            <div class="price">
                                                <span>Tổng tiền:</span> 9.000.000đ
                                            </div>
                                            <a href="#" class="detail">
                                                Xem chi tiết
                                            </a>
                                        </article>
                                    </section>
                                </div>
                            </article>
                        </article>
                        <article class="user-box">
                            <div class="user-box__title">
                                Thông tin thanh toán
                            </div>
                            <div class="user-box__dashboard">
                                <section class="cards">
                                    <article class="card">
                                        <div class="card-thumbnail">
                                            <img src="./assets/images/momo.png" alt="card-thumbnail">
                                        </div>
                                        <div class="card-detail">
                                            <div class="card-owner">
                                                Long P. Thien
                                            </div>
                                            <div class="card-methods">
                                                <button class="method">
                                                    Thay đổi
                                                </button>
                                                <button class="method">
                                                    Xoá
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="card">
                                        <div class="card-thumbnail">
                                            <img src="./assets/images/paypal.png" alt="card-thumbnail">
                                        </div>
                                        <div class="card-detail">
                                            <div class="card-owner">
                                                Long P. Thien
                                            </div>
                                            <div class="card-methods">
                                                <button class="method">
                                                    Thay đổi
                                                </button>
                                                <button class="method">
                                                    Xoá
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </section>
                            </div>
                        </article>
                        <article class="user-box">
                            <div class="user-box__title">
                                Quản lí bài viết
                            </div>
                            <article class="user-box__dashboard">
                                <article class="news-box">
                                    <div class="news-box__head">
                                        <i class="fal fa-calendar"></i>
                                        <div class="date">
                                            21/08/2021
                                        </div>
                                    </div>
                                    <div class="news-box__body">
                                        <div class="news-thumbnail">
                                            <img src="./assets/images/elden-ring.jpg" alt="news">
                                        </div>
                                        <div class="news-detail">
                                            <h4 class="news-title">
                                                Elden Ring chính thức vượt mặt Dying Light 2 và God of War, trở thành tựa game được yêu thích nhiều nhất trên Steam
                                            </h4>
                                            <p class="news-desc">
                                                Elden Ring còn được coi là hậu duệ của dòng game nổi tiếng Dark Souls.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="news-box__foot">
                                        <a href="#" class="method">Xem chi tiết</a>
                                        <button class="method">Chỉnh sửa</button>
                                        <a href="#" class="method">Xoá</a>
                                    </div>
                                </article>
                            </article>
                            
                        </article>
                        <article class="user-box">
                            <div class="user-box__title">
                                Đánh giá của tôi
                            </div>
                            <article class="user-box__dashboard">
                                <article class="news-box">
                                    <div class="news-box__head">
                                        <i class="fal fa-calendar"></i>
                                        <div class="date">
                                            21/08/2021
                                        </div>
                                    </div>
                                    <div class="news-box__body">
                                        <div class="news-thumbnail">
                                            <img src="./assets/images/elden-ring.jpg" alt="news">
                                        </div>
                                        <div class="news-detail">
                                            <h4 class="news-title">
                                                Elden Ring
                                            </h4>
                                            <div class="rating">
                                                <div class="back-stars">
                                                    <i class="fal fa-star" aria-hidden="true"></i>
                                                    <i class="fal fa-star" aria-hidden="true"></i>
                                                    <i class="fal fa-star" aria-hidden="true"></i>
                                                    <i class="fal fa-star" aria-hidden="true"></i>
                                                    <i class="fal fa-star" aria-hidden="true"></i>
                
                                                    <div class="front-stars" id="rating" style="width: 50%;">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="news-desc">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque voluptatum eos at laborum a. Aspernatur, consectetur reiciendis fugiat consequatur repellendus suscipit unde sit, asperiores eligendi dolorem soluta, incidunt nemo doloremque!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="news-box__foot">
                                        <a href="#" class="method">Xem chi tiết</a>
                                    </div>
                                </article>
                            </article>
                            
                        </article>
                        <article class="user-box">
                            <div class="user-box__title">
                                Sản phẩm yêu thích
                            </div>
                            <article class="user-box__dashboard">
                                <article class="news-box">
                                    <div class="news-box__head">
                                        <i class="fal fa-calendar"></i>
                                        <div class="date">
                                            21/08/2021
                                        </div>
                                    </div>
                                    <div class="news-box__body">
                                        <div class="news-thumbnail">
                                            <img src="./assets/images/elden-ring.jpg" alt="news">
                                        </div>
                                        <div class="news-detail">
                                            <h4 class="news-title">
                                                Elden Ring
                                            </h4>
                                            <div class="news-desc">
                                                <p class="price">
                                                    780.000</p>
                                                <p class="sale">
                                                    800.000</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="news-box__foot">
                                        <a href="#" class="method">Xem chi tiết</a>
                                        <a href="#" class="method">Xoá</a>
                                    </div>
                                </article>
                            </article>
                        </article>
                    </article>
                </section>
            </section>
        </section>
        <?php include('./footer.php') ?>
    </main>
    <script src="./assets/js/userModal.js"></script>
    <!-- Slick JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/slick.js"></script>
    <script>

        const searchBtn = $('#search-modal-open');
        const searchCloseBtn = $('#search-modal-close');
        const cartBtn = $('#cart-modal-open');
        const cartCloseBtn = $('#cart-modal-close');
        
       
        searchBtn.click(() => {
            $('#search-box').css({
                visibility: 'visible',
            })
            $('#search-box').children().css({
                animationName: 'slide-down',
                animationDuration: '.5s',
            })
        })
        searchCloseBtn.click(() => {
            $('#search-box').children().css({
                animationName: 'slide-up',
                animationDuration: '.5s',
            })
            $('#search-box').css({
                visibility: 'hidden',
            })
        })
        cartBtn.click(() => {
            $('#cart-modal').css({
                visibility: 'visible',
            })
            $('#cart-modal').children().css({
                animationName: 'slide-to-left',
                animationDuration: '.5s',
            })
        })
        cartCloseBtn.click(() => {
            $('#cart-modal').children().css({
                animationName: 'slide-to-right',
                animationDuration: '.5s',
            })
            $('#cart-modal').css({
                visibility: 'hidden',
            })
        })
        jQuery(window).click((e) => {
            if(e.target == $('#search-box')[0]) {
                $('#search-box').children().css({
                    animationName: 'slide-up',
                    animationDuration: '.5s',
                })
                $('#search-box').css({
                    visibility: 'hidden',
                })
            }
            if(e.target == $('#cart-modal')[0]) {
                $('#cart-modal').children().css({
                    animationName: 'slide-to-right',
                    animationDuration: '.5s',
                })
                $('#cart-modal').css({
                    visibility: 'hidden',
                })
            }
          
        })
        $('.product-box__quantity form input').hover(() => {
            $('.product-box__quantity form').css({
                borderColor: 'blue',
            })
        }, () => {
            $('.product-box__quantity form').css({
                borderColor: 'transparent',
            })
        })


        const userBox = document.querySelectorAll('.user-box');
        const userMethod = document.querySelectorAll('.user-method');

        const hideBox = () => {
            userBox.forEach((element) => {
                element.style.display = 'none';
            })
        }
        hideBox();

        userBox[0].style.display = 'block';
        userMethod.forEach((element, index) => {
            element.addEventListener('click', (event) => {
                if(userBox[index].style.display == 'none') {
                    hideBox();
                    userMethod.forEach((secondElement) => {
                        secondElement.classList.remove('active');
                    });
                    userMethod[index].classList.add('active');
                    userBox[index].style.display = 'block';
                }
            });
        })
        

   </script>
</body>
</html>
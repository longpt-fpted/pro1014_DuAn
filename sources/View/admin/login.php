<!DOCTYPE html>
<html lang="en">

<head>
    <script src="/pro1014_DuAn/sources/View/assets/js/main.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center" id="admin-login-page">
            
            <h1 id="admin-login-title">WELCOME BACK</h1>
            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>
                                    <form action="http://localhost/pro1014_duan/sources/controller/LoginAdminController.php" method="post" class="user" id="admin-login-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Admin Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input  type="submit" name="login" id="login-submit" value="Login">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
            document.querySelector('#login-submit').addEventListener('click', (e) => {
                e.preventDefault();
                let data = $('#admin-login-form').serialize()+"&method=login";
                $.ajax({
                    url: '/pro1014_DuAn/sources/Controller/LoginAdminController.php',
                    type: 'POST',
                    data: data,
                }).done(res => {
                    res = JSON.parse(res);
                    console.log(res);
                    switch (res.status) {
                        case 'success':
                            displayNotify('success', '????ng nh???p th??nh c??ng! B???n s??? ???????c tr??? v??? trang ch??? trong v??i gi??y n???a!');
                            setTimeout(function() {
                                window.location = '/pro1014_DuAn/sources/View/admin';
                            }, 2500)
                            break;
                        case 'wrong-password':
                            displayNotify('warning', '????ng nh???p th???t b???i! Sai t??n t??i kho???n ho???c m???t kh???u!');
                            break;
                        case 'user-not-exist':
                            displayNotify('warning', 'Kh??ng t???n t???i t??n t??i kho???n! B???n c?? mu???n ????ng k?? kh??ng ?');
                            break;
                    }
                })
            })
        </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Đăng ký thành viên</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feather.css">

    <!-- Google Ad -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6065685718643238" crossorigin="anonymous"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .login-wrapper .loginbox label {
            margin-bottom: 0;
        }
        
        .login-wrapper {
            --border-size: 3px;
            --border-angle: 0turn;
            background-image: conic-gradient(from var(--border-angle), #213, #112 50%, #213), conic-gradient(from var(--border-angle), transparent 20%, #08f, #f03);
            background-size: calc(100% - (var(--border-size) * 2)) calc(100% - (var(--border-size) * 2)), cover;
            background-position: center center;
            background-repeat: no-repeat;
            animation: bg-spin 3s linear infinite;
        }
        
        @keyframes bg-spin {
            to {
                --border-angle: 1turn;
            }
        }
        
        .box:hover {
            animation-play-state: paused;
        }
        
        @property --border-angle {
            syntax: "<angle>";
            inherits: true;
            initial-value: 0turn;
        }

    </style>
    <style>
        body {
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAABZ0RVh0Q3JlYXRpb24gVGltZQAxMC8yOS8xMiKqq3kAAAAcdEVYdFNvZnR3YXJlAEFkb2JlIEZpcmV3b3JrcyBDUzVxteM2AAABHklEQVRIib2Vyw6EIAxFW5idr///Qx9sfG3pLEyJ3tAwi5EmBqRo7vHawiEEERHS6x7MTMxMVv6+z3tPMUYSkfTM/R0fEaG2bbMv+Gc4nZzn+dN4HAcREa3r+hi3bcuu68jLskhVIlW073tWaYlQ9+F9IpqmSfq+fwskhdO/AwmUTJXrOuaRQNeRkOd5lq7rXmS5InmERKoER/QMvUAPlZDHcZRhGN4CSeGY+aHMqgcks5RrHv/eeh455x5KrMq2yHQdibDO6ncG/KZWL7M8xDyS1/MIO0NJqdULLS81X6/X6aR0nqBSJcPeZnlZrzN477NKURn2Nus8sjzmEII0TfMiyxUuxphVWjpJkbx0btUnshRihVv70Bv8ItXq6Asoi/ZiCbU6YgAAAABJRU5ErkJggg==);
        }
        
        .error-template {
            padding: 40px 15px;
            text-align: center;
        }
        
        .error-actions {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        
        .error-actions .btn {
            margin-right: 10px;
        }

    </style>

</head>

<body>
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <div class="header d-none">
            <!-- Header Menu -->
            <ul class="nav nav-tabs user-menu">
                <!-- Flag -->
                <li class="nav-item">
                    <a href="#" id="dark-mode-toggle" class="dark-mode-toggle">
                        <i class="feather-sun light-mode"></i><i class="feather-moon dark-mode"></i>
                    </a>
                </li>
                <!-- /Flag -->
            </ul>
            <!-- Header Menu -->
        </div>

        <div class="row">
        <!-- Login -->
                <div class="login-wrapper">
                    <div class="loginbox">
                        <h3>Đăng ký thành viên</h3>
                        <form method="post" action="{{route('postRegister')}}">
                            @csrf
                            <div class="form-group">
                                <label class="">Họ & tên</label>
                                <input type="text" required name="name" placeholder="Nhập tên của bạn" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="focus-label">Tên tài khoản</label>
                                <input type="text" required name="email" placeholder="Nhập tài khoản của bạn" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label class="focus-label">Mật khẩu</label>
                                <input type="password" required name="password" class="form-control ">
                            </div>
                            <div class="form-group">
                                <label class="focus-label">Nhập lại mật khẩu</label>
                                <input type="password" required class="form-control ">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="custom_check mr-2 mb-0"> Tôi chấp nhận với các <b>Điều khoản</b> và
                                            <b>Chính sách bảo mật</b>.
                                            <input type="checkbox" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary" type="submit">Đăng ký</button>
                            </div>
                            <div class="dont-have">Bạn đã có tài khoản? <a href="{{route('getLogin')}}">Đăng nhập</a>
                            </div>
                        </form>
                    </div>
                    <!-- /Login -->
                </div>
        <!-- /Main Wrapper -->

        <!-- jQuery -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Custom JS -->
        <script src="assets/js/script.js"></script>

</body>

</html>

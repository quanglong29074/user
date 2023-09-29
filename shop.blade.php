<!DOCTYPE html>
<html>

<head>
    <title>Giao diện tài khoản</title>
    <link rel="stylesheet" href="customer/css/user1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div class="contain">
    <div class="title">
        <div class="title-top">
            <p>Trang chủ  /  Tài khoản</p>
        </div>
        <div class="title-bottom">
            <h3>TÀI KHOẢN </h3>
        </div>
    </div>
    <div class="sidebar">
        <img src="images/img.jpg" alt="Avatar" class="profile-img">
        <div class="username">Tên tài khoản</div>
        <button class="logout-button">Đăng xuất</button>
        <ul>
            <div class="menu">
                <i class="fa-solid fa-file-circle-check"></i>
                <a>
                    <li class="li1">Đơn hàng của tôi</li>
                </a>
            </div>
            <div class="menu">
                <i style="color: #ff5722;" class="fa-solid fa-lock"></i>
                <a>
                    <li style="color: #ff5722;">Đổi mật khẩu</li>
                </a>
            </div>
            <div class="menu">
                <i class="fa-solid fa-heart"></i>
                <a>
                    <li >favorite product</li>
                </a>
            </div>
        </ul>
    </div>

    <div style=" margin-left: 280px;" class="content">
        <div class="content-top">
            <p>Đổi mật khẩu(Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác)</p>
        </div>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">hập lại mật khẩu</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="messenger">
        <a class="zalo-chat-widget-link" href="https://zalo.me/330373955557900892" target="_blank">
            <img src="customer/img/logo mess.png" alt="messenger">
        </a>
    </div>
    <div class="zalo">
        <a class="zalo-chat-widget-link" href="https://zalo.me/330373955557900892" target="_blank">
            <img src="customer/img/zalo.png" alt="zalo">
        </a>
    </div>
</div>
</body>

</html>

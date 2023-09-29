<!DOCTYPE html>
<html>

<head>
    <title>Giao diện tài khoản</title>
    <link rel="stylesheet" href="customer/css/user1.css">
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
                <i style="color: #ff5722;" class="fa-solid fa-file-circle-check"></i>
                <a>
                    <li class="li1">Đơn hàng của tôi</li>
                </a>
            </div>
            <div class="menu">
                <i class="fa-solid fa-lock"></i>
                <a>
                    <li >Đổi mật khẩu</li>
                </a>
            </div>
            <div class="menu">
                <i class="fa-solid fa-heart"></i>
                <a>
                    <li >sản phẩm yêu thích</li>
                </a>
            </div>
        </ul>
    </div>

    <div class="content">
        <div  class="content-top">
            <div class="content-top-title">
                <p>Sản phẩm yêu thích </p>
            </div>
            <div class="content-top-title">
                <p>Sản phẩm</p>
            </div>
        </div>
        <table class="order-table">
            <thead>
            <tr>
                <th></th>
                <th>Product name</th>
                <th>Price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img width="100px" src="images/img.jpg" alt=""></td>
                <td>2023-09-25</td>
                <td>123 Đường ABC, Thành phố XYZ</td>
                <td><a href="#"><i class="fa-solid fa-xmark"></i></a></td>
            </tr>

            <!-- Thêm các hàng khác tương tự cho các đơn hàng khác -->
            </tbody>
        </table>
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

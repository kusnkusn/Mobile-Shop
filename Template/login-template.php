<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            $result = mysqli_query($db->con, "SELECT * FROM `user` WHERE email = '$email' AND password = '$password'");
            $row = mysqli_fetch_assoc($result);
            if(mysqli_num_rows($result) > 0){
                $_SESSION["login"] = true;
                $_SESSION["user_id"] = $row["user_id"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["phone_number"] = $row["phone_number"];
                $_SESSION["address"] = $row["address"];
                $_SESSION["full_name"] = $row["full_name"];
                header("Location: index.php");
            }else{
                echo "<script> alert('Email hoặc mật khẩu không chính xác!'); </script>";
            }
        }
    }
?>

<section id="login" class="my-5 pb-5"></section>
    <div class="container-fluid w-75 p-0">
        <div class="row">
            <div class="col-6 border-end">
                <div class="text-center">
                    <p class="font-size-20"><b>Đăng nhập</b></p>
                </div>
                <form method="post">
                    <div class="m-2 form-row d-flex">
                        <label>Email</label> <br>
                        <input class="form-input card" type="text" id="email" name="email" required>
                    </div>
                    <div class="m-2 form-row d-flex">
                        <label>Mật khẩu</label> <br>
                        <input class="form-input card" type="password" id="password" name="password" required>
                    </div>
                
                    <div class="d-flex justify-content-between w-100">
                        <div>
                            <input type="checkbox">
                            <label>Ghi nhớ</label><br>
                        </div>
                        <a href="#" class="remove-underline olta" style="padding-right: 40px;">Quên mật khẩu?</a>
                    </div>
                    <div class="col-12 form-row w-50">
                        <input class="form-input card" style="padding: 4px 175px; margin: 0 125px; background-color:#d81616; color:white" name="submit" type="submit" value="Đăng nhập">
                    </div>
                </form>
            </div>
            <div class="col-6 border-end">
                <div class="text-center">
                    <p class="font-size-20"><b>Khách hàng mới</b></p>
                </div>
                <div class="m-4">
                    <p>Đăng ký ngay!</p>
                </div>
                <div class="m-4">
                    <p>Tạo tài khoản để có thể mua hàng và nhận ưu đãi từ chúng tôi dễ dàng nhất!</p>
                </div>
                <div class="col-12 form-row w-50">
                    <a href="register.php" class="remove-underline1">
                    <input class="form-input card" style="padding: 4px 175px; margin: 20px 125px; background-color:#d81616; color:white" type="button" value="Đăng ký">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Store</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- isotope -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>

    <!-- start header -->
    <header class="header">

        <div class="strip d-flex justify-content-between px-4 py-1">
            <p class="font-text font-size-12 text-black-50 p1">Hà Nội: 347 Đội Cấn | 244A Lạc Long Quân</p>
            <div class="font-text font-size-14 ">
                <a href="#" class="px-3 border-right border-left text-dark remove-underline">Đăng nhập</a>
            </div>
        </div>

        <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Mobile Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active px-2">
                            <a class="nav-link" href="#">Giảm giá</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#">Điện thoại <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#">Phụ kiện <i class="fas fa-chevron-down"></i></a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                    </ul>
                    <form action="#" class="font-size-14 font-rale">
                        <a href="cart.php" class="py-2 rounded-pill color-first-bg remove-underline">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- main site -->
    <main>
        <!-- owl -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/banner1.png" alt="Banner1">
                </div>
                <div class="item">
                    <img src="./assets/banner2.png" alt="Banner3">
                </div>
                <div class="item">
                    <img src="./assets/banner3.png" alt="Banner4">
                </div>
                <div class="item">
                    <video width="100%" playsinline autoplay controls>
                    <source src="./assets/banner4.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>
        <!-- top sale -->
        <section id="top-sale">
            <div class="container py-5">
                <h4 class="font-text font-size-20"><b>ĐIỆN THOẠI NỔI BẬT NHẤT</b></h4>
                <hr>
                <!-- owl -->
                <div class="owl-carousel owl-theme">                   
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ip14pm.png" alt="product"></a>
                            <div class="text-center">
                                <h6>iPhone 14 Pro Max 1TB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">41.790.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">45.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>              

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ip13pm.png" alt="product"></a>
                            <div class="text-center">
                                <h6>iPhone 13 Pro Max 256GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">27.290.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">31.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ip12.png" alt="product"></a>
                            <div class="text-center">
                                <h6>iPhone 12 256GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">16.990.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">23.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ssgzf4.png" alt="product"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy Z Fold4 256G</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">33.760.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">40.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/s23u.png" alt="product"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy S23 Ultra</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">37.190.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">44.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>
            
                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ssgs22u.png" alt="product"></a>
                            <div class="text-center">
                                <h6>Samsung Galaxy S22 Ultra</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">36.990.000 ₫</span>
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="item py-2">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/x13p.png" alt="product"></a>
                            <div class="text-center">
                                <h6>Xiaomi 13 Pro 12GB 256GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">23.490.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">29.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                </div>
                <hr>
            </div>
        </section>
        <!-- products -->
        <section id="products">
            <div class="container">
                <h4 class="font-text font-size-20"><b>TẤT CẢ ĐIỆN THOẠI</b></h4>
                <div id="filters" class="button-group text-end">
                    <button class="btn" data-filter=".Apple">Apple</button>
                    <button class="btn" data-filter=".Samsung">Samsung</button>
                    <button class="btn" data-filter=".Xiaomi">Xiaomi</button>
                    <button class="btn is-checked" data-filter="*">Tất cả</button>
                </div>

                <div class="grid">
                    <div class="grid-item Apple card" style="width: 250px;">
                        <div class="item py-2 text-center">
                            <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ip14pm.png" alt="product" style="width: 200px;"></a>
                            <div >
                                <h6>iPhone 14 Pro Max 1TB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">41.790.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">45.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                          </div>  
                        </div>
                    </div>

                    <div class="grid-item Samsung card" style="width: 250px;">
                        <div class="item py-2 text-center">
                            <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ssgzf4.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Samsung Galaxy Z Fold4 256G</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">33.760.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">40.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid-item Xiaomi card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/x13p.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Xiaomi 13 Pro 12GB 256GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">23.490.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">29.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                    <div class="grid-item Apple card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ip13pm.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>iPhone 13 Pro Max 256GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">27.290.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">31.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Samsung card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/s23u.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Samsung Galaxy S23 Ultra</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">37.190.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">44.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Xiaomi card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/x11tp.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Xiaomi 11T Pro</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">11.990.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">14.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Apple card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ip12.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>iPhone 12 256GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">16.990.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">23.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Samsung card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ssgs22u.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Samsung Galaxy S22 Ultra</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">36.990.000 ₫</span>
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Xiaomi card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/xm10tp.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Xiaomi Mi 10T Pro 5G</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">11.200.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">12.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Apple card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ip11.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>iPhone 11 128GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">11.990.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">13.990.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Samsung card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ssgs20.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Samsung Galaxy S20 FE 256GB</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">8.200.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">12.490.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="grid-item Xiaomi card" style="width: 250px;">
                        <div class="item py-2 text-center">
                        <div class="product font-rale">
                            <a href="#"><img src="./assets/products/ra1.png" alt="product" style="width: 200px;"></a>
                            <div>
                                <h6>Redmi A1</h6>
                                <div class="price py-2">
                                    <span style="color:red" class="px-2">1.840.000 ₫</span>
                                    <span style="color:gray" class="px-2 font-size-14 text-decoration-line-through">2.190.000 ₫</span> 
                                </div>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <button type="submit" class="btn btn-danger my-1 font-size-12">Add to Cart</button>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
        <!-- banner ads -->
        <section id="banner_ads">
            <div class="container py-5 text-center">
                <img src="./assets/banner-ads1.jpg" alt="bannerads1" height="200px" class=""img-fluid>
                <img src="./assets/banner-ads2.jpg" alt="bannerads2" height="200px" class=""img-fluid>
            </div>
        </section>

    </main>

    <!-- js -->
    <script src="./index.js"></script>
</body>

</html>
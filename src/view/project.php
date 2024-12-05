<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Font Family Example</title>

    <!-- Bootstrap CSS -->
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- OwlCarousel2 CSS -->
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" 
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" 
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/dsmart/public/assets/css/style.css">


    <!-- jQuery -->
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" 
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>

    <!-- OwlCarousel2 JS -->
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" 
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"></script>

    <!-- Bootstrap JS Bundle (Includes Popper) -->
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>

        <script src="/dsmart/public/assets/js/script.js" ></script>
</head>
    <body>
        <div class="wrap">
            <?php include '../view/partials/header.php'?>
            <main>
                <div class="project-page">
                    <?php
                        include '../view/partials/breadcrumb.php';
                        $breadcrumb = new Breadcrumb();
                        $breadcrumb->addItem("Trang chủ", "/landing-page");
                        $breadcrumb->addItem("Dự án", "/du-an");
                        include '../view/partials/breadcrumb-template.php';
                    ?>
                    <section class="projects">
                            <div class="container">
                                <div class="header__title">
                                    <h2 class="title--uppercase">Dự án tiêu biểu</h2>
                                    <p class="title--grey">Một số dự án DSmart đã thực
                                        hiện cho khách hàng</p>
                                </div>
                            </div>
                            <div class="projects__contents">
                                <div class="projects__slider">
                                    <div class="owl-carousel owl-theme">
                                        <div class="projects__card">
                                            <div
                                                class="project__image--background"></div>
                                            <div class="projects__content">
                                                <div class="row">
                                                    <div
                                                        class="project__desc col-md-6">
                                                        <h3>sunwah.reactdigicloud.com</h3>
                                                        <p>sunwah.reactdigicloud.com
                                                            cung cấp dịch vụ đại lý bất
                                                            động sản
                                                            thuận tiện, nhanh chóng và
                                                            chuyên nghiệp cho công
                                                            chúng...</p>
                                                        <div class="btn btn-extend">Tìm
                                                            hiểu thêm</div>
                                                    </div>
                                                    <div class="project__img col-md-6">
                                                        <img
                                                            alt="img-post"
                                                            src="https://dsmart.vn/wp-content/uploads/2021/12/1640855218113.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="projects__card">
                                            <div
                                                class="project__image--background"></div>
                                            <div class="projects__content">
                                                <div class="row">
                                                    <div
                                                        class="project__desc col-md-6">
                                                        <h3>kidsmontessori.edu.vn</h3>
                                                        <p>Hệ thống trường mầm non Kids
                                                            Montessori World với hệ
                                                            thống
                                                            giảng dạy bài bản kết hợp
                                                            phương
                                                            pháp Giáo...</p>
                                                        <div class="btn btn-extend">Tìm
                                                            hiểu
                                                            thêm</div>
                                                    </div>
                                                    <div class="card__image col-md-6">
                                                        <img
                                                            alt="img-post"
                                                            src="https://dsmart.vn/wp-content/uploads/2022/03/Screenshot_2.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="projects__card">
                                            <div
                                                class="project__image--background"></div>
                                            <div class="projects__content">
                                                <div class="row">
                                                    <div
                                                        class="project__desc col-md-6">
                                                        <h3>absinthstore.com</h3>
                                                        <p>ABSINTHSTORE.COM - NƠI GIỚI
                                                            THIỆU
                                                            NHỮNG LOẠI RƯỢU XUẤT XỨ CHÂU
                                                            ÂU</p>
                                                        <div class="btn btn-extend">Tìm
                                                            hiểu
                                                            thêm</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img
                                                            alt="img-post"
                                                            src="https://dsmart.vn/wp-content/uploads/2021/04/Screenshot_23.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects__slider">
                                    <div class="owl-carousel owl-theme">
                                        <div class="projects__card">
                                            <div
                                                class="project__image--background"></div>
                                            <div class="projects__content">
                                                <div class="row">
                                                    <div
                                                        class="project__desc col-md-6">
                                                        <h3>hongkywoodworkingcom364.chiliweb.org</h3>
                                                        <p>hongkywoodworkingcom364.chiliweb.org
                                                            là đơn vị sản xuất và phân
                                                            phối
                                                            MÁY CHẾ BIẾN GỖ công nghiệp
                                                            có
                                                            quy mô lớn nhất Việt...</p>
                                                        <div class="btn btn-extend">Tìm
                                                            hiểu
                                                            thêm</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img
                                                            alt="img-post"
                                                            src="https://dsmart.vn/wp-content/uploads/2021/06/Screenshot_6.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="projects__card">
                                            <div
                                                class="project__image--background"></div>
                                            <div class="projects__content">
                                                <div class="row">
                                                    <div
                                                        class="project__desc col-md-6">
                                                        <h3>vtmmedia.vn</h3>
                                                        <p>VTM là đơn vị triển khai công
                                                            nghệ số hóa bằng hình ảnh kỹ
                                                            thuật số, giúp khách hàng
                                                            phát...</p>
                                                        <div class="btn btn-extend">Tìm
                                                            hiểu
                                                            thêm</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img
                                                            alt="img-post"
                                                            src="https://dsmart.vn/wp-content/uploads/2021/12/Screenshot_12.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects__slider">
                                    <div class="owl-carousel owl-theme">
                                        <div class="projects__card">
                                            <div
                                                class="project__image--background"></div>
                                            <div class="projects__content">
                                                <div class="row">
                                                    <div
                                                        class="project__desc col-md-6">
                                                        <h3>da101.org</h3>
                                                        <p>da101.org - nơi tra cứu thành
                                                            phần một cách trung lập nhất
                                                            có
                                                            thể, đồng thời cung cấp
                                                            thông
                                                            tin chi...</p>
                                                        <div class="btn btn-extend">Tìm
                                                            hiểu
                                                            thêm</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img
                                                            alt="img-post"
                                                            src="https://dsmart.vn/wp-content/uploads/2021/04/Screenshot_27.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="projects__card">
                                            <div
                                                class="project__image--background"></div>
                                            <div class="projects__content">
                                                <div class="row">
                                                    <div
                                                        class="project__desc col-md-6">
                                                        <h3>bcon.vn</h3>
                                                        <p>bcon.vn hệ thống website cung
                                                            cấp
                                                            thông tin về phát triển
                                                            nguồn
                                                            nhân lực và phát triển tổ
                                                            chức</p>
                                                        <div class="btn btn-extend">Tìm
                                                            hiểu
                                                            thêm</div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img
                                                            alt="img-post"
                                                            src="https://dsmart.vn/wp-content/uploads/2020/12/Screenshot_47.png" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section class="list-customer-projects">
                        <div class="container">
                            <div class="header__title">
                                <h2 class="title--uppercase">Dự án khách hàng</h2>
                                <p class="title--grey">Một số dự án DSmart đã thực hiện cho khách hàng</p>
                            </div>
                            <div class="list-customer-projects__contents">
                                <div class="row list-customer-projects__items">
                                    <div class=" col-md-4 list-customer-projects__item">
                                        <div class="wrap">
                                            <div class="list-customer-projects__image">
                                                <img class=""
                                                    src="https://dsmart.vn/wp-content/uploads/2022/06/Screenshot_7.png" />
                                            </div>
                                            <div class="list-customer-projects__desc">
                                                <a href=#><h3>vietnamesecookingclasses.com</h3></a>
                                                <p>Cookly ra đời cách đây 5 năm với sứ mệnh mang mọi người đến với nhau thông qua ẩm thực...    </p>
                                            </div>
                                            <div class="btn btn-more">
                                                Tìm hiểu thêm
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 list-customer-projects__item">
                                        <div class="wrap">
                                            <div class="list-customer-projects__image">
                                                <img class=""
                                                    src="https://dsmart.vn/wp-content/uploads/2022/06/Screenshot_7.png" />
                                            </div>
                                            <div class="list-customer-projects__desc">
                                                <a href=#><h3>vietnamesecookingclasses.com</h3></a>
                                                <p>Cookly ra đời cách đây 5 năm với sứ mệnh mang mọi người đến với nhau thông qua ẩm thực...    </p>
                                            </div>
                                            <div class="btn btn-more">
                                                Tìm hiểu thêm
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 list-customer-projects__item">
                                        <div class="wrap">
                                            <div class="list-customer-projects__image">
                                                <img class=""
                                                    src="https://dsmart.vn/wp-content/uploads/2022/06/Screenshot_7.png" />
                                            </div>
                                            <div class="list-customer-projects__desc">
                                                <a href=#><h3>vietnamesecookingclasses.com</h3></a>
                                                <p>Cookly ra đời cách đây 5 năm với sứ mệnh mang mọi người đến với nhau thông qua ẩm thực...    </p>
                                            </div>
                                            <div class="btn btn-more">
                                                Tìm hiểu thêm
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 list-customer-projects__item">
                                        <div class="wrap">
                                            <div class="list-customer-projects__image">
                                                <img class=""
                                                    src="https://dsmart.vn/wp-content/uploads/2022/06/Screenshot_7.png" />
                                            </div>
                                            <div class="list-customer-projects__desc">
                                                <a href=#><h3>vietnamesecookingclasses.com</h3></a>
                                                <p>Cookly ra đời cách đây 5 năm với sứ mệnh mang mọi người đến với nhau thông qua ẩm thực...    </p>
                                            </div>
                                            <div class="btn btn-more">
                                                Tìm hiểu thêm
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 list-customer-projects__item">
                                        <div class="wrap">
                                            <div class="list-customer-projects__image">
                                                <img class=""
                                                    src="https://dsmart.vn/wp-content/uploads/2022/06/Screenshot_7.png" />
                                            </div>
                                            <div class="list-customer-projects__desc">
                                                <a href=#><h3>vietnamesecookingclasses.com</h3></a>
                                                <p>Cookly ra đời cách đây 5 năm với sứ mệnh mang mọi người đến với nhau thông qua ẩm thực...    </p>
                                            </div>
                                            <div class="btn btn-more">
                                                Tìm hiểu thêm
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 list-customer-projects__item">
                                        <div class="wrap">
                                            <div class="list-customer-projects__image">
                                                <img class=""
                                                    src="https://dsmart.vn/wp-content/uploads/2022/06/Screenshot_7.png" />
                                            </div>
                                            <div class="list-customer-projects__desc">
                                                <a href=#><h3>vietnamesecookingclasses.com</h3></a>
                                                <p>Cookly ra đời cách đây 5 năm với sứ mệnh mang mọi người đến với nhau thông qua ẩm thực...    </p>
                                            </div>
                                            <div class="btn btn-more">
                                                Tìm hiểu thêm
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="contact">
                        <div class="container">
                            <div class="header__title">
                                <h2 class="title--uppercase">Liên hệ tư vấn</h2>
                                <p class="title--grey">Quý khách vui lòng gửi thông tin
                                    để nhận tư vấn phù hợp</p>
                            </div>
                            <div class="contact__content">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form class="contact__form">
                                            <input type="name" class="form-control"
                                                id="exampleInputName"
                                                placeholder="Tên của bạn">
                                            <input
                                                class="form-control"
                                                id="exampleInputPhon"
                                                placeholder="Số phone của bạn">
                                            <input type="email" class="form-control"
                                                id="exampleInputEmail1"
                                                aria-describedby="emailHelp"
                                                placeholder="Email của bạn">
                                            <select class="form-control">
                                                <option>Thiết kế website</option>
                                                <option>Thiết kế web-app</option>
                                            </select>
                                            <textarea class="form-control"
                                                aria-label="With textarea"></textarea>
                                            <button type="submit"
                                                class="btn bg-green btn-order">Gửi
                                                ngay</button>
                                        </form>
                                    </div>
                                    <div class="contact__info col-md-6">
                                        <p><i class="bi bi-telephone-fill"></i>Hot
                                            line</p>
                                        <h4><a href>(84+) 123 4567</a></h4>
                                        <div class="contact__info--icon">
                                            <i class="bi bi-envelope-fill"></i>
                                            <p>Email:
                                                <a
                                                    href="mailto:lqviet.it@gmail.com">lqviet.it@gmail.com</a>
                                            </p>
                                        </div>
                                        <div class="contact__info--icon">
                                            <i class="bi bi-geo-alt-fill"></i>
                                            <p>Địa chỉ: 14 Nguyễn Văn Cừ, Vĩnh Ninh -
                                                TP
                                                Huế</p>
                                        </div>
                                        <div class="contact__info--icon">
                                            <i class="bi bi-pin-map-fill"></i>
                                            <a href>View on Google map</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img
                            src="https://dsmart.vn/wp-content/themes/dsmart/images/global-image.png"
                            class="img-global worldRotate" alt="global">
                        </section>
                    </div>
            </main>
            <?php include '../view/partials/footer.php'; ?>
        </div>
    </body>
</html>

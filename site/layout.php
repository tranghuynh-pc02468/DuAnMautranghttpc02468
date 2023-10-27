<!doctype html>
<html lang="en">

<head>
    <title>X-Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    <div class="container">
        <?php
        include 'layout/menu.php';
        ?>

        <div class="row mb-3">
            <article class="col-lg-9">

                <?php require $VIEW_NAME ?>

            </article>

            <aside class="col-lg-3">

                <!-- Đăng nhập -->
                <?php require 'layout/login.php' ?>


                <!-- Danh mục -->
                <?php require 'layout/loai-hang.php'; ?>


                <!-- Top 10 -->
                <?php require 'layout/top10.php' ?>

            </aside>
        </div>


        <footer>
            <div class="bg-secondary bg-opacity-25 footer-content mt-3">
                <p class="py-3 text-center">PC02468 - Huỳnh Thị Thiên Trang</p>
            </div>
        </footer>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

</body>

</html>
<?php
 require "dao/pdo.php";
 require "dao/loai.php";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <?php
            if(isset($_POST['ma_loai'])){
                loai_update($_POST['ma_loai'], $_POST['ten_loai']);
                header('location: index.php');
            }
                if(isset($_GET['ma_loai'])){
                    $ma_loai = $_GET['ma_loai'];
                    $loai_info = loai_selectOne($ma_loai);
                    extract($loai_info);
            ?>

                <form action="edit.php" method="POST">
                    <div class="mb-3">
                        <label for="">Tên loại:</label>
                        <input type="text" class="form-control" name="ten_loai" value="<?=$ten_loai?>">
                    </div>
                    <input type="text" name="ma_loai" value="<?=$ma_loai?>" readonly>
                    <input type="submit" class="btn btn-primary" value="Cập nhật">
                </form>

            <?php
                }
            ?>
            </div>
        </div>
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
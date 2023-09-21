<?php 
    require "dao/pdo.php";
    require "dao/loai.php";

    //Thêm mới 
    if(isset($_POST['ten_loai'])){
        $ten_loai = $_POST['ten_loai'];
        loai_insert($ten_loai);
    }
    
    // pdo_get_connection();
    // hiển thị ds loại ra màn hình
    $dsloai = loai_selectAll();
    foreach ($dsloai as $loai) {
        extract($loai);
        echo '<li><a>'.$ten_loai.'</a></li>';
    }

?>


<br>

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
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="">Tên loại:</label>
                        <input type="text" class="form-control" name="ten_loai">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Thêm mới">
                </form>
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

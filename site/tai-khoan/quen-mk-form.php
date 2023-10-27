<?php 
    if(isset($error)){
?>
<div class="alert alert-danger" role="alert">
  <?= $error ?>
</div>
<?php } ?>
<?php 
    if(isset($MESSAGE)){
?>
<div class="alert alert-success" role="alert">
  <?= $MESSAGE ?>
</div>
<?php } ?>
<div class="card">
    <div class="card-header text-center">
        <h3>Quên mật khẩu</h3>
    </div>
    <div class="card-body">
        <form action="quen-mk.php" id="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Tên đăng nhập</label>
                    <input name="username"  class="form-control" >
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Địa chỉ email</label>
                    <input name="email"  class="form-control">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" name="btn_forgot">Tìm mật khẩu</button>
                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                </div>
                <!--Giá trị mặc định-->
                <!-- <input name="vai_tro" value="0" type="hidden"> -->
            </div>
        </form>

    </div>
</div>


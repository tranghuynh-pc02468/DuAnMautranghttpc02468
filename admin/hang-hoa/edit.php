<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Sửa Hàng hóa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body  ">
                            <form action="index.php" class="row" method="POST" enctype="multipart/form-data" >
                                <div class="form-group col-lg-4">
                                    <label for="">Mã hàng hóa</label>
                                    <input value="<?= $ma_hh ?>" name="ma_hh" type="text" class="form-control" disabled placeholder="auto number">
                                    <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Tên hàng hóa</label>
                                    <input value="<?= $ten_hh ?>" name="ten_hh" type="text" class="form-control">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Đơn giá</label>
                                    <input value="<?= $don_gia ?>" name="don_gia" type="number" class="form-control">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Hình ảnh</label>
                                    <input value="<?= $hinh ?>" name="hinh" type="file" class="form-control">
                                </div>
                                <div class="form-group col-lg-4">
                                    <label for="">Loại hàng</label>
                                    <select class="custom-select" name="ma_loai">
                                        <?php 
                                            foreach ($loai as $item) {
                                                if( $item['ma_loai'] == $ma_loai ){
                                                    echo '<option selected value="'. $item['ma_loai']. '"> '.$item['ten_loai'].' </option>';
                                                }else{
                                                    echo '<option value="'. $item['ma_loai']. '"> '.$item['ten_loai'].' </option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                                 
                                <div class="form-gruop col-lg-4">
                                    <label for="">Ngày nhập</label>
                                    <input value="<?= $ngay_nhap ?>" name="ngay_nhap" type="text" class="form-control">
                                </div>
                                <div class="form-gruop col-lg-4">
                                    <label for="">Số lượt xem</label>
                                    <input value="<?= $so_luot_xem ?>" name="so_luot_xem" type="text" class="form-control" placeholder="0" disabled>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="">Mô tả</label>
                                    <!-- <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> -->
                                    <textarea  id="summernote" name="mo_ta" value="" rows="10"> <?= $mo_ta ?> </textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary" name="btn_update" >Cập nhật</button>
                                    <button class="btn btn-primary" type="reset">Nhập lại</button>
                                    <button class="btn btn-primary" name="bnt_list">Danh sách</button>
                                </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
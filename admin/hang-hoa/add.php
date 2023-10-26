<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Thêm mới Hàng hóa</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body  ">
                            <form action="index.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-lg-4">
                                        <label for="">Mã hàng hóa</label>
                                        <input name="ma_hh" type="text" class="form-control" disabled
                                            placeholder="auto number">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="">Tên hàng hóa</label>
                                        <input name="ten_hh" type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="">Đơn giá</label>
                                        <input name="don_gia" type="number" class="form-control">
                                    </div> 
                                    <div class="form-group col-lg-4">
                                        <label for="">Hình ảnh</label>
                                        <input name="hinh" type="file" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-4">
                                        <label for="">Loại hàng</label>
                                        <select class="custom-select" name="ma_loai">
                                            <?php
                                            foreach ($loai as $item) {
                                                extract($item);

                                                ?>
                                                <option value="<?= $ma_loai ?>">
                                                    <?= $ten_loai ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <!-- <div class="form-group col-lg-4">
                                        <label for="">Hàng đặt biệt</label>
                                        <div class="d-flex border p-2 rounded">
                                            <div class="custom-control custom-radio px-4">
                                                <input class="custom-control-input" type="radio" id="customRadio1"
                                                    name="dac_biet" value="0">
                                                <label for="customRadio1" class="custom-control-label">Đặt biệt</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input class="custom-control-input" type="radio" id="customRadio2"
                                                    name="dac_biet" value="1" checked>
                                                <label for="customRadio2" class="custom-control-label">Bình
                                                    thường</label>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="form-gruop col-lg-4">
                                        <label for="">Ngày nhập</label>
                                        <input name="ngay_nhap" type="date" class="form-control">
                                    </div>
                                    <div class="form-gruop col-lg-4">
                                        <label for="">Số lượt xem</label>
                                        <input name="so_luot_xem" value="0" type="text" class="form-control" disabled>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="">Mô tả</label>
                                        <!-- <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea> -->
                                        <textarea id="summernote" name="mo_ta" value="" rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="btn btn-primary" name="btn_insert">Thêm mới</button>
                                        <button class="btn btn-primary" type="reset">Nhập lại</button>
                                        <button class="btn btn-primary" name="bnt_list">Danh sách</button>
                                    </div>
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
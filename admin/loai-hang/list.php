<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Danh sách loại hàng</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a class="btn btn-primary" href="index.php?form_insert">Thêm mới</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th></th>
                    <th>Tên loại</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $i =1;
                    foreach ($loai_list as $loai) {
                      extract($loai);
                      $del_link = "index.php?ma_loai=".$ma_loai;
                      
                  ?>
                    <tr>
                      <td>
                        <?= $i ?>
                      </td>
                      <td>
                        <?= $ten_loai ?>
                      </td>
                      <td>
                        <a class="btn btn-primary" href="">Sửa</a>
                        <a class="btn btn-danger" name="btn-delete" href="<?=$del_link?>">Xóa</a> 
                      </td>
                    </tr>
                  <?php $i++; } ?>
                  </tbody>
                </table>
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


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa Sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sửa Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-footer justify-content-between">
                                    <a href="index.php?act=sanpham"><button type="button" class="btn btn-primary">Quay
                                            lại</button></a>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="ten_sp" placeholder="Tên sản phẩm"
                                            value="<?= $ten_sp ?>">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="gia_sp" placeholder="Giá sản phẩm"
                                            value="<?= $gia_sp ?>">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="giacu" placeholder="Giá cũ sản phẩm"
                                            value="<?= $giacu ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Hình ảnh</label>
                                        <img src="../img/<?= $img ?>" alt="" width="200px"
                                            style="display: block; margin: auto;">
                                        <input type="file" name="img" class="col-form-label" id="">
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" name="ngay_nhap" placeholder="Ngày nhập"
                                            value="<?= $ngay_nhap ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Mô tả</label>
                                        <textarea name="mo_ta" id="" cols="30" rows="5"
                                            style="width:100%; border:1px #CCC solid"
                                            class="col-form-label"><?= $mo_ta ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Chọn danh mục:</label>
                                            <select class="form-control select2" name="id_danhmuc">
                                                <option value="0">Danh mục</option>
                                                <?php
                                                foreach ($listdanhmuc as $listdm){
                                                   if($id_danhmuc==$listdm['id_danhmuc'])
                                                   echo '<option value="'.$listdm['id_danhmuc'].'" selected>'.$listdm['ten_danhmuc'].'</option> ';
                                                    else echo '<option value="'.$listdm['id_danhmuc'].'">'.$listdm['ten_danhmuc'].'</option>';
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary" name="suasanpham">Sửa sản
                                        phẩm</button>
                                </div>

                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
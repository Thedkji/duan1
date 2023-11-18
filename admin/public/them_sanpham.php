<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thêm Sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thêm Sản phẩm</li>
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
                                   <a href="index.php?page=sanpham"><button type="button" class="btn btn-primary" name="themsanpham">Quay lại</button></a>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="ten_sp"
                                            placeholder="Tên sản phẩm">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="gia_sp"
                                            placeholder="Giá sản phẩm">
                                    </div>
                                    
                                    
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Hình ảnh</label>
                                        <input type="file" name="img" class="col-form-label" id="">
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" name="ngay_nhap"
                                            placeholder="Ngày nhập">
                                    </div>
                                    <div class="mb-3">
                                        <label for="topic-name" class="col-form-label">Mô tả</label>
                                        <textarea name="mo_ta" id="" cols="30" rows="5"
                                            style="width:100%; border:1px #CCC solid" class="col-form-label"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Chọn danh mục:</label>
                                            <select class="form-control select2" name="id_danhmuc">
                                                <option selected value="member">Danh mục</option>
                                                <?php
                                                foreach ($listdanhmuc as $listdm) { ?>
                                                    <option value="<?= $listdm['id_danhmuc'] ?>">
                                                        <?= $listdm['ten_danhmuc'] ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="submit" class="btn btn-primary" name="themsanpham">Thêm sản
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
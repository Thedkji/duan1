<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <a href="index.php?act=themsanpham"><input type="submit" value="Thêm sản phẩm" style=""></a>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped"style="text-align:center;">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Sản phẩm</th>
                                        <th scope="col">ID Danh mục</th>
                                        <th scope="col">Danh mục</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Giá cũ</th>
                                        <th scope="col">Hình</th>
                                        <th scope="col">Ngày nhập</th>
                                        <th scope="col">Lượt xem</th>
                                        <th scope="col">Mô tả</th>
                                        
                                    </tr>
                                </thead>
                                <?php foreach ($listsanpham as $listsp) {
                                    extract($listsp);
                                    
                                    $sua_sanpham = 'index.php?act=update_sanpham&id_sanpham='.$id_sanpham;
                                    $xoa_sanpham = 'index.php?act=xoa_sanpham&id_sanpham='.$id_sanpham;
                                ?>

                                    
                                        <tr>
                                            <th scope="col"><?= $id_sanpham ?></th>
                                            <th scope="col"><?= $id_danhmuc ?></th>
                                            <th scope="col"><?= $ten_danhmuc ?></th>
                                            <th scope="col"><?= $ten_sp ?></th>
                                            <th scope="col"><?= $gia_sp ?></th>
                                            <th scope="col"><?= $giacu ?></th>
                                            <th scope="col"><img src="../img/<?= $img ?>" alt="" width="200px"></th>
                                            <th scope="col"><?= $ngay_nhap ?></th>
                                            <th scope="col"><?= $luotxem ?></th>
                                            <th scope="col"><?= $mo_ta ?></th>
                                            <td><a href="<?= $sua_sanpham ?>"><input type="button" value="Sửa"></a></th><br>
                                            <th><a href="<?= $xoa_sanpham ?>"
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><input
                                                    type="button" value="Xóa"></a></th>
                                        </tr>
                                    
                                <?php } ?>
                            </table>
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
<!-- 
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="price" placeholder="Giá sản phẩm">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="price2" placeholder="Giá củ sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Hình ảnh</label>
                        <input type="file" name="img" class="col-form-label" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Sản phẩm New</label>
                        <input type="checkbox" name="chknew" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Sản phẩm Hot</label>
                        <input type="checkbox" name="chkhot" id="">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Mô tả</label>
                        <textarea name="mota" id="" cols="30" rows="5" style="width:100%; border:1px #CCC solid"
                            class="col-form-label"></textarea>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <label for="level" class="col-form-label">Chọn danh mục:</label>
                            <select class="form-control select2" name="level">
                                <option selected value="member">Danh mục</option>
                                <option value="admin">Danh mục 1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-primary">Thêm mới</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                </div>
            </form> -->

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
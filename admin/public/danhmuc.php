<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <a href="index.php?act=them_danhmuc">
                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default"
                        name="them_danhmuc">
                        Thêm danh mục
                    </button>
                </a>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên danh mục</th>
                                    </tr>
                                </thead>
                               
                                <?php 
                                    foreach ($listdanhmuc as $danhmuc){ 
                                    extract($danhmuc);
                                    $sua_danhmuc = 'index.php?act=sua_danhmuc&id_danhmuc='.$id_danhmuc;
                                    $xoa_danhmuc = 'index.php?act=xoa_danhmuc&id_danhmuc='.$id_danhmuc;

                                    ?>
                                    <tr>
                                        <!-- <td><input type="checkbox" name="" id=""></td> -->
                                        <td><?= $id_danhmuc ?></td>
                                        <td><?= $ten_danhmuc ?></td>
                                        <td>
                                            <a href="<?= $sua_danhmuc ?>"><input type="button" value="Sửa"></a>
                                            <a href="<?= $xoa_danhmuc ?>"
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"><input
                                                    type="button" value="Xóa"></a>
                                    </td>
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

<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php
if(is_array($danhmuc)){
    extract($danhmuc);
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa Danh Mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sửa Danh Mục</li>
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
                                    <a href="index.php?act=danhmuc"><button type="button" class="btn btn-primary"
                                            name="sua_danhmuc">Quay lại</button></a>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="id_danhmuc"
                                            placeholder="Mã danh mục" disabled>
                                    </div>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="ten_danhmuc" placeholder="Tên danh mục" value="<?php if(isset($ten_danhmuc)&&($ten_danhmuc!="")) echo $ten_danhmuc ; ?>">
                                    </div>

                                    <div class="modal-body">
                                    <div class="mb-3">
                                    </div>
                                    <input type="hidden" name="id_danhmuc" value="<?php if(isset($ten_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc ; ?>">

                                </div>


                                <div class="modal-footer justify-content-between">
                                    
                                         <input type="submit" name='suadanhmuc' value='Sửa danh mục'>
                                   
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
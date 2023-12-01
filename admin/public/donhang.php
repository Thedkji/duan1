<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Đơn Hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><a href="index.php?act=donhang">Đơn hàng</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="modal-footer justify-content-between">
                                    <a href="index.php?act=donhang"><button type="button" class="btn btn-primary">Tất cả đơn hàng
                                            </button></a>
                                </div> 
                <div class="col-12">
                    <div class="card">
                        
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped"style="text-align:center;">
                                <thead>
                                <form action="index.php?act=donhang" method="POST">
                                <input type="text" name="kyw" id="" placeholder="Tìm kiếm id user......" style="width: 300px; ">
                                        <button style="color:black; width: 50px; background:#00FFFF;"><i class="ion-ios-search-strong" ></i></button>
                                </form>
                                    <tr>
                                        <th scope="col">ID đơn hàng</th>
                                        <th scope="col">ID user</th>
                                        <th scope="col">ID sản phẩm</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Gía sản phẩm</th>
                                        <th scope="col">Số lượng</th>
                                        <th scope="col">Thành tiền</th>
                                        <th scope="col">ID đơn hàng chi tiết</th>
                                        <th scope="col">Quản lý</th>
                                        <th scope="col">Đơn hàng</th>
                                        <th scope="col">Thao tác</th>

                                                                               
                                    </tr>
                                </thead>
                                 <?php foreach ($listdonhang as $listdh) {
                                    extract($listdh);
                                    $xoa_donhang = 'index.php?act=xoadonhang&id_donhang='.$id_donhang;

                                    
                                ?> 

                                    
                                        <tr>
                                            <th scope="col"><?= $id_donhang ?></th>
                                            <th scope="col"><?= $id_user ?></th>
                                            <th scope="col"><?= $id_sanpham ?></th>
                                            <th scope="col"><?= $ten_sp ?></th>
                                            <th scope="col"><img src="../img/<?= $img ?>" alt="" width="100px"></th>
                                            <th scope="col"><?= number_format($gia_sp) ?><span> VNĐ<span></th>
                                            <th scope="col"><?= $soluong ?></th>
                                            <th scope="col"><?= number_format($thanhtien) ?><span> VNĐ<span></th>
                                            <th scope="col"><?= $id_donhangct ?></th>
                                            <th scope="col"><a href="index.php?act=donhangct&id_donhangct=<?= $id_donhangct ?>">Chi tiết đơn hàng</a></th>
                                            <th scope="col"><a href="index.php?act=chitietdh&id_user=<?= $id_user ?>">Chi tiết</a></th>

                                            <th><a href="<?= $xoa_donhang ?>"
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


</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
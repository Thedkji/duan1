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
                        <li class="breadcrumb-item active">Đơn hàng</li>
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
                        
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Đơn hàng</th>
                                        <th scope="col">ID User</th>
                                        <th scope="col">Mã đơn hàng</th>
                                        <th scope="col">Phương thức thanh toán</th>
                                        <th scope="col">Tổng đơn hàng</th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Điện Thoại</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Ngày đặt hàng</th>                                        
                                    </tr>
                                </thead>
                                 <?php foreach ($listdonhang as $listdh) {
                                    extract($listdh);
                                    
                                    
                                ?> 

                                    
                                        <tr>
                                            <th scope="col"><?= $id_donhang ?></th>
                                            <th scope="col"><?= $id_user ?></th>
                                            <th scope="col"><?= $madh ?></th>
                                            <th scope="col"><?= $phuongthuc_tt ?></th>
                                            <th scope="col"><?= $tong_donhang ?></th>
                                            <th scope="col"><?= $hoten ?></th>
                                            <th scope="col"><?= $email ?></th>
                                            <th scope="col"><?= $tel ?></th>
                                            <th scope="col"><?= $diachi ?></th>
                                            <th scope="col"><?= $ngay_dathang ?></th>

                                           
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
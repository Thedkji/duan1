<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"style="width: 1500px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Đơn hàng chi tiết</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?act=donhang">Đơn hàng</a></li>
                        <li class="breadcrumb-item active">Đơn hàng chi tiết</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="width: 1500px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                <div class="modal-footer justify-content-between">
                                    <a href="index.php?act=donhang"><button type="button" class="btn btn-primary">Quay
                                            lại</button></a>
                                </div>
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped" style="text-align:center;">
                                <thead>
                                    
                                    <tr>
                                        <th scope="col">ID đơn hàng chi tiết</th>
                                        <th scope="col">Phương thức thanh toán</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col">Họ tên</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Điện Thoại</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Ngày đặt hàng</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                        
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if ($listdhct): ?>
                                    <?php
                                        $ttdh=get_ttdh($listdhct['trangthai']);
                                        $sua_donhangct = 'index.php?act=update_donhangct&id_donhangct='.$id_donhangct;

                                        ?>
                                        <tr>
                                            <th scope="col"><?= $listdhct['id_donhangct'] ?></th>
                                            <th scope="col"><?= $listdhct['phuongthuc_tt'] ?></th>
                                            <th scope="col"><?= number_format($listdhct['tong_donhang']) ?><span> VNĐ<span></th>
                                            <th scope="col"><?= $listdhct['hoten'] ?></th>
                                            <th scope="col"><?= $listdhct['email'] ?></th>
                                            <th scope="col"><?= $listdhct['tel'] ?></th>
                                            <th scope="col"><?= $listdhct['diachi'] ?></th>
                                            <th scope="col"><?= $listdhct['ngay_dathang'] ?></th>
                                            <th scope="col" style="color:red;"><?= $ttdh ?></th>
                                            <th scope="col"><a href="<?= $sua_donhangct ?>"><input type="button" value="Sửa"></a></th>
                                        
                                            
                                        </tr>
                                    
                                       <?php
                                       endif;
                                        ?>
                                </tbody>
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

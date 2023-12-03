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
                                        $thdh=ttnh($listdhct['phuongthuc_tt']);
                                        $sua_donhangct = 'index.php?act=update_donhangct&id_donhangct='.$id_donhangct;

                                        ?>
                                        <tr>
                                            <th scope="col"><?= $listdhct['id_donhangct'] ?></th>
                                            <th scope="col"><?= $thdh ?></th>
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
                    <div class="card">
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped" style="text-align:center;">
            <thead>
                <h4>Danh sách đơn hàng</h4>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">User</th>
                    <th scope="col">Tên sản phẩm</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                    

                </tr>
            </thead>
            
            <tbody>
            <tbody>
    <?php
    // Biến đếm để hiển thị số thứ tự
    $count = 1;
    
    if ($listdh):
        // Hiển thị thông tin từ mảng $listctdh
        foreach ($listdh as $value):
           
    ?>
        <tr>
            <td><?= $count++ ?></td>
            <td><?= $value['id_user'] ?></td>
            <td><?= $value['ten_sp'] ?></td>
            <td><img src="../img/<?= $value['img'] ?>" alt="" width="100px"></td>
            <td><?= $value['soluong'] ?></td>
            <td><?= number_format($value['gia_sp']) ?><span> VNĐ</span></td>
        </tr>
    <?php
        endforeach;
    
    endif;
    ?>
    
    <?php

    ?>
</tbody>

</tbody>





            
        </table>
    </div>
    <!-- /.card-body -->
</div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

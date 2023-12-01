<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1> Chi tiết</h1>
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
    <section class="content" >
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
    
    if ($listctdh):
        // Hiển thị thông tin từ mảng $listctdh
        foreach ($listctdh as $value):
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
    <tr>
                        <th scope="col">Tổng tiền:</th>
</tr>
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sửa Trạng thái Đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sửa Trạng thái</li>
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
                            <form action="index.php?act=update_donhangct&id_donhangct=<?= $id_donhangct ?>" method="POST">
                                
                            
                            <?php
                            // Mảng ánh xạ giá trị và nhãn của các trạng thái đơn hàng
                        $trangThaiDonHang = [
                            0 => 'Đơn hàng mới',
                            1 => 'Đang xử lý',
                            2 => 'Đang giao hàng',
                            3 => 'Đã nhận hàng',
                            4 => 'Hủy'
                            ];
                            ?>
                            <div class="mb-3">
                                    <label for="trangthai" class="form-label">Chọn trạng thái mới</label>
                                    <select class="form-select" name="trangthai">
                                        <?php foreach ($trangThaiDonHang as $value => $label) {
                                            $selected = ($value == $trangthai) ? 'selected' : '';
                                            echo "<option value='$value' $selected>$label</option>";
                                        } ?>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    
                                    <button type="submit" class="btn btn-primary" name="suadonhangct">Cập nhật trạng thái</button>
                                    <a href="index.php?act=donhangct&id_donhangct=<?= $id_donhangct ?>&id_user=<?= $_SESSION['id_user'] ?>"class="btn btn-secondary">Quay lại</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

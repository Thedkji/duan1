<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bình luận</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Bình luận</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    
    <section class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title ">Danh sách bình luận</h3>
                        </div> 
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">ID User</th>
                                        <th scope="col">ID sản phẩm</th>
                                        <th scope="col">Ngày bình luận</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php
                                        foreach ($listbinhluan as $binhluan) {
                                            extract($binhluan);
                                            $xoa_binhluan = 'index.php?act=xoabinhluan&id_binhluan='.$id_binhluan;

                                            # code...
                                        
                                        echo'
                                        </tr>
                                        <td>'.$id_binhluan.'</td>
                                        <td>'.$noidung_bl.'</td>
                                        <td>'.$id_user.'</td>
                                        <td>'.$id_sanpham.'</td>
                                        <td>'.$ngay_bl.'</td>
                                        <td><a href="'.$xoa_binhluan.'"><input type="button" value="Xóa"></a></td>
                                        </tr>';
                                    }
                                   
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm thành viên mới</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Tên tài khoản">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="level" class="col-form-label">Chức vụ:</label>
                            <select class="form-control select2" name="level">
                                <option selected value="member">Thành viên</option>
                                <option value="admin">Quản trị viên</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> -->
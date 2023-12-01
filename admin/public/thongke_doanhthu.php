<?php
$list_thongke_doanhthu = loadall_thongke_doanhthu();

// Tạo các mảng để lưu trữ thông tin theo tháng
$labels = [];
$dataRevenue = [];
$dataProducts = [];

// Duyệt qua kết quả trả về từ truy vấn và gom nhóm dữ liệu theo danh mục và tháng
foreach ($list_thongke_doanhthu as $thongke) {
    $category = $thongke['tendm'];
    $month = $thongke['thang'];

    // Tạo label là kết hợp giữa tên danh mục và tháng
    $labels[] = $category . ' - ' . $month;

    // Lưu doanh thu và số lượng sản phẩm tương ứng
    $dataRevenue[] = $thongke['total_revenue'];
    $dataProducts[] = $thongke['total_products'];
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- ... -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- ... -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Hiển thị biểu đồ -->
                            <canvas id="revenueChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Script để vẽ biểu đồ -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($labels) ?>,
                datasets: [{
                    label: 'Doanh thu theo tháng và danh mục',
                    data: <?= json_encode($dataRevenue) ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }, {
                    label: 'Số lượng sản phẩm bán được',
                    data: <?= json_encode($dataProducts) ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

<a href="index.php?act=thongke"><button style="margin:30px 300px 0px 300px;">Quay lại</button></a>
<?php
$list_thongke_doanhthu = load_thongke_doanhthu();
// Chuyển dữ liệu doanh thu thành mảng để sử dụng trong biểu đồ
$labels = [];
$data_revenue = [];
$data_new_orders = [];
$data_shipped_orders = [];

foreach ($list_thongke_doanhthu as $thongke) {
    $labels[] = "Tháng " . $thongke['thang'];
    $data_revenue[] = $thongke['total_revenue'];
    $data_new_orders[] = $thongke['moi'];
    $data_shipped_orders[] = $thongke['da_vanchuyen'];
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
            <!-- Biểu đồ thống kê doanh thu -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <canvas id="revenueChart" width="800" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Thêm thông tin thống kê tại đây -->
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
                    label: 'Doanh thu',
                    data: <?= json_encode($data_revenue) ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }, {
                    label: 'Số đơn mới',
                    data: <?= json_encode($data_new_orders) ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }, {
                    label: 'Số đơn đã vận chuyển',
                    data: <?= json_encode($data_shipped_orders) ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
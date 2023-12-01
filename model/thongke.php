<?php
function loadall_thongke(){
    $sql="select danhmuc.id_danhmuc as iddm,danhmuc.ten_danhmuc as tendm, count(sanpham.id_sanpham) as countsp ,min(sanpham.gia_sp) as minprice ,max(sanpham.gia_sp) as maxprice,
    avg(sanpham.gia_sp) as avgprice from sanpham left join danhmuc on danhmuc.id_danhmuc=sanpham.id_danhmuc group by danhmuc.id_danhmuc order by danhmuc.id_danhmuc ";
    $listtk=pdo_query($sql);
    return $listtk;
}



function load_thongke_doanhthu()
{
    // Truy vấn SQL để lấy doanh thu theo tháng và trạng thái đơn hàng
    $sql = "SELECT MONTH(ngay_dathang) AS thang, 
                   SUM(CASE WHEN trangthai = 3 THEN 1 ELSE 0 END) AS da_vanchuyen,
                   SUM(CASE WHEN trangthai = 0 THEN 1 ELSE 0 END) AS moi,
                   SUM(tong_donhang) AS total_revenue
            FROM donhang_chitiet
            WHERE YEAR(ngay_dathang) = YEAR(CURRENT_DATE())
            GROUP BY MONTH(ngay_dathang)";
    
    try {
        $list_thongke_doanhthu = pdo_query($sql);
        return $list_thongke_doanhthu;
    } catch(PDOException $e) {
        throw $e;
    }
}


?>





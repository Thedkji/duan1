<?php
function loadall_thongke(){
    $sql="select danhmuc.id_danhmuc as iddm,danhmuc.ten_danhmuc as tendm, count(sanpham.id_sanpham) as countsp ,min(sanpham.gia_sp) as minprice ,max(sanpham.gia_sp) as maxprice,
    avg(sanpham.gia_sp) as avgprice from sanpham left join danhmuc on danhmuc.id_danhmuc=sanpham.id_danhmuc group by danhmuc.id_danhmuc order by danhmuc.id_danhmuc ";
    $listtk=pdo_query($sql);
    return $listtk;
}



function loadall_thongke_doanhthu() {
    // Truy vấn SQL để lấy doanh thu từ cơ sở dữ liệu
    $sql = "SELECT danhmuc.ten_danhmuc AS tendm,
                DATE_FORMAT(sanpham., '%Y-%m') AS thang, 
                   SUM(sanpham.gia_sp) AS total_revenue,
                   COUNT(sanpham.id_sanpham) AS total_products
            FROM sanpham
            INNER JOIN danhmuc ON sanpham.id_danhmuc = danhmuc.id_danhmuc
            GROUP BY sanpham.id_danhmuc";

    try {
        $list_thongke_doanhthu = pdo_query($sql);
        return $list_thongke_doanhthu;
    } catch(PDOException $e) {
        throw $e;
    }
}
?>





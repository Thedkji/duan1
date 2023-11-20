<table style="text-align: center;margin: 30px auto; width: 1300px;" border="3">
    <?php if (isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) { ?>
        <tr>
            <td>STT</td>
            <td>Ảnh</td>
            <td>Tên sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Giá cũ sản phẩm</td>
            <td>Số lượng</td>
            <td>Thành tiền</td>
            <td>Hành động</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($_SESSION['giohang'] as $item) {
            $tt = $item[3] * $item[5];
            ?>
            <tr>
                <td>
                    <?= $i ?>
                </td>
                <td><img src="img/<?= $item[1] ?>" alt="" width="150px" height="150px"></td>
                <td>
                    <?= $item[2] ?>
                </td>
                <td>
                    <?= number_format($item[3]) ?>
                </td>
                <td>
                    <?= number_format($item[4]) ?>
                </td>
                <td>
                    <?= $item[5] ?>
                </td>
                <td>
                    <?= number_format($tt) ?>
                </td>
                <td><a href="">Xóa</a></td>
                <?php $i++;
        } ?>
        </tr>
    <?php } ?>
</table>
<style>
.muahang button{
    margin-left: 30px;
    margin-bottom: 30px;
}
</style>
<div style="text-align: center;" class="muahang">
   <button> <a href="index.php">Tiếp tục mua hàng</a></button>
    <button><a href="index.php?act=thanhtoan">Thanh toán</a></button>
    <button><a href="index.php?act=xoa_giohang">Xóa giỏ hàng</a></button>
</div>
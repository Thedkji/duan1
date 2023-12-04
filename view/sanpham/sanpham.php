<div class="danhmuc">
    <a href="index.php?act=sanpham">Tất Cả</a>
    <?php
    foreach ($listdanhmuc as $dsdm) {
        ?>
        <a href="index.php?act=sanpham&iddm=<?= $dsdm['id_danhmuc'] ?>">
            <?= $dsdm['ten_danhmuc'] ?>
        </a>

    <?php } ?>
</div>
<div id="container_itemsp">
    <?php foreach ($listsanpham as $dssp) {
        extract($dssp);
        ?>
        <form action="index.php?act=add_giohang" method="post">
            <div class="itemsp">
                <input type="hidden" value="<?= $img ?>" name="img">
                <input type="hidden" value="<?= $id_sanpham ?>" name="id_sanpham">
                <input type="hidden" value="<?= $ten_sp ?>" name="ten_sp">
                <input type="hidden" value="<?= $gia_sp ?>" name="gia_sp">
                <input type="hidden" value="<?= $giacu ?>" name="giacu">

                <div class="anhsp">
                    <img src="img/<?= $img ?>" alt="">
                </div>
<<<<<<< HEAD
                <div class="giasp">
                    <p>
                        <?=number_format($gia_sp) ?>  <span style="color: red; font-size: 16px;">đ</span>
                    </p>
                </div>
                <div class="giacu" style=" text-decoration: line-through;">
                    <p>
                        <?=number_format($giacu) ?>  <span style="color: red; font-size: 16px;">đ</span>
                    </p>
                </div>
                <div class="thongtinsanpham">
                   
                    <div class="muahang">
                        <input type="submit" name="add_giohang" value="Thêm vào giỏ" style="background-color: white;width: 250px;height: 40px;border:1px solid gray;text-align:center;"></input>
=======
                <div class="thongtinsp">
                    <div class="tensp">
                        <h4>
                            <a href="index.php?act=chitietsanpham&idsp=<?= $id_sanpham ?>&iddm=<?= $id_danhmuc ?>">
                                <?= $ten_sp ?>
                            </a>
                        </h4>
                    </div>
                    <div class="giasp">
                        <p>
                            <?= number_format($gia_sp) ?> <span style="color: red; font-size: 16px;">đ</span>
                        </p>
                    </div>
                    <div class="giacu" style=" text-decoration: line-through;">
                        <p>
                            <?= number_format($giacu) ?> <span style="color: red; font-size: 16px;">đ</span>
                        </p>
                    </div>
                    <div class="thongtinsanpham">

                        <div class="muahang">
                            <input type="submit" name="add_giohang" value="Thêm vào giỏ"
                                style="background-color: white;width: 250px;height: 40px;border:1px solid gray;text-align:center;"></input>
                        </div>
>>>>>>> 2664dc7 (Phuong update dk tk validate dk 4/12/2023)
                    </div>
                </div>
            </div>
        </form>
    <?php } ?>
</div>

<div id="sanphamcungloai">
    <h2 style="text-align: center;">Sản phẩm bán chạy</h2>
    <div id="container_itemsp">
        <?php foreach ($sp_banchay as $spbc) {
            extract($spbc);
            ?>
            <div class="itemsp">
                <div class="anhsp">
                    <img src="img/<?= $img ?>" alt="">
                </div>
<<<<<<< HEAD
                <div class="giasp">
                    <p>
                        <?= number_format($gia_sp) ?> <span style="color: red; font-size: 16px;">đ</span>
                    </p>
                </div>
                <div class="thongtinsanpham">
                    <div class="muahang">
                    <input type="submit" name="add_giohang" value="Thêm vào giỏ" style="background-color: white;width: 250px;height: 40px;border:1px solid gray;text-align:center;"></input>
=======
                <div class="thongtinsp">
                    <div class="tensp">
                        <h4>
                            <?= $ten_sp ?>
                        </h4>
                    </div>
                    <div class="giasp">
                        <p>
                            <?= number_format($gia_sp) ?> <span style="color: red; font-size: 16px;">đ</span>
                        </p>
                    </div>
                    <div class="thongtinsanpham">
                        <div class="muahang">
                            <input type="submit" name="add_giohang" value="Thêm vào giỏ"
                                style="background-color: white;width: 250px;height: 40px;border:1px solid gray;text-align:center;"></input>
                        </div>
>>>>>>> 2664dc7 (Phuong update dk tk validate dk 4/12/2023)
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<div class="danhmuc">
<a href="index.php?act=sanpham">Tất Cả</a>
<?php
foreach ($listdanhmuc as $dsdm) {
    ?>
            <a href="index.php?act=sanpham&iddm=<?= $dsdm['id_danhmuc']?>">
                <?= $dsdm['ten_danhmuc'] ?>
            </a>
        
<?php } ?>
</div>
<div id="container_itemsp">
    <?php foreach ($listsanpham as $dssp) {
        extract($dssp);
        ?>
        <div class="itemsp">
            <div class="anhsp">
                <img src="img/<?= $img ?>" alt="">
            </div>
            <div class="thongtinsp">
                <div class="tensp">
                    <h4>
                        <?= $ten_sp ?>
                    </h4>
                </div>
                <div class="giasp">
                    <p>
                        <?=number_format($gia_sp) ?>  <span style="color: red; font-size: 16px;">đ</span>
                    </p>
                </div>
                <div class="thongtinsanpham">
                    <div class="muahang">
                        <button><a href="">Mua hàng</a></button>
                    </div>
                    <div class="muahang">
                        <button><a href="">Thêm vào giỏ</a></button>
                    </div>
                </div>
            </div>
        </div>
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
                        <button><a href="">Mua hàng</a></button>
                    </div>
                    <div class="muahang">
                        <button><a href="">Thêm vào giỏ</a></button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
</div>
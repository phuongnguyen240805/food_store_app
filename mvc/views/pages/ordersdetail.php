<div>
    <h3>Chi tiết đơn hàng</h3>
    <?php if (isset($data["orderInfo"])) { ?>
        <h6>Tên khách hàng: <?= $data["orderInfo"]["TENKH"] ?></h6>
        <?php $statusText = "Không xác định";
        switch ($data["orderInfo"]["TRANGTHAI"]) {
            case 0:
                $statusText = "Xác nhận đơn hàng";
                break;
            case 1:
                $statusText = "Đang Vận Chuyển";
                break;
            case 2:
                $statusText = "Giao hàng thành công";
                break;
        }
        ?>
        <h6>Tình trạng đơn hàng: <?= $statusText ?></h6>


    <?php } ?>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">STT</th>
                <th class="text-center">Tên khách hàng</th>
                <th class="text-center">Sản phẩm</th>
                <th class="text-center">Số lượng</th>
                <th class="text-center">Giá</th>
                <th class="text-center">Thành tiền</th>
            </tr>
        </thead>
        <?php
        $count = 1;
        $totalAmount = 0;
        while ($row = mysqli_fetch_array($data["dataordersdetail"])) {
            $subtotal = $row["SOLUONG"] * $row["GIA"];
            $totalAmount += $subtotal;
            ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?= $row["TENKH"] ?></td>
                <td><?= $row["TENSP"] ?></td>
                <td><?= $row["SOLUONG"] ?></td>
                <td><?= number_format($row["GIA"]) ?> VNĐ</td>
                <td><?= number_format($subtotal) ?> VNĐ</td>
            </tr>
            <?php
            $count++;
        }
        ?>
        <tr>
            <td colspan="5" class="text-right"><strong>Tổng cộng:</strong></td>
            <td><?= number_format($totalAmount) ?> VNĐ</td>
        </tr>
    </table>
    <a href="<?php echo BASE_URL ?>admin/adorders" class="btn btn-primary">Quay lại</a>
</div>
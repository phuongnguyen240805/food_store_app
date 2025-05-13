<div>
  <h3>Đơn hàng</h3>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Tên Khách Hàng</th>
        <th class="text-center">SĐT</th>
        <th class="text-center">Địa Chỉ</th>
        <th class="text-center">Tổng</th>
        <th class="text-center">Tình Trạng</th>
        <th class="text-center">Quản lý</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $count = 1;
      while ($row = mysqli_fetch_array($data["dataorders"])) {
        // Determine the status of the order
        switch ($row['TRANGTHAI']) {
          case 0:
            $status = "Xác nhận đơn hàng";
            break;
          case 1:
            $status = "Đang Vận Chuyển";
            break;
          case 2:
            $status = "Giao hàng thành công";
            break;
          default:
            $status = "Không xác định";
        }
        ?>
        <tr>
          <td class="text-center"><?php echo $count; ?></td>
          <td class="text-center"><?= $row["TENKH"] ?></td>
          <td class="text-center"><?= $row["PHONE"] ?></td>
          <td class="text-center"><?= $row["DIACHI"] ?></td>
          <td class="text-center"><?= $row["TOTAL"] ?> VNĐ</td>
          <td class="text-center">
            <form action="<?php echo BASE_URL ?>admin/updatestatus" method="post" style="display:inline;">
              <input type="hidden" name="id" value="<?= $row['ID'] ?>">
              <select name="trangthai" onchange="this.form.submit()">
                <option value="0" <?php if ($row['TRANGTHAI'] == 0)
                  echo 'selected'; ?>>Xác nhận đơn hàng</option>
                <option value="1" <?php if ($row['TRANGTHAI'] == 1)
                  echo 'selected'; ?>>Đang Vận Chuyển</option>
                <option value="2" <?php if ($row['TRANGTHAI'] == 2)
                  echo 'selected'; ?>>Giao hàng thành công</option>
              </select>
            </form>
          </td>

          <td class="text-center">
            <a href="<?php echo BASE_URL ?>admin/ordersdetail/<?= $row['ID'] ?>">Xem chi tiết</a>
          </td>
        </tr>
        <?php
        $count++;
      }
      ?>
    </tbody>
  </table>
</div>
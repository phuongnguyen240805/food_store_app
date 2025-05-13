<div>
  <h2>Thông tin khách hàng</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Tên TK</th>
        <th class="text-center">Tên KH </th>
        <th class="text-center">Mật khẩu</th>
        <th class="text-center">Email</th>
        <!-- <th class="text-center">Joining Date</th> -->
      </tr>
    </thead>
    <?php
    $count = 1;
    while ($row = mysqli_fetch_array($data["tableusersView"])) {
      ?>
      <tr>
        <td><?php echo $row["TENTAIKHOAN"] ?></td>
        <td><?php echo $row["TENKH"] ?></td>
        <td><?php echo $row["MATKHAU"] ?></td>
        <td><?php echo $row["EMAIL"] ?></td>
        <!-- <td><button class="btn btn-danger" style="height:40px" onclick="deleteUser('<?= $row['IDKH'] ?>')">Xóa</button>
        </td> -->
      </tr>
      <?php
      $count += 1;
    }
    ?>

  </table>
  <script>
    function deleteUser(id) {
      if (confirm("Bạn có chắc chắn muốn xóa khách hàng này không?")) {
        window.location.href = "<?php echo BASE_URL ?>/admin/deleteUser/" + id;
      }
    }
  </script>
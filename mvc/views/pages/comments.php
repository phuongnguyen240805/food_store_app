<div>
  <h2>QL bình luận</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Tên Khách Hàng</th>
        <th class="text-center">Bình luận </th>
        <th class="text-center">Thời gian</th>
        <th class="text-center">Xóa</th>
        <!-- <th class="text-center">Joining Date</th> -->
      </tr>
    </thead>
    <?php
    $count = 1;
    while ($row = mysqli_fetch_array($data["commentsview"])) {
      ?>
      <tr>
        <td><?php echo $count ?></td>
        <td><?php echo $row["username"] ?></td>
        <td><?php echo $row["comment"] ?></td>
        <td><?php echo $row["thoigian"] ?></td>
        <td><button class="btn btn-danger" style="height:40px" onclick="deleteComments('<?= $row['id'] ?>')">Xóa</button>
        </td>
      </tr>
      <?php
      $count += 1;
    }
    ?>


  </table>
  <script>
    function deleteComments(id) {
      if (confirm("Bạn có chắc chắn muốn xóa khách hàng này không?")) {
        window.location.href = "<?php BASE_URL ?>deleteComments/" + id;
      }
    }
  </script>
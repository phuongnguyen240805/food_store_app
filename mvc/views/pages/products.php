<div id="productListContainer">
  <h2>Sản phẩm</h2>
  <div class="search-form">
    <form method="POST" action="<?php echo BASE_URL ?>admin/searchProduct">
      <input type="text" name="search_keyword" placeholder="Tìm kiếm sản phẩm..." required>
      <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    </form>
  </div>
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Thêm sản phẩm
  </button>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">STT</th>
        <th class="text-center">Tên sản phẩm</th>
        <th class="text-center">Hình ảnh</th>
        <th class="text-center">Số lượng</th>
        <th class="text-center">Giá sp</th>
        <th class="text-center">Giá cũ</th>
        <th class="text-center">iddm</th>
        <th class="text-center">Xóa</th>
        <th class="text-center" colspan="2">Sửa</th>
      </tr>
    </thead>
    <?php
    $count = 1;
    if (mysqli_num_rows($data["listproducts"]) > 0) {
      while ($row = mysqli_fetch_array($data["listproducts"])) {


        ?>
        <tr>
          <td><?= $count ?></td>
          <td><?= $row["TENSP"] ?></td>
          <td><img src="<?php echo '/workspace/minimart/public/uploads/' . $row['IMG']; ?>" alt="Hình ảnh"
              style="width: 100px; height: 100px; object-fit: cover;"></td>
          <td><?= $row["SOLUONG"] ?></td>
          <td><?= $row["GIASP"] ?> VNĐ</td>
          <td><?= $row["GIACU"] ?> VNĐ</td>
          <td><?= $row["IDDM"] ?></td>
          <td><button class="btn btn-danger" onclick="deleteProduct('<?= $row['IDSP'] ?>', '<?= $row['IDDM'] ?>')">Xóa</button>
          </td>
          <td><button class="btn btn-secondary" style="height:40px"
              onclick="openEditProductModal('<?= $row['IDSP'] ?>', '<?= $row['TENSP'] ?>', '<?= $row['SOLUONG'] ?>', '<?= $row['GIASP'] ?>', '<?= $row['GIACU'] ?>', '<?= $row['IDDM'] ?>',   '/LT-Web/admin_ck/public/uploads/<?= $row['IMG'] ?>')">Sửa</button>
          </td>
        </tr>
        <?php
        $count = $count + 1;
      }
    } else {
      ?>
      <tr>
        <td colspan="9" class="text-center">
          <div class="alert alert-warning" role="alert">
            <strong>Không tồn tại sản phẩm trong kho!</strong>
          </div>
        </td>
      </tr>
      <?php
    }
    ?>
  </table>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sản phẩm mới</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="<?php echo BASE_URL ?>admin/add_Product" enctype='multipart/form-data' method="POST">
            <div class="form-group">
              <label for="name">Tên sản phẩm mới:</label>
              <input type="text" class="form-control" name="p_name" id="p_name" required>
            </div>
            <div class="form-group">
              <label>Số lượng</label>
              <input type="number" class="form-control" name="p_number" id="p_number" min="1" max="1000">
            </div>
            <div class="form-group">
              <label for="price">Giá khuyễn mãi:</label>
              <input type="number" class="form-control" name="p_pricenew" id="p_pricenew" min="1" required>
            </div>

            <!-- <div class="form-group">
              <label for="qty">Description:</label>
              <input type="text" class="form-control" id="p_desc" required>
            </div> -->
            <div class="form-group">
              <label>Giá gốc:</label>
              <input type="number" class="form-control" name="p_priceold" id="p_priceold" min="1" required>
            </div>
            <div class="form-group">
              <label>Danh mục</label>
              <select name="category" id="category">
                <!-- <option disabled selected>Select category</option> -->
                <?php
                while ($row = mysqli_fetch_array($data['nameCategory'])) {
                  echo '<option value="' . $row['ID'] . '">' . $row['TENDM'] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="file">Chọn hình ảnh:</label>
              <input type="file" class="form-control-file" name="file" id="file">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Thêm sản phẩm</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Đóng</button>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal chỉnh sửa sản phẩm -->
  <div class="modal fade" id="editProductModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Sửa sản phẩm</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="editProductForm" enctype="multipart/form-data" action="<?php echo BASE_URL ?>admin/updateProduct"
            method="POST">
            <input type="hidden" name="idsp" id="editProductId">

            <div class="form-group">
              <label for="edit_p_name">Tên sản phẩm:</label>
              <input type="text" class="form-control" name="p_name" id="editProductName" required>
            </div>

            <div class="form-group">
              <label for="edit_p_number">Số lượng:</label>
              <input type="number" class="form-control" name="p_number" id="editProductQuantity" min="1" required>
            </div>

            <div class="form-group">
              <label for="edit_p_pricenew">Giá mới:</label>
              <input type="number" class="form-control" name="p_pricenew" id="editProductNewPrice" min="1" required>
            </div>

            <div class="form-group">
              <label for="edit_p_priceold">Giá cũ:</label>
              <input type="number" class="form-control" name="p_priceold" id="editProductOldPrice" min="1" required>
            </div>

            <div class="form-group">
              <label for="edit_category">Danh mục:</label>
              <select class="form-control" name="category" id="editProductCategory" required>
                <?php
                while ($row = mysqli_fetch_array($data['name2Category'])) {
                  echo '<option value="' . $row['ID'] . '">' . $row['TENDM'] . '</option>';
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Ảnh hiện tại:</label>
              <img id="currentImage" src="" alt="Current Image" style="width: 100px; height: 100px; object-fit: cover;">
              <input type="hidden" name="current_image" id="currentImagePath" value="<?= $row['IMG'] ?>">
            </div>
            <div class="form-group">
              <label for="edit_p_image">Thay đổi ảnh khác(Nếu có):</label>
              <input type="file" class="form-control" name="file" id="editProductImage">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" style="height:40px">Cập nhập sản phẩm</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Đóng</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function deleteProduct(idsp, iddm) {
    if (confirm("Bạn có chắc chắn muốn xóa danh mục này không?")) {
      window.location.href = "<?php echo BASE_URL ?>admin/deleteProduct/" + idsp + "/" + iddm;
    }
  }</script>

<script>
  function openEditProductModal(id, name, quantity, newPrice, oldPrice, category, imagePath) {
    document.getElementById("editProductId").value = id;
    document.getElementById("editProductName").value = name;
    document.getElementById("editProductQuantity").value = quantity;
    document.getElementById("editProductNewPrice").value = newPrice;
    document.getElementById("editProductOldPrice").value = oldPrice;
    document.getElementById("editProductCategory").value = category;
    document.getElementById("currentImage").src = imagePath;
    document.getElementById("currentImagePath").value = imagePath;
    $('#editProductModal').modal('show');
  }
</script>
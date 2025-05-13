
<div >
  <h3>Danh mục</h3>
  <table class="table ">
    <thead>
      <tr>
        <!-- <th class="text-center">S.N</th> -->

        <th class="text-center">STT</th>
        <th class="text-center">Danh mục</th>
        <th class="text-center" >Xóa</th>
        <th class="text-center" >Sửa</th>
      </tr>
    </thead>
    <?php
    $count = 1;
     while($row = mysqli_fetch_array($data["categoriesdata"])){
    ?>
    <tr>
      <td><?php echo $count ?></td>
      <td><a href="<?php echo BASE_URL ?>admin/products/<?=$row['ID']?>"><?=$row["TENDM"]?></a></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="categoryDelete('<?=$row['ID']?>')">Xóa</button></td>
      <td><button class="btn btn-secondary" style="height:40px" onclick="openEditModal('<?=$row['ID']?>', '<?=$row['TENDM']?>')">Sửa</button></td>
    </tr>
      <?php
      $count = $count + 1;
     }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Thêm danh mục
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->

      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Danh mục mới</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <!-- FORM ADD_CATEGORY -->
          <form  enctype='multipart/form-data' action="<?php echo BASE_URL ?>admin/add_Category" method="POST">
            <div class="form-group">
              <label for="c_name">Tên danh mục:</label>
              <input type="text" class="form-control" name="c_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Thêm danh mục</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Đóng</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- Modal chỉnh sửa danh mục -->
 <div class="modal fade" id="editModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Sửa danh mục</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form id="editCategoryForm" enctype="multipart/form-data" action="<?php echo BASE_URL ?>admin/edit_Category" method="POST">
          <input type="hidden" name="id" id="editCategoryId">
          <div class="form-group">
            <label for="edit_name">Tên danh mục</label>
            <input type="text" class="form-control" name="c_name" id="editCategoryName" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-secondary" style="height:40px">Cập nhật</button>
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
function categoryDelete(id) {
  if (confirm("Bạn có chắc chắn muốn xóa danh mục này không?")) {
    window.location.href = "<?php echo BASE_URL ?>admin/deleteCategory/" + id;
  }
}
</script>
<script>
function openEditModal(id, name) {
  document.getElementById("editCategoryId").value = id;
  document.getElementById("editCategoryName").value = name;
  $('#editModal').modal('show');
}
</script>
   
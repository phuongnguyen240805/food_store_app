
function openNav() {
  // Mở sidebar với chiều rộng 20% màn hình
  document.getElementById("mySidebar").style.width = "20%";
  // Dịch phần chính sang phải 20% để nhường chỗ cho sidebar
  document.getElementById("main").style.marginLeft = "20%"; 
  // Dịch phần main-content sang phải 20% nếu có sử dụng 
  document.getElementById("main-content").style.marginLeft = "20%px";
  // Ẩn nút mở khi sidebar mở
  document.getElementById("main").style.display="none";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";  
  document.getElementById("main").style.display="block";  
}
<?php
require_once('entities/nhanvien.class.php');
?>

<?php
include_once('header.php');
$nhanviens = NHANVIEN::list_nhanvien();

echo "<table border=1 cellspacing=0 cellpading=0>";
echo "<tr><th>Mã nhân viên</th><th>Tên nhân viên</th><th>Phái</th><th>Nơi sinh</th><th>Mã phòng</th><th>Lương</th></tr>";

foreach ($nhanviens as $item) {
    echo "<tr>";
    echo "<td>".$item["MaNV"]."</td>";
    echo "<td>".$item["TenNV"]."</td>";
    echo "<td>";
    if ($item["Phai"] == "NAM") {
        echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStVoKlv3fNnK0Vw_27GMSaJ0-yihsM63eOlBGiDyyWGQ&s" alt="Nam" width="50" height="50">';
    } else {
        echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvcPzmRxFEM5bBy1vR0B7-IJt83NDrcHsCWSRAwPt3pQ&s" alt="Nữ" width="50" height="50">';
    }
    echo "</td>";
    echo "<td>".$item["NoiSinh"]."</td>";
    echo "<td>".$item["MaPhong"]."</td>";
    echo "<td>".$item["Luong"]."</td>";
    echo "<td><form method='post' action='Delete_nhanvien.php'>";
   echo "<input type='hidden' name='maNV' value='" . $item["MaNV"] . "' />";
   echo "<input type='submit' name='xoaNV' value='Xóa' />";
   echo "</form></td>";
   
    echo "</tr>";
}


echo "</table>";


include_once('footer.php');

?>
<?php
// Kết nối đến cơ sở dữ liệu đã có
// (Đảm bảo bạn đã kết nối đến cơ sở dữ liệu trước khi sử dụng trang này)

// Xử lý yêu cầu xóa nếu có
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem ID nhân viên được gửi lên từ form POST
    if(isset($_POST['employee_id'])){
        $employee_id = $_POST['employee_id'];

        // Thực hiện truy vấn xóa nhân viên với ID tương ứng
        // Đảm bảo rằng bạn sử dụng câu truy vấn an toàn để tránh tấn công SQL injection
        // Dưới đây là một ví dụ về câu truy vấn xóa:
        // $sql = "DELETE FROM employees WHERE id = $employee_id";
        // Thực thi truy vấn
        // ...

        // Sau khi thực hiện xóa, bạn có thể chuyển hướng người dùng đến một trang khác hoặc hiển thị thông báo thành công
        echo "Nhân viên đã được xóa thành công";
    }else{
        echo "Không có nhân viên được chọn.";
    }
}
?>


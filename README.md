Nguyễn Quốc Nghi_BÁO CÁO HÀNG NGÀY – Ngày 1
Hôm nay:
	Làm quen và kết nối MySQL bằng PDO trong PHP.
	Viết form nhập liệu có các trường: name, email, body.
	Thực hiện kiểm tra dữ liệu nhập vào (empty, htmlspecialchars, filter_input).
	Sửa lỗi cú pháp và logic: điều kiện sai, thiếu method="post", thiếu name="submit".
	Giữ lại dữ liệu người dùng sau khi nhập (dùng value="<?php echo $name; ?>").
	Hiển thị thông báo lỗi dưới từng input bằng Bootstrap (is-invalid, invalid-feedback).
	Kiểm tra kết nối cơ sở dữ liệu và sửa lỗi khi kết nối sai DB hoặc sai mật khẩu.
Sự cố:
	Gửi form không thành công do thiếu method="post" và dùng sai biến $_FILES['PHP_SELF'].
	Kết nối MySQL bị lỗi vì cấu hình sai tên DB (phpappphpapp thay vì phpapp)
Dự kiến:
	Ngày hoàn thiện MySQL và tìm hiểu Template smarty

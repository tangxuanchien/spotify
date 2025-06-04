# 🎵 Spotify Clone

Đây là một website **nghe nhạc trực tuyến** được xây dựng dựa trên ý tưởng từ Spotify.  
Ứng dụng gồm 2 phần chính: **giao diện người dùng để nghe nhạc** và **trang quản trị dành cho admin** để quản lý nội dung.

---

## 🚀 Chức năng

### 👤 Dành cho người dùng
- 🔍 Tìm kiếm bài hát, ca sĩ, album
- ▶️ Phát nhạc, tạm dừng, chuyển bài
- ❤️ Yêu thích bài hát
- 📈 Thống kê lượt nghe từng bài
- 📝 (Tùy chọn) Quản lý playlist
- 🔐 Đăng ký / Đăng nhập

### 🛠️ Dành cho quản trị viên (Admin)
- 📋 Thêm / sửa / xoá bài hát, ca sĩ, album
- 📂 Upload nhạc và ảnh (hỗ trợ Cloudinary)
- 📊 Thống kê lượt nghe, lượt thích
- 👥 Quản lý người dùng (nếu có)

---

## 🏗️ Công nghệ sử dụng

| Thành phần   | Công nghệ               |
|--------------|--------------------------|
| Backend      | Laravel (PHP)            |
| Frontend     | Blade, HTML/CSS, JS      |
| Cơ sở dữ liệu| MySQL                    |
| Lưu trữ      | Laravel Storage |
| Biểu đồ      | Chart.js                 |
| Xác thực     | Xác thực thủ công |

---

## ⚙️ Hướng dẫn cài đặt

```bash
# Clone repository
git clone https://github.com/tangxuanchien/spotify.git
cd spotify

# Cài đặt package
composer install
npm install && npm run dev

# Tạo file cấu hình
cp .env.example .env
php artisan key:generate

# Chạy migrate
php artisan migrate

# Seed dữ liệu mẫu (nếu có)
php artisan db:seed



@extends('layouts.admin.layout')
@section('title', 'Thêm nghệ sĩ')
@section('content')
    <div class="form-container">
        <div class="form-card">
            <div class="form-header">
                <h2>Thêm nghệ sĩ mới</h2>
                <p>Điền thông tin chi tiết để thêm nghệ sĩ</p>
            </div>

            <form action={{ route('admin.artists.store') }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="songTitle" class="form-label required">Tên nghệ sĩ</label>
                        <input type="text" class="form-control" placeholder="Nhập tên nghệ sĩ"
                            name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="songTitle" class="form-label required">Slug</label>
                        <input type="text" class="form-control" placeholder="son-tung-mtp" name="slug"
                            required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Mô tả</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Mô tả về bài hát, câu chuyện đằng sau..."></textarea>
                </div>
                <div class="form-group">
                    <input type="file" accept="image/*" name="image_url" id="image_url">
                    <img id="previewImage" src="" alt="Ảnh xem trước" class="preview-image">
                </div>

                <x-error />
                <div class="form-actions">
                    <button type="button" class="btn btn-secondary">
                        <i class="bi bi-x-circle"></i> Hủy
                    </button>
                    <button type="button" class="btn btn-secondary">
                        <i class="bi bi-save"></i> Lưu nháp
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i> Thêm nghệ sĩ
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('image_url').addEventListener('change', function(event) {
            const file = event.target.files[0]; // Lấy file đầu tiên được chọn

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const preview = document.getElementById('previewImage');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(file); // Chuyển file ảnh thành dạng base64
            }
        });
    </script>
@endsection

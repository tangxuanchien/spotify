@extends('layouts.admin.layout')
@section('title', 'Sửa thông tin nghệ sĩ')
@section('content')
    <div class="form-container">
        <div class="form-card">
            <div class="form-header">
                <h2>Sửa thông tin nghệ sĩ mới</h2>
                <p>Điền thông tin chi tiết để thêm nghệ sĩ</p>
            </div>

            <form action={{ route('admin.artists.update', $artist->id) }} method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-row">
                    <div class="form-group">
                        <label for="songTitle" class="form-label required">Tên nghệ sĩ</label>
                        <input type="text" class="form-control" placeholder="Nhập tên nghệ sĩ" value="{{ $artist->name }}"
                            name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="songTitle" class="form-label required">Slug</label>
                        <input type="text" class="form-control" placeholder="son-tung-mtp" name="slug"
                            value="{{ $artist->slug }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="form-label">Mô tả</label>
                    <textarea class="form-control" name="description" rows="3" placeholder="Mô tả về bài hát, câu chuyện đằng sau...">{{ $artist->description }}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="description" class="form-label">Ảnh trước</label>
                        <img src="{{ $artist->cloudinary_upload->url }}" alt="Artist Image" class="previous-image">
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Ảnh thay thế</label>
                        <img id="previewImage" src="" alt="Ảnh xem trước" class="preview-image">
                        <input type="file" accept="image/*" name="image_url" id="image_url">
                    </div>
                </div>

                <x-error />

                <x-admin.form-actions>Cập nhật nghệ sĩ</x-admin.form-actions>
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

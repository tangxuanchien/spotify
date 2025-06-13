@extends('layouts.admin.layout')
@section('title', 'Quản trị bài hát')
@section('content')
    <div class="admin-content">
        <div class="form-container">
            <div class="form-card">
                <div class="form-header">
                    <h2>Thêm bài hát mới</h2>
                    <p>Điền thông tin chi tiết để thêm bài hát vào thư viện</p>
                </div>

                <form id="addSongForm" action={{ route('admin.songs.store') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- File Upload -->
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">File nhạc</label>
                            <input type="file" accept=".mp3" name="file_url" id="fileInput" required>
                            <div class="form-text">Thời gian đăng tải dự kiến trong vài phút</div>
                            <input id="duration" class="d-none" type="text">
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Ảnh bài hát</label>
                            <img id="previewImage" src="" alt="Ảnh xem trước" class="preview-image">
                            <input type="file" accept="image/*" name="image_url" id="image_url" required>
                        </div>
                    </div>

                    <!-- Basic Information -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name" class="form-label required">Tên bài hát</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập tên bài hát"
                                name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="artist" class="form-label required">Nghệ sĩ</label>
                            <select class="form-select" name="artist_id" id="artist_id" required>
                                <option value="" selected disabled>Chọn nghệ sĩ</option>
                                @foreach ($artists as $artist)
                                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="genre" class="form-label required">Thể loại</label>
                            <select class="form-select" name="genre_id" required>
                                <option value="" selected disabled>Chọn thể loại</option>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="releaseYear" class="form-label required">Năm phát hành</label>
                            <input type="number" class="form-control" id="releaseYear" name="release_year"
                                placeholder="2023" min="2000" max="2025" required>
                        </div>
                        <div class="form-group">
                            <label for="status" class="form-label required">Trạng thái</label>
                            <select class="form-select" name="status" required>
                                <option value="active">Hoạt động</option>
                                <option value="draft">Bản nháp</option>
                                <option value="scheduled">Lên lịch
                                    phát hành</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lyrics" class="form-label">Lời bài hát</label>
                        <textarea class="form-control" id="lyrics" rows="6" name="lyrics" placeholder="Nhập lời bài hát (tùy chọn)"></textarea>
                        <div class="form-text">Lời bài hát sẽ hiển thị khi người dùng phát nhạc</div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Mô tả về bài hát, câu chuyện đằng sau..."></textarea>
                    </div>

                    <div class="form-group">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="tags" placeholder="ballad, tình yêu, buồn" name="tags">
                        <div class="form-text">Phân cách bằng dấu phẩy để thêm nhiều tag</div>
                    </div>

                    <div class="form-row">
                        {{-- <div class="form-group">
                            <label for="visibility" class="form-label required">Quyền truy cập</label>
                            <select class="form-select" id="visibility" required>
                                <option value="public" selected>Công khai</option>
                                <option value="premium">Chỉ Premium</option>
                                <option value="private">Riêng tư</option>
                            </select>
                        </div> --}}
                    </div>
                    <x-error />
                    <x-admin.form-actions>Thêm bài hát</x-admin.form-actions>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('image_url').addEventListener('change', function(event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const preview = document.getElementById('previewImage');
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }

                reader.readAsDataURL(file);
            }
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (!file) return;

            const audio = new Audio();
            audio.preload = 'metadata';

            audio.onloadedmetadata = function() {
                const duration = audio.duration;
                document.getElementById('duration').setAttribute('name', 'duration');
                document.getElementById('duration').setAttribute('value',
                    `${Math.floor(duration / 60)}:${String(Math.floor(duration % 60)).padStart(2, '0')}`);
            };

            audio.src = URL.createObjectURL(file);
        });
    </script>
@endsection

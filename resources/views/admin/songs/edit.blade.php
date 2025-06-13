@extends('layouts.admin.layout')
@section('title', 'Quản trị bài hát')
@section('content')
    <div class="admin-content">
        <div class="form-container">
            <div class="form-card">
                <div class="form-header">
                    <h2>Chỉnh sửa bài hát mới</h2>
                    <p>Điền thông tin chi tiết để chỉnh sửa bài hát vào thư viện</p>
                </div>

                <form action={{ route('admin.songs.update', $song->id) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <!-- Song File Upload -->
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">File trước</label>
                            <audio src="{{ $song->cloudinary_source->url }}" controls></audio>
                        </div>
                        <div class="form-group">
                            <label class="form-label">File nhạc</label>
                            <input type="file" accept=".mp3" name="file_url" id="fileInput">
                            <div class="form-text">Thời gian đăng tải dự kiến trong vài phút</div>
                            <input id="duration" class="d-none" type="text">
                        </div>
                    </div>
                    {{-- Image Upload --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label for="description" class="form-label">Ảnh trước</label>
                            <img src="{{ $song->cloudinary_upload->url }}" alt="Artist Image" class="previous-image">
                        </div>
                        <div class="form-group">
                            <label for="description" class="form-label">Ảnh thay thế</label>
                            <img id="previewImage" src="" alt="Ảnh xem trước" class="preview-image">
                            <input type="file" accept="image/*" name="image_url" id="image_url">
                        </div>
                    </div>

                    <!-- Basic Information -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="songTitle" class="form-label required">Tên bài hát</label>
                            <input type="text" class="form-control" placeholder="Nhập tên bài hát" name="name"
                                value="{{ $song->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="artist" class="form-label required">Nghệ sĩ</label>
                            <select class="form-select" name="artist_id" required>
                                @foreach ($artists as $artist)
                                    <option value={{ $artist->id }}
                                        {{ $artist->id == $song->artist_id ? 'selected' : '' }}>{{ $artist->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="genre" class="form-label required">Thể loại</label>
                            <select class="form-select" id="genre" name="genre_id" required>
                                @foreach ($genres as $genre)
                                    <option value={{ $genre->id }} {{ $genre->id == $song->genre_id ? 'selected' : '' }}>
                                        {{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="releaseYear" class="form-label required">Năm phát hành</label>
                            <input type="number" class="form-control" name="release_year" placeholder="2023" min="2000"
                                max="2025" required value="{{ $song->release_year }}">
                        </div>

                        <div class="form-group">
                            <label for="status" class="form-label required">Trạng thái</label>
                            <select class="form-select" name="status" required>
                                <option value="active" {{ $song->status == 'active' ? 'selected' : '' }}>Hoạt động</option>
                                <option value="draft" {{ $song->status == 'draft' ? 'selected' : '' }}>Bản nháp</option>
                                <option value="scheduled" {{ $song->status == 'scheduled' ? 'selected' : '' }}>Lên lịch
                                    phát hành</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lyrics" class="form-label">Lời bài hát</label>
                        <textarea class="form-control" name="lyrics" rows="6" placeholder="Nhập lời bài hát (tùy chọn)">{{$song->lyrics}}</textarea>
                        <div class="form-text">Lời bài hát sẽ hiển thị khi người dùng phát nhạc</div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="description" rows="3" name="description"
                            placeholder="Mô tả về bài hát, câu chuyện đằng sau...">{{$song->description}}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="tags" name="tags"
                            placeholder="ballad, tình yêu, buồn" value="{{$song->tags}}">
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

                    <x-admin.form-actions>Cập nhật bài hát</x-admin.form-actions>
                </form>
            </div>
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

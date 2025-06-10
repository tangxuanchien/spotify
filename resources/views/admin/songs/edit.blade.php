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

                <form action={{ route('admin.songs.update', [$song['id']]) }} method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <!-- Song File Upload -->
                    <div class="form-group">
                        <label class="form-label required">File nhạc</label>
                        <div class="file-upload-area" onclick="document.getElementById('songFile').click()">
                            <div class="file-upload-icon">
                                <i class="bi bi-cloud-upload"></i>
                            </div>
                            <div class="file-upload-text">Kéo thả file nhạc vào đây hoặc click để chọn</div>
                            <div class="file-upload-hint">Hỗ trợ: MP3, MP4 (Tối đa 50MB)</div>
                        </div>
                        <input type="file" id="songFile" class="file-input" accept=".mp3,.mp4" name="source">
                        <div id="songFileInfo"></div>
                    </div>

                    <!-- Cover Image Upload -->
                    <div class="form-group">
                        <label class="form-label">Ảnh bìa</label>
                        <div class="file-upload-area" onclick="document.getElementById('coverImage').click()">
                            <div class="file-upload-icon">
                                <i class="bi bi-image"></i>
                            </div>
                            <div class="file-upload-text">Kéo thả ảnh bìa vào đây hoặc click để chọn</div>
                            <div class="file-upload-hint">Hỗ trợ: JPG, PNG (Tối đa 5MB, khuyến nghị 1000x1000px)</div>
                        </div>
                        <input type="file" id="coverImage" class="file-input" accept=".jpg,.jpeg,.png" name="image_url">
                        <div id="coverImageInfo"></div>
                    </div>

                    <!-- Basic Information -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="songTitle" class="form-label required">Tên bài hát</label>
                            <input type="text" class="form-control" id="songTitle" placeholder="Nhập tên bài hát"
                                name="name" value="{{ $song->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="artist" class="form-label required">Nghệ sĩ</label>
                            <select class="form-select" id="artist" name="artist_id" required>
                                @foreach ($artists as $artist)
                                    <option value={{ $artist->id }}
                                        {{ $artist->id == $song->artist_id ? 'selected' : '' }}>{{ $artist->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="album" class="form-label">Album</label>
                            <select class="form-select" id="album">
                                <option value="" selected>Chọn album (tùy chọn)</option>
                                <option value="m-tp">m-tp M-TP</option>
                                <option value="sky-tour">Sky Tour</option>
                                <option value="other">Khác (thêm mới)</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="genre" class="form-label required">Thể loại</label>
                            <select class="form-select" id="genre" required>
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
                            <input type="number" class="form-control" id="releaseYear" name="release_year"
                                placeholder="2023" min="2000" max="2025" required value="{{ $song->release_year }}">
                        </div>

                        <div class="form-group">
                            <label for="duration" class="form-label">Thời lượng</label>
                            <input type="text" class="form-control" id="duration" name="duration" placeholder="3:45"
                                pattern="[0-9]:[0-5][0-9]" value="{{ $song->duration }}">
                            <div class="form-text">Định dạng: MM:SS (sẽ tự động phát hiện từ file nhạc)</div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="form-group">
                        <label for="lyrics" class="form-label">Lời bài hát</label>
                        <textarea class="form-control" id="lyrics" rows="6" placeholder="Nhập lời bài hát (tùy chọn)"></textarea>
                        <div class="form-text">Lời bài hát sẽ hiển thị khi người dùng phát nhạc</div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-label">Mô tả</label>
                        <textarea class="form-control" id="description" rows="3"
                            placeholder="Mô tả về bài hát, câu chuyện đằng sau..."></textarea>
                    </div>

                    <!-- Tags -->
                    <div class="form-group">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="tags" placeholder="ballad, tình yêu, buồn">
                        <div class="form-text">Phân cách bằng dấu phẩy để thêm nhiều tag</div>
                    </div>

                    <!-- Status and Visibility -->
                    <div class="form-row">
                        <div class="form-group">
                            <label for="status" class="form-label required">Trạng thái</label>
                            <select class="form-select" id="status" required>
                                <option value="active" selected>Hoạt động</option>
                                <option value="draft">Bản nháp</option>
                                <option value="scheduled">Lên lịch phát hành</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="visibility" class="form-label required">Quyền truy cập</label>
                            <select class="form-select" id="visibility" required>
                                <option value="public" selected>Công khai</option>
                                <option value="premium">Chỉ Premium</option>
                                <option value="private">Riêng tư</option>
                            </select>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <button type="button" class="btn btn-secondary">
                            <i class="bi bi-x-circle"></i> Hủy
                        </button>
                        <button type="button" class="btn btn-secondary">
                            <i class="bi bi-save"></i> Lưu nháp
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-check-circle"></i> Sửa bài hát
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        // File upload handling
        function handleFileUpload(inputId, infoId, fileType) {
            const input = document.getElementById(inputId);
            const infoDiv = document.getElementById(infoId);

            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    displayFileInfo(file, infoDiv);
                }
            });
        }

        function displayFileInfo(file, infoDiv) {
            const fileSize = (file.size / (1024 * 1024)).toFixed(2);
            const fileInfo = `
                <div class="uploaded-file">
                    <div class="uploaded-file-info">
                        <i class="bi bi-file-music uploaded-file-icon"></i>
                        <div>
                            <div class="uploaded-file-name">${file.name}</div>
                            <div class="uploaded-file-size">${fileSize} MB</div>
                        </div>
                    </div>
                    <button type="button" class="remove-file-btn" onclick="removeFile('${infoDiv.id}')">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            `;
            infoDiv.innerHTML = fileInfo;
        }

        function removeFile(infoId) {
            document.getElementById(infoId).innerHTML = '';
            // Reset corresponding file input
            if (infoId === 'songFileInfo') {
                document.getElementById('songFile').value = '';
            } else if (infoId === 'coverImageInfo') {
                document.getElementById('coverImage').value = '';
            }
        }

        // Initialize file upload handlers
        handleFileUpload('songFile', 'songFileInfo', 'audio');
        handleFileUpload('coverImage', 'coverImageInfo', 'image');

        // Drag and drop functionality
        document.querySelectorAll('.file-upload-area').forEach(area => {
            area.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('dragover');
            });

            area.addEventListener('dragleave', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');
            });

            area.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('dragover');

                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    const input = this.nextElementSibling;
                    input.files = files;
                    input.dispatchEvent(new Event('change'));
                }
            });
        });

        // Auto-detect duration from audio file
        document.getElementById('songFile').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file && file.type.startsWith('audio/')) {
                const audio = new Audio();
                audio.src = URL.createObjectURL(file);
                audio.addEventListener('loadedmetadata', function() {
                    const duration = Math.round(audio.duration);
                    const minutes = Math.floor(duration / 60);
                    const seconds = duration % 60;
                    document.getElementById('duration').value =
                        `${minutes}:${seconds.toString().padStart(2, '0')}`;
                    URL.revokeObjectURL(audio.src);
                });
            }
        });
    </script>
@endsection

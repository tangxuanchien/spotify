@extends('layouts.admin.layout')
@section('title', 'Quản trị bài hát')
@section('content')
    <div class="admin-content">
        <div class="quick-actions">
            <a href={{ route('admin.songs.create') }} class="quick-action-card">
                <div class="quick-action-icon">
                    <i class="bi bi-plus-circle"></i>
                </div>
                <div class="quick-action-title">Thêm bài hát</div>
                <div class="quick-action-desc">Upload bài hát mới</div>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Ảnh bài hát</th>
                        <th>Tên bài hát</th>
                        <th>Nghệ sĩ</th>
                        <th>Năm phát hành</th>
                        <th>Độ dài</th>
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($songs as $song)
                        <tr>
                            <td><img src="{{ $song->cloudinary_upload->url }}" alt="Song" class="user-avatar-small"></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div style="font-weight: 600;">{{ $song->name }}</div>
                                        <div style="font-size: 12px; color: var(--text-secondary);">ID: #{{ $song->id }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $song->artist->name }}</td>
                            <td>{{ $song->release_year }}</td>
                            <td><span class="status-badge status-inactive">{{ $song->duration }}</span></td>
                            <td><span class="status-badge {{ $song->status['color'] }}">{{ $song->status['name'] }}</span></td>
                            <td>
                                <div class="d-flex">
                                    <button class="action-btn" title="Xem chi tiết">
                                        <a href={{ route('admin.songs.show', [$song['id']]) }}><i
                                                class="bi bi-eye text-light"></i></a>
                                    </button>
                                    <button class="action-btn" title="Chỉnh sửa">
                                        <a href={{ route('admin.songs.edit', [$song['id']]) }}><i
                                                class="bi bi-pencil text-light"></i></a>
                                    </button>
                                    <form action={{ route('admin.songs.destroy', $song->id) }} method="POST"
                                        onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="action-btn danger" type="submit" title="Xóa">
                                            <i class="bi bi-trash text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="paginate">
                {{ $songs->links() }}
            </div>
        </div>
    </div>
@endsection

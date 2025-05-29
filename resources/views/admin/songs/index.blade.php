@extends('layouts.admin.layout')
@section('title', 'Quản trị bài hát')
@section('content')
    <div class="admin-content">
        <div class="quick-actions">
            <a href={{route('admin.songs.create')}} class="quick-action-card">
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
                            <td>
                                <div class="d-flex align-items-center">
                                    {{-- <img src="/placeholder.svg?height=32&width=32" alt="User" class="user-avatar-small"> --}}
                                    <div>
                                        <div style="font-weight: 600;">{{ $song['name'] }}</div>
                                        <div style="font-size: 12px; color: var(--text-secondary);">ID: #{{ $song['id'] }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $song->artist->name }}</td>
                            <td>{{ $song['release_year'] }}</td>
                            <td><span class="status-badge status-inactive">{{ $song['duration'] }}</span></td>
                            <td><span class="status-badge status-active">Hoạt động</span></td>
                            <td>
                                <button class="action-btn" title="Xem chi tiết">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="action-btn" title="Chỉnh sửa">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="action-btn danger" title="Xóa">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="paginate">
                {{$songs->links()}}
            </div>
        </div>
    </div>
@endsection

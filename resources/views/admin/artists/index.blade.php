@extends('layouts.admin.layout')
@section('title', 'Quản trị nghệ sĩ')
@section('content')
    <div class="admin-content">
        <div class="quick-actions">
            <a href={{ route('admin.artists.create') }} class="quick-action-card">
                <div class="quick-action-icon">
                    <i class="bi bi-plus-circle"></i>
                </div>
                <div class="quick-action-title">Thêm nghệ sĩ</div>
                <div class="quick-action-desc">Upload nghệ sĩ mới</div>
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Ảnh nghệ sĩ</th>
                        <th>Tên nghệ sĩ</th>
                        {{-- <th>Độ dài</th> --}}
                        <th>Trạng thái</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                        <tr>
                            <td><img src="{{ $artist->cloudinary_upload->url }}" alt="Artist" class="user-avatar-small">
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div style="font-weight: 600;">{{ $artist['name'] }}</div>
                                        <div style="font-size: 12px; color: var(--text-secondary);">ID:
                                            #{{ $artist['id'] }}
                                        </div>
                                    </div>
                                </div>
                            </td>
                            {{-- <td><span class="status-badge status-inactive">{{ $artist['duration'] }}</span></td> --}}
                            <td><span class="status-badge status-active">Hoạt động</span></td>
                            <td>
                                <div class="d-flex">
                                    <button class="action-btn" title="Xem chi tiết">
                                        <a href={{ route('admin.artists.show', $artist->id) }}>
                                        <i class="bi bi-eye text-light"></i>
                                        </a>
                                    </button>
                                    <button class="action-btn" title="Chỉnh sửa">
                                        <a href={{ route('admin.artists.edit', $artist->id) }}>
                                            <i class="bi bi-pencil text-light"></i>
                                        </a>
                                    </button>
                                    <form action={{ route('admin.artists.destroy', $artist->id) }} method="POST" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
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
                {{ $artists->links() }}
            </div>
        </div>
    </div>
@endsection

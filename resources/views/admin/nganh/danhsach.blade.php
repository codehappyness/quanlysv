@extends('admin.layouts.index')

@section('title', 'Danh Sách Ngành Đào Tạo')
@section('page_title', 'Quản Lý Ngành')

@section('content')
<div class="container-fluid px-0">
    <!-- Page Header & Action Bar -->
    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 gap-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-info bg-opacity-10 text-info font-mono border border-info border-opacity-25">
                    workspace:2
                </span>
                <h4 class="fw-bold mb-0 text-white">Danh Sách Ngành Đào Tạo</h4>
            </div>
            <p class="text-secondary small mb-0 font-mono">Quản lý và tra cứu danh mục ngành học &bull; Đại học Cửu Long</p>
        </div>
        <div>
            <a href="{{ url('admin/nganh/them') }}" class="btn btn-hypr-primary d-inline-flex align-items-center gap-2">
                <i class="bi bi-plus-lg"></i>
                <span>Thêm Ngành Mới</span>
            </a>
        </div>
    </div>

    <!-- Alert Notifications -->
    @if (session('thongbao'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center font-mono shadow-sm" role="alert">
            <i class="bi bi-check-circle-fill fs-5 me-2 text-success"></i>
            <div>[SUCCESS] {{ session('thongbao') }}</div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center font-mono shadow-sm" role="alert">
            <i class="bi bi-exclamation-triangle-fill fs-5 me-2 text-danger"></i>
            <div>[ERROR] {{ session('error') }}</div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Main Tiling Card & Data Table -->
    <div class="hypr-tile">
        <div class="card-header d-flex flex-wrap align-items-center justify-content-between py-3 gap-2">
            <div class="d-flex align-items-center gap-2">
                <div class="hypr-window-dots">
                    <span></span><span></span><span></span>
                </div>
                <span class="fw-bold text-white font-mono">table.nganh_list</span>
                <span class="badge bg-dark border border-secondary text-info font-mono">
                    {{ count($nganh) }} ngành
                </span>
            </div>
            <div class="search-rice-box" style="width: 260px;">
                <i class="bi bi-search search-icon"></i>
                <input type="text" id="searchInput" placeholder="Lọc theo mã hoặc tên...">
            </div>
        </div>

        <div class="table-responsive">
            <table class="table align-middle mb-0" id="nganhTable">
                <thead>
                    <tr>
                        <th scope="col" style="width: 80px;" class="text-center font-mono">ID</th>
                        <th scope="col" style="width: 200px;" class="font-mono">MÃ NGÀNH</th>
                        <th scope="col">TÊN NGÀNH ĐÀO TẠO</th>
                        <th scope="col" style="width: 170px;" class="text-center font-mono">THAO TÁC</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($nganh as $n)
                        <tr>
                            <td class="text-center">
                                <span class="badge bg-dark border border-secondary text-secondary font-mono">
                                    #{{ $n->ID }}
                                </span>
                            </td>
                            <td>
                                <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 font-mono px-2 py-1">
                                    {{ $n->MANGANH }}
                                </span>
                            </td>
                            <td>
                                <span class="fw-semibold text-white">{{ $n->TENNGANH }}</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="#" class="btn btn-outline-info font-mono" title="Chỉnh sửa ngành">
                                        <i class="bi bi-pencil-square me-1"></i>Sửa
                                    </a>
                                    <a href="#" class="btn btn-outline-danger font-mono" title="Xóa ngành" onclick="return confirm('Bạn có chắc chắn muốn xóa ngành này?')">
                                        <i class="bi bi-trash me-1"></i>Xóa
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-5">
                                <div class="text-muted font-mono">
                                    <i class="bi bi-terminal fs-1 d-block mb-2 text-secondary"></i>
                                    [404] Chưa có dữ liệu ngành đào tạo trong cơ sở dữ liệu.
                                </div>
                                <a href="{{ url('admin/nganh/them') }}" class="btn btn-sm btn-hypr-primary mt-3">
                                    <i class="bi bi-plus-lg me-1"></i>Thêm ngành đầu tiên
                                </a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Live table search
    document.getElementById('searchInput')?.addEventListener('keyup', function() {
        const val = this.value.toLowerCase().trim();
        const rows = document.querySelectorAll('#nganhTable tbody tr');
        rows.forEach(r => {
            const txt = r.innerText.toLowerCase();
            r.style.display = txt.includes(val) ? '' : 'none';
        });
    });
</script>
@endpush

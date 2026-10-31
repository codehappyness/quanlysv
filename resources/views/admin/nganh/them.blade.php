@extends('admin.layouts.index')

@section('title', 'Thêm Ngành Đào Tạo')
@section('page_title', 'Thêm Ngành Mới')

@section('content')
@php
    $errors = $errors ?? new \Illuminate\Support\ViewErrorBag();
@endphp
<div class="container-fluid px-0" style="max-width: 800px;">
    <!-- Page Header -->
    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 gap-3">
        <div>
            <div class="d-flex align-items-center gap-2 mb-1">
                <span class="badge bg-success bg-opacity-10 text-success font-mono border border-success border-opacity-25">
                    workspace:3
                </span>
                <h4 class="fw-bold mb-0 text-white">Thêm Ngành Đào Tạo Mới</h4>
            </div>
            <p class="text-secondary small mb-0 font-mono">Nhập thông tin mã ngành và tên ngành vào hệ thống</p>
        </div>
        <div>
            <a href="{{ url('admin/nganh/danhsach') }}" class="btn btn-sm btn-hypr-outline d-inline-flex align-items-center gap-2 font-mono">
                <i class="bi bi-arrow-left"></i>
                <span>Quay lại danh sách</span>
            </a>
        </div>
    </div>

    <!-- Alert Notifications -->
    @if (session('thongbao'))
        <div class="alert alert-success alert-dismissible fade show d-flex align-items-center font-mono shadow-sm mb-4" role="alert">
            <i class="bi bi-check-circle-fill fs-5 me-2 text-success"></i>
            <div>[SUCCESS] {{ session('thongbao') }}</div>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show font-mono shadow-sm mb-4" role="alert">
            <div class="d-flex align-items-center mb-2">
                <i class="bi bi-exclamation-triangle-fill fs-5 me-2 text-danger"></i>
                <strong>[ERROR] Phát hiện lỗi kiểm tra dữ liệu:</strong>
            </div>
            <ul class="mb-0 ps-3">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Form Window Tile -->
    <div class="hypr-tile">
        <div class="card-header d-flex align-items-center justify-content-between py-3">
            <div class="d-flex align-items-center gap-2">
                <div class="hypr-window-dots">
                    <span></span><span></span><span></span>
                </div>
                <span class="fw-bold text-white font-mono">form.create_nganh</span>
            </div>
            <span class="badge bg-dark border border-secondary text-muted font-mono" style="font-size: 0.65rem;">
                INSERT INTO Nganh
            </span>
        </div>

        <div class="p-4">
            <form action="{{ url('admin/nganh/them') }}" method="POST">
                @csrf

                <!-- Mã Ngành -->
                <div class="mb-3">
                    <label for="manganh" class="form-label font-mono text-secondary small">
                        MÃ NGÀNH <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary border-opacity-25 text-info font-mono">
                            <i class="bi bi-qr-code"></i>
                        </span>
                        <input type="text"
                               class="form-control font-mono @error('manganh') is-invalid @enderror"
                               id="manganh"
                               name="manganh"
                               value="{{ old('manganh') }}"
                               placeholder="VD: CNTT, KTPM, QTKD..."
                               required>
                        @error('manganh')
                            <div class="invalid-feedback font-mono">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-text font-mono text-muted" style="font-size: 0.72rem;">Yêu cầu: 3 - 20 ký tự, là khóa duy nhất (unique).</div>
                </div>

                <!-- Tên Ngành -->
                <div class="mb-4">
                    <label for="tennganh" class="form-label font-mono text-secondary small">
                        TÊN NGÀNH ĐÀO TẠO <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-dark border-secondary border-opacity-25 text-info font-mono">
                            <i class="bi bi-mortarboard"></i>
                        </span>
                        <input type="text"
                               class="form-control @error('tennganh') is-invalid @enderror"
                               id="tennganh"
                               name="tennganh"
                               value="{{ old('tennganh') }}"
                               placeholder="VD: Công nghệ thông tin..."
                               required>
                        @error('tennganh')
                            <div class="invalid-feedback font-mono">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-text font-mono text-muted" style="font-size: 0.72rem;">Yêu cầu: 3 - 100 ký tự.</div>
                </div>

                <hr class="border-secondary border-opacity-25 my-4">

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap align-items-center gap-2">
                    <button type="submit" class="btn btn-hypr-primary d-inline-flex align-items-center gap-2 px-4 font-mono">
                        <i class="bi bi-check-lg"></i>
                        <span>Lưu Dữ Liệu</span>
                    </button>
                    <a href="{{ url('admin/nganh/them') }}" class="btn btn-hypr-outline px-3 font-mono">
                        <i class="bi bi-arrow-counterclockwise me-1"></i>Reset Form
                    </a>
                    <a href="{{ url('admin/nganh/danhsach') }}" class="btn btn-sm btn-outline-secondary px-3 ms-auto font-mono">
                        <i class="bi bi-list-columns me-1"></i>Xem Danh Sách
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

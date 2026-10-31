<aside id="sidebar">
    <!-- Brand Header -->
    <a href="{{ url('testtemplate') }}" class="sidebar-brand">
        <div class="brand-arch-logo">
            <div class="arch-icon-pill">
                <i class="bi bi-terminal-fill"></i>
            </div>
            <div>
                <div class="brand-text lh-1">Arch<span style="color: var(--arch-cyan);">Hypr</span></div>
                <small class="font-mono text-muted" style="font-size: 0.65rem;">qlsv-admin.rice</small>
            </div>
        </div>
        <span class="brand-arch-badge font-mono">v6.12-arch</span>
    </a>

    <!-- Waybar Workspace Switcher (Hyprland Signature) -->
    <div class="workspace-bar">
        <span class="text-muted small me-1"><i class="bi bi-display"></i></span>
        <a href="{{ url('testtemplate') }}" class="ws-item font-mono {{ Request::is('testtemplate') || Request::is('admin') || Request::is('admin/dashboard') ? 'active' : '' }}" title="Workspace 1: Dashboard">1</a>
        <a href="{{ url('admin/nganh/danhsach') }}" class="ws-item font-mono {{ Request::is('admin/nganh/danhsach*') ? 'active' : '' }}" title="Workspace 2: Danh sách ngành">2</a>
        <a href="{{ url('admin/nganh/them') }}" class="ws-item font-mono {{ Request::is('admin/nganh/them*') ? 'active' : '' }}" title="Workspace 3: Thêm ngành">3</a>
        <a href="{{ url('admin/sinhvien') }}" class="ws-item font-mono {{ Request::is('admin/sinhvien*') ? 'active' : '' }}" title="Workspace 4: Sinh viên">4</a>
    </div>

    <!-- Navigation List (Styled directly like the Reference Image) -->
    <div class="sidebar-content">
        <div class="sidebar-heading">Navigation / Tổng Quan</div>
        <div class="nav-item-rice">
            <a href="{{ url('testtemplate') }}" class="nav-link-rice {{ Request::is('testtemplate') || Request::is('admin') || Request::is('admin/dashboard') ? 'active' : '' }}">
                <div class="item-info">
                    <span class="item-title">Dashboard</span>
                    <span class="item-subtitle font-mono">System & Overview</span>
                </div>
                <i class="bi bi-house-door-fill item-icon"></i>
            </a>
        </div>

        <div class="sidebar-heading mt-2">Quản Lý Đào Tạo</div>
        <div class="nav-item-rice">
            <a href="{{ url('admin/nganh/danhsach') }}" class="nav-link-rice {{ Request::is('admin/nganh/danhsach*') ? 'active' : '' }}">
                <div class="item-info">
                    <span class="item-title">Quản Lý Ngành</span>
                    <span class="item-subtitle font-mono">{{ \App\Models\Nganh::count() }} Ngành học</span>
                </div>
                <i class="bi bi-diagram-3-fill item-icon"></i>
            </a>
        </div>
        <div class="nav-item-rice">
            <a href="{{ url('admin/nganh/them') }}" class="nav-link-rice {{ Request::is('admin/nganh/them*') ? 'active' : '' }}">
                <div class="item-info">
                    <span class="item-title">Thêm Ngành Mới</span>
                    <span class="item-subtitle font-mono">Khởi tạo mã ngành</span>
                </div>
                <i class="bi bi-plus-square-fill item-icon"></i>
            </a>
        </div>
        <div class="nav-item-rice">
            <a href="{{ url('admin/sinhvien') }}" class="nav-link-rice {{ Request::is('admin/sinhvien*') ? 'active' : '' }}">
                <div class="item-info">
                    <span class="item-title">Quản Lý Sinh Viên</span>
                    <span class="item-subtitle font-mono">{{ class_exists('\App\Models\SinhVien') ? \App\Models\SinhVien::count() : 0 }} Sinh viên</span>
                </div>
                <i class="bi bi-people-fill item-icon"></i>
            </a>
        </div>

        <div class="sidebar-heading mt-2">System / Hệ Thống</div>
        <div class="nav-item-rice">
            <a href="{{ url('/') }}" class="nav-link-rice" target="_blank">
                <div class="item-info">
                    <span class="item-title">Trang Chủ Client</span>
                    <span class="item-subtitle font-mono">Mở cổng giao diện</span>
                </div>
                <i class="bi bi-box-arrow-up-right item-icon"></i>
            </a>
        </div>
    </div>

    <!-- Sidebar Footer Profile (Rice Terminal User) -->
    <div class="sidebar-footer">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="user-avatar-hypr me-2">
                    <span>>_</span>
                    <span class="online-dot"></span>
                </div>
                <div class="lh-sm text-truncate">
                    <div class="fw-bold text-white small font-mono">arch@hyprland</div>
                    <div class="text-muted font-mono" style="font-size: 0.68rem;">root • wayland</div>
                </div>
            </div>
            <span class="badge bg-dark border border-secondary text-info font-mono" style="font-size: 0.65rem;">
                <i class="bi bi-cpu me-1"></i>0.8%
            </span>
        </div>
    </div>
</aside>

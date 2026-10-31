<header id="top-header">
    <div class="d-flex align-items-center gap-2">
        <!-- Sidebar Toggle Button (Mobile & Desktop) -->
        <button class="btn btn-sm btn-hypr-outline p-2 d-flex align-items-center" type="button" onclick="toggleSidebar()" title="Toggle Sidebar">
            <i class="bi bi-layout-sidebar-inset fs-6"></i>
        </button>

        <!-- Waybar System Info Pills (Hyprland Signature) -->
        <div class="d-none d-md-flex align-items-center gap-2 ms-2">
            <span class="waybar-pill pill-cyan font-mono">
                <i class="bi bi-ubuntu"></i> arch-linux
            </span>
            <span class="waybar-pill pill-green font-mono">
                <i class="bi bi-window-stack"></i> hyprland
            </span>
            <span class="waybar-pill font-mono d-none d-xl-inline-flex">
                <i class="bi bi-memory"></i> RAM: 3.4/16G
            </span>
        </div>
    </div>

    <!-- Center Search Bar (Inspired by Reference Image: "Type anywhere to search" / Rofi Launcher) -->
    <div class="search-rice-box d-none d-sm-block">
        <i class="bi bi-search search-icon"></i>
        <input type="text" id="globalSearchInput" placeholder="Type anywhere to search..." autocomplete="off">
        <span class="kbd-hint font-mono">Ctrl+K</span>
    </div>

    <!-- Right Controls -->
    <div class="d-flex align-items-center gap-2">
        <!-- Quick Action Icons (Like Reference Image: Links, Grid, Bell) -->
        <a href="{{ url('admin/nganh/them') }}" class="btn btn-sm btn-hypr-outline p-2 d-none d-sm-inline-flex" title="Thêm ngành nhanh">
            <i class="bi bi-plus-lg"></i>
        </a>
        <a href="{{ url('admin/nganh/danhsach') }}" class="btn btn-sm btn-hypr-outline p-2 d-none d-sm-inline-flex" title="Quản lý ngành">
            <i class="bi bi-grid-fill"></i>
        </a>

        <!-- Waybar Clock -->
        <span class="waybar-pill pill-purple font-mono d-none d-lg-inline-flex">
            <i class="bi bi-clock"></i> <span id="hyprClock">{{ date('H:i') }}</span>
        </span>

        <!-- User Dropdown (Arch Root Profile) -->
        <div class="dropdown ms-1">
            <button class="btn btn-sm d-flex align-items-center gap-2 border-0 bg-transparent p-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-avatar-hypr">
                    <i class="bi bi-terminal"></i>
                    <span class="online-dot"></span>
                </div>
                <div class="d-none d-md-block text-start lh-1">
                    <span class="d-block fw-bold text-white small font-mono">arch_user</span>
                    <span class="text-muted font-mono" style="font-size: 0.68rem;">wheel • sudo</span>
                </div>
                <i class="bi bi-chevron-down text-muted small ms-1"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 mt-2" style="background: var(--bg-surface-elevated); border: 1px solid var(--border-light) !important; font-size: 0.85rem; min-width: 210px;">
                <li class="px-3 py-2 border-bottom border-secondary border-opacity-25">
                    <div class="small text-muted font-mono">SESSION</div>
                    <div class="fw-bold text-white font-mono">hyprland@wayland</div>
                </li>
                <li><a class="dropdown-item py-2 text-light" href="{{ url('admin/nganh/danhsach') }}"><i class="bi bi-diagram-3 me-2 text-info"></i> Danh sách ngành</a></li>
                <li><a class="dropdown-item py-2 text-light" href="{{ url('admin/nganh/them') }}"><i class="bi bi-plus-circle me-2 text-success"></i> Thêm ngành mới</a></li>
                <li><a class="dropdown-item py-2 text-light" href="{{ url('/') }}" target="_blank"><i class="bi bi-globe me-2 text-warning"></i> Xem trang chủ</a></li>
                <li><hr class="dropdown-divider border-secondary border-opacity-25 my-1"></li>
                <li><a class="dropdown-item py-2 text-danger font-mono" href="#"><i class="bi bi-power me-2"></i> systemctl poweroff</a></li>
            </ul>
        </div>
    </div>
</header>

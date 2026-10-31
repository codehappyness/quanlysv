@extends('admin.layouts.index')

@section('title', 'Arch • Hyprland Rice Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="container-fluid px-0">

    <!-- Top Section: Grid of Tiling Tiles matching Reference Image -->
    <div class="row g-3 mb-3">
        
        <!-- Left Section (Col 8 on Large Screens) -->
        <div class="col-12 col-xl-8">
            <div class="row g-3">
                
                <!-- 1. Hero Tile (Reference: Robot image + Quick Search headline + bottom ticker) -->
                <div class="col-12 col-lg-7">
                    <div class="hypr-tile tile-hero-arch h-100">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="badge bg-light bg-opacity-25 text-white font-mono px-2 py-1" style="font-size: 0.7rem; letter-spacing: 0.05em;">
                                    <i class="bi bi-terminal-fill me-1 text-info"></i> HYPRLAND • WAYLAND
                                </span>
                                <div class="hypr-window-dots">
                                    <span></span><span></span><span></span>
                                </div>
                            </div>
                            <h3 class="fw-bold text-white mb-1" style="letter-spacing: -0.02em;">Type anywhere to get Quick Search</h3>
                            <p class="text-white-50 small mb-0 font-mono">Arch Linux Rice Environment • Quản Lý Sinh Viên</p>
                        </div>

                        <!-- Ticker at bottom like reference image -->
                        <div class="pt-3 border-top border-white border-opacity-10 mt-4">
                            <div class="row g-2 text-center text-sm-start font-mono">
                                <div class="col-4">
                                    <small class="text-white-50 d-block" style="font-size: 0.65rem;">KERNEL</small>
                                    <span class="text-info fw-bold small"><i class="bi bi-arrow-up-short"></i> 6.12-zen</span>
                                </div>
                                <div class="col-4">
                                    <small class="text-white-50 d-block" style="font-size: 0.65rem;">SESSION</small>
                                    <span class="text-warning fw-bold small"><i class="bi bi-check2"></i> 144Hz</span>
                                </div>
                                <div class="col-4">
                                    <small class="text-white-50 d-block" style="font-size: 0.65rem;">NGÀNH ĐÀO TẠO</small>
                                    <span class="text-success fw-bold small"><i class="bi bi-arrow-up-short"></i> {{ \App\Models\Nganh::count() }} NGÀNH</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Violet Tile (Reference: Origami graphic with headline) -->
                <div class="col-12 col-sm-6 col-lg-5">
                    <div class="hypr-tile tile-violet p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-white bg-opacity-20 text-white font-mono" style="font-size: 0.65rem;">PACMAN / AUR</span>
                                <div class="hypr-window-dots"><span></span><span></span><span></span></div>
                            </div>
                            <h4 class="fw-bold mb-2">So much more to see at a glance.</h4>
                            <p class="text-white-50 small mb-0">Tối ưu hoá hiệu năng với hệ thống Tiling Window cực nhẹ và siêu mượt.</p>
                        </div>
                        <div class="pt-3">
                            <a href="{{ url('admin/nganh/them') }}" class="btn btn-sm btn-light fw-bold px-3 font-mono" style="font-size: 0.78rem;">
                                <i class="bi bi-plus-lg me-1"></i>Thêm Ngành Mới
                            </a>
                        </div>
                    </div>
                </div>

                <!-- 3. Blue Tile (Reference: icons top, date, headline) -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="hypr-tile tile-blue p-4 h-100 d-flex flex-column justify-content-between">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <i class="bi bi-geo-alt-fill text-white-50 fs-5"></i>
                            <div class="d-flex gap-2">
                                <i class="bi bi-chat-fill text-white-50"></i>
                                <i class="bi bi-heart-fill text-danger"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-white-50 font-mono">{{ date('d M') }}</div>
                            <h4 class="fw-bold mb-1">A whole new page</h4>
                            <div class="small text-white-50">Hệ thống QL Đào Tạo</div>
                        </div>
                    </div>
                </div>

                <!-- 4. Weather / System Status Tile (Reference: 30° TODAY Feels like rainy) -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="hypr-tile tile-dark p-4 h-100 d-flex flex-column justify-content-between">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="font-mono text-muted small"><i class="bi bi-cpu text-info me-1"></i>CPU TEMP</span>
                            <div class="hypr-window-dots"><span></span><span></span><span></span></div>
                        </div>
                        <div class="my-3">
                            <div class="display-5 fw-bold font-mono text-white mb-0">42°<span class="fs-4 text-info">C</span></div>
                            <div class="font-mono text-secondary small mt-1">COOL & OPTIMAL</div>
                        </div>
                        <div class="small text-muted font-mono">
                            Load average: 0.12, 0.08, 0.02
                        </div>
                    </div>
                </div>

                <!-- 5. Green / Market Status Tile (Reference: Pre-market green box) -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="hypr-tile tile-green p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="small text-white-50 font-mono mb-1">DATABASE SERVER</div>
                            <div class="h5 fw-bold font-mono mb-2">MariaDB 13.0.2</div>
                            <div class="small text-white-50 font-mono">
                                <div>STATUS &bull; OK (0.15ms)</div>
                                <div>TABLES &bull; 11 TOTAL</div>
                            </div>
                        </div>
                        <div class="pt-2 text-end">
                            <span class="badge bg-white bg-opacity-20 font-mono">ONLINE</span>
                        </div>
                    </div>
                </div>

                <!-- 6. Revenue / Mini Chart Card (Reference: Product Revenue graph) -->
                <div class="col-12 col-sm-6">
                    <div class="hypr-tile p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold small text-secondary text-uppercase font-mono">HỆ THỐNG ĐÀO TẠO</span>
                            <span class="font-mono text-info fw-bold">{{ \App\Models\Nganh::count() }}</span>
                        </div>
                        <h4 class="fw-bold text-white mb-3">Ngành Hoạt Động</h4>
                        <!-- SVG Sparkline Wave -->
                        <div style="height: 55px; width: 100%;">
                            <svg viewBox="0 0 300 60" class="w-100 h-100" preserveAspectRatio="none">
                                <defs>
                                    <linearGradient id="cyanGrad" x1="0" y1="0" x2="0" y2="1">
                                        <stop offset="0%" stop-color="#00e5ff" stop-opacity="0.4"/>
                                        <stop offset="100%" stop-color="#00e5ff" stop-opacity="0.0"/>
                                    </linearGradient>
                                </defs>
                                <path d="M0,50 Q40,15 80,35 T160,20 T240,40 T300,10 L300,60 L0,60 Z" fill="url(#cyanGrad)" />
                                <path d="M0,50 Q40,15 80,35 T160,20 T240,40 T300,10" fill="none" stroke="#00e5ff" stroke-width="2.5" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- 7. Today's Sales / Bar Chart Card (Reference: $9,534.58 + vertical red bars) -->
                <div class="col-12 col-sm-6">
                    <div class="hypr-tile p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="fw-bold small text-secondary text-uppercase font-mono">TỔNG SINH VIÊN</span>
                            <div class="hypr-window-dots"><span></span><span></span><span></span></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div>
                                <h3 class="fw-bold text-white font-mono mb-1">{{ class_exists('\App\Models\SinhVien') ? \App\Models\SinhVien::count() : 0 }}</h3>
                                <span class="small text-success font-mono"><i class="bi bi-arrow-up"></i> +12% Niên khoá mới</span>
                            </div>
                            <!-- Mini Vertical Bars (like reference) -->
                            <div class="d-flex align-items-end gap-1" style="height: 50px;">
                                <div style="width: 7px; height: 45%; background: var(--hypr-pink); border-radius: 3px;"></div>
                                <div style="width: 7px; height: 75%; background: var(--hypr-pink); border-radius: 3px;"></div>
                                <div style="width: 7px; height: 30%; background: var(--hypr-pink); border-radius: 3px;"></div>
                                <div style="width: 7px; height: 90%; background: var(--hypr-pink); border-radius: 3px;"></div>
                                <div style="width: 7px; height: 60%; background: var(--hypr-pink); border-radius: 3px;"></div>
                                <div style="width: 7px; height: 100%; background: var(--hypr-pink); border-radius: 3px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Right Section: Table Tile (Reference: TODAY'S TABLE - Pages with $102,967) -->
        <div class="col-12 col-xl-4">
            <div class="hypr-tile p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div>
                            <span class="font-mono text-muted small text-uppercase">DANH SÁCH NHANH</span>
                            <h4 class="fw-bold text-white mb-0">Ngành Học</h4>
                        </div>
                        <div class="text-end font-mono">
                            <div class="h4 fw-bold text-info mb-0">{{ \App\Models\Nganh::count() }}</div>
                            <small class="text-muted">mục tổng cộng</small>
                        </div>
                    </div>

                    <!-- Items List (matching reference table style) -->
                    <div class="list-group list-group-flush border-0">
                        @php
                            $recentNganh = \App\Models\Nganh::take(6)->get();
                        @endphp
                        @forelse($recentNganh as $rn)
                            <div class="list-group-item bg-transparent border-secondary border-opacity-25 px-0 py-2 d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge bg-dark border border-secondary text-info font-mono me-2" style="font-size: 0.7rem;">
                                        #{{ $rn->ID }}
                                    </span>
                                    <div>
                                        <div class="fw-bold text-white small">{{ $rn->TENNGANH }}</div>
                                        <div class="font-mono text-muted" style="font-size: 0.72rem;">CODE: {{ $rn->MANGANH }}</div>
                                    </div>
                                </div>
                                <a href="{{ url('admin/nganh/danhsach') }}" class="btn btn-sm btn-outline-secondary p-1 font-mono" style="font-size: 0.75rem;">
                                    <i class="bi bi-chevron-right"></i>
                                </a>
                            </div>
                        @empty
                            <div class="text-center py-4 text-muted small">
                                Chưa có ngành học nào.
                            </div>
                        @endforelse
                    </div>
                </div>

                <div class="pt-3 border-top border-secondary border-opacity-25 mt-3">
                    <a href="{{ url('admin/nganh/danhsach') }}" class="btn btn-sm btn-hypr-outline w-100 font-mono">
                        <i class="bi bi-list-ul me-1"></i> Xem Tất Cả Ngành
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Bottom Section: Color Sales Tiles & Stock Chart Layout (Reference bottom row) -->
    <div class="row g-3">
        <!-- Teal Weekly Sales Tile (Reference: $14,000 60% Higher) -->
        <div class="col-12 col-md-3">
            <div class="hypr-tile tile-emerald-glow p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <span class="small text-white-50 font-mono text-uppercase">TIẾN ĐỘ ĐÀO TẠO</span>
                    <h2 class="fw-bold font-mono my-2 text-white">98.5%</h2>
                    <span class="badge bg-white bg-opacity-20 font-mono small">Đạt chuẩn kiểm định</span>
                </div>
                <div class="mt-3">
                    <svg viewBox="0 0 100 25" class="w-100" style="height: 35px;">
                        <path d="M0,20 Q25,5 50,15 T100,5" fill="none" stroke="#ffffff" stroke-width="2.5" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Magenta Weekly Sales Tile (Reference: $23,000 purple tile) -->
        <div class="col-12 col-md-3">
            <div class="hypr-tile tile-magenta p-4 h-100 d-flex flex-column justify-content-between">
                <div>
                    <span class="small text-white-50 font-mono text-uppercase">BẢNG MÃ NGÀNH</span>
                    <h2 class="fw-bold font-mono my-2 text-white">CNTT &bull; KTPM</h2>
                    <span class="badge bg-white bg-opacity-20 font-mono small">Đại học Cửu Long</span>
                </div>
                <div class="mt-3 text-white-50 small font-mono">
                    <i class="bi bi-shield-check me-1"></i> Hệ thống sẵn sàng
                </div>
            </div>
        </div>

        <!-- Arch Fastfetch & System Specs Terminal Tile (Reference: Large chart card on right) -->
        <div class="col-12 col-md-6">
            <div class="hypr-tile p-4 h-100 font-mono" style="background: #0f121d;">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-terminal-fill text-info"></i>
                        <span class="fw-bold text-white small">fastfetch@archlinux</span>
                    </div>
                    <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25" style="font-size: 0.65rem;">
                        UPTIME 14d 6h
                    </span>
                </div>
                <div class="row g-2 small text-secondary">
                    <div class="col-6">
                        <div><span class="text-info">OS:</span> Arch Linux x86_64</div>
                        <div><span class="text-info">WM:</span> Hyprland (Wayland)</div>
                        <div><span class="text-info">Shell:</span> zsh 5.9 (omz)</div>
                        <div><span class="text-info">Terminal:</span> kitty</div>
                    </div>
                    <div class="col-6">
                        <div><span class="text-success">Framework:</span> Laravel {{ app()->version() }}</div>
                        <div><span class="text-success">UI Lib:</span> Bootstrap 5.3</div>
                        <div><span class="text-success">Theme:</span> Catppuccin Mocha</div>
                        <div><span class="text-success">Status:</span> Btw I Use Arch</div>
                    </div>
                </div>
                <div class="mt-3 pt-3 border-top border-secondary border-opacity-25 d-flex gap-2">
                    <span class="badge bg-danger p-2" style="width: 14px; height: 14px; border-radius: 50%;"></span>
                    <span class="badge bg-warning p-2" style="width: 14px; height: 14px; border-radius: 50%;"></span>
                    <span class="badge bg-success p-2" style="width: 14px; height: 14px; border-radius: 50%;"></span>
                    <span class="badge bg-info p-2" style="width: 14px; height: 14px; border-radius: 50%;"></span>
                    <span class="badge bg-primary p-2" style="width: 14px; height: 14px; border-radius: 50%;"></span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

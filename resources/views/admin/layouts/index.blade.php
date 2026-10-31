<!DOCTYPE html>
<html lang="vi" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Arch • Hyprland Dashboard') - QL Sinh Viên</title>

    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('assets/vendor/bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="{{ asset('assets/vendor/bootstrap-5/css/bootstrap-icons.min.css') }}" rel="stylesheet">
    <!-- FontAwesome Free -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    
    <!-- Google Fonts: Inter & JetBrains Mono (Arch Rice Essential) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Arch & Hyprland Custom Styles -->
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div id="admin-wrapper">
        <!-- Sidebar Navigation (Rice Dual & Tile Style) -->
        @include('admin.layouts.nav')

        <!-- Mobile Sidebar Overlay -->
        <div id="sidebar-overlay" onclick="toggleSidebar()"></div>

        <!-- Main Content Area -->
        <div id="main-content">
            <!-- Waybar Topbar Header -->
            @include('admin.layouts.header')

            <!-- Page Body Content -->
            <main class="page-body">
                @yield('content')
            </main>

            <!-- Footer -->
            @include('admin.layouts.footer')
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="{{ asset('assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Quick Search & Hyprland Shortcuts -->
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            if (sidebar) sidebar.classList.toggle('show');
            if (overlay) overlay.classList.toggle('show');
        }

        // Global hotkeys (Hyprland style: Ctrl+K or Super+D for search focus)
        document.addEventListener('keydown', function(e) {
            if ((e.ctrlKey && e.key.toLowerCase() === 'k') || (e.altKey && e.key.toLowerCase() === 'd')) {
                e.preventDefault();
                const searchBox = document.getElementById('globalSearchInput');
                if (searchBox) {
                    searchBox.focus();
                    searchBox.select();
                }
            }
            if (e.key === 'Escape') {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebar-overlay');
                if (sidebar && sidebar.classList.contains('show')) {
                    sidebar.classList.remove('show');
                    if (overlay) overlay.classList.remove('show');
                }
            }
        });
        // Live Waybar Clock
        function updateWaybarClock() {
            const clock = document.getElementById('hyprClock');
            if (clock) {
                const now = new Date();
                const h = String(now.getHours()).padStart(2, '0');
                const m = String(now.getMinutes()).padStart(2, '0');
                clock.textContent = `${h}:${m}`;
            }
        }
        setInterval(updateWaybarClock, 1000);
        updateWaybarClock();
    </script>
    @stack('scripts')
</body>

</html>

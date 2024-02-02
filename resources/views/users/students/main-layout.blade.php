@include('mainTemplates.head')

<body class="sb-nav-fixed">
    {{-- Navbar --}}
    @include('users.partials.navbar')
    {{-- Konten --}}
    <div id="layoutSidenav">
        {{-- Sidebar --}}
        <div id="layoutSidenav_nav">
            @include('users.partials.sidebar')
        </div>

        {{-- Main Content --}}
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('students-section')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                @include('users.partials.footer')
            </footer>
        </div>
    </div>
@include('mainTemplates.foot')

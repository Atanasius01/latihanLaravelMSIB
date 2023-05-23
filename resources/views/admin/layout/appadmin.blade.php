@include('admin.layout.top')
@include('admin.layout.menu')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            @yield('content')
            {{-- yield adalah mendeklarasikan yang akan diisi konten ketika yieldnya dipanggil didalam konten masing-masing, contoh yield yang diatas menggunakan value konten --}}
        </div>
    </main>
</div>

@include('admin.layout.bottom')
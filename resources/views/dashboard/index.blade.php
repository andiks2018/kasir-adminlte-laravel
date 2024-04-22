<div class="container-fluid mt-2">
    {{-- bisa matikan auth user dulu dan middle ware di route home --}}
    <div class="alert alert-success">Halo {{ auth()->user()->name }}, selamat datang di halaman admin.</div>
</div>

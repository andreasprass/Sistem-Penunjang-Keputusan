@extends('auth.layout.layouting',[
    'title' => 'Login'
])
@section('main')
    <main>
        <div class="container d-flex">
            <div class="div1 d-flex flex-column justify-content-center">
                <div class="hero-wrap">
                    <h2 class="hero text-wrap">Sistem Informasi Pendukung  Keputusan Dengan Metode Promethee</h2>
                    <p class="hero text-wrap text-justify">Sistem ini dirancang untuk memudahkan pemilihan 
                        pemagang terbaik setiap bulan. Metode yang digunakan adalah metode Promethee multi kriteria untuk menentukan 
                        kandidat terbaik dari berbagai divisi dan departemen. Sistem ini juga mencakup absensi untuk pemagang 
                        dalam proses magan</p>
                </div>
                
            </div>
            <div class="div2 d-flex align-items-center justify-content-center">
                <div class="form-box p-4 rounded">
                    <h5 class="mb-4 mt-3 text-center">Masuk Akun!</h5>
                    <form >
                        <input type="text" class="form-control rounded-pill mb-4" placeholder="Email">
                        <input type="password" class="form-control rounded-pill mb-4 " placeholder="Password">
                        <button type="submit" class="form-control rounded-pill mb-4 btn bg-info text-white">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
@extends('auth.layout.layouting',[
    'title' => 'Masuk'
])
@section('main')
    <main>
        <div class="container d-flex main-wrap">
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
                    @if(session()->has('success'))
                    <div class="alert h-100 alert-success alert-dismissible rounded-pill fade show" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <input type="email" name="email" id="email" class="form-control rounded-pill @error('email') is-invalid mb-0 @enderror" placeholder="Email" value="{{ old('email') }}" >
                        @error('email')
                        <div class="invalid-feedback mb-3 ms-2">
                        {{ $message }}
                        </div>
                        @enderror
                        <input type="password" name="password" id="password"class="form-control rounded-pill  @error('password') is-invalid mb-0 @enderror" placeholder="Password">
                        @error('password')
                        <div class="invalid-feedback mb-3 ms-2">
                        {{ $message }}
                        </div>
                        @enderror
                        <button type="submit" class="form-control rounded-pill mb-4 btn bg-info text-white">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
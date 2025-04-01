@include('layouts.style')

@section('title', 'Login')

<div class="auth-bg d-flex min-vh-90 justify-content-center align-items-center">
    <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
        <div class="col-xl-4 col-lg-5 col-md-6">

            <x-alerts class="center" message="Silahkan Login Terlebih Dahulu" />
            
            <div class="card overflow-hidden text-center h-90 p-xxl-4 p-3 mb-0">
                <a href="index.html" class="auth-brand mb-3">
                    <img src="assets/images/logo_unibamadura.png" alt="dark logo" height="30" class="logo-dark">
                    <img src="assets/images/logo_unibamadura.png" alt="logo light" height="30" class="logo-light">
                </a>

                <form action="{{ route('authentication') }}" method="POST" class="text-start mb-3">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="Masukkan Alamat Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Masukkan Kata Sandi">
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                        </div>

                        <a href="auth-recoverpw.html" class="text-muted border-bottom border-dashed">Lupa Kata Sandi</a>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                </form>

                <p class="text-danger fs-14 mb-4">Tidak Punya Akun? <a href="auth-register.html"
                        class="fw-semibold text-dark ms-1">Daftar Akun!</a></p>

                <p class="mb-0">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © <span
                        class="fw-bold text-decoration-underline text-uppercase text-reset fs-12 ">Rizal</span>
                </p>
            </div>
        </div>
    </div>
</div>

@include('layouts.script')

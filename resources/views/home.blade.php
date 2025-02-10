@extends('layouts.app')

@section('content')
<div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-loginform/draw2.webp"
                class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form action="" method="POST"> {{-- Pastikan route login sesuai --}}
                @csrf
                <!-- User input -->
                <div class="form-outline mb-4">
                    <label class="form-label">User</label>
                    <input type="text" name="user" value="{{ old('user') }}" id="fUser" class="form-control form-control-md"
                        placeholder="Username" required />
                </div>
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" id="fPass" class="form-control form-control-md"
                        placeholder="Password" required />
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" class="btn btn-primary btn-md"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Belum punya akun? <a href=""
                            class="link-danger">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

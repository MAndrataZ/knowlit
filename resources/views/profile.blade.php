@extends('layout.main')

@section('content')

<section id="hero" class="content">
    <div class="container-fluid py-5 col-md-offset-4 col-md-4 col-md-offset-4 profile-form">
        <div class="container">
            <div class="col">
                <h5 class="profile-title">Profile</h5>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('profile.update') }}" method="POST">
                  @csrf
                  @method('PATCH')

                  <!-- Menampilkan Username -->
                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="username" class="form-control" id="Username" value="{{ $user->username }}">
                  </div>

                  <!-- Menampilkan Email -->
                  <div class="form-group py-3">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                  </div>

                  <button type="submit" class="btn btn-action profile-save-button" style="text-decoration:none">Save</button>
              </form>

                <hr>

                <!-- Form untuk Mengubah Password -->
                <h5 class="profile-title">Ubah Password</h5>
                <form action="{{ route('profile.update_password') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label>Password Lama</label>
                        <input type="password" name="current_password" class="form-control" required>
                    </div>

                    <div class="form-group py-2">
                        <label>Password Baru</label>
                        <input type="password" name="new_password" class="form-control" required>
                    </div>

                    <div class="form-group py-2">
                        <label>Konfirmasi Password</label>
                        <input type="password" name="new_password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-action profile-save-button">Ubah Password</button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

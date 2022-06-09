@extends('layout.main')

@section('content')

  <section id="hero" class="content">

    <div class="container-fluid py-5 col-md-offset-4 col-md-4 col-md-offset-4 profile-form">
      <div class="container">
        <div class="col">
          <h5 class="profile-title">Profile</h5>  
        

          <div class = "form-group py-4">
            <input type="file" name="" class="form-control-file">
          </div>

      <!--ISI FORM-->
          <div class = "form-group">
            <label>Username</label>
            <input type="text" name="" class="form-control" id="Username">
          </div>
            
            <div class = "form-group py-3">
                <label>Firstname</label>
                <input type="text" name="" class="form-control">
          </div>

            <div class = "form-group">
              <label>Lastname</label>
              <input type="text" name="" class="form-control">
            </div>

      <!--FORM SELECT-->

          <div class="form-group py-3">
            <label>Gender</label>
            <select class="form-control sex-option">
            <option>Male</option>
            <option>Female</option>
            </select>
          </div>

              <div class = "form-group">
              <label>Date of Birth</label>
              <input type="date" name="" class="form-control">
              </div>

              <div class = "form-group py-3">
              <label>Country</label>
              <input type="text" name="" class="form-control">
              </div>

              <a href="" class="btn btn-action profile-save-button" style="text-decoration:none" type="submit">Save</a>
              </div>
            </div>
      </div>
</section>

@endsection

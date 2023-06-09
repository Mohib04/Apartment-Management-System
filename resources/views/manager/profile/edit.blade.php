@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- User Profile info entry form -->
    <div class="card">
      @if ($errors->any())

      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>

        @endforeach

      </ul>

      @endif
      <div class="card-header">
        <h3>Update Profile</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('profile/'.$profile->id) }}" class="row g-3 needs-validation" novalidate>
          @csrf
          @method('PUT')

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control" id="user_id" value="{{ $profile->user_id }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email :</label>
            <input name="email" type="text" class="form-control" id="email" value="{{ $profile->email }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="name" class="form-label">Name :</label>
            <input name="name" type="text" class="form-control" id="name" value="{{ $profile->name }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="dob" class="form-label">Date Of Birth :</label>
            <input name="dob" type="date" class="form-control" id="dob" value="{{ $profile->dob }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="designation" class="form-label">Designation:</label>
            <input name="designation" type="text" class="form-control" id="designation" value="{{ $profile->designation }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="mobile_number" class="form-label"> Mobile number :</label>
            <input name="mobile_number" type="text" class="form-control" id="mobile_number" value="{{ $profile->mobile_number }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="additional_mobile_number" class="form-label"> Additional mobilenumber :</label>
            <input name="additional_mobile_number" type="text" class="form-control" id="additional_mobile_number" value="{{ $profile->additional_mobile_number }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="passport" class="form-label">Passport no :</label>
            <input name="passport" type="text" class="form-control" id="passport" value="{{ $profile->passport }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="nid" class="form-label">NID no :</label>
            <input name="nid" type="text" class="form-control" id="nid" value="{{ $profile->nid }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="nationality" class="form-label">Nationality :</label>
            <input name="nationality" type="text" class="form-control" id="nationality" value="{{ $profile->nationality }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="gender" class="form-label">Gender :</label>
            <input name="gender" type="text" class="form-control" id="gender" value="{{ $profile->gender }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="permanent_address" class="form-label">Permanent address :</label>
            <input name="permanent_address" type="text" class="form-control" id="permanent_address" value="{{ $profile->permanent_address }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="status" class="form-label">status :</label>
            <input name="status" type="text" class="form-control" id="status" value="{{ $profile->status }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="image_path" class="form-label">image :</label>
            <input name="image_path" type="text" class="form-control" id="image_path" value="{{ $profile->image_path }}" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-12">
            <label for="additional_info">Additional Info</label>
            <textarea name="additional_info" class="form-control"  value="{{ $profile->additional_info }}" id="additional_info"></textarea>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Update Profile</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
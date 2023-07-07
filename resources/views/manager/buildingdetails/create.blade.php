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
        <h3>Add New building Profile</h3>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ url('building') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <div class="col-md-6">
            <label for="user_id" class="form-label">User ID</label>
            <input name="user_id" type="text" class="form-control" id="user_id" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="building_name" class="form-label">building name </label>
            <input name="building_name" type="text" class="form-control" id="building_name" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="division" class="form-label">division</label>
            <input name="division" type="text" class="form-control" id="division" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="district" class="form-label">district</label>
            <input name="district" type="text" class="form-control" id="district" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="city_corporation" class="form-label">city_corporation:</label>
            <input name="city_corporation" type="text" class="form-control" id="city_corporation" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="upazilla" class="form-label"> upazilla</label>
            <input name="upazilla" type="text" class="form-control" id="upazilla" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="post_code" class="form-label">post_code:</label>
            <input name="post_code" type="text" class="form-control" id="post_code" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="area" class="form-label">area :</label>
            <input name="area" type="text" class="form-control" id="area" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="building_no" class="form-label">building_no:</label>
            <input name="building_no" type="text" class="form-control" id="building_no" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-md-6">
            <label for="building_type" class="form-label">building_type :</label>
            <input name="building_type" type="text" class="form-control" id="building_type" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="buliding_floors" class="form-label">buliding_floors :</label>
            <input name="buliding_floors" type="text" class="form-control" id="buliding_floors" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-6">
            <label for="buliding_units" class="form-label">buliding_units :</label>
            <input name="buliding_units" type="text" class="form-control" id="buliding_units" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="building_owners" class="form-label">building_owners :</label>
            <input name="building_owners" type="text" class="form-control" id="building_owners" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>

          <div class="col-md-6">
            <label for="additional_info" class="form-label">additional_info :</label>
            <input name="additional_info" type="text" class="form-control" id="additional_info" value="" required>
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>


          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection

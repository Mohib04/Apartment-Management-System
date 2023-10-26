@extends('user_dashboard.layout.master')
@section('content')

<!-- Bootstrap Select Css -->
<link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Visitor entry form -->
    <div class="card">
      <div class="card-header">
        <h3>Add New Visitor</h3>
      </div>
        
        <div class="card-body">
        <form method="POST" action="{{ route('visitor.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf

          <div class="col-md-6">
                <label for="entry_date" class="form-label"> Entry Date :</label>
                <input name="entry_date" type="date"  class="form-control" id="entry_date" placeholder ="Entry Date" required>
                <div class="invalid-feedback">
                </div>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Name :</label>
                <input name="name" type="text"  class="form-control" id="name" placeholder ="Name" required>
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="phone" class="form-label">Phone :</label>
                <input name="phone" type="number"  class="form-control" id="phone" placeholder ="Phone">
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-6">
                <label for="address" class="form-label">address :</label>
                <input name="address" type="text"  class="form-control" id="address" placeholder ="Address">
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="floor_no" class="form-label">Floor No :</label>
                <select name="floor_no" class="form-select" id="floor_no" required>
                    <option selected disabled value="">--Select Floor--</option>
                    @php foreach($floors as $floor){ @endphp
                       <option value="@php echo $floor->floor_name; @endphp" > @php echo $floor->floor_name; @endphp </option>
                    @php } @endphp
                </select>
                <div class="invalid-feedback">
                </div>
            </div>
          
            <div class="col-md-6">
                <label for="reference" class="form-label">Reference :</label>
                <input name="reference" type="text"  class="form-control" id="phone" placeholder ="Reference">
                <div class="invalid-feedback">
                </div>
            </div>

            <div class="col-md-12">
                <label for="note">Note</label>
                <textarea name="note" class="form-control" placeholder="Note" id="note"></textarea>
                <div class="valid-feedback">
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

<script>
  // Example starter JavaScript for disabling form submissions if there are invalid fields
  (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>

@endsection

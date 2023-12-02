@extends('user_dashboard.layout.master')

@section('content')
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span>
      {{ Breadcrumbs::render('addMonth') }}
    </span>
    <!-- Bill entry form -->
    <div class="card shadow p-3 mb-5 bg-body rounded" style="border:none;">
      <div class="card-body">

        <form method="POST" action="{{ route('month_setup.store') }}" class="row g-3 needs-validation" novalidate>
          @csrf
          <div class="col-md-6">
            <label for="month_name" class="form-label">Month Name :</label>
            <input name="month_name" type="text" class="form-control" id="month_name" value="" required>
          </div>
          @if ($errors->any())
          <p class="text-danger">
            @foreach ($errors->all() as $error)
            {{ $error }}
            @endforeach
          </p>
          @endif
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Showing Employee Salary List -->
<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <!-- Breadcrumbs -->
    <span class="text-center">
      {{ Breadcrumbs::render('Months') }}
    </span>
    <!-- Employee Salary List -->
    <table class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:100%">
      <thead>
        <tr>
          <th>Month Name</th>
          <th class="float-end">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($months as $month)
        <tr>
          <td>{{ $month->month_name }}</td>
          <td>
            <a href="{{ url('month/'.$month->id.'/edit') }}" class="btn btn btn-success rounded-0 float-end"
              type="submit">Edit</a>

            <form method="POST" action="{{ url('month/'.$month->id) }}" class="float-end">
              @csrf
              @method('DELETE')
              <button class="btn btn btn-danger rounded-0" type="submit"><i class="fa fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
      </tfoot>
    </table>
  </div>
</div>


@endsection
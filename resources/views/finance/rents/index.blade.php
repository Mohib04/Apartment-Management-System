@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Breadcrumbs -->
        <span>
            {{ Breadcrumbs::render('rent') }}
        </span>
        <!-- Own Working Space -->
        <table id="example" class="table table-striped shadow p-3 mb-5 bg-body rounded" style="width:98%">
            <thead>
                <tr>
                    <th>#Invoice</th>
                    <th>Renter Name</th>
                    <th>Floor No</th>
                    <th>Unit No</th>
                    <th>Total Rent</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rents as $rent)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $rent->renter_name }}</td>
                    <td>{{ $rent->floor_no }}</td>
                    <td>{{ $rent->unit_no }}</td>
                    <td>{{ $rent->total_rent }}</td>
                    <td>
                        <div style="width:65%" class="row">
                            <div class="col-md-6">
                                <a href="{{ url('rent/'.$rent->id.'/edit') }}" class="btn btn btn-success rounded-0"
                                    type="submit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{ route('rent.destroy',  $rent->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn btn-danger rounded-0" type="submit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#Invoice</th>
                    <th>Renter Name</th>
                    <th>Floor No</th>
                    <th>Unit No</th>
                    <th>Total Rent</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

@endsection
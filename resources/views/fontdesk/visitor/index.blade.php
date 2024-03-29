@extends('user_dashboard.layout.master')
@section('content')
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
        <!-- Own Working Space -->
        <table id="example" class="table table-striped" style="width:98%">
            <thead>
                <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Visitor Purpose</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visitors as $visitor)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $visitor->name }}</td>
                    <td>{{ $visitor->visitor_id }}</td>
                    <td>{{ $visitor->check_in }}</td>
                    <td>{{ $visitor->check_out }} </td>
                    <td>
                        <a onclick="get_visitor_modal(<?php echo $visitor->id; ?>);" class="btn btn-info rounded-0"
                            data-coreui-toggle="modal" data-coreui-target="#exampleModalScrollable"> <i
                                class="fa fa-eye"></i> </a>
                        <a href="{{ url('fontdesk/visitor/'.$visitor->id.'/edit') }}"
                            class="btn btn btn-success rounded-0" type="submit"><i class="fa fa-edit"></i></a>
                        <form action="{{ route('visitor.destroy',  $visitor->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn btn-danger rounded-0" onclick="return confirm ('Are you sure?')"
                                type="submit"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>#SL</th>
                    <th>Name</th>
                    <th>Visitor Purpose</th>
                    <th>Check In</th>
                    <th>Check Out</th>
                    <th>Action</th>
                </tr>
            </tfoot>

        </table>
        {{$visitors->links()}}
    </div>
</div>

<div class="tab-content rounded-bottom">
    <div class="tab-pane p-3 active preview" role="tabpanel">
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" aria-labelledby="exampleModalScrollableTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Detail Information</h5>
                        <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="fn_select_visitor">

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
    integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
    crossorigin="anonymous"></script>

<script type="text/javascript">

    function get_visitor_modal(visitor_id) {

        $('#fn_select_visitor').html('');
        $.ajax({
            url: "{{url('fontdesk/visitor/show')}}",
            type: "POST",
            data: {
                visitor_id: visitor_id,
                _token: '{{csrf_token()}}'
            },
            success: function (response) {
                if (response) {
                    $('#fn_select_visitor').html(response);
                }
            }
        });
    }

    function check_out(visitor_id) {

        $.ajax({
            type: "POST",
            url: "{{url('fontdesk/visitor/check-out')}}",
            type: "POST",
            data: {
                visitor_id: visitor_id,
                _token: '{{csrf_token()}}'
            },
            success: function (response) {
                if (response) {
                    toastr.success('update_success');
                    location.reload();
                } else {
                    toastr.error('update_failed');
                }
            }
        });
    }

</script>
@extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Create at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                @if ($item->status == 1)
                                    <a href="{{ url('admin/contact-us/reviewed/' . $item->id) }}">
                                        <button type="button" class="btn btn-danger btn-sm ">
                                            Reviewed
                                        </button>
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if ($item->status == 0)
                                    <span class="badge bg-warning">Reviewed</span>
                                @elseif ($item->status == 1)
                                    <span class="badge bg-success">New</span>
                                @endif
                            </td>
                            <td>{{$item->first_name}} {{$item->last_name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->message}}</td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Create at</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('script')
<script>
    
</script>
@endsection
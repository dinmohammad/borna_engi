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
                            <th>Image</th>
                            <th>Quote</th>
                            <th>Description</th>
                            <th>Create at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sliders as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                <a href="{{ url('admin/testimonials/edit/' . $item->id) }}">
                                    <button type="button" class="btn btn-primary btn-sm ">
                                        Edit
                                    </button>
                                </a>
                                @if ($item->status == 0)
                                    <a href="{{ url('admin/testimonials/active/' . $item->id) }}">
                                        <button type="button" class="btn btn-success btn-sm ">
                                            Active
                                        </button>
                                    </a>
                                @elseif ($item->status == 1)
                                    <a href="{{ url('admin/testimonials/inActive/' . $item->id) }}">
                                        <button type="button" class="btn btn-danger btn-sm ">
                                            Inactive
                                        </button>
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if ($item->status == 0)
                                    <span class="badge bg-danger">Inactive</span>
                                @elseif ($item->status == 1)
                                    <span class="badge bg-success">Active</span>
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset($item->image) }}" height="150" width="auto" alt="">
                            </td>
                            <td>{{$item->quote}}</td>
                            <td>
                                <div style="width: 200px;white-space: normal;">
                                    <span>Name: {{$item->client_name}}</span> <br>
                                    <span>Position: {{$item->client_position}}</span>
                                </div>
                            </td>
                            <td>{{$item->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Description</th>
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
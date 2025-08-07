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
                            <th>URL</th>
                            <th>Create at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                                <a href="{{ url('admin/youtube-video/edit/' . $item->id) }}">
                                    <button type="button" class="btn btn-primary btn-sm ">
                                        Edit
                                    </button>
                                </a>
                                @if ($item->status == 0)
                                    <a href="{{ url('admin/youtube-video/active/' . $item->id) }}">
                                        <button type="button" class="btn btn-success btn-sm ">
                                            Active
                                        </button>
                                    </a>
                                @elseif ($item->status == 1)
                                    <a href="{{ url('admin/youtube-video/inActive/' . $item->id) }}">
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
                                @php
                                    // Extract video ID from URL
                                    parse_str(parse_url($item->url, PHP_URL_QUERY), $queryParams);
                                    $videoId = $queryParams['v'] ?? null;
                                @endphp

                                @if($videoId)
                                    <iframe width="300" height="180" 
                                            src="https://www.youtube.com/embed/{{ $videoId }}" 
                                            frameborder="0" allowfullscreen>
                                    </iframe>
                                @else
                                    <span class="text-danger">Invalid YouTube URL</span>
                                @endif
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
                            <th>URL</th>
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
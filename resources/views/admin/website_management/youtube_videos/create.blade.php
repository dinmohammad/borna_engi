@extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="row row-cols-1 row-cols-lg-12">
        <div class="card border-top border-0 border-4 border-primary">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div>
                        <i class="bx bxs-user me-1 font-22 text-primary"></i>
                    </div>
                    <h5 class="mb-0 text-primary">New YouTube Video Create</h5>
                </div>
                <hr>

                <form action="{{ route('admin.youtube-video.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf

                    <div class="col-md-12">
                        <label for="youtube_url" class="form-label">Youtube Video URL <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="youtube_url" id="youtube_url" required>
                    </div>

                    <div class="col-12">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Save Banner</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>  
@endsection

@section('script')
<script>
</script>
@endsection

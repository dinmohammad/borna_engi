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
                    <h5 class="mb-0 text-primary">Edit Banner</h5>
                </div>
                <hr>

                <form action="{{ route('admin.banner-slider.update', $sliders->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    @method('PUT')

                    <div class="col-md-12">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $sliders->title) }}">
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="3">{{ old('description', $sliders->description) }}</textarea>
                    </div>

                    <div class="col-12">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" name="image" id="image" type="file" accept="image/*" onchange="previewImage(event)">
                        <div id="image_help" class="form-text text-danger">File ratio 1920x1080</div>
                        <p id="dimension_error" style="color:red;"></p>

                        <div class="mt-2">
                            <img id="image_preview" 
                                 src="{{ $sliders->image ? asset($sliders->image) : '#' }}" 
                                 alt="Preview" 
                                 style="{{ $sliders->image ? '' : 'display: none;' }} max-height: 200px; border: 1px solid #ddd; padding: 5px;">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="1" {{ $sliders->status == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ $sliders->status == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Update Banner</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>  
@endsection

@section('script')
<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('image_preview');
        const error = document.getElementById('dimension_error');

        preview.style.display = 'none';
        error.textContent = '';

        if (input.files && input.files[0]) {
            const file = input.files[0];
            const reader = new FileReader();

            reader.onload = function (e) {
                const img = new Image();
                img.src = e.target.result;

                img.onload = function () {
                    const width = img.width;
                    const height = img.height;

                    if (width === 1920 && height === 1080) {
                        preview.src = img.src;
                        preview.style.display = 'block';
                    } else {
                        alert('Image must be exactly 1920x1080 pixels.');
                        error.textContent = 'Image must be exactly 1920x1080 pixels.';
                        input.value = '';
                    }
                };
            };

            reader.readAsDataURL(file);
        }
    }
</script>
@endsection

@extends('admin.layouts.app')

@section('content')
<div class="page-content">
    <div class="row row-cols-1 row-cols-lg-12">
        <div class="card border-top border-0 border-4 border-warning">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div>
                        <i class="bx bxs-user me-1 font-22 text-warning"></i>
                    </div>
                    <h5 class="mb-0 text-warning">New Testimonials Create</h5>
                </div>
                <hr>

                <form action="{{ route('admin.testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    @method('PUT')

                    <div class="col-12">
                        <label for="client_quote" class="form-label">Quote <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('client_quote') is-invalid @enderror" name="client_quote" id="client_quote" rows="3">{{ old('client_quote', $testimonial->quote) }}</textarea>
                        @error('client_quote')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="client_name" class="form-label">Client Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('client_name') is-invalid @enderror" name="client_name" id="client_name" value="{{ old('client_name', $testimonial->client_name) }}">
                        @error('client_name')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="client_position" class="form-label">Client Position <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('client_position') is-invalid @enderror" name="client_position" id="client_position" value="{{ old('client_position', $testimonial->client_position) }}">
                        @error('client_position')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="col-12">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control @error('image') is-invalid @enderror" name="image" id="image" type="file" accept="image/*" onchange="previewImage(event)">
                        <div id="image_help" class="form-text text-danger">Must be image ratio 314×330</div>
                        <p id="dimension_error" style="color:red;"></p>
                        @error('image')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror

                        <div class="mt-2">
                            <img id="image_preview" 
                                 src="{{ $testimonial->image ? asset($testimonial->image) : '#' }}" 
                                 alt="Preview" 
                                 style="{{ $testimonial->image ? '' : 'display: none;' }} max-height: 200px; border: 1px solid #ddd; padding: 5px;">
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="1" {{ old('status', $testimonial->status) == 1 ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $testimonial->status) == 0 ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary px-5">Update Testimonial</button>
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

                    if (width === 314 && height === 330) {
                        preview.src = img.src;
                        preview.style.display = 'block';
                    } else {
                        alert('Image must be exactly 314*330 pixels.');
                        error.textContent = 'Image must be exactly 1920x1080 pixels.';
                        input.value = ''; // Clear the input
                    }
                };
            };

            reader.readAsDataURL(file);
        }
    }

</script>
@endsection

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
                    <h5 class="mb-0 text-warning">Edit Product</h5>
                </div>
                <hr>

                <form action="{{ route('admin.product.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf
                @method('PUT')

                    <!-- Division -->
                    <div class="col-md-6">
                        <label for="division" class="form-label">Division <span class="text-danger">*</span></label>
                        <select name="division" id="division" class="form-select single-select" required>
                            <option value="">Choose any division...</option>
                            @foreach($divisions as $row)
                                <option value="{{ $row->name }}" data-id="{{ $row->id }}"
                                    {{ (old('division', $product->division) == $row->name) ? 'selected' : '' }}>
                                    {{ $row->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('division')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Districts -->
                    <div class="col-md-6">
                        <label for="districts" class="form-label">District <span class="text-danger">*</span></label>
                        <select name="districts" id="districts" class="form-select single-select" required>
                            @if(old('districts', $product->district))
                                <option value="{{ old('districts', $product->district) }}" selected>{{ old('districts', $product->district) }}</option>
                            @else
                                <option value="">Choose any district...</option>
                            @endif
                        </select>
                        @error('districts')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Type -->
                    <div class="col-md-6">
                        <label for="type" class="form-label">Type <span class="text-danger">*</span></label>
                        <select name="type" id="type" class="form-select" required>
                            <option value="">Choose any type...</option>
                            <option value="Residential Building" {{ old('type', $product->type) == 'Residential Building' ? 'selected' : '' }}>Residential Building</option>
                            <option value="Commercial Building" {{ old('type', $product->type) == 'Commercial Building' ? 'selected' : '' }}>Commercial Building</option>
                            <option value="Landowner Building" {{ old('type', $product->type) == 'Landowner Building' ? 'selected' : '' }}>Landowner Building</option>
                        </select>
                        @error('type')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Land Area -->
                    <div class="col-md-6">
                        <label for="land_Area" class="form-label">Land Area <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="land_Area" id="land_Area" placeholder="e.g. 5 Katha, 3600 sqft" value="{{ old('land_Area', $product->land_area) }}" required>
                        @error('land_Area')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Apartment Size -->
                    <div class="col-md-6">
                        <label for="aprt_size" class="form-label">Apartment Size</label>
                        <input type="number" class="form-control" name="aprt_size" id="aprt_size" placeholder="e.g. 1200 (sqft)" value="{{ old('aprt_size', $product->apartment_size) }}">
                        @error('aprt_size')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Units -->
                    <div class="col-md-6">
                        <label for="units_num" class="form-label">Units</label>
                        <input type="text" class="form-control" name="units_num" id="units_num" placeholder="e.g. 8 units" value="{{ old('units_num', $product->untis) }}">
                        @error('units_num')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Parking -->
                    <div class="col-md-12">
                        <label for="parking" class="form-label">Parking Spaces</label>
                        <input type="number" class="form-control" name="parking" id="parking" placeholder="e.g. 5 parking spaces" value="{{ old('parking', $product->parking_size) }}">
                        @error('parking')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Title -->
                    <div class="col-md-12">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter project title" value="{{ old('title', $product->title) }}" required>
                        @error('title')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="col-12">
                        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="description" id="description" rows="3" placeholder="Write a short description about the project..." required>{{ old('description', $product->descripiton) }}</textarea>
                        @error('description')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Location -->
                    <div class="col-md-12">
                        <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="e.g. Bashundhara, Dhaka" value="{{ old('location', $product->address) }}" required>
                        @error('location')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div class="col-12">
                        <label for="image" class="form-label">Image</label>
                        <input class="form-control" name="image" id="image" type="file" accept="image/*" onchange="previewImage(event)">
                        @error('image')
                            <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror

                        <div class="mt-2">
                            @if($product->image)
                                <img id="image_preview" src="{{ asset($product->image) }}" alt="Preview" style="max-height: 200px; border: 1px solid #ddd; padding: 5px;">
                            @else
                                <img id="image_preview" src="#" alt="Preview" style="display: none; max-height: 200px; border: 1px solid #ddd; padding: 5px;">
                            @endif
                        </div>
                    </div>

                    <!-- Status -->
                    <div class="col-12">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" id="status" class="form-select">
                            <option value="1" {{ old('status', $product->status) == '1' ? 'selected' : '' }}>Active</option>
                            <option value="0" {{ old('status', $product->status) == '0' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>

                    <!-- Submit -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-warning px-5">Update Product</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        // On division change, fetch districts
        $('#division').on('change', function () {
            var dataId = $('#division option:selected').data('id');
            $('#districts').html('<option value="">Loading...</option>');
            if (dataId) {
                $.ajax({
                    url: '/admin/get-districts-by-division/' + dataId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#districts').html('<option value="">Choose any district...</option>');
                        $.each(data, function (key, district) {
                            $('#districts').append('<option value="' + district.name + '">' + district.name + '</option>');
                        });
                    },
                    error: function () {
                        $('#districts').html('<option value="">Failed to load districts</option>');
                    }
                });
            } else {
                $('#districts').html('<option value="">Choose any district...</option>');
            }
        });

        // Trigger change event on page load to load districts for current division
        var initialDataId = $('#division option:selected').data('id');
        if (initialDataId) {
            $('#division').trigger('change');

            // After AJAX completes, set district to old value
            $(document).ajaxComplete(function () {
                var oldDistrict = "{{ old('districts', $product->district) }}";
                if (oldDistrict) {
                    $('#districts').val(oldDistrict);
                }
            });
        }
    });
</script>

<script>
    function previewImage(event) {
        const input = event.target;
        const preview = document.getElementById('image_preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection

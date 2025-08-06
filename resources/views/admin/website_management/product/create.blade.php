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
                    <h5 class="mb-0 text-primary">New Product Create</h5>
                </div>
                <hr>

                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                @csrf

                <!-- Division -->
                <div class="col-md-6">
                    <label for="division" class="form-label">Division <span class="text-danger">*</span></label>
                    <select name="division" id="division" class="form-select" required>
                        <option value="">Choose any division...</option>
                        @foreach($divisions as $row)
                            <option value="{{ $row->name }}" data-id="{{ $row->id }}"
                                {{ old('division') == $row->name ? 'selected' : '' }}>
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
                    <select name="districts" id="districts" class="form-select" required>
                        @if(old('districts'))
                            <option value="{{ old('districts') }}" selected>{{ old('districts') }}</option>
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
                        <option value="Residential Building" {{ old('type') == 'Residential Building' ? 'selected' : '' }}>Residential Building</option>
                        <option value="Commercial Building" {{ old('type') == 'Commercial Building' ? 'selected' : '' }}>Commercial Building</option>
                        <option value="Landowner Building" {{ old('type') == 'Landowner Building' ? 'selected' : '' }}>Landowner Building</option>
                    </select>
                    @error('type')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Land Area -->
                <div class="col-md-6">
                    <label for="land_Area" class="form-label">Land Area <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="land_Area" id="land_Area" placeholder="e.g. 5 Katha, 3600 sqft" value="{{ old('land_Area') }}" required>
                    @error('land_Area')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Apartment Size -->
                <div class="col-md-6">
                    <label for="aprt_size" class="form-label">Apartment Size</label>
                    <input type="number" class="form-control" name="aprt_size" id="aprt_size" placeholder="e.g. 1200 (sqft)" value="{{ old('aprt_size') }}">
                    @error('aprt_size')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Units -->
                <div class="col-md-6">
                    <label for="units_num" class="form-label">Units</label>
                    <input type="text" class="form-control" name="units_num" id="units_num" placeholder="e.g. 8 units" value="{{ old('units_num') }}">
                    @error('units_num')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Parking -->
                <div class="col-md-12">
                    <label for="parking" class="form-label">Parking Spaces</label>
                    <input type="number" class="form-control" name="parking" id="parking" placeholder="e.g. 5 parking spaces" value="{{ old('parking') }}">
                    @error('parking')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Title -->
                <div class="col-md-12">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter project title" value="{{ old('title') }}" required>
                    @error('title')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Write a short description about the project..." required>{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Location -->
                <div class="col-md-12">
                    <label for="location" class="form-label">Location <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="location" id="location" placeholder="e.g. Bashundhara, Dhaka" value="{{ old('location') }}" required>
                    @error('location')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image -->
                <div class="col-12">
                    <label for="image" class="form-label">Image <span class="text-danger">*</span></label>
                    <input class="form-control" name="image" id="image" type="file" accept="image/*" onchange="previewImage(event)" required>
                    @error('image')
                        <p class="text-danger mt-1">{{ $message }}</p>
                    @enderror
                    <div class="mt-2">
                        <img id="image_preview" src="#" alt="Preview" style="display: none; max-height: 200px; border: 1px solid #ddd; padding: 5px;">
                    </div>
                </div>

                <!-- Status -->
                <div class="col-12">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>

                <!-- Submit -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-5">Save Product</button>
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
        $('#division').on('change', function () {
            var dataId = $('#division option:selected').data('id');
            console.log('Selected division data-id:', dataId);
            

            $('#districts').html('<option value="">Loading...</option>');

            if (dataId) {
                $.ajax({
                    url: '/admin/get-districts-by-division/' + dataId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {                        
                        $('#districts').html('<option value="">Choose any district...</option>');
                        $.each(data, function (key, district) {
                            $('#districts').append('<option value="' + district.id + '">' + district.name + '</option>');
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
        } else {
            preview.src = '#';
            preview.style.display = 'none';
        }
    }
</script>


@endsection

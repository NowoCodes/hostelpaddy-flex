<div class="form-group">
  <label for="h_name">Hostel Name</label>
  <input type="text" class="form-control" id="h_name" name="hostel_name" placeholder="Type your hostel name here"
    value="{{ old('hostel_name', $hostel->hostel_name) }}">
</div>
<div class="form-group">
  <label for="hostelname">University Name</label>
  <select id="uni_name" name="uni_name" class="form-control">
    <option value="">Select your university name</option>
    @foreach ($university as $universities)
      <option value="{{ $universities->id }}"
        {{ $universities->id == old('uni_name', $hostel->uni_name) ? 'selected' : '' }}>
        {{ $universities->university }}</option>
    @endforeach
  </select>
</div>

<div class="row">
  <div class="col-6">
    <div class="form-group">
      <label for="state">State</label>
      <select class="form-control" id="state" name="state">
        <option value="">Select one</option>
        @foreach ($state as $states)
          <option value="{{ $states->id }}" {{ $states->id == old('state', $hostel->state) ? 'selected' : '' }}>
            {{ $states->state }}</option>
        @endforeach
      </select>
    </div>

    <div class="form-group">
      <label for="address">Hostel Address</label>
      <input type="text" class="form-control" id="address" name="address" placeholder="What’s your hostel address"
        value="{{ old('address', $hostel->address) }}">
    </div>
  </div>
  <div class="col-6">
    <div class="form-group">
      <label for="city">City or Town</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Enter city or town"
        value="{{ old('city', $hostel->city) }}">
    </div>
    <div class="form-group">
      <label for="price">Hostel Price</label>
      <input type="number" class="form-control" id="price" name="price" placeholder="₦250,000"
        value="{{ old('price', $hostel->price) }}">
    </div>
  </div>
</div>

<div class="form-group">
  <label for="description">Hostel Description</label>
  <textarea class="form-control" name="description" id="description"
    placeholder="Tell us more about your hostel">{{ old('description', $hostel->description) }}</textarea>
</div>

<h5>Hostel Amenities</h5>
<label for="amenities">Select your hostel amenities below</label>
<div class="form-group">
  <select class="form-control mul-select" multiple="true" id="amenities" name="amenities[]">
  {{-- Having problems with passing arrays into a table colum hence commenting the above line --}}
  {{-- <select class="form-control" id="amenities" name="amenities"> --}}
    <option value="">Select Amenities</option>
    @foreach ($amenities as $amenity)
      <option value="{{ $amenity->id }}"
        {{ in_array($amenity->id, old('amenities', $hostel->amenities->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $amenity->name }}

      </option>
    @endforeach
  </select>

<div class="mb-3">
    @foreach ($tags as $tag)
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="tags[]" value="{{ $tag->id }}" {{ in_array($tag->id, old('tags', $hostel->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
            <label class="form-check-label" for="">{{ $tag->name }}</label>
        </div>
    @endforeach
</div>

  <h5 class="mt-2">Upload Hostel Images</h5>
  <div class="custom-file mb-3">
    <label class="custom-file-label" for="image_name">Choose file</label>
    <input type="file" class="custom-file-input" id="image_name" name="image_name"
      value="{{ old('image_name', $hostel->image_name) }}">
  </div>
</div>

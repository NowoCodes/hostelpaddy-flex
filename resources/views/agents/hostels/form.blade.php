<div class="form-group">
  <label for="h_name">Property information</label>
  <input type="text" class="form-control" id="h_name" name="hostel_name" placeholder="Type your hostel name here"
    value="{{ old('hostel_name', $hostel->hostel_name) }}">
</div>

<div class="form-group">
  <label for="state">Location/town</label>
  <select class="form-control" id="state" name="town">
    <option value="Ilorin">Ilorin</option>
    <option value="Ikeja">Ikeja</option>
    <option value="Minna">Minna</option>
    
  </select>
</div>

<div class="form-group">
  <label for="state">Location/states</label>
  <select class="form-control" id="state" name="state">
    <option value="Kwara">Kwara</option>
    <option value="Lagos">Lagos</option>
    <option value="Niger">Niger</option>
  </select>
  </div>

<div class="form-group">
  <label for="fullAdd"></label>
  <input type="text" name="address" placeholder="full address" id="fullAdd" class="form-control">
</div>

<h5>Choose property type</h5>
<div class="form-check">
  <div class="round">
    <input type="radio" name="property" id="flat" > Flats 
    <input type="radio" name="property" id="detached" > Detached <br>
    <input type="radio" name="property" id="duplex" > Duplex
    <input type="radio" name="property" id="bungalow" > Bungalow
  </div>
</div>
<div class="form-group">
  <label for="RoomNum"><h5>Number of rooms</h5></label>
  <select class="form-control" id="RoomNum" name="RoomNum">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    
  </select>
</div>

<h5>Hostel fee</h5>
<div class="row">
  <div class="col-4">
    <div class="form-group">
      <input type="text" name="amount" class="form-control">
    </div>
  </div>
  <div class="col-8">
    <div class="form-group">

      <select class="form-control" id="peroid" name="period">
        <option value="yearly" selected>Yearly</option>
        <option value="monthly">Monthly</option>
        <option value="two-years">2-years</option>
        
      </select>
    </div>
  </div>
</div>

<h5>Amenities</h5>
<p>Select your property features</p>
<div class="form-check">
  <input type="checkbox" name="Amenities[]" id="Bedroom" value="Bedroom"> Bedroom
  <input type="checkbox" name="Amenities[]" id="Bathroom" value="Bathroom"> Bathroom<br>
  <input type="checkbox" name="Amenities[]" id="Dining" value="Dining"> Dining
  <input type="checkbox" name="Amenities[]" id="Wardrobe" value="Wardrobe"> Wardrobe <br>
  <input type="checkbox" name="Amenities[]" id="Kitchen" value="Kichen"> Kitchen
  <input type="checkbox" name="Amenities[]" id="Living area" value="Living area"> Living area
</div>

<br>
<p>Select your property utilities</p>
<div class="form-check">
  <input type="checkbox" value="Electricity" name="utilities[]" id="Electricity" > Electricity
  <input type="checkbox" value="Car park" name="utilities[]" id="Carpark"> Car park<br>
  <input type="checkbox" value="Water" name="utilities[]" id="Water"> Water
  <input type="checkbox" value="Security" name="utilities[]" id="Security"> Security<br>
  <input type="checkbox" value="wifi" name="utilities[]" id="Wifi"> Wifi
</div>

<h5>Hotel rules</h5>
<p>Select hostel rules</p>
<div class="form-check">
  <input type="checkbox" value="Smoking" name="rules[]" id="Smoking" > Smoking
  <input type="checkbox" value="Overnight guest" name="rules[]" id="Overnight guest"> Overnight guest<br>
  <input type="checkbox" value="Pets" name="rules[]" id="pets"> pets
  <input type="checkbox" value="Children" name="rules[]" id="Children"> Children<br>
  <input type="checkbox" value="Events" name="rules[]" id="Events"> Events
</div>

<div class="form-group">
  <h5>Preferred Tenants</h5>
  <input type="text" class="form-control" name="tenantType" placeholder="preferred tenants">
</div>
  <h5 class="mt-2">Upload Hostel Images</h5>
<div class="custom-file mb-3">
  <label class="custom-file-label" for="image_name">Choose file</label>
  <input type="file" class="custom-file-input" id="image_name" name="image_name"
    value="{{ old('image_name', $hostel->image_name) }}">
</div>


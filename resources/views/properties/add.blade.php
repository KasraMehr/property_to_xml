@extends('layout.layouts')

@section('content')
<h2>Add Property</h2>
@if(session('success'))
    <div style="color: green;"><h3>{{ session('success') }}</h3></div>
@endif
<div class="card" style="width: 50rem; background-color: #bee5eb">
    <div class="card-body">
        <form action="{{ route('add-property') }}" method="POST">
            @csrf
            <h2 class="text-center" style="background-color: #343a40; color: #95999c">Property Details & Attributes</h2>
            <hr>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="property_ref_no" class="form-label">Property Reference No</label><br>
                        <input type="text" id="property_ref_no" class="form-control" name="property_ref_no" value="{{ old('property_ref_no') }}"><br>
                    </div>
                    <div class="col">
                        <label for="permit_number" class="form-label">Permit Number</label><br>
                        <input type="text" id="permit_number" name="permit_number" class="form-control" value="{{ old('permit_number') }}"><br>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="property_status" class="form-label">Property Status</label><br>
                        <select id="property_status" name="property_status" class="form-control">
                            <option value="Live" {{ old('property_status') == '1' ? 'selected' : '' }}>Live</option>
                            <option value="Deleted" {{ old('property_status') == '0' ? 'selected' : '' }}>Deleted</option>
                        </select><br>
                    </div>
                    <div class="col">
                        <label for="property_purpose" class="form-label">Property purpose</label><br>
                        <select id="property_purpose" name="property_purpose" class="form-control">
                            <option value="Buy" {{ old('property_status') == '1' ? 'selected' : '' }}>Buy</option>
                            <option value="Rent" {{ old('property_status') == '0' ? 'selected' : '' }}>Rent</option>
                        </select><br>
                    </div>
                </div>
            </div>


            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="property_type" class="form-label">Property Type</label><br>
                        <select id="property_type" name="property_type" class="form-control">
                            <option value="Villa" {{ old('property_type') == '1' ? 'selected' : '' }}>Villa</option>
                            <option value="Apartment" {{ old('property_type') == '0' ? 'selected' : '' }}>Apartment</option>
                            <option value="Office" {{ old('property_type') == '0' ? 'selected' : '' }}>Office</option>
                            <option value="Shop" {{ old('property_type') == '0' ? 'selected' : '' }}>Shop</option>
                            <option value="Warehouse" {{ old('property_type') == '0' ? 'selected' : '' }}>Warehouse</option>
                            <option value="Factory" {{ old('property_type') == '0' ? 'selected' : '' }}>Factory</option>
                            <option value="Labour Camp" {{ old('property_type') == '0' ? 'selected' : '' }}>Labour Camp</option>
                            <option value="Other Commercial" {{ old('property_type') == '0' ? 'selected' : '' }}>Other Commercial</option>
                            <option value="Commercial Building" {{ old('property_type') == '0' ? 'selected' : '' }}>Commercial Building</option>
                            <option value="Residential Floor" {{ old('property_type') == '0' ? 'selected' : '' }}>Residential Floor</option>
                            <option value="Commercial Floor" {{ old('property_type') == '0' ? 'selected' : '' }}>Commercial Floor</option>
                            <option value="Residential Land" {{ old('property_type') == '0' ? 'selected' : '' }}>Residential Land</option>
                            <option value="Commercial Land" {{ old('property_type') == '0' ? 'selected' : '' }}>Commercial Land</option>
                            <option value="Townhouse" {{ old('property_type') == '0' ? 'selected' : '' }}>Townhouse</option>
                            <option value="Residential Building" {{ old('property_type') == '0' ? 'selected' : '' }}>Residential Building</option>
                            <option value="Hotel Apartment" {{ old('property_type') == '0' ? 'selected' : '' }}>Hotel Apartment</option>
                            <option value="Loft Apartment" {{ old('property_type') == '0' ? 'selected' : '' }}>Loft Apartment</option>
                            <option value="Duplex" {{ old('property_type') == '0' ? 'selected' : '' }}>Duplex</option>
                            <option value="Pent House" {{ old('property_type') == '0' ? 'selected' : '' }}>Pent House</option>
                            <option value="Other" {{ old('property_type') == '0' ? 'selected' : '' }}>Other</option>
                        </select><br>
                    </div>
                    <div class="col">
                        <label for="property_size" class="form-label">Property Size</label><br>
                        <input type="number" id="property_size" name="property_size" class="form-control" value="{{ old('property_size') }}"><br>
                    </div>
                </div>
            </div>


            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="property_size_unit" class="form-label">Property Size Unit (SQFT)</label><br>
                        <input type="number" id="property_size_unit" name="property_size_unit" class="form-control" value="{{ old('property_size_unit') }}"><br>
                    </div>
                    <div class="col">
                        <label for="bedrooms" class="form-label">Bedrooms</label><br>
                        <input type="number" id="bedrooms" name="bedrooms" class="form-control" value="{{ old('bedrooms') }}"><br>
                    </div>
                </div>
            </div>


            <div class="container text-center">
                <div class="row mb-2">
                    <div class="col">
                        <label for="bathrooms" class="form-label">Bathrooms</label><br>
                        <input type="number" id="bathrooms" name="bathrooms" class="form-control" value="{{ old('bathrooms') }}"><br>
                    </div>
                    <div class="col">
                        <label for="features" class="form-label">Features</label><br>
                        <input type="text" id="features" name="features" class="form-control" value="{{ old('features') }}"><sub>Separate Features with commas</sub><br>
                    </div>
                </div>
            </div>


            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="off_plan" class="form-label">Off Plan</label><br>
                        <select id="off_plan" name="off_plan" class="form-control">
                            <option value="1" {{ old('off_plan') == '1' ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ old('off_plan') == '0' ? 'selected' : '' }}>No</option>
                        </select><br>
                    </div>
                    <div class="col">
                        <label for="portals" class="form-label">Portals</label><br>
                        <select id="portals" name="portals" class="form-control">
                            <option value="Bayut" {{ old('portals') == '1' ? 'selected' : '' }}>Bayut</option>
                            <option value="Dubizzle" {{ old('portals') == '0' ? 'selected' : '' }}>Dubizzle</option>
                            <option value="Bayut,Dubizzle" {{ old('portals') == '0' ? 'selected' : '' }}>both</option>
                        </select><br>
                    </div>
                    <div class="col">
                        <label for="last_updated" class="form-label">Last Updated</label><br>
                        <input type="date" id="last_updated" name="last_updated" class="form-control" value="{{ old('last_updated') }}"><br>
                    </div>
                </div>
            </div>
            <hr>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="property_title" class="form-label">Property Title</label><br>
                        <input type="text" id="property_title" name="property_title" class="form-control" value="{{ old('property_title') }}"><br>
                    </div>
                    <div class="col">
                        <label for="property_description" class="form-label">Property Description</label><br>
                        <textarea id="property_description" class="form-control" name="property_description">{{ old('property_description') }}</textarea><br>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="property_title_ar" class="form-label">Arabic Property Title</label><br>
                        <input type="text" id="property_title_ar" dir="rtl" name="property_title_ar" class="form-control" value="{{ old('property_title_ar') }}"><br>
                    </div>
                    <div class="col">
                        <label for="property_description_ar" class="form-label">Arabic Property Description</label><br>
                        <textarea id="property_description_ar" class="form-control" dir="rtl" name="property_description_ar">{{ old('property_description_ar') }}</textarea><br>
                    </div>
                </div>
            </div>



            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="price" class="form-label">Price</label><br>
                        <input type="number" id="price" name="price" class="form-control" value="{{ old('price') }}"><br>
                    </div>
                    <div class="col">
                        <label for="rent_frequency" class="form-label">Rent Frequency</label><br>
                        <select id="rent_frequency" name="rent_frequency" class="form-control">
                            <option class="form-control" value="Daily" {{ old('rent_frequency') == '1' ? 'selected' : '' }}>Daily</option>
                            <option class="form-control" value="Weekly" {{ old('rent_frequency') == '0' ? 'selected' : '' }}>Weekly</option>
                            <option class="form-control" value="Monthly" {{ old('rent_frequency') == '0' ? 'selected' : '' }}>Monthly</option>
                            <option class="form-control" value="Yearly" {{ old('rent_frequency') == '0' ? 'selected' : '' }}>Yearly</option>
                        </select><br>
                    </div>
                </div>
            </div>

            <hr><hr>
            <h3 class="text-center" style="background-color: #343a40; color: #95999c">Images & Videos</h3>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="images" class="form-label">Images</label><br>
                        <input type="text" id="images" name="images" class="form-control" value="{{ old('images') }}" multiple><sub>Separate Images with commas</sub><br>
                    </div>
                    <div class="col">
                        <label for="videos" class="form-label">Videos</label><br>
                        <input type="text" id="videos" name="videos" class="form-control" value="{{ old('videos') }}" multiple><sub>Separate Videos with commas</sub><br>
                    </div>
                </div>
            </div>

            <hr><hr>
            <h3 class="text-center" style="background-color: #343a40; color: #95999c">Location</h3>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="city" class="form-label">City</label><br>
                        <input type="text" id="city" name="city" class="form-control" value="{{ old('city') }}"><br>
                    </div>
                    <div class="col">
                        <label for="locality" class="form-label">Locality</label><br>
                        <input type="text" id="locality" name="locality" class="form-control" value="{{ old('locality') }}"><br>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="sub_locality" class="form-label">Sub Locality</label><br>
                        <input type="text" id="sub_locality" name="sub_locality" class="form-control" value="{{ old('sub_locality') }}"><br>
                    </div>
                    <div class="col">
                        <label for="tower_name" class="form-label">Tower Name</label><br>
                        <input type="text" id="tower_name" name="tower_name" class="form-control" value="{{ old('tower_name') }}"><br>
                    </div>
                </div>
            </div>

            <hr><hr>
            <h3 class="text-center" style="background-color: #343a40; color: #95999c">Contact Info</h3>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <label for="listing_agent" class="form-label">Listing Agent</label><br>
                        <input type="text" id="listing_agent" name="listing_agent" class="form-control" value="{{ old('listing_agent') }}"><br>
                    </div>
                    <div class="col">
                        <label for="listing_agent_phone" class="form-label">Listing Agent Phone</label><br>
                        <input type="tel" id="listing_agent_phone" name="listing_agent_phone" class="form-control" value="{{ old('listing_agent_phone') }}"><br>
                    </div>
                    <div class="col">
                        <label for="listing_agent_email" class="form-label">Listing Agent Email</label><br>
                        <input type="email" id="listing_agent_email" name="listing_agent_email" class="form-control" value="{{ old('listing_agent_email') }}"><br><br>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <button type="submit" class="btn btn-success btn-lg">Add Property</button>
            </div>
        </form>
    </div>
</div>

@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Property</title>
</head>
<body>
<h2>Add Property</h2>
@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
<form action="{{ route('add-property') }}" method="POST">
    @csrf

    <label for="property_ref_no">Property Reference No:</label><br>
    <input type="text" id="property_ref_no" name="property_ref_no" value="{{ old('property_ref_no') }}"><br>

    <label for="permit_number">Trakheesi Permit Number:</label><br>
    <input type="text" id="permit_number" name="permit_number" value="{{ old('permit_number') }}"><br>

    <label for="property_status">Property Status:</label><br>
    <input type="text" id="property_status" name="property_status" value="{{ old('property_status') }}"><br>

    <label for="property_purpose">Property Purpose:</label><br>
    <input type="text" id="property_purpose" name="property_purpose" value="{{ old('property_purpose') }}"><br>

    <label for="property_type">Property Type:</label><br>
    <input type="text" id="property_type" name="property_type" value="{{ old('property_type') }}"><br>

    <label for="property_size">Property Size:</label><br>
    <input type="number" id="property_size" name="property_size" value="{{ old('property_size') }}"><br>

    <label for="property_size_unit">Property Size Unit:</label><br>
    <input type="text" id="property_size_unit" name="property_size_unit" value="{{ old('property_size_unit') }}"><br>

    <label for="bedrooms">Bedrooms:</label><br>
    <input type="number" id="bedrooms" name="bedrooms" value="{{ old('bedrooms') }}"><br>

    <label for="bathrooms">Bathrooms:</label><br>
    <input type="number" id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}"><br>

    <label for="features">Features:</label><br>
    <input type="text" id="features" name="features" value="{{ old('features') }}"><br>

    <label for="off_plan">Off Plan:</label><br>
    <select id="off_plan" name="off_plan">
        <option value="1" {{ old('off_plan') == '1' ? 'selected' : '' }}>Yes</option>
        <option value="0" {{ old('off_plan') == '0' ? 'selected' : '' }}>No</option>
    </select><br>

    <label for="portals">Portals:</label><br>
    <input type="text" id="portals" name="portals" value="{{ old('portals') }}"><br>

    <label for="last_updated">Last Updated:</label><br>
    <input type="date" id="last_updated" name="last_updated" value="{{ old('last_updated') }}"><br>

    <label for="property_title">Property Title:</label><br>
    <input type="text" id="property_title" name="property_title" value="{{ old('property_title') }}"><br>

    <label for="property_description">Property Description:</label><br>
    <textarea id="property_description" name="property_description">{{ old('property_description') }}</textarea><br>

    <label for="property_title_ar">Arabic Property Title:</label><br>
    <input type="text" id="property_title_ar" name="property_title_ar" value="{{ old('property_title_ar') }}"><br>

    <label for="property_description_ar">Arabic Property Description:</label><br>
    <textarea id="property_description_ar" name="property_description_ar">{{ old('property_description_ar') }}</textarea><br>

    <label for="price">Price:</label><br>
    <input type="number" id="price" name="price" value="{{ old('price') }}"><br>

    <label for="rent_frequency">Rent Frequency:</label><br>
    <input type="text" id="rent_frequency" name="rent_frequency" value="{{ old('rent_frequency') }}"><br>

    <label for="images">Images:</label><br>
    <input type="text" id="images" name="images" value="{{ old('images') }}"><br>

    <label for="videos">Videos:</label><br>
    <input type="text" id="videos" name="videos" value="{{ old('videos') }}"><br>

    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" value="{{ old('city') }}"><br>

    <label for="locality">Locality:</label><br>
    <input type="text" id="locality" name="locality" value="{{ old('locality') }}"><br>

    <label for="sub_locality">Sub Locality:</label><br>
    <input type="text" id="sub_locality" name="sub_locality" value="{{ old('sub_locality') }}"><br>

    <label for="tower_name">Tower Name:</label><br>
    <input type="text" id="tower_name" name="tower_name" value="{{ old('tower_name') }}"><br>

    <label for="listing_agent">Listing Agent:</label><br>
    <input type="text" id="listing_agent" name="listing_agent" value="{{ old('listing_agent') }}"><br>

    <label for="listing_agent_phone">Listing Agent Phone:</label><br>
    <input type="text" id="listing_agent_phone" name="listing_agent_phone" value="{{ old('listing_agent_phone') }}"><br>

    <label for="listing_agent_email">Listing Agent Email:</label><br>
    <input type="email" id="listing_agent_email" name="listing_agent_email" value="{{ old('listing_agent_email') }}"><br>

    <button type="submit">Add Property</button>
</form>

</body>
</html>

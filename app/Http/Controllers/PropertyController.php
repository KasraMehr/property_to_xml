<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    public function show(){
        return view('properties.add');
    }

    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'property_ref_no' => 'required|string|max:255',
            'permit_number' => 'nullable|string|max:255',
            'property_status' => 'nullable|string|max:255',
            'property_purpose' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'property_size' => 'nullable|numeric',
            'property_size_unit' => 'nullable|string|max:255',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'off_plan' => 'nullable|boolean',
            'portals' => 'nullable|string|max:255',
            'last_updated' => 'nullable|date',
            'property_title' => 'required|string|max:255',
            'property_description' => 'nullable|string',
            'property_title_ar' => 'nullable|string|max:255',
            'property_description_ar' => 'nullable|string',
            'price' => 'nullable|numeric',
            'rent_frequency' => 'nullable|string|max:255',
            'images' => 'nullable|string',
            'videos' => 'nullable|string',
            'city' => 'nullable|string|max:255',
            'locality' => 'nullable|string|max:255',
            'sub_locality' => 'nullable|string|max:255',
            'tower_name' => 'nullable|string|max:255',
            'listing_agent' => 'nullable|string|max:255',
            'listing_agent_phone' => 'nullable|string|max:255',
            'listing_agent_email' => 'nullable|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new Property instance and save it to the database
        Property::create($request->all());

        $properties = Property::all();
        foreach ($properties as $property)
        {
            if ($property->property_ref_no == $request['property_ref_no']){
                $property->property_status = 'Deleted';
                $property->save();
            }
        }

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Property added successfully!');
    }

    // Method for updating an existing property
    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'property_ref_no' => 'required|string|max:255',
            'permit_number' => 'nullable|string|max:255',
            'property_status' => 'nullable|string|max:255',
            'property_purpose' => 'required|string|max:255',
            'property_type' => 'required|string|max:255',
            'property_size' => 'nullable|numeric',
            'property_size_unit' => 'nullable|string|max:255',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer',
            'off_plan' => 'nullable|boolean',
            'portals' => 'nullable|string|max:255',
            'last_updated' => 'nullable|date',
            'property_title' => 'required|string|max:255',
            'property_description' => 'nullable|string',
            'property_title_ar' => 'nullable|string|max:255',
            'property_description_ar' => 'nullable|string',
            'price' => 'nullable|numeric',
            'rent_frequency' => 'nullable|string|max:255',
            'images' => 'nullable|string',
            'videos' => 'nullable|string',
            'city' => 'nullable|string|max:255',
            'locality' => 'nullable|string|max:255',
            'sub_locality' => 'nullable|string|max:255',
            'tower_name' => 'nullable|string|max:255',
            'listing_agent' => 'nullable|string|max:255',
            'listing_agent_phone' => 'nullable|string|max:255',
            'listing_agent_email' => 'nullable|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the property by ID
        $property = Property::find($id);

        // If property not found, redirect back with an error message
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found!');
        }

        // Update property attributes based on the form data
        $property->update($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Property updated successfully!');
    }

    // Method for deleting an existing property
    public function delete($id)
    {
        $property = Property::find($id);

        // If property not found, redirect back with an error message
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found!');
        }

        // Delete the property
        $property->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Property deleted successfully!');

    }


    public function generateXmlFeed()
    {
        // Fetch all properties from the database
        $properties = Property::all();
        // Check if all the properties have been generated or not
        $properties_generated_before = true;

        // Start building the XML content
        $xmlString = '<?xml version="1.0" encoding="UTF-8"?>';
        $xmlString .= '<Properties>';

        // Loop through each property and add it to the XML content
        foreach ($properties as $property) {
            if(!$property->xml_generated_status){
                $property->xml_generated_status = true;
                $property->save();
                $properties_generated_before = false;
            }
            else{
                continue;
            }
            $features_list  = explode(',',$property->features);
            $images_list = explode(',', $property->images);
            $videos_list = explode(',', $property->videos);
            $xmlString .= '<Property>';
            // Add property attributes as XML elements
            $xmlString .= '<Property_Ref_No><![CDATA[' . $property->property_ref_no . ']]></Property_Ref_No>';
            $xmlString .= '<Permit_Number><![CDATA[' . $property->permit_number . ']]></Permit_Number>';
            $xmlString .= '<Property_Status><![CDATA[' . $property->property_status . ']]></Property_Status>';
            $xmlString .= '<Property_purpose><![CDATA[' . $property->property_purpose . ']]></Property_purpose>';
            $xmlString .= '<Property_Type><![CDATA[' . $property->property_type . ']]></Property_Type>';
            $xmlString .= '<Property_Size>' . $property->property_size . '</Property_Size>';
            $xmlString .= '<Property_Size_Unit><![CDATA[' . $property->property_size_unit . ']]></Property_Size_Unit>';
            $xmlString .= '<Bedrooms>' . $property->bedrooms . '</Bedrooms>';
            $xmlString .= '<Bathrooms>' . $property->bathrooms . '</Bathrooms>';
            $xmlString .= '<Features>';
            foreach ($features_list as $feature){
                $xmlString .= '<Feature><![CDATA[' . $feature . ']]></Feature>';
            }
            $xmlString .= '</Features>';
            $xmlString .= '<Off_plan>' . $property->off_plan . '</Off_plan>';
            $xmlString .= '<Portals>';
            if($property->portals == "Bayut,Dubizzle"){
                $xmlString .= '<Portal><![CDATA[' . 'Bayut' . ']]></Portal>';
                $xmlString .= '<Portal><![CDATA[' . 'Dubizzle' . ']]></Portal>';
            }
            else{
                $xmlString .= '<Portal><![CDATA[' . $property->portals . ']]></Portal>';
            }
            $xmlString .= '</Portals>';
            $xmlString .= '<Last_Updated>' . $property->last_updated . '</Last_Updated>';
            $xmlString .= '<Property_Title><![CDATA[' . $property->property_title . ']]></Property_Title>';
            $xmlString .= '<Property_Description><![CDATA[' . $property->property_description . ']]></Property_Description>';
            $xmlString .= '<Property_Title_AR><![CDATA[' . $property->property_title_ar . ']]></Property_Title_AR>';
            $xmlString .= '<Property_Description_AR><![CDATA[' . $property->property_description_ar . ']]></Property_Description_AR>';
            $xmlString .= '<Price>' . $property->price . '</Price>';
            $xmlString .= '<Rent_Frequency><![CDATA[' . $property->rent_frequency . ']]></Rent_Frequency>';
            $xmlString .= '<Images>';
            foreach ($images_list as $image){
                $xmlString .= '<Image><![CDATA[' . $image . ']]></Image>';
            }
            $xmlString .= '</Images>';
            $xmlString .= '<Videos>';
            foreach ($videos_list as $video){
                $xmlString .= '<Video><![CDATA[' . $video . ']]></Video>';
            }
            $xmlString .= '</Videos>';
            $xmlString .= '<City><![CDATA[' . $property->city . ']]></City>';
            $xmlString .= '<Locality><![CDATA[' . $property->locality . ']]></Locality>';
            $xmlString .= '<Sub_Locality><![CDATA[' . $property->sub_locality . ']]></Sub_Locality>';
            $xmlString .= '<Tower_Name><![CDATA[' . $property->tower_name . ']]></Tower_Name>';
            $xmlString .= '<Listing_Agent><![CDATA[' . $property->listing_agent . ']]></Listing_Agent>';
            $xmlString .= '<Listing_Agent_Phone><![CDATA[' . $property->listing_agent_phone . ']]></Listing_Agent_Phone>';
            $xmlString .= '<Listing_Agent_Email><![CDATA[' . $property->listing_agent_email . ']]></Listing_Agent_Email>';
            $xmlString .= '</Property>';
        }

        // Close the root XML tag
        $xmlString .= '</Properties>';

        // Set response headers to indicate XML content
        $headers = [
            'Content-Type' => 'text/xml',
        ];

        // Return the XML content as a response if it has not been generated before, else don't show it.
        if(!$properties_generated_before){
            return Response::make($xmlString, 200, $headers);
        }
        else{
            return redirect()->back()->with('error', 'no new data has been inserted for xml generation!');
        }
    }
}

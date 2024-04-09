<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_ref_no',
        'permit_number',
        'property_status',
        'property_purpose',
        'property_type',
        'property_size',
        'property_size_unit',
        'bedrooms',
        'bathrooms',
        'features',
        'off_plan',
        'portals',
        'last_updated',
        'property_title',
        'property_description',
        'property_title_ar',
        'property_description_ar',
        'price',
        'rent_frequency',
        'images',
        'videos',
        'city',
        'locality',
        'sub_locality',
        'tower_name',
        'listing_agent',
        'listing_agent_phone',
        'listing_agent_email',
        'xml_generated_status',
    ];

}

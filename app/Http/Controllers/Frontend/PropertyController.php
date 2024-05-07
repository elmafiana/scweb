<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('frontend.property.index');
    }
    public function show(Property $property)
    {
        
        return view('frontend.property.single', compact('Property'));
    }
}

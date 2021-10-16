<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function showAll()
    {
        $apartments = Apartment::paginate(6);
        return view('sweet-home', compact('apartments'));
    }

    public function storeDepartment(StoreApartmentRequest $request){
        $data = $request->all();
        Apartment::create($data);
        echo "Create event success";
    }
}

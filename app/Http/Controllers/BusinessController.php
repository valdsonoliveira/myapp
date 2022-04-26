<?php

namespace App\Http\Controllers;

use App\Models\business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class BusinessController extends Controller
{
    public function index()
    {
        $businesses = Business::paginate();
        return view('businesses', compact('businesses'));

 }

    public function store(Request $request)
    {
        $input = $request->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'address' => 'string',
                'logo' =>'file'

            ]);
        $file = $input['logo'];

    $path =     $input['logo']->store('logos','public');
        $input['logo'] = $path;

       $business = business::create($input);
       return Redirect::route('businesses.index');

    }
        

}

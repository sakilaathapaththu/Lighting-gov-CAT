<?php

namespace App\Http\Controllers;

use App\Models\Cdio;
use App\Models\User;
use App\Models\Govofficial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GovofficialController;
use App\Models\Govorganizationname;

class GovofficialController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("govOfficials.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        request()->validate([
            'user_id'=> 'required|string',
            'full_name'=> 'required|string',
            'preferred_name'=> 'required|string',
            'designation'=> 'required|string',
            'gov_org_name'=> 'required',
            'contact_number'=> 'required|string',
            'email'=> 'required|string',
            //'employment_layer'=> 'required|string',
            'date_of_birth'=> 'required|string',
            // 'linkedin'=> 'required|string',
            // 'facebook'=> 'required|string',
            // 'instagram'=> 'required|string',
        ]);
//dd($request);
        $govofficial=new Govofficial;

        $govofficial->user_id=$request->user_id;
        $govofficial->full_name=$request->full_name;
        $govofficial->preferred_name=$request->preferred_name;
        $govofficial->designation=$request->designation;
        $govofficial->govorganizationname_id=$request->gov_org_name;
        $govofficial->contact_number=$request->contact_number;
        $govofficial->email=$request->email;
        $govofficial->employment_layer=$request->employment_layer;
        $govofficial->date_of_birth=$request->date_of_birth;
        $govofficial->linkedin = $request->filled('linkedin') ? $request->linkedin : 'No Data';
        $govofficial->facebook = $request->filled('facebook') ? $request->facebook : 'No Data';
        $govofficial->instagram = $request->filled('instagram') ? $request->instagram : 'No Data';

        $govofficial->save();

        // $cdio=new Cdio;

        // if($request->employment_layer=='cdio'){

        // }

        // $user=new User;

        // Auth::login($user);

        return redirect()->route('registered');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $govofficial = Govofficial::find($id);
        $govnames = Govorganizationname::get();
        $layer=Auth::user()->govofficial->employment_layer;
        if($layer=='cdio'){
            return view('cdio.edit', compact('govofficial','govnames'));
        }
        else{
            return view('govOfficials.edit', compact('govofficial','govnames'));
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            // 'user_id'=> 'required|string',
            'full_name'=> 'required|string',
            'preferred_name'=> 'required|string',
            'designation'=> 'required|string',
            'gov_org_name'=> 'required|string',
            'contact_number'=> 'required|string',
            'email'=> 'required|string',
            'employment_layer'=> 'required|string',
            'date_of_birth'=> 'required|string',
            'linkedin'=> 'required|string',
            'facebook'=> 'required|string',
            'instagram'=> 'required|string',
        ]);

        $govofficial=Govofficial::find($id);

        // $govofficial->user_id=$request->user_id;
        $govofficial->full_name=$request->full_name;
        $govofficial->preferred_name=$request->preferred_name;
        $govofficial->designation=$request->designation;
        $govofficial->govorganizationname_id=$request->gov_org_name;
        $govofficial->contact_number=$request->contact_number;
        $govofficial->email=$request->email;
        $govofficial->employment_layer=$request->employment_layer;
        $govofficial->date_of_birth=$request->date_of_birth;
        $govofficial->linkedin=$request->linkedin;
        $govofficial->facebook=$request->facebook;
        $govofficial->instagram=$request->instagram;

        $govofficial->update();

        return redirect()->route('userHome');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

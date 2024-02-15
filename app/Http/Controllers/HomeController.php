<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Govorganizationname;



class HomeController extends Controller
{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()
    {
        if(Auth::user()->govofficial == NULL){
            $govnames = Govorganizationname::get();
            return view('govOfficials.create',compact('govnames'));
        }else{
            $layer=Auth::user()->govofficial->employment_layer;
            $govofficialExists=Auth::user()->govofficial->exists();
            $govofficial=Auth::user()->govofficial;
            // dd($govofficial);
            $digitalGovDataExists = Auth::user()->govofficial->opInitiative;
            $ictDataExists = Auth::user()->govofficial->opIct;
            $managementDataExists = Auth::user()->govofficial->opManagement;
            if($layer=='cdio'){
                return view('cdio.userHome',compact('layer','govofficial','digitalGovDataExists','ictDataExists','managementDataExists','govofficialExists'));
            }
            else{
                return view('govOfficials.userHome',compact('layer','govofficial','digitalGovDataExists','ictDataExists','managementDataExists','govofficialExists'));
            }
        }

        // $layer=Auth::user()->govofficial->employment_layer;
        // $govofficial=Auth::user()->govofficial;
        // // dd($govofficial);
        // $digitalGovDataExists = Auth::user()->govofficial->opInitiative;
        // $ictDataExists = Auth::user()->govofficial->opIct;
        // $managementDataExists = Auth::user()->govofficial->opManagement;
        // if($layer=='cdio'){
        //     return view('cdio.userHome',compact('layer','govofficial','digitalGovDataExists','ictDataExists','managementDataExists'));
        // }
        // else{
        //     return view('govOfficials.userHome',compact('layer','govofficial','digitalGovDataExists','ictDataExists','managementDataExists'));
        // }

    }

    public function registered(){
        if(Auth::user()->govofficial == NULL){
            $govofficialExists=Auth::user()->govofficial;
            // dd($govofficialExists);
            return view('govOfficials.userHome',compact('govofficialExists'));
        }else{
            $layer=Auth::user()->govofficial->employment_layer;
            $govofficialExists=Auth::user()->govofficial->exists();
            $govofficial=Auth::user()->govofficial;
            // dd($govofficial);
            $digitalGovDataExists = Auth::user()->govofficial->opInitiative;
            $ictDataExists = Auth::user()->govofficial->opIct;
            $managementDataExists = Auth::user()->govofficial->opManagement;
            if($layer=='cdio'){
                return view('cdio.userHome',compact('layer','govofficial','digitalGovDataExists','ictDataExists','managementDataExists','govofficialExists'));
            }
            else{
                return view('govOfficials.userHome',compact('layer','govofficial','digitalGovDataExists','ictDataExists','managementDataExists','govofficialExists'));
            }
        }
    }

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome(): View
    {
        return view('adminHome');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome(): View
    {
        return view('managerHome');

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\DeepSecurity;
use Illuminate\Http\Request;
use App\Models\DeepTechnology;
use App\Models\DeepApplication;
use App\Models\DeepConnectivity;
use App\Models\DeepDataGovernance;
use App\Models\DeepDataManagement;
use App\Models\DeepDataEngineering;
use App\Models\DeepInteroperability;
use Illuminate\Support\Facades\Auth;
use App\Models\DeepDeliveryGovernance;
use App\Models\DeepEmergingTechnology;
use App\Models\DeepTechnologyArchitecture;

class DeepAssessmentController extends Controller
{
    public function deepTdPage01(){
        return view('cdio.Technology & Data.page01');
    }

    public function deepTdPage02(){
        return view('cdio.Technology & Data.page02');
    }

    public function deepTdPage03(){
        return view('cdio.Technology & Data.page03');
    }

    public function deepTdPage04(){
        return view('cdio.Technology & Data.page04');
    }

    public function deepTdPage05(){
        return view('cdio.Technology & Data.page05');
    }

    public function deepTdPage06(){
        return view('cdio.Technology & Data.page06');
    }

    public function deepTdPage07(){
        return view('cdio.Technology & Data.page07');
    }

    public function deepTdPage08(){
        return view('cdio.Technology & Data.page08');
    }

    public function deepTdPage09(){
        return view('cdio.Technology & Data.page09');
    }

    public function deepTdPage10(){
        $deepEmergingTechnology=Auth::user()->govofficial->deepEmergingTechnology;
        $deepDataManagement=Auth::user()->govofficial->deepDataManagement;
        $deepDeliveryGovernance=Auth::user()->govofficial->deepDeliveryGovernance;
        $deepConnectivity=Auth::user()->govofficial->deepConnectivity;
        $deepSecurity=Auth::user()->govofficial->deepSecurity;
        $deepTechnologyArchitecture=Auth::user()->govofficial->deepTechnologyArchitecture;
        $deepDataGovernance=Auth::user()->govofficial->deepDataGovernance;
        $deepDataEngineering=Auth::user()->govofficial->deepDataEngineering;
        $deepInteroperability=Auth::user()->govofficial->deepInteroperability;

        $totDeepEmergingTechnology=$deepEmergingTechnology->td1+$deepEmergingTechnology->td2+$deepEmergingTechnology->td3+$deepEmergingTechnology->td4+$deepEmergingTechnology->td5+$deepEmergingTechnology->td6;
        $totDeepDataManagement=$deepDataManagement->td7+$deepDataManagement->td8+$deepDataManagement->td9+$deepDataManagement->td10+$deepDataManagement->td11;
        $totDeepDeliveryGovernance=$deepDeliveryGovernance->td12+$deepDeliveryGovernance->td13+$deepDeliveryGovernance->td14;
        $totDeepConnectivity=$deepConnectivity->td15+$deepConnectivity->td16+$deepConnectivity->td17+$deepConnectivity->td18;
        $totDeepSecurity=$deepSecurity->td19+$deepSecurity->td20+$deepSecurity->td21+$deepSecurity->td22;
        $totDeepTechnologyArchitecture=$deepTechnologyArchitecture->td23+$deepTechnologyArchitecture->td24+$deepTechnologyArchitecture->td25+$deepTechnologyArchitecture->td26+$deepTechnologyArchitecture->td27+$deepTechnologyArchitecture->td28;
        $totDeepDataGovernance=$deepDataGovernance->td29+$deepDataGovernance->td30;
        $totDeepDataEngineering=$deepDataEngineering->td31+$deepDataEngineering->td32+$deepDataEngineering->td33;
        $totDeepInteroperability=$deepInteroperability->td34+$deepInteroperability->td35;

        return view('cdio.Technology & Data.page10',compact('totDeepEmergingTechnology','totDeepDataManagement','totDeepDeliveryGovernance','totDeepConnectivity','totDeepSecurity','totDeepTechnologyArchitecture','totDeepDataGovernance','totDeepDataEngineering','totDeepInteroperability'));
    }

    public function deepEmergingTechnology(Request $request){
        request()->validate([
            'td1'=>'required|string',
            'td2'=>'required|string',
            'td3'=>'required|string',
            'td4'=>'required|string',
            'td5'=>'required|string',
            'td6'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepEmergingTechnology = new DeepEmergingTechnology;

        $deepEmergingTechnology->td1=$request->td1;
        $deepEmergingTechnology->td2=$request->td2;
        $deepEmergingTechnology->td3=$request->td3;
        $deepEmergingTechnology->td4=$request->td4;
        $deepEmergingTechnology->td5=$request->td5;
        $deepEmergingTechnology->td6=$request->td6;
        $deepEmergingTechnology->govofficial_id=$request->govofficial_id;

        $deepEmergingTechnology->save();

        return redirect()->route('deepTechnology');
    }

    public function deepDataManagement(Request $request){
        request()->validate([
            'td7'=>'required|string',
            'td8'=>'required|string',
            'td9'=>'required|string',
            'td10'=>'required|string',
            'td11'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepDataManagement = new DeepDataManagement;

        $deepDataManagement->td7=$request->td7;
        $deepDataManagement->td8=$request->td8;
        $deepDataManagement->td9=$request->td9;
        $deepDataManagement->td10=$request->td10;
        $deepDataManagement->td11=$request->td11;
        $deepDataManagement->govofficial_id=$request->govofficial_id;

        $deepDataManagement->save();

        return redirect()->route('deepTechnology');
    }

    public function deepDeliveryGovernance(Request $request){
        request()->validate([
            'td12'=>'required|string',
            'td13'=>'required|string',
            'td14'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepDeliveryGovernance = new DeepDeliveryGovernance;

        $deepDeliveryGovernance->td12=$request->td12;
        $deepDeliveryGovernance->td13=$request->td13;
        $deepDeliveryGovernance->td14=$request->td14;
        $deepDeliveryGovernance->govofficial_id=$request->govofficial_id;

        $deepDeliveryGovernance->save();

        return redirect()->route('deepTechnology');
    }

    public function deepConnectivity(Request $request){
        request()->validate([
            'td15'=>'required|string',
            'td16'=>'required|string',
            'td17'=>'required|string',
            'td18'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepConnectivity = new DeepConnectivity;

        $deepConnectivity->td15=$request->td15;
        $deepConnectivity->td16=$request->td16;
        $deepConnectivity->td17=$request->td17;
        $deepConnectivity->td18=$request->td18;
        $deepConnectivity->govofficial_id=$request->govofficial_id;

        $deepConnectivity->save();

        return redirect()->route('deepTechnology');
    }

    public function deepSecurity(Request $request){
        request()->validate([
            'td19'=>'required|string',
            'td20'=>'required|string',
            'td21'=>'required|string',
            'td22'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepSecurity = new DeepSecurity;

        $deepSecurity->td19=$request->td19;
        $deepSecurity->td20=$request->td20;
        $deepSecurity->td21=$request->td21;
        $deepSecurity->td22=$request->td22;
        $deepSecurity->govofficial_id=$request->govofficial_id;

        $deepSecurity->save();

        return redirect()->route('deepTechnology');
    }

    public function deepTechnologyArchitecture(Request $request){
        request()->validate([
            'td23'=>'required|string',
            'td24'=>'required|string',
            'td25'=>'required|string',
            'td26'=>'required|string',
            'td27'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepTechnologyArchitecture = new DeepTechnologyArchitecture;

        $deepTechnologyArchitecture->td23=$request->td23;
        $deepTechnologyArchitecture->td24=$request->td24;
        $deepTechnologyArchitecture->td25=$request->td25;
        $deepTechnologyArchitecture->td26=$request->td26;
        $deepTechnologyArchitecture->td27=$request->td27;
        $deepTechnologyArchitecture->govofficial_id=$request->govofficial_id;

        $deepTechnologyArchitecture->save();

        return redirect()->route('deepTechnology');
    }

    public function deepDataGovernance(Request $request){
        request()->validate([
            'td28'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepDataGovernance = new DeepDataGovernance;

        $deepDataGovernance->td28=$request->td28;
        $deepDataGovernance->govofficial_id=$request->govofficial_id;

        $deepDataGovernance->save();

        return redirect()->route('deepTechnology');
    }

    public function deepDataEngineering(Request $request){
        request()->validate([
            'td29'=>'required|string',
            'td30'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepDataEngineering = new DeepDataEngineering;

        $deepDataEngineering->td29=$request->td29;
        $deepDataEngineering->td30=$request->td30;
        $deepDataEngineering->govofficial_id=$request->govofficial_id;

        $deepDataEngineering->save();

        return redirect()->route('deepTechnology');
    }

    public function deepInteroperability(Request $request){
        request()->validate([
            'td31'=>'required|string',
            'td32'=>'required|string',
            'td33'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepInteroperability = new DeepInteroperability;

        $deepInteroperability->td31=$request->td31;
        $deepInteroperability->td32=$request->td32;
        $deepInteroperability->td33=$request->td33;
        $deepInteroperability->govofficial_id=$request->govofficial_id;

        $deepInteroperability->save();

        return redirect()->route('deepTechnology');
    }

    public function deepApplication(Request $request){
        request()->validate([
            'td34'=>'required|string',
            'td35'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $deepApplication = new DeepApplication;

        $deepApplication->td34=$request->td34;
        $deepApplication->td35=$request->td35;
        $deepApplication->govofficial_id=$request->govofficial_id;

        $deepApplication->save();

        // $totDeepApplication=$request->td34+$request->td35;
        // $overall=$request->totDeepEmergingTechnology+$request->totDeepDataManagement+$request->totDeepDeliveryGovernance+$request->totDeepConnectivity+$request->totDeepSecurity+$request->totDeepTechnologyArchitecture+$request->totDeepDataGovernance+$request->totDeepDataEngineering+$request->totDeepInteroperability;

        // $deepTechnology = new DeepTechnology;

        // $deepTechnology->deep_emerging_technology=$request->totDeepEmergingTechnology;
        // $deepTechnology->deep_data_management=$request->totDeepDataManagement;
        // $deepTechnology->deep_delivery_governance=$request->totDeepDeliveryGovernance;
        // $deepTechnology->deep_connectivity=$request->totDeepConnectivity;
        // $deepTechnology->deep_security=$request->totDeepSecurity;
        // $deepTechnology->deep_technology_architecture=$request->totDeepTechnologyArchitecture;
        // $deepTechnology->deep_data_governance=$request->totDeepDataGovernance;
        // $deepTechnology->deep_data_engineering=$request->totDeepDataEngineering;
        // $deepTechnology->deep_interoperability=$request->totDeepInteroperability;
        // $deepTechnology->deep_application=$totDeepApplication;
        // $deepTechnology->overall=$overall;
        // $deepTechnology->govofficial_id=$request->govofficial_id;

        // $deepTechnology->save();

        return redirect()->route('deepMain');
    }

    public function deepCusPage01(){
        return view('cdio.Customer.page01');
    }

    public function deepCusPage02(){
        return view('cdio.Customer.page02');
    }

    public function deepCusPage03(){
        return view('cdio.Customer.page03');
    }

    public function deepCusPage04(){
        return view('cdio.Customer.page04');
    }

    public function deepCusPage05(){
        return view('cdio.Customer.page05');
    }

    public function deepOpPage01(){
        return view('cdio.Operation.page01');
    }

    public function deepOpPage02(){
        return view('cdio.Operation.page02');
    }

    public function deepOpPage03(){
        return view('cdio.Operation.page03');
    }

    public function deepOpPage04(){
        return view('cdio.Operation.page04');
    }


}

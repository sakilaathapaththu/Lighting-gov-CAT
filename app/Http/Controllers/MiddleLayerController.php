<?php

namespace App\Http\Controllers;

use App\Models\MidIct;
use App\Models\MidTeamWork;
use Illuminate\Http\Request;
use App\Models\MidInitiative;
use App\Models\MidManagement;
use App\Models\MidOrientation;
use App\Models\MidStakeholder;
use App\Models\MidCollaboration;
use App\Models\MidCommunication;
use App\Models\MidDecisionMaking;
use App\Models\MidIctInWorkplace;
use App\Models\MidCapacityBuilding;
use App\Models\MidChangeManagement;
use App\Models\MidDigitalGovernment;
use App\Models\MidProjectManagement;
use App\Models\MidQualityManagement;
use Illuminate\Support\Facades\Auth;
use App\Models\MidDigitalCitizenship;
use App\Models\MidPersonalDevelopment;
use App\Models\MidWorkplaceManagement;
use App\Models\MidInformationManagement;
use App\Models\MidPerformanceManagement;

class MiddleLayerController extends Controller
{
    public function middle(){
        $midIct=Auth::user()->govofficial->midIct;
        $midIctInWorkplace=Auth::user()->govofficial->midIctInWorkplace;
        $midInformationManagement=Auth::user()->govofficial->midInformationManagement;
        $midDigitalCitizenship=Auth::user()->govofficial->midDigitalCitizenship;

        $midDigitalGovernment=Auth::user()->govofficial->midDigitalGovernment;
        $midProjectManagement=Auth::user()->govofficial->midProjectManagement;
        $midChangeManagement=Auth::user()->govofficial->midChangeManagement;
        $midCollaboration=Auth::user()->govofficial->midCollaboration;
        $midOrientation=Auth::user()->govofficial->midOrientation;
        $midQualityManagement=Auth::user()->govofficial->midQualityManagement;
        $midInitiative=Auth::user()->govofficial->midInitiative;
        $midDigitalGovernment=Auth::user()->govofficial->midDigitalGovernment;

        $midManagement=Auth::user()->govofficial->midManagement;
        $midCommunication=Auth::user()->govofficial->midCommunication;
        $midWorkplaceManagement=Auth::user()->govofficial->midWorkplaceManagement;
        $midDecisionMaking=Auth::user()->govofficial->midDecisionMaking;
        $midCapacityBuilding=Auth::user()->govofficial->midCapacityBuilding;
        $midStakeholder=Auth::user()->govofficial->midStakeholder;
        $midPerformanceManagement=Auth::user()->govofficial->midPerformanceManagement;
        $midTeamWork=Auth::user()->govofficial->midTeamWork;

        return view ('govOfficials.Middle&Junior.main',compact('midDigitalGovernment','midIct','midTeamWork','midPerformanceManagement','midStakeholder','midCapacityBuilding','midDecisionMaking','midWorkplaceManagement','midCommunication','midManagement','midDigitalGovernment','midInitiative','midQualityManagement','midOrientation','midCollaboration','midChangeManagement','midProjectManagement','midInformationManagement','midIctInWorkplace','midDigitalCitizenship',));
    }

    public function midIctPage01(){
        return view('govOfficials.Middle&Junior.ICT.page01');
    }

    public function midIctPage02(){
        return view('govOfficials.Middle&Junior.ICT.page02');
    }

    public function midIctPage03(){
        $midIctInWorkplace=Auth::user()->govofficial->midIctInWorkplace;
        $midInformationManagement=Auth::user()->govofficial->midInformationManagement;
        $midDigtalCitizenship=Auth::user()->govofficial->midDigitalCitizenship;

        $totMidIctInWorkplace=$midIctInWorkplace->ict1+$midIctInWorkplace->ict2+$midIctInWorkplace->ict3+$midIctInWorkplace->ict4+$midIctInWorkplace->ict5_1+$midIctInWorkplace->ict5_2+$midIctInWorkplace->ict6_1+$midIctInWorkplace->ict6_2;
        $totMidInformationManagement=$midInformationManagement->ict7+$midInformationManagement->ict8;
        // dd($totMidIctInWorkplace);
        return view('govOfficials.Middle&Junior.ICT.page03',compact('totMidIctInWorkplace','totMidInformationManagement'));
    }

    public function storeMidIctInWorkplace(Request $request){
        request()->validate([
            'ict1'=>'required|string',
            'ict2'=>'required|string',
            'ict3'=>'required|string',
            'ict4'=>'required|string',
            'ict5_1'=>'required|string',
            'ict5_2'=>'required|string',
            'ict6_1'=>'required|string',
            'ict6_2'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midIctInWorplace = new MidIctInWorkplace;

        $midIctInWorplace->ict1=$request->ict1;
        $midIctInWorplace->ict2=$request->ict2;
        $midIctInWorplace->ict3=$request->ict3;
        $midIctInWorplace->ict4=$request->ict4;
        $midIctInWorplace->ict5_1=$request->ict5_1;
        $midIctInWorplace->ict5_2=$request->ict5_2;
        $midIctInWorplace->ict6_1=$request->ict6_1;
        $midIctInWorplace->ict6_2=$request->ict6_2;
        $midIctInWorplace->govofficial_id=$request->govofficial_id;

        $midIctInWorplace->save();

        return redirect()->route('middleIctPage02');

    }

    public function storeMidInformationManagement(Request $request){
        request()->validate([
            'ict7'=>'required|string',
            'ict8'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midInformationManagement = new MidInformationManagement;

        $midInformationManagement->ict7=$request->ict7;
        $midInformationManagement->ict8=$request->ict8;
        $midInformationManagement->govofficial_id=$request->govofficial_id;

        $midInformationManagement->save();

        return redirect()->route('middleIctPage03');

    }

    public function storeMidDigitalCitizenship(Request $request){
        // dd($request);
        request()->validate([
            'ict9_1'=>'required|string',
            'ict9_2'=>'required|string',
            'ict9_3'=>'required|string',
            'ict10_1'=>'required|string',
            'ict10_2'=>'required|string',
            'ict10_3'=>'required|string',
            'ict11'=>'required|string',
            'ict12'=>'required|string',
            'ict13'=>'required|string',
            'ict14'=>'required|string',
            'ict15_1'=>'required|string',
            'ict15_2'=>'required|string',
            'ict15_3'=>'required|string',
            'ict16'=>'required|string',
            'totMidIctInWorkplace'=>'required|string',
            'totMidInformationManagement'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);
        // dd('hi');
        $midDigitalCitizenship=new MidDigitalCitizenship;

        $midDigitalCitizenship->ict9_1=$request->ict9_1;
        $midDigitalCitizenship->ict9_2=$request->ict9_2;
        $midDigitalCitizenship->ict9_3=$request->ict9_3;
        $midDigitalCitizenship->ict10_1=$request->ict10_1;
        $midDigitalCitizenship->ict10_2=$request->ict10_2;
        $midDigitalCitizenship->ict10_3=$request->ict10_3;
        $midDigitalCitizenship->ict11=$request->ict11;
        $midDigitalCitizenship->ict12=$request->ict12;
        $midDigitalCitizenship->ict13=$request->ict13;
        $midDigitalCitizenship->ict14=$request->ict14;
        $midDigitalCitizenship->ict15_1=$request->ict15_1;
        $midDigitalCitizenship->ict15_2=$request->ict15_2;
        $midDigitalCitizenship->ict15_3=$request->ict15_3;
        $midDigitalCitizenship->ict16=$request->ict16;
        $midDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $midDigitalCitizenship->save();

        $totMidDigitalCitizenship=$request->ict9+$request->ict10_1+$request->ict10_2+$request->ict10_3+$request->ict11_1+$request->ict11_2+$request->ict11_3+$request->ict12+$request->ict13+$request->ict14+$request->ict15+$request->ict16_1+$request->ict16_2+$request->ict17+$request->ict18+$request->ict19+$request->ict20+$request->ict21;
        $totIct=$request->totMidIctInWorkplace+$request->totMidInformationManagement+$totMidDigitalCitizenship;

        $midIct=new MidIct;

        $midIct->ict_in_workplace=$request->totMidIctInWorkplace;
        $midIct->information_management=$request->totMidInformationManagement;
        $midIct->digital_citizenship=$totMidDigitalCitizenship;
        $midIct->overall_mid_ict=$totIct;
        $midIct->govofficial_id=$request->govofficial_id;

        $midIct->save();

        return redirect()->route('middleIctResult');

    }

    public function midIctResult(){
        $midIct = Auth::user()->govofficial->midIct;

        $midIctInWorkplace=$midIct->ict_in_workplace;
        // dd($midIctInWorkplace);
        $a=$midIctInWorkplace/32;
        $avgMidIctInWorkplace=round($a*100);

        $midInformationManagement=$midIct->information_management;
        $b=$midInformationManagement/10;
        $avgMidInformationManagement=round($b*100);

        $midDigitalCitizenship=$midIct->digital_citizenship;
        $c=$midDigitalCitizenship/58;
        $avgMidDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midIctInWorkplace2=$govOfficial->midIctInWorkplace;
        $midInformationManagement2=$govOfficial->midInformationManagement;
        $midDigitalCitizenship2=$govOfficial->midDigitalCitizenship;

        return view('govOfficials.Middle&Junior.ICT.results',compact('midDigitalCitizenship2','midInformationManagement2','midIctInWorkplace2','avgMidDigitalCitizenship','avgMidInformationManagement','avgMidIctInWorkplace','result'));
    }

    public function midIctReport(){
        $midIct = Auth::user()->govofficial->midIct;

        $midIctInWorkplace=$midIct->ict_in_workplace;
        // dd($midIctInWorkplace);
        $a=$midIctInWorkplace/32;
        $avgMidIctInWorkplace=round($a*100);

        $midInformationManagement=$midIct->information_management;
        $b=$midInformationManagement/10;
        $avgMidInformationManagement=round($b*100);

        $midDigitalCitizenship=$midIct->digital_citizenship;
        $c=$midDigitalCitizenship/58;
        $avgMidDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midIctInWorkplace2=$govOfficial->midIctInWorkplace;
        $midInformationManagement2=$govOfficial->midInformationManagement;
        $midDigitalCitizenship2=$govOfficial->midDigitalCitizenship;

        return view('govOfficials.Middle&Junior.ICT.report',compact('govOfficial','midDigitalCitizenship2','midInformationManagement2','midIctInWorkplace2','avgMidDigitalCitizenship','avgMidInformationManagement','avgMidIctInWorkplace','result'));
    }

    public function midDigitalGovernmentPage01(){
        return view('govOfficials.Middle&Junior.DigitalGovernment.page01');
    }

    public function midDigitalGovernmentPage02(){
        return view('govOfficials.Middle&Junior.DigitalGovernment.page02');
    }

    public function midDigitalGovernmentPage03(){
        return view('govOfficials.Middle&Junior.DigitalGovernment.page03');
    }

    public function midDigitalGovernmentPage04(){
        return view('govOfficials.Middle&Junior.DigitalGovernment.page04');
    }

    public function midDigitalGovernmentPage05(){
        return view('govOfficials.Middle&Junior.DigitalGovernment.page05');
    }

    public function midDigitalGovernmentPage06(){
        $midProjectManagement=Auth::user()->govofficial->midProjectManagement;
        $totmidProjectManagement=$midProjectManagement->dg1_1+$midProjectManagement->dg1_2+$midProjectManagement->dg1_3+$midProjectManagement->dg1_4+$midProjectManagement->dg1_5+$midProjectManagement->dg2_1+$midProjectManagement->dg2_2+$midProjectManagement->dg2_3+$midProjectManagement->dg2_4+$midProjectManagement->dg3_1+$midProjectManagement->dg3_2+$midProjectManagement->dg3_3;

        $midChangeManagement=Auth::user()->govofficial->midChangeManagement;
        $totmidChangeManagement=$midChangeManagement->dg4+$midChangeManagement->dg5+$midChangeManagement->dg6+$midChangeManagement->dg7+$midChangeManagement->dg8+$midChangeManagement->dg9_1+$midChangeManagement->dg9_2;

        $midCollaboration=Auth::user()->govofficial->midCollaboration;
        $totmidCollaboration=$midCollaboration->dg10+$midCollaboration->dg11_1+$midCollaboration->dg11_2+$midCollaboration->dg11_3+$midCollaboration->dg11_4+$midCollaboration->dg12+$midCollaboration->dg13+$midCollaboration->dg14;

        $midOrientation=Auth::user()->govofficial->midOrientation;
        $totmidOrientation=$midOrientation->dg15+$midOrientation->dg16_1+$midOrientation->dg16_2+$midOrientation->dg16_3+$midOrientation->dg16_4+$midOrientation->dg17+$midOrientation->dg18+$midOrientation->dg19_1+$midOrientation->dg19_2+$midOrientation->dg19_3+$midOrientation->dg19_4;

        $midQualityManagement=Auth::user()->govofficial->midQualityManagement;
        $totmidQualityManagement=$midQualityManagement->dg20+$midQualityManagement->dg21+$midQualityManagement->dg22_1+$midQualityManagement->dg22_2+$midQualityManagement->dg22_3+$midQualityManagement->dg22_4+$midQualityManagement->dg23+$midQualityManagement->dg24+$midQualityManagement->dg25;

        return view('govOfficials.Middle&Junior.DigitalGovernment.page06',compact('totmidQualityManagement','totmidOrientation','totmidCollaboration','totmidChangeManagement','totmidProjectManagement'));
    }

    public function storeMidProjectManagement(Request $request){
        request()->validate([
            'dg1_1' => 'required|string',
            'dg1_2' => 'required|string',
            'dg1_3' => 'required|string',
            'dg1_4' => 'required|string',
            'dg1_5' => 'required|string',
            'dg2_1' => 'required|string',
            'dg2_2' => 'required|string',
            'dg2_3' => 'required|string',
            'dg2_4' => 'required|string',
            'dg3_1' => 'required|string',
            'dg3_2' => 'required|string',
            'dg3_3' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midProjectManagement = new MidProjectManagement;

        $midProjectManagement->dg1_1=$request->dg1_1;
        $midProjectManagement->dg1_2=$request->dg1_2;
        $midProjectManagement->dg1_3=$request->dg1_3;
        $midProjectManagement->dg1_4=$request->dg1_4;
        $midProjectManagement->dg1_5=$request->dg1_5;
        $midProjectManagement->dg2_1=$request->dg2_1;
        $midProjectManagement->dg2_2=$request->dg2_2;
        $midProjectManagement->dg2_3=$request->dg2_3;
        $midProjectManagement->dg2_4=$request->dg2_4;
        $midProjectManagement->dg3_1=$request->dg3_1;
        $midProjectManagement->dg3_2=$request->dg3_2;
        $midProjectManagement->dg3_3=$request->dg3_3;
        $midProjectManagement->govofficial_id=$request->govofficial_id;

        $midProjectManagement->save();

        return redirect()->route('midDigitalGovernmentPage02');
    }

    public function storeMidChangeManagement(Request $request){
        request()->validate([
            'dg4' => 'required|string',
            'dg5' => 'required|string',
            'dg6' => 'required|string',
            'dg7' => 'required|string',
            'dg8' => 'required|string',
            'dg9_1' => 'required|string',
            'dg9_2' => 'required|string',
            'dg9_3' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midChangeManagement = new MidChangeManagement;

        $midChangeManagement->dg4=$request->dg4;
        $midChangeManagement->dg5=$request->dg5;
        $midChangeManagement->dg6=$request->dg6;
        $midChangeManagement->dg7=$request->dg7;
        $midChangeManagement->dg8=$request->dg8;
        $midChangeManagement->dg9_1=$request->dg9_1;
        $midChangeManagement->dg9_2=$request->dg9_2;
        $midChangeManagement->dg9_3=$request->dg9_3;
        $midChangeManagement->govofficial_id=$request->govofficial_id;

        $midChangeManagement->save();

        return redirect()->route('midDigitalGovernmentPage03');
    }

    public function storeMidCollaboration(Request $request){
        request()->validate([
            'dg10' => 'required|string',
            'dg11_1' => 'required|string',
            'dg11_2' => 'required|string',
            'dg11_3' => 'required|string',
            'dg11_4' => 'required|string',
            'dg12' => 'required|string',
            'dg13' => 'required|string',
            'dg14' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midCollaboration = new MidCollaboration;

        $midCollaboration->dg10=$request->dg10;
        $midCollaboration->dg11_1=$request->dg11_1;
        $midCollaboration->dg11_2=$request->dg11_2;
        $midCollaboration->dg11_3=$request->dg11_3;
        $midCollaboration->dg11_4=$request->dg11_4;
        $midCollaboration->dg12=$request->dg12;
        $midCollaboration->dg13=$request->dg13;
        $midCollaboration->dg14=$request->dg14;
        $midCollaboration->govofficial_id=$request->govofficial_id;

        $midCollaboration->save();

        return redirect()->route('midDigitalGovernmentPage04');
    }

    public function storeMidOrientation(Request $request){
        request()->validate([
            'dg15' => 'required|string',
            'dg16_1' => 'required|string',
            'dg16_2' => 'required|string',
            'dg16_3' => 'required|string',
            'dg16_4' => 'required|string',
            'dg17' => 'required|string',
            'dg18' => 'required|string',
            'dg19_1' => 'required|string',
            'dg19_2' => 'required|string',
            'dg19_3' => 'required|string',
            'dg19_4' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midOrientation = new MidOrientation;

        $midOrientation->dg15=$request->dg15;
        $midOrientation->dg16_1=$request->dg16_1;
        $midOrientation->dg16_2=$request->dg16_2;
        $midOrientation->dg16_3=$request->dg16_3;
        $midOrientation->dg16_4=$request->dg16_4;
        $midOrientation->dg17=$request->dg17;
        $midOrientation->dg18=$request->dg18;
        $midOrientation->dg19_1=$request->dg19_1;
        $midOrientation->dg19_2=$request->dg19_2;
        $midOrientation->dg19_3=$request->dg19_3;
        $midOrientation->dg19_4=$request->dg19_4;
        $midOrientation->govofficial_id=$request->govofficial_id;

        $midOrientation->save();

        return redirect()->route('midDigitalGovernmentPage05');
    }

    public function storeMidQualityManagement(Request $request){
        request()->validate([
            'dg20' => 'required|string',
            'dg21' => 'required|string',
            'dg22_1' => 'required|string',
            'dg22_2' => 'required|string',
            'dg22_3' => 'required|string',
            'dg22_4' => 'required|string',
            'dg23' => 'required|string',
            'dg24' => 'required|string',
            'dg25' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midQualityManagement = new MidQualityManagement;

        $midQualityManagement->dg20=$request->dg20;
        $midQualityManagement->dg21=$request->dg21;
        $midQualityManagement->dg22_1=$request->dg22_1;
        $midQualityManagement->dg22_2=$request->dg22_2;
        $midQualityManagement->dg22_3=$request->dg22_3;
        $midQualityManagement->dg22_4=$request->dg22_4;
        $midQualityManagement->dg23=$request->dg23;
        $midQualityManagement->dg24=$request->dg24;
        $midQualityManagement->dg25=$request->dg25;
        $midQualityManagement->govofficial_id=$request->govofficial_id;

        $midQualityManagement->save();

        return redirect()->route('midDigitalGovernmentPage06');
    }

    public function storeMidInitiative(Request $request){
        // dd($request);
        request()->validate([
            'dg26_1' => 'required|string',
            'dg26_2' => 'required|string',
            'dg26_3' => 'required|string',
            'dg27_1' => 'required|string',
            'dg27_2' => 'required|string',
            'dg27_3' => 'required|string',
            'dg28' => 'required|string',
            'dg29' => 'required|string',
            'dg30' => 'required|string',
            'dg31' => 'required|string',
            'dg32' => 'required|string',
            'dg33' => 'required|string',
            'dg34' => 'required|string',
            'dg35_1' => 'required|string',
            'dg35_2' => 'required|string',
            'dg35_3' => 'required|string',
            'dg35_4' => 'required|string',
            'dg36_1' => 'required|string',
            'dg36_2' => 'required|string',
            'dg36_3' => 'required|string',
            'dg36_4' => 'required|string',
            'dg37' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);
// dd('hi');
        $midInitiative = new MidInitiative;

        $midInitiative->dg26_1=$request->dg26_1;
        $midInitiative->dg26_2=$request->dg26_2;
        $midInitiative->dg26_3=$request->dg26_3;
        $midInitiative->dg27_1=$request->dg27_1;
        $midInitiative->dg27_2=$request->dg27_2;
        $midInitiative->dg27_3=$request->dg27_3;
        $midInitiative->dg28=$request->dg28;
        $midInitiative->dg29=$request->dg29;
        $midInitiative->dg30=$request->dg30;
        $midInitiative->dg31=$request->dg31;
        $midInitiative->dg32=$request->dg32;
        $midInitiative->dg33=$request->dg33;
        $midInitiative->dg34=$request->dg34;
        $midInitiative->dg35_1=$request->dg35_1;
        $midInitiative->dg35_2=$request->dg35_2;
        $midInitiative->dg35_3=$request->dg35_3;
        $midInitiative->dg35_4=$request->dg35_4;
        $midInitiative->dg36_1=$request->dg36_1;
        $midInitiative->dg36_2=$request->dg36_2;
        $midInitiative->dg36_3=$request->dg36_3;
        $midInitiative->dg36_4=$request->dg36_4;
        $midInitiative->dg37=$request->dg37;
        $midInitiative->govofficial_id=$request->govofficial_id;

        $midInitiative->save();

        $totmidInitiative=$request->dg26_1+$request->dg26_2+$request->dg26_3+$request->dg27_1+$request->dg27_2+$request->dg27_3+$request->dg28+$request->dg29+$request->dg30+$request->dg31+$request->dg32+$request->dg33+$request->dg34+$request->dg35_1+$request->dg35_2+$request->dg35_3+$request->dg35_4+$request->dg36_1+$request->dg36_2+$request->dg36_3+$request->dg36_4+$request->dg37;
        $marksMidInitiative=$request->totmidProjectManagement+$request->totmidChangeManagement+$request->totmidCollaboration+$request->totmidOrientation+$request->totmidQualityManagement+$totmidInitiative;

        $midDigitalGovernment=new MidDigitalGovernment;

        $midDigitalGovernment->mid_project_management=$request->totmidProjectManagement;
        $midDigitalGovernment->mid_change_management=$request->totmidChangeManagement;
        $midDigitalGovernment->mid_collaboration=$request->totmidCollaboration;
        $midDigitalGovernment->mid_orientation=$request->totmidOrientation;
        $midDigitalGovernment->mid_quality_management=$request->totmidQualityManagement;
        $midDigitalGovernment->mid_initiative=$totmidInitiative;
        $midDigitalGovernment->marks_mid_digital_government=$marksMidInitiative;
        $midDigitalGovernment->govofficial_id=$request->govofficial_id;

        $midDigitalGovernment->save();

        return redirect()->route('middleDgResult');
    }

    public function midDgResult(){
        $midDigitalGov = Auth::user()->govofficial->midDigitalGovernment;

        $midProjectManagement=$midDigitalGov->mid_project_management;
        $a=$midProjectManagement/12;
        $avgmidProjectManagement=round($a*100);

        $midChangeManagement=$midDigitalGov->mid_change_management;
        $b=$midChangeManagement/18;
        $avgmidChangeManagement=round($b*100);

        $midCollaboration=$midDigitalGov->mid_collaboration;
        $c=$midCollaboration/12;
        $avgmidCollaboration=round($c*100);

        $midOrientatiion=$midDigitalGov->mid_orientation;
        $d=$midOrientatiion/14;
        $avgmidOrientatiion=round($d*100);

        $midQualityManagement=$midDigitalGov->mid_quality_management;
        $e=$midQualityManagement/15;
        $avgmidQualityManagement=round($e*100);

        $midInitiative=$midDigitalGov->mid_initiative;
        $f=$midInitiative/29;
        $avgmidInitiative=round($f*100);

        $result = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgmidProjectManagement],
            ['Change Management', (int) $avgmidChangeManagement],
            ['Collaboration and Partnership', (int) $avgmidCollaboration],
            ['Results Orientation', (int) $avgmidOrientatiion],
            ['Quality Management', (int) $avgmidQualityManagement],
            ['Execute Digital Government Initiatives', (int) $avgmidInitiative],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midProjectManagement2=$govOfficial->midProjectManagement;
        $midChangeManagement2=$govOfficial->midChangeManagement;
        $midCollaboration2=$govOfficial->midCollaboration;
        $midOrientation2=$govOfficial->midOrientation;
        $midQualityManagement2=$govOfficial->midQualityManagement;
        $midInitiative2=$govOfficial->midInitiative;
        return view('govOfficials.Middle&Junior.DigitalGovernment.results',compact('midProjectManagement2','result','avgmidChangeManagement','avgmidCollaboration','avgmidOrientatiion','avgmidQualityManagement','avgmidInitiative','midChangeManagement2','midCollaboration2','midOrientation2','midQualityManagement2','midInitiative2'));
    }

    public function midDgReport(){
        $midDigitalGov = Auth::user()->govofficial->midDigitalGovernment;

        $midProjectManagement=$midDigitalGov->mid_project_management;
        $a=$midProjectManagement/12;
        $avgmidProjectManagement=round($a*100);

        $midChangeManagement=$midDigitalGov->mid_change_management;
        $b=$midChangeManagement/18;
        $avgmidChangeManagement=round($b*100);

        $midCollaboration=$midDigitalGov->mid_collaboration;
        $c=$midCollaboration/12;
        $avgmidCollaboration=round($c*100);

        $midOrientatiion=$midDigitalGov->mid_orientation;
        $d=$midOrientatiion/14;
        $avgmidOrientatiion=round($d*100);

        $midQualityManagement=$midDigitalGov->mid_quality_management;
        $e=$midQualityManagement/15;
        $avgmidQualityManagement=round($e*100);

        $midInitiative=$midDigitalGov->mid_initiative;
        $f=$midInitiative/29;
        $avgmidInitiative=round($f*100);

        $result = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgmidProjectManagement],
            ['Change Management', (int) $avgmidChangeManagement],
            ['Collaboration and Partnership', (int) $avgmidCollaboration],
            ['Results Orientation', (int) $avgmidOrientatiion],
            ['Quality Management', (int) $avgmidQualityManagement],
            ['Execute Digital Government Initiatives', (int) $avgmidInitiative],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midProjectManagement2=$govOfficial->midProjectManagement;
        $midChangeManagement2=$govOfficial->midChangeManagement;
        $midCollaboration2=$govOfficial->midCollaboration;
        $midOrientation2=$govOfficial->midOrientation;
        $midQualityManagement2=$govOfficial->midQualityManagement;
        $midInitiative2=$govOfficial->midInitiative;
        return view('govOfficials.Middle&Junior.DigitalGovernment.report',compact('govOfficial','midProjectManagement2','result','avgmidChangeManagement','avgmidCollaboration','avgmidOrientatiion','avgmidQualityManagement','avgmidInitiative','midChangeManagement2','midCollaboration2','midOrientation2','midQualityManagement2','midInitiative2'));
    }

    public function midManagementPage01(){
        return view('govOfficials.Middle&Junior.Management.page01');
    }

    public function midManagementPage02(){
        return view('govOfficials.Middle&Junior.Management.page02');
    }

    public function midManagementPage03(){
        return view('govOfficials.Middle&Junior.Management.page03');
    }

    public function midManagementPage04(){
        return view('govOfficials.Middle&Junior.Management.page04');
    }

    public function midManagementPage05(){
        return view('govOfficials.Middle&Junior.Management.page05');
    }

    public function midManagementPage06(){
        return view('govOfficials.Middle&Junior.Management.page06');
    }

    public function midManagementPage07(){
        return view('govOfficials.Middle&Junior.Management.page07');
    }

    public function midManagementPage08(){
        $midCommunication=Auth::user()->govofficial->midCommunication;
        $totMidCommunication=$midCommunication->mgt1+$midCommunication->mgt2_1+$midCommunication->mgt2_2+$midCommunication->mgt2_3+$midCommunication->mgt2_4+$midCommunication->mgt3+$midCommunication->mgt4+$midCommunication->mgt5;

        $midWorkplaceManagement=Auth::user()->govofficial->midWorkplaceManagement;
        $totMidWorkplaceManagement=$midWorkplaceManagement->mgt6+$midWorkplaceManagement->mgt7+$midWorkplaceManagement->mgt8+$midWorkplaceManagement->mgt9_1+$midWorkplaceManagement->mgt9_2+$midWorkplaceManagement->mgt9_3+$midWorkplaceManagement->mgt9_4;

        $midDecisionMaking=Auth::user()->govofficial->midDecisionMaking;
        $totMidDecisionMaking=$midDecisionMaking->mgt10+$midDecisionMaking->mgt11+$midDecisionMaking->mgt12+$midDecisionMaking->mgt13+$midDecisionMaking->mgt14+$midDecisionMaking->mgt15+$midDecisionMaking->mgt16+$midDecisionMaking->mgt17+$midDecisionMaking->mgt18;

        $midCapacityBuilding=Auth::user()->govofficial->midCapacityBuilding;
        $totMidCapacityBuilding=$midCapacityBuilding->mgt19_1+$midCapacityBuilding->mgt19_2+$midCapacityBuilding->mgt19_3+$midCapacityBuilding->mgt19_4+$midCapacityBuilding->mgt20_1+$midCapacityBuilding->mgt20_2+$midCapacityBuilding->mgt20_3+$midCapacityBuilding->mgt20_4;

        $midStakeholder=Auth::user()->govofficial->midStakeholder;
        $totMidStakeholder=$midStakeholder->mgt21+$midStakeholder->mgt22+$midStakeholder->mgt23_1+$midStakeholder->mgt23_2+$midStakeholder->mgt23_3+$midStakeholder->mgt23_4+$midStakeholder->mgt24_1+$midStakeholder->mgt24_2+$midStakeholder->mgt24_3+$midStakeholder->mgt25_1+$midStakeholder->mgt25_2+$midStakeholder->mgt25_3+$midStakeholder->mgt25_4+$midStakeholder->mgt26+$midStakeholder->mgt27+$midStakeholder->mgt28+$midStakeholder->mgt29;

        $midPerformanceManagement=Auth::user()->govofficial->midPerformanceManagement;
        $totMidPerformanceManagement=$midPerformanceManagement->mgt30_1+$midPerformanceManagement->mgt30_2+$midPerformanceManagement->mgt30_3+$midPerformanceManagement->mgt31+$midPerformanceManagement->mgt32_1+$midPerformanceManagement->mgt32_2+$midPerformanceManagement->mgt32_3+$midPerformanceManagement->mgt32_4+$midPerformanceManagement->mgt33_1+$midPerformanceManagement->mgt33_2+$midPerformanceManagement->mgt33_3+$midPerformanceManagement->mgt33_4+$midPerformanceManagement->mgt34+$midPerformanceManagement->mgt35;

        $midTeamWork=Auth::user()->govofficial->midTeamWork;
        $totMidTeamWork=$midTeamWork->mgt36+$midTeamWork->mgt37;

        return view('govOfficials.Middle&Junior.Management.page08',compact('totMidTeamWork','totMidPerformanceManagement','totMidStakeholder','totMidCapacityBuilding','totMidDecisionMaking','totMidWorkplaceManagement','totMidCommunication'));
    }

    public function storeMidCommunication(Request $request){
        request()->validate([
            'mgt1'=>'required|string',
            'mgt2_1'=>'required|string',
            'mgt2_2'=>'required|string',
            'mgt2_3'=>'required|string',
            'mgt2_4'=>'required|string',
            'mgt3'=>'required|string',
            'mgt4'=>'required|string',
            'mgt5'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midCommunication = new MidCommunication;

        $midCommunication->mgt1=$request->mgt1;
        $midCommunication->mgt2_1=$request->mgt2_1;
        $midCommunication->mgt2_2=$request->mgt2_2;
        $midCommunication->mgt2_3=$request->mgt2_3;
        $midCommunication->mgt2_4=$request->mgt2_4;
        $midCommunication->mgt3=$request->mgt3;
        $midCommunication->mgt4=$request->mgt4;
        $midCommunication->mgt5=$request->mgt5;
        $midCommunication->govofficial_id=$request->govofficial_id;

        $midCommunication->save();

        return redirect()->route('midManagementPage02');
    }

    public function storeMidWorkplaceManagement(Request $request){
        request()->validate([
            'mgt6'=>'required|string',
            'mgt7'=>'required|string',
            'mgt8'=>'required|string',
            'mgt9_1'=>'required|string',
            'mgt9_2'=>'required|string',
            'mgt9_3'=>'required|string',
            'mgt9_4'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midWorkplaceManagemet = new MidWorkplaceManagement;

        $midWorkplaceManagemet->mgt6=$request->mgt6;
        $midWorkplaceManagemet->mgt7=$request->mgt7;
        $midWorkplaceManagemet->mgt8=$request->mgt8;
        $midWorkplaceManagemet->mgt9_1=$request->mgt9_1;
        $midWorkplaceManagemet->mgt9_2=$request->mgt9_2;
        $midWorkplaceManagemet->mgt9_3=$request->mgt9_3;
        $midWorkplaceManagemet->mgt9_4=$request->mgt9_4;
        $midWorkplaceManagemet->govofficial_id=$request->govofficial_id;

        $midWorkplaceManagemet->save();

        return redirect()->route('midManagementPage03');
    }

    public function storeMidDecisionMaking(Request $request){
        request()->validate([
            'mgt10'=>'required|string',
            'mgt11'=>'required|string',
            'mgt12'=>'required|string',
            'mgt13'=>'required|string',
            'mgt14'=>'required|string',
            'mgt15'=>'required|string',
            'mgt16'=>'required|string',
            'mgt17'=>'required|string',
            'mgt18'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midDecionMaking = new MidDecisionMaking;

        $midDecionMaking->mgt10=$request->mgt10;
        $midDecionMaking->mgt11=$request->mgt11;
        $midDecionMaking->mgt12=$request->mgt12;
        $midDecionMaking->mgt13=$request->mgt13;
        $midDecionMaking->mgt14=$request->mgt14;
        $midDecionMaking->mgt15=$request->mgt15;
        $midDecionMaking->mgt16=$request->mgt16;
        $midDecionMaking->mgt17=$request->mgt17;
        $midDecionMaking->mgt18=$request->mgt18;
        $midDecionMaking->govofficial_id=$request->govofficial_id;

        $midDecionMaking->save();

        return redirect()->route('midManagementPage04');
    }

    public function storeMidCapacityBuilding(Request $request){
        request()->validate([
            'mgt19_1'=>'required|string',
            'mgt19_2'=>'required|string',
            'mgt19_3'=>'required|string',
            'mgt19_4'=>'required|string',
            'mgt20_1'=>'required|string',
            'mgt20_2'=>'required|string',
            'mgt20_3'=>'required|string',
            'mgt20_4'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midCapacityBuilding = new MidCapacityBuilding;

        $midCapacityBuilding->mgt19_1=$request->mgt19_1;
        $midCapacityBuilding->mgt19_2=$request->mgt19_2;
        $midCapacityBuilding->mgt19_3=$request->mgt19_3;
        $midCapacityBuilding->mgt19_4=$request->mgt19_4;
        $midCapacityBuilding->mgt20_1=$request->mgt20_1;
        $midCapacityBuilding->mgt20_2=$request->mgt20_2;
        $midCapacityBuilding->mgt20_3=$request->mgt20_3;
        $midCapacityBuilding->mgt20_4=$request->mgt20_4;
        $midCapacityBuilding->govofficial_id=$request->govofficial_id;

        $midCapacityBuilding->save();

        return redirect()->route('midManagementPage05');

    }

    public function storeMidStakeholder(Request $request){
        // dd($request);
        request()->validate([
            'mgt21'=>'required|string',
            'mgt22'=>'required|string',
            'mgt23_1'=>'required|string',
            'mgt23_2'=>'required|string',
            'mgt23_3'=>'required|string',
            'mgt23_4'=>'required|string',
            'mgt24_1'=>'required|string',
            'mgt24_2'=>'required|string',
            'mgt24_3'=>'required|string',
            'mgt25_1'=>'required|string',
            'mgt25_2'=>'required|string',
            'mgt25_3'=>'required|string',
            'mgt25_4'=>'required|string',
            'mgt26'=>'required|string',
            'mgt27'=>'required|string',
            'mgt28'=>'required|string',
            'mgt29'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);
        // dd($request);

        $midStakeholder = new MidStakeholder;

        $midStakeholder->mgt21=$request->mgt21;
        $midStakeholder->mgt22=$request->mgt22;
        $midStakeholder->mgt23_1=$request->mgt23_1;
        $midStakeholder->mgt23_2=$request->mgt23_2;
        $midStakeholder->mgt23_3=$request->mgt23_3;
        $midStakeholder->mgt23_4=$request->mgt23_4;
        $midStakeholder->mgt24_1=$request->mgt24_1;
        $midStakeholder->mgt24_2=$request->mgt24_2;
        $midStakeholder->mgt24_3=$request->mgt24_3;
        $midStakeholder->mgt25_1=$request->mgt25_1;
        $midStakeholder->mgt25_2=$request->mgt25_2;
        $midStakeholder->mgt25_3=$request->mgt25_3;
        $midStakeholder->mgt25_4=$request->mgt25_4;
        $midStakeholder->mgt26=$request->mgt26;
        $midStakeholder->mgt27=$request->mgt27;
        $midStakeholder->mgt28=$request->mgt28;
        $midStakeholder->mgt29=$request->mgt29;
        $midStakeholder->govofficial_id=$request->govofficial_id;

        $midStakeholder->save();

        return redirect()->route('midManagementPage06');
    }

    public function storeMidPerformanceManagement(Request $request){
        // dd($request);
        request()->validate([
            'mgt30_1'=>'required|string',
            'mgt30_2'=>'required|string',
            'mgt30_3'=>'required|string',
            'mgt31'=>'required|string',
            'mgt32_1'=>'required|string',
            'mgt32_2'=>'required|string',
            'mgt32_3'=>'required|string',
            'mgt32_4'=>'required|string',
            'mgt33_1'=>'required|string',
            'mgt33_2'=>'required|string',
            'mgt33_3'=>'required|string',
            'mgt33_4'=>'required|string',
            'mgt34'=>'required|string',
            'mgt35'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $midPerformanceManagement = new MidPerformanceManagement;

        $midPerformanceManagement->mgt30_1=$request->mgt30_1;
        $midPerformanceManagement->mgt30_2=$request->mgt30_2;
        $midPerformanceManagement->mgt30_3=$request->mgt30_3;
        $midPerformanceManagement->mgt31=$request->mgt31;
        $midPerformanceManagement->mgt32_1=$request->mgt32_1;
        $midPerformanceManagement->mgt32_2=$request->mgt32_2;
        $midPerformanceManagement->mgt32_3=$request->mgt32_3;
        $midPerformanceManagement->mgt32_4=$request->mgt32_4;
        $midPerformanceManagement->mgt33_1=$request->mgt33_1;
        $midPerformanceManagement->mgt33_2=$request->mgt33_2;
        $midPerformanceManagement->mgt33_3=$request->mgt33_3;
        $midPerformanceManagement->mgt33_4=$request->mgt33_4;
        $midPerformanceManagement->mgt34=$request->mgt34;
        $midPerformanceManagement->mgt35=$request->mgt35;
        $midPerformanceManagement->govofficial_id=$request->govofficial_id;

        $midPerformanceManagement->save();

        return redirect()->route('midManagementPage07');

    }

    public function storeMidTeamWork(Request $request){
        // dd($request);
        request()->validate([
            'mgt36'=>'required|string',
            'mgt37'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midTeamWork = new MidTeamWork;

        $midTeamWork->mgt36=$request->mgt36;
        $midTeamWork->mgt37=$request->mgt37;
        $midTeamWork->govofficial_id=$request->govofficial_id;

        $midTeamWork->save();

        return redirect()->route('midManagementPage08');
    }

    public function storeMidPersonalDevelopment(Request $request){
        // dd($request);
        request()->validate([
            'mgt38'=>'required|string',
            'mgt39_1'=>'required|string',
            'mgt39_2'=>'required|string',
            'mgt39_3'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $midPersonalDevelopment = new MidPersonalDevelopment;

        $midPersonalDevelopment->mgt38=$request->mgt38;
        $midPersonalDevelopment->mgt39_1=$request->mgt39_1;
        $midPersonalDevelopment->mgt39_2=$request->mgt39_2;
        $midPersonalDevelopment->mgt39_3=$request->mgt39_3;
        $midPersonalDevelopment->govofficial_id=$request->govofficial_id;

        $midPersonalDevelopment->save();

        $totMidPersonalDevelopment=$request->mgt38+$request->mgt39_1+$request->mgt39_2+$request->mgt39_3;
        $totMidManagement=$request->totMidCommunication+$request->totMidWorkplaceManagement+$request->totMidDecisionMaking+$request->totMidCapacityBuilding+$request->totMidStakeholder+$request->totMidPerformanceManagement+$request->totMidTeamWork;

        $midManagement=new MidManagement;

        $midManagement->mid_communication=$request->totMidCommunication;
        $midManagement->mid_workplace_management=$request->totMidWorkplaceManagement;
        $midManagement->mid_decision_making=$request->totMidDecisionMaking;
        $midManagement->mid_capacity_building=$request->totMidCapacityBuilding;
        $midManagement->mid_stakeholder=$request->totMidStakeholder;
        $midManagement->mid_performance_management=$request->totMidPerformanceManagement;
        $midManagement->mid_team_work=$request->totMidTeamWork;
        $midManagement->mid_personal_development=$totMidPersonalDevelopment;
        $midManagement->mid_management_overall=$totMidManagement;
        $midManagement->govofficial_id=$request->govofficial_id;

        $midManagement->save();

        return redirect()->route('middleManagementResult');
    }

    public function midManagementResult(){

        $midManagement = Auth::user()->govofficial->midManagement;

        $midCommunication=$midManagement->mid_communication;
        $a=$midCommunication/12;
        $avgmidCommunication=round($a*100);

        $midWorkplaceManagement=$midManagement->mid_workplace_management;
        $b=$midWorkplaceManagement/10;
        $avgmidWorkplaceManagement=round($b*100);

        $midDecisionMaking=$midManagement->mid_decision_making;
        $c=$midDecisionMaking/19;
        $avgmidDecisionMaking=round($c*100);

        $midCapacityBuilding=$midManagement->mid_capacity_building;
        $d=$midCapacityBuilding/8;
        $avgmidCapacityBuilding=round($d*100);

        $midStakeholderManagement=$midManagement->mid_stakeholder_management;
        $e=$midStakeholderManagement/25;
        $avgmidStakeholderManagement=round($e*100);

        $midPerformanceManagement=$midManagement->mid_performance_management;
        $f=$midPerformanceManagement/17;
        $avgmidPerformanceManagement=round($f*100);

        $midTeamwork=$midManagement->mid_teamwork;
        $g=$midTeamwork/4;
        $avgmidTeamwork=round($g*100);

        $midPersonalDevelopment=$midManagement->mid_personal_development;
        $h=$midPersonalDevelopment/5;
        $avgmidPersonalDevelopment=round($h*100);

        $result = [
            ['Category', 'Value'],
            ['Communication', (int) $avgmidCommunication],
            ['Workplace Management', (int) $avgmidWorkplaceManagement],
            ['Decision Making', (int) $avgmidDecisionMaking],
            ['Capacity Building', (int) $avgmidCapacityBuilding],
            ['Stakeholder Management', (int) $avgmidStakeholderManagement],
            ['Performance Management', (int) $avgmidCapacityBuilding],
            ['Teamwork', (int) $avgmidTeamwork],
            ['Personal Development', (int) $avgmidPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midCommunication2=$govOfficial->midCommunication;
        $midWorkplaceManagement2=$govOfficial->midWorkplaceManagement;
        $midDecisionMaking2=$govOfficial->midDecisionMaking;
        $midCapacityBuilding2=$govOfficial->midCapacityBuilding;
        $midStakeholderManagement2=$govOfficial->midStakeholder;
        $midPerformanceManagement2=$govOfficial->midPerformanceManagement;
        $midTeamwork2=$govOfficial->midTeamwork;
        $midPersonalDevelopment2=$govOfficial->midPersonalDevelopment;

        return view('govOfficials.Middle&Junior.Management.results',compact('avgmidPerformanceManagement','midPerformanceManagement2','avgmidCapacityBuilding','avgmidDecisionMaking','midPerformanceManagement2','midCapacityBuilding2','midDecisionMaking2','result','midCommunication2','midWorkplaceManagement2','midStakeholderManagement2','midTeamwork2','midPersonalDevelopment2','avgmidCommunication','avgmidWorkplaceManagement','avgmidStakeholderManagement','avgmidTeamwork','avgmidPersonalDevelopment'));
    }

    public function midManagementReport(){
        $midManagement = Auth::user()->govofficial->midManagement;

        $midCommunication=$midManagement->mid_communication;
        $a=$midCommunication/12;
        $avgmidCommunication=round($a*100);

        $midWorkplaceManagement=$midManagement->mid_workplace_management;
        $b=$midWorkplaceManagement/10;
        $avgmidWorkplaceManagement=round($b*100);

        $midDecisionMaking=$midManagement->mid_decision_making;
        $c=$midDecisionMaking/19;
        $avgmidDecisionMaking=round($c*100);

        $midCapacityBuilding=$midManagement->mid_capacity_building;
        $d=$midCapacityBuilding/8;
        $avgmidCapacityBuilding=round($d*100);

        $midStakeholderManagement=$midManagement->mid_stakeholder_management;
        $e=$midStakeholderManagement/25;
        $avgmidStakeholderManagement=round($e*100);

        $midPerformanceManagement=$midManagement->mid_performance_management;
        $f=$midPerformanceManagement/17;
        $avgmidPerformanceManagement=round($f*100);

        $midTeamwork=$midManagement->mid_teamwork;
        $g=$midTeamwork/4;
        $avgmidTeamwork=round($g*100);

        $midPersonalDevelopment=$midManagement->mid_personal_development;
        $h=$midPersonalDevelopment/5;
        $avgmidPersonalDevelopment=round($h*100);

        $result = [
            ['Category', 'Value'],
            ['Communication', (int) $avgmidCommunication],
            ['Workplace Management', (int) $avgmidWorkplaceManagement],
            ['Decision Making', (int) $avgmidDecisionMaking],
            ['Capacity Building', (int) $avgmidCapacityBuilding],
            ['Stakeholder Management', (int) $avgmidStakeholderManagement],
            ['Performance Management', (int) $avgmidCapacityBuilding],
            ['Teamwork', (int) $avgmidTeamwork],
            ['Personal Development', (int) $avgmidPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midCommunication2=$govOfficial->midCommunication;
        $midWorkplaceManagement2=$govOfficial->midWorkplaceManagement;
        $midDecisionMaking2=$govOfficial->midDecisionMaking;
        $midCapacityBuilding2=$govOfficial->midCapacityBuilding;
        $midStakeholderManagement2=$govOfficial->midStakeholder;
        $midPerformanceManagement2=$govOfficial->midPerformanceManagement;
        $midTeamwork2=$govOfficial->midTeamwork;
        $midPersonalDevelopment2=$govOfficial->midPersonalDevelopment;

        return view('govOfficials.Middle&Junior.Management.report',compact('govOfficial','avgmidPerformanceManagement','midPerformanceManagement2','avgmidCapacityBuilding','avgmidDecisionMaking','midPerformanceManagement2','midCapacityBuilding2','midDecisionMaking2','result','midCommunication2','midWorkplaceManagement2','midStakeholderManagement2','midTeamwork2','midPersonalDevelopment2','avgmidCommunication','avgmidWorkplaceManagement','avgmidStakeholderManagement','avgmidTeamwork','avgmidPersonalDevelopment'));
    }

    public function overallresult(){
        $labels = ["ICT", "Digital Government", "Management"];
        $govOfficial=Auth::user()->govofficial;
        $midIct=Auth::user()->govofficial->midIct;
        $midDigitalGov=Auth::user()->govofficial->midDigitalGovernment;
        $midManagement=Auth::user()->govofficial->midManagement;
        $data=[
            (int) $midIct->overall_mid_ict,
            (int) $midDigitalGov->marks_mid_digital_government,
            (int) $midManagement->mid_management_overall
        ];

        $midIct = Auth::user()->govofficial->midIct;

        $midIctInWorkplace=$midIct->ict_in_workplace;
        // dd($midIctInWorkplace);
        $a=$midIctInWorkplace/32;
        $avgMidIctInWorkplace=round($a*100);

        $midInformationManagement=$midIct->information_management;
        $b=$midInformationManagement/10;
        $avgMidInformationManagement=round($b*100);

        $midDigitalCitizenship=$midIct->digital_citizenship;
        $c=$midDigitalCitizenship/58;
        $avgMidDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midIctInWorkplace2=$govOfficial->midIctInWorkplace;
        $midInformationManagement2=$govOfficial->midInformationManagement;
        $midDigitalCitizenship2=$govOfficial->midDigitalCitizenship;

        $midDigitalGov = Auth::user()->govofficial->midDigitalGovernment;

        $midProjectManagement=$midDigitalGov->mid_project_management;
        $a=$midProjectManagement/12;
        $avgMidProjectManagement=round($a*100);

        $midChangeManagement=$midDigitalGov->mid_change_management;
        $b=$midChangeManagement/18;
        $avgMidChangeManagement=round($b*100);

        $midCollaboration=$midDigitalGov->mid_collaboration;
        $c=$midCollaboration/12;
        $avgMidCollaboration=round($c*100);

        $midOrientatiion=$midDigitalGov->mid_orientation;
        $d=$midOrientatiion/14;
        $avgMidOrientatiion=round($d*100);

        $midQualityManagement=$midDigitalGov->mid_quality_management;
        $e=$midQualityManagement/15;
        $avgMidQualityManagement=round($e*100);

        $midInitiative=$midDigitalGov->mid_initiative;
        $f=$midInitiative/29;
        $avgMidInitiative=round($f*100);

        $result2 = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgMidProjectManagement],
            ['Change Management', (int) $avgMidChangeManagement],
            ['Collaboration and Partnership', (int) $avgMidCollaboration],
            ['Results Orientation', (int) $avgMidOrientatiion],
            ['Quality Management', (int) $avgMidQualityManagement],
            ['Execute Digital Government Initiatives', (int) $avgMidInitiative],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midProjectManagement2=$govOfficial->midProjectManagement;
        $midChangeManagement2=$govOfficial->midChangeManagement;
        $midCollaboration2=$govOfficial->midCollaboration;
        $midOrientation2=$govOfficial->midOrientation;
        $midQualityManagement2=$govOfficial->midQualityManagement;
        $midInitiative2=$govOfficial->midInitiative;

        $midManagement = Auth::user()->govofficial->midManagement;

        $midCommunication=$midManagement->mid_communication;
        $a=$midCommunication/12;
        $avgmidCommunication=round($a*100);

        $midWorkplaceManagement=$midManagement->mid_workplace_management;
        $b=$midWorkplaceManagement/10;
        $avgmidWorkplaceManagement=round($b*100);

        $midDecisionMaking=$midManagement->mid_decision_making;
        $c=$midDecisionMaking/19;
        $avgmidDecisionMaking=round($c*100);

        $midCapacityBuilding=$midManagement->mid_capacity_building;
        $d=$midCapacityBuilding/8;
        $avgmidCapacityBuilding=round($d*100);

        $midStakeholderManagement=$midManagement->mid_stakeholder_management;
        $e=$midStakeholderManagement/25;
        $avgmidStakeholderManagement=round($e*100);

        $midPerformanceManagement=$midManagement->mid_performance_management;
        $f=$midPerformanceManagement/17;
        $avgmidPerformanceManagement=round($f*100);

        $midTeamwork=$midManagement->mid_teamwork;
        $g=$midTeamwork/4;
        $avgmidTeamwork=round($g*100);

        $midPersonalDevelopment=$midManagement->mid_personal_development;
        $h=$midPersonalDevelopment/5;
        $avgmidPersonalDevelopment=round($h*100);

        $result3 = [
            ['Category', 'Value'],
            ['Communication', (int) $avgmidCommunication],
            ['Workplace Management', (int) $avgmidWorkplaceManagement],
            ['Decision Making', (int) $avgmidDecisionMaking],
            ['Capacity Building', (int) $avgmidCapacityBuilding],
            ['Stakeholder Management', (int) $avgmidStakeholderManagement],
            ['Performance Management', (int) $avgmidCapacityBuilding],
            ['Teamwork', (int) $avgmidTeamwork],
            ['Personal Development', (int) $avgmidPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midCommunication2=$govOfficial->midCommunication;
        $midWorkplaceManagement2=$govOfficial->midWorkplaceManagement;
        $midDecisionMaking2=$govOfficial->midDecisionMaking;
        $midCapacityBuilding2=$govOfficial->midCapacityBuilding;
        $midStakeholderManagement2=$govOfficial->midStakeholder;
        $midPerformanceManagement2=$govOfficial->midPerformanceManagement;
        $midTeamwork2=$govOfficial->midTeamwork;
        $midPersonalDevelopment2=$govOfficial->midPersonalDevelopment;

        return view('govOfficials.Middle&Junior.overalResults',compact('avgmidPersonalDevelopment','avgmidTeamwork','avgmidPerformanceManagement','avgmidStakeholderManagement','avgmidCapacityBuilding','avgmidDecisionMaking','avgmidWorkplaceManagement','avgmidCommunication','midPersonalDevelopment2','midTeamwork2','midPerformanceManagement2','midStakeholderManagement2','midCapacityBuilding2','midDecisionMaking2','midWorkplaceManagement2','midWorkplaceManagement2','midCommunication2','result3','avgMidInitiative','avgMidQualityManagement','avgMidOrientatiion','avgMidCollaboration','avgMidChangeManagement','avgMidProjectManagement','avgMidDigitalCitizenship','avgMidInformationManagement','avgMidIctInWorkplace','midInitiative2','midQualityManagement2','midOrientation2','midCollaboration2','midChangeManagement2','midProjectManagement2','result2','labels','data','result','midIctInWorkplace2','midInformationManagement2','midDigitalCitizenship2','govOfficial'));
    }

    public function overallReport(){
        $labels = ["ICT", "Digital Government", "Management"];
        $govOfficial=Auth::user()->govofficial;
        $midIct=Auth::user()->govofficial->midIct;
        $midDigitalGov=Auth::user()->govofficial->midDigitalGovernment;
        $midManagement=Auth::user()->govofficial->midManagement;
        $data=[
            (int) $midIct->overall_mid_ict,
            (int) $midDigitalGov->marks_mid_digital_government,
            (int) $midManagement->mid_management_overall
        ];

        $midIct = Auth::user()->govofficial->midIct;

        $midIctInWorkplace=$midIct->ict_in_workplace;
        // dd($midIctInWorkplace);
        $a=$midIctInWorkplace/32;
        $avgMidIctInWorkplace=round($a*100);

        $midInformationManagement=$midIct->information_management;
        $b=$midInformationManagement/10;
        $avgMidInformationManagement=round($b*100);

        $midDigitalCitizenship=$midIct->digital_citizenship;
        $c=$midDigitalCitizenship/58;
        $avgMidDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgMidIctInWorkplace],
            ['Information Management', (int) $avgMidInformationManagement],
            ['Digital Citizenship', (int) $avgMidDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midIctInWorkplace2=$govOfficial->midIctInWorkplace;
        $midInformationManagement2=$govOfficial->midInformationManagement;
        $midDigitalCitizenship2=$govOfficial->midDigitalCitizenship;

        $midDigitalGov = Auth::user()->govofficial->midDigitalGovernment;

        $midProjectManagement=$midDigitalGov->mid_project_management;
        $a=$midProjectManagement/12;
        $avgMidProjectManagement=round($a*100);

        $midChangeManagement=$midDigitalGov->mid_change_management;
        $b=$midChangeManagement/18;
        $avgMidChangeManagement=round($b*100);

        $midCollaboration=$midDigitalGov->mid_collaboration;
        $c=$midCollaboration/12;
        $avgMidCollaboration=round($c*100);

        $midOrientatiion=$midDigitalGov->mid_orientation;
        $d=$midOrientatiion/14;
        $avgMidOrientatiion=round($d*100);

        $midQualityManagement=$midDigitalGov->mid_quality_management;
        $e=$midQualityManagement/15;
        $avgMidQualityManagement=round($e*100);

        $midInitiative=$midDigitalGov->mid_initiative;
        $f=$midInitiative/29;
        $avgMidInitiative=round($f*100);

        $result2 = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgMidProjectManagement],
            ['Change Management', (int) $avgMidChangeManagement],
            ['Collaboration and Partnership', (int) $avgMidCollaboration],
            ['Results Orientation', (int) $avgMidOrientatiion],
            ['Quality Management', (int) $avgMidQualityManagement],
            ['Execute Digital Government Initiatives', (int) $avgMidInitiative],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midProjectManagement2=$govOfficial->midProjectManagement;
        $midChangeManagement2=$govOfficial->midChangeManagement;
        $midCollaboration2=$govOfficial->midCollaboration;
        $midOrientation2=$govOfficial->midOrientation;
        $midQualityManagement2=$govOfficial->midQualityManagement;
        $midInitiative2=$govOfficial->midInitiative;

        $midManagement = Auth::user()->govofficial->midManagement;

        $midCommunication=$midManagement->mid_communication;
        $a=$midCommunication/12;
        $avgmidCommunication=round($a*100);

        $midWorkplaceManagement=$midManagement->mid_workplace_management;
        $b=$midWorkplaceManagement/10;
        $avgmidWorkplaceManagement=round($b*100);

        $midDecisionMaking=$midManagement->mid_decision_making;
        $c=$midDecisionMaking/19;
        $avgmidDecisionMaking=round($c*100);

        $midCapacityBuilding=$midManagement->mid_capacity_building;
        $d=$midCapacityBuilding/8;
        $avgmidCapacityBuilding=round($d*100);

        $midStakeholderManagement=$midManagement->mid_stakeholder_management;
        $e=$midStakeholderManagement/25;
        $avgmidStakeholderManagement=round($e*100);

        $midPerformanceManagement=$midManagement->mid_performance_management;
        $f=$midPerformanceManagement/17;
        $avgmidPerformanceManagement=round($f*100);

        $midTeamwork=$midManagement->mid_teamwork;
        $g=$midTeamwork/4;
        $avgmidTeamwork=round($g*100);

        $midPersonalDevelopment=$midManagement->mid_personal_development;
        $h=$midPersonalDevelopment/5;
        $avgmidPersonalDevelopment=round($h*100);

        $result3 = [
            ['Category', 'Value'],
            ['Communication', (int) $avgmidCommunication],
            ['Workplace Management', (int) $avgmidWorkplaceManagement],
            ['Decision Making', (int) $avgmidDecisionMaking],
            ['Capacity Building', (int) $avgmidCapacityBuilding],
            ['Stakeholder Management', (int) $avgmidStakeholderManagement],
            ['Performance Management', (int) $avgmidCapacityBuilding],
            ['Teamwork', (int) $avgmidTeamwork],
            ['Personal Development', (int) $avgmidPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $midCommunication2=$govOfficial->midCommunication;
        $midWorkplaceManagement2=$govOfficial->midWorkplaceManagement;
        $midDecisionMaking2=$govOfficial->midDecisionMaking;
        $midCapacityBuilding2=$govOfficial->midCapacityBuilding;
        $midStakeholderManagement2=$govOfficial->midStakeholder;
        $midPerformanceManagement2=$govOfficial->midPerformanceManagement;
        $midTeamwork2=$govOfficial->midTeamwork;
        $midPersonalDevelopment2=$govOfficial->midPersonalDevelopment;

        return view('govOfficials.Middle&Junior.overallReport',compact('avgmidPersonalDevelopment','avgmidTeamwork','avgmidPerformanceManagement','avgmidStakeholderManagement','avgmidCapacityBuilding','avgmidDecisionMaking','avgmidWorkplaceManagement','avgmidCommunication','midPersonalDevelopment2','midTeamwork2','midPerformanceManagement2','midStakeholderManagement2','midCapacityBuilding2','midDecisionMaking2','midWorkplaceManagement2','midWorkplaceManagement2','midCommunication2','result3','avgMidInitiative','avgMidQualityManagement','avgMidOrientatiion','avgMidCollaboration','avgMidChangeManagement','avgMidProjectManagement','avgMidDigitalCitizenship','avgMidInformationManagement','avgMidIctInWorkplace','midInitiative2','midQualityManagement2','midOrientation2','midCollaboration2','midChangeManagement2','midProjectManagement2','result2','labels','data','result','midIctInWorkplace2','midInformationManagement2','midDigitalCitizenship2','govOfficial'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\TopIct;
use Illuminate\Http\Request;
use App\Models\TopLeadership;
use App\Models\TopManagement;
use App\Models\TopOrientation;
use App\Models\TopCollaboration;
use App\Models\TopCommunication;
use App\Models\TopHumanResource;
use App\Models\TopDecisionMaking;
use App\Models\TopIctInWorkplace;
use App\Models\TopCapacityBuilding;
// use App\Models\TopOrientation;
// use App\Models\TopCollaboration;
// use App\Models\TopIctInWorkplace;
use App\Models\TopChangeManagement;
use App\Models\TopDigitalGovernment;
use App\Models\TopProjectManagement;
use App\Models\TopQualityManagement;
use Illuminate\Support\Facades\Auth;
use App\Models\TopDigitalCitizenship;
use App\Models\TopPersonalDevelopment;
use App\Models\TopWorkplaceManagement;
use App\Models\TopInformationManagement;
use App\Models\TopStakeholderManagement;
use App\Models\TopOrganizationalLeadership;

use \PDF;

// use App\Models\TopInformationManagement;



//
/*
use Dompdf\Dompdf;
use Dompdf\Options;*/
use Illuminate\Support\Facades\View;





class TopLayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function top()
    {
        $topIct=Auth::user()->govofficial->topIct;
        $topIctInWorkplace=Auth::user()->govofficial->topIctInWorkplace;
        $topInformationManagement=Auth::user()->govofficial->topInformationManagement;

        $topDigitalGovernment=Auth::user()->govofficial->topDigitalGovernment;

        $topProjectManagement=Auth::user()->govofficial->topProjectManagement;
        $topChangeManagement=Auth::user()->govofficial->topChangeManagement;
        $topCollaboration=Auth::user()->govofficial->topCollaboration;
        $topOrientation=Auth::user()->govofficial->topOrientation;
        $topQualityManagement=Auth::user()->govofficial->topQualityManagement;

        $topManagement=Auth::user()->govofficial->topManagement;
        $topOrganizationalLeadership=Auth::user()->govofficial->topOrganizationalLeadership;
        $topCommunication=Auth::user()->govofficial->topCommunication;
        $topWorkplaceManagement=Auth::user()->govofficial->topWorkplaceManagement;
        $topDecisionMaking=Auth::user()->govofficial->topDecisionMaking;
        $topCapacityBuilding=Auth::user()->govofficial->topCapacityBuilding;
        $topStakeholder=Auth::user()->govofficial->topStakeholder;
        $topHumanResource=Auth::user()->govofficial->topHumanResource;

        return view('govOfficials.Top&2ndTier.main',compact('topHumanResource','topStakeholder','topCapacityBuilding','topDecisionMaking','topWorkplaceManagement','topCommunication','topOrganizationalLeadership','topQualityManagement','topOrientation','topCollaboration','topChangeManagement','topProjectManagement','topInformationManagement','topIctInWorkplace','topIct','topDigitalGovernment','topManagement'));

        $topManagement=Auth::user()->govofficial->topManagement;
        return view('govOfficials.Top&2ndTier.main',compact('topIct','topDigitalGovernment','topManagement'));

        return view('govOfficials.Top&2ndTier.main',compact('topIct','topDigitalGovernment'));
    }

    public function topIctPage01(){
        return view('govOfficials.Top&2ndTier.ICT.page01');
    }

    public function topIctPage02(){
        return view('govOfficials.Top&2ndTier.ICT.page02');
    }

    public function topIctPage03(){
        $topIctInWorkplace=Auth::user()->govofficial->topIctInWorkplace;
        $topInformationManagement=Auth::user()->govofficial->topInformationManagement;

        $totTopIctInWorkplace=$topIctInWorkplace->ict1+$topIctInWorkplace->ict2+$topIctInWorkplace->ict3+$topIctInWorkplace->ict4;
        $totTopInformationManagement=$topInformationManagement->ict5;
        return view('govOfficials.Top&2ndTier.ICT.page03',compact('totTopIctInWorkplace','totTopInformationManagement'));
    }

    public function storeTopIctInWorkplace(Request $request){
        // dd($request);
        request()->validate([
            'ict1'=>'required|string',
            'ict2'=>'required|string',
            'ict3'=>'required|string',
            'ict4'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topIctInWorplace = new TopIctInWorkplace;

        $topIctInWorplace->ict1=$request->ict1;
        $topIctInWorplace->ict2=$request->ict2;
        $topIctInWorplace->ict3=$request->ict3;
        $topIctInWorplace->ict4=$request->ict4;
        $topIctInWorplace->govofficial_id=$request->govofficial_id;

        $topIctInWorplace->save();

        return redirect()->route('topIctPage02');

    }

    public function storeTopInformationManagement(Request $request){
        request()->validate([
            'ict5'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topInformationManagement = new TopInformationManagement;

        $topInformationManagement->ict5=$request->ict5;
        $topInformationManagement->govofficial_id=$request->govofficial_id;

        $topInformationManagement->save();

        return redirect()->route('topIctPage03');

    }

    public function storeTopDigitalCitizenship(Request $request){
        // dd($request);
        request()->validate([
            'ict6_1'=>'required|string',
            'ict6_2'=>'required|string',
            'ict6_3'=>'required|string',
            'ict7_1'=>'required|string',
            'ict7_2'=>'required|string',
            'ict7_3'=>'required|string',
            'ict8'=>'required|string',
            'ict9'=>'required|string',
            'ict10'=>'required|string',
            'ict11'=>'required|string',
            'ict12_1'=>'required|string',
            'ict12_2'=>'required|string',
            'ict12_3'=>'required|string',
            'ict13'=>'required|string',
            'totTopIctInWorkplace'=>'required|string',
            'totTopInformationManagement'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);
        // dd('hi');
        $topDigitalCitizenship=new TopDigitalCitizenship;

        $topDigitalCitizenship->ict6_1=$request->ict6_1;
        $topDigitalCitizenship->ict6_2=$request->ict6_2;
        $topDigitalCitizenship->ict6_3=$request->ict6_3;
        $topDigitalCitizenship->ict7_1=$request->ict7_1;
        $topDigitalCitizenship->ict7_2=$request->ict7_2;
        $topDigitalCitizenship->ict7_3=$request->ict7_3;
        $topDigitalCitizenship->ict8=$request->ict8;
        $topDigitalCitizenship->ict9=$request->ict9;
        $topDigitalCitizenship->ict10=$request->ict10;
        $topDigitalCitizenship->ict11=$request->ict11;
        $topDigitalCitizenship->ict12_1=$request->ict12_1;
        $topDigitalCitizenship->ict12_2=$request->ict12_2;
        $topDigitalCitizenship->ict12_3=$request->ict12_3;
        $topDigitalCitizenship->ict13=$request->ict13;
        $topDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $topDigitalCitizenship->save();

        $totTopDigitalCitizenship=$request->ict6_1+$request->ict6_2+$request->ict6_3+$request->ict7_1+$request->ict7_2+$request->ict7_3+$request->ict8+$request->ict11_2+$request->ict9+$request->ict10+$request->ict11+$request->ict14+$request->ict12_1+$request->ict12_2+$request->ict12_3+$request->ict13;
        $totIct=$request->totTopIctInWorkplace+$request->totTopInformationManagement+$totTopDigitalCitizenship;

        $topIct=new TopIct;

        $topIct->ict_in_workplace=$request->totTopIctInWorkplace;
        $topIct->information_management=$request->totTopInformationManagement;
        $topIct->digital_citizenship=$totTopDigitalCitizenship;
        $topIct->overall_top_ict=$totIct;
        $topIct->govofficial_id=$request->govofficial_id;

        $topIct->save();

        return redirect()->route('topIctResult');

    }

    public function topIctResult(){
        $topIct = Auth::user()->govofficial->topIct;

        $topIctInWorkplace=$topIct->ict_in_workplace;
        // dd($topIctInWorkplace);
        $a=$topIctInWorkplace/24;
        $avgTopIctInWorkplace=round($a*100);

        $topInformationManagement=$topIct->information_management;
        $b=$topInformationManagement/6;
        $avgTopInformationManagement=round($b*100);

        $topDigitalCitizenship=$topIct->digital_citizenship;
        $c=$topDigitalCitizenship/70;
        $avgTopDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topIctInWorkplace2=$govOfficial->topIctInWorkplace;
        $topInformationManagement2=$govOfficial->topInformationManagement;
        $topDigitalCitizenship2=$govOfficial->topDigitalCitizenship;


        //dd('govOfficials.Top&2ndTier.ICT.results',compact('topDigitalCitizenship2','topInformationManagement2','topIctInWorkplace2','avgTopDigitalCitizenship','avgTopInformationManagement','avgTopIctInWorkplace','result'));

        return view('govOfficials.Top&2ndTier.ICT.results',compact('topDigitalCitizenship2','topInformationManagement2','topIctInWorkplace2','avgTopDigitalCitizenship','avgTopInformationManagement','avgTopIctInWorkplace','result'));
    }

    public function topIctReport(){
        $topIct = Auth::user()->govofficial->topIct;

        $topIctInWorkplace=$topIct->ict_in_workplace;
        // dd($topIctInWorkplace);
        $a=$topIctInWorkplace/24;
        $avgTopIctInWorkplace=round($a*100);

        $topInformationManagement=$topIct->information_management;
        $b=$topInformationManagement/6;
        $avgTopInformationManagement=round($b*100);

        $topDigitalCitizenship=$topIct->digital_citizenship;
        $c=$topDigitalCitizenship/70;
        $avgTopDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topIctInWorkplace2=$govOfficial->topIctInWorkplace;
        $topInformationManagement2=$govOfficial->topInformationManagement;
        $topDigitalCitizenship2=$govOfficial->topDigitalCitizenship;

        return view('govOfficials.Top&2ndTier.ICT.report',compact('govOfficial','topDigitalCitizenship2','topInformationManagement2','topIctInWorkplace2','avgTopDigitalCitizenship','avgTopInformationManagement','avgTopIctInWorkplace','result'));
    }

    public function topDigitalGovernmentPage01(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page01');
    }

    public function topDigitalGovernmentPage02(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page02');
    }

    public function topDigitalGovernmentPage03(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page03');
    }

    public function topDigitalGovernmentPage04(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page04');
    }

    public function topDigitalGovernmentPage05(){
        return view('govOfficials.Top&2ndTier.DigitalGovernment.page05');
    }

    public function topDigitalGovernmentPage06(){
        $topProjectManagement=Auth::user()->govofficial->topProjectManagement;
        $tottopProjectManagement=$topProjectManagement->dg1_1+$topProjectManagement->dg1_2+$topProjectManagement->dg2+$topProjectManagement->dg3+$topProjectManagement->dg4;

        $topChangeManagement=Auth::user()->govofficial->topChangeManagement;
        $tottopChangeManagement=$topChangeManagement->dg5+$topChangeManagement->dg6;

        $topCollaboration=Auth::user()->govofficial->topCollaboration;
        $tottopCollaboration=$topCollaboration->dg10+$topCollaboration->dg11_1+$topCollaboration->dg11_2+$topCollaboration->dg11_3+$topCollaboration->dg11_4+$topCollaboration->dg12+$topCollaboration->dg13+$topCollaboration->dg14;

        $topOrientation=Auth::user()->govofficial->topOrientation;
        $tottopOrientation=$topOrientation->dg7+$topOrientation->dg8+$topOrientation->dg9+$topOrientation->dg10;

        $topQualityManagement=Auth::user()->govofficial->topQualityManagement;
        $tottopQualityManagement=$topQualityManagement->dg14+$topQualityManagement->dg15;


        return view('govOfficials.Top&2ndTier.DigitalGovernment.page06',compact('tottopQualityManagement','tottopOrientation','tottopCollaboration','tottopChangeManagement','tottopProjectManagement'));
    }

    public function storeTopProjectManagement(Request $request){
        request()->validate([
            'dg1_1' => 'required|string',
            'dg1_2' => 'required|string',
            'dg2' => 'required|string',
            'dg3' => 'required|string',
            'dg4' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topProjectManagement = new TopProjectManagement;

        $topProjectManagement->dg1_1=$request->dg1_1;
        $topProjectManagement->dg1_2=$request->dg1_2;
        $topProjectManagement->dg2=$request->dg2;
        $topProjectManagement->dg3=$request->dg3;
        $topProjectManagement->dg4=$request->dg4;
        $topProjectManagement->govofficial_id=$request->govofficial_id;

        $topProjectManagement->save();

        return redirect()->route('topDigitalGovernmentPage02');
    }

    public function storeTopChangeManagement(Request $request){
        request()->validate([
            'dg5' => 'required|string',
            'dg6' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topChangeManagement = new TopChangeManagement;

        $topChangeManagement->dg5=$request->dg5;
        $topChangeManagement->dg6=$request->dg6;
        $topChangeManagement->govofficial_id=$request->govofficial_id;

        $topChangeManagement->save();

        return redirect()->route('topDigitalGovernmentPage03');
    }

    public function storeTopCollaboration(Request $request){
        request()->validate([
            'dg7' => 'required|string',
            'dg8' => 'required|string',
            'dg9' => 'required|string',
            'dg10' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topCollaboration = new TopCollaboration;

        $topCollaboration->dg7=$request->dg7;
        $topCollaboration->dg8=$request->dg8;
        $topCollaboration->dg9=$request->dg9;
        $topCollaboration->dg10=$request->dg10;
        $topCollaboration->govofficial_id=$request->govofficial_id;

        $topCollaboration->save();

        return redirect()->route('topDigitalGovernmentPage04');
    }

    public function storeTopOrientation(Request $request){
        request()->validate([
            'dg11' => 'required|string',
            'dg12' => 'required|string',
            'dg13' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topOrientation = new TopOrientation;

        $topOrientation->dg11=$request->dg11;
        $topOrientation->dg12=$request->dg12;
        $topOrientation->dg13=$request->dg13;
        $topOrientation->govofficial_id=$request->govofficial_id;

        $topOrientation->save();

        return redirect()->route('topDigitalGovernmentPage05');
    }

    public function storeTopQualityManagement(Request $request){
        request()->validate([
            'dg14' => 'required|string',
            'dg15' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topQualityManagement = new TopQualityManagement;

        $topQualityManagement->dg14=$request->dg14;
        $topQualityManagement->dg15=$request->dg15;
        $topQualityManagement->govofficial_id=$request->govofficial_id;

        $topQualityManagement->save();

        return redirect()->route('topDigitalGovernmentPage06');
    }

    public function storeTopLeadership(Request $request){
        request()->validate([
            'dg16' => 'required|string',
            'dg17' => 'required|string',
            'dg18' => 'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topLeadership = new TopLeadership;

        $topLeadership->dg16=$request->dg16;
        $topLeadership->dg17=$request->dg17;
        $topLeadership->dg18=$request->dg18;
        $topLeadership->govofficial_id=$request->govofficial_id;

        $topLeadership->save();

        $totLeadership=$request->dg16+$request->dg17+$request->dg18;
        $marksTopDigitalManagement=$request->totTopProjectManagement+$request->totTopChangeManagement+$request->totTopCollaboration+$request->totTopOrientation+$request->totTopQualityManagement;

        $topDigitalGovernment=new TopDigitalGovernment;

        $topDigitalGovernment->project_management=$request->totTopProjectManagement;
        $topDigitalGovernment->change_management=$request->totTopChangeManagement;
        $topDigitalGovernment->collaboration=$request->totTopCollaboration;
        $topDigitalGovernment->orientation=$request->totTopOrientation;
        $topDigitalGovernment->quality_management=$request->totTopQualityManagement;
        $topDigitalGovernment->leadership=$totLeadership;
        $topDigitalGovernment->overall_top_digital_government=$marksTopDigitalManagement;
        $topDigitalGovernment->govofficial_id=$request->govofficial_id;

        $topDigitalGovernment->save();

        return redirect()->route('topDigitalGovernmentResult');
    }

    public function topDigitalGovernmentResult(){
        $topDigitalGov = Auth::user()->govofficial->topDigitalGovernment;

        $topProjectManagement=$topDigitalGov->project_management;
        $a=$topProjectManagement/12;
        $avgtopProjectManagement=round($a*100);

        $topChangeManagement=$topDigitalGov->change_management;
        $b=$topChangeManagement/18;
        $avgtopChangeManagement=round($b*100);

        $topCollaboration=$topDigitalGov->collaboration;
        $c=$topCollaboration/12;
        $avgtopCollaboration=round($c*100);

        $topOrientatiion=$topDigitalGov->orientation;
        $d=$topOrientatiion/14;
        $avgtopOrientatiion=round($d*100);

        $topQualityManagement=$topDigitalGov->quality_management;
        $e=$topQualityManagement/15;
        $avgtopQualityManagement=round($e*100);

        $topLeadership=$topDigitalGov->Leadership;
        $f=$topLeadership/29;
        $avgtopLeadership=round($f*100);

        $result = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgtopProjectManagement],
            ['Change Management', (int) $avgtopChangeManagement],
            ['Collaboration and Partnership', (int) $avgtopCollaboration],
            ['Results Orientation', (int) $avgtopOrientatiion],
            ['Quality Management', (int) $avgtopQualityManagement],
            ['Digital Government Leadership', (int) $avgtopLeadership],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topProjectManagement2=$govOfficial->topProjectManagement;
        $topChangeManagement2=$govOfficial->topChangeManagement;
        $topCollaboration2=$govOfficial->topCollaboration;
        $topOrientation2=$govOfficial->topOrientation;
        $topQualityManagement2=$govOfficial->topQualityManagement;
        $topLeadership2=$govOfficial->topLeadership;
        return view('govOfficials.Top&2ndTier.DigitalGovernment.results',compact('topLeadership2','topProjectManagement2','result','avgtopChangeManagement','avgtopCollaboration','avgtopOrientatiion','avgtopQualityManagement','avgtopLeadership','topChangeManagement2','topCollaboration2','topOrientation2','topQualityManagement2'));
    }

    public function topDigitalGovernmentReport(){
        $topDigitalGov = Auth::user()->govofficial->topDigitalGovernment;

        $topProjectManagement=$topDigitalGov->project_management;
        $a=$topProjectManagement/12;
        $avgtopProjectManagement=round($a*100);

        $topChangeManagement=$topDigitalGov->change_management;
        $b=$topChangeManagement/18;
        $avgtopChangeManagement=round($b*100);

        $topCollaboration=$topDigitalGov->collaboration;
        $c=$topCollaboration/12;
        $avgtopCollaboration=round($c*100);

        $topOrientatiion=$topDigitalGov->orientation;
        $d=$topOrientatiion/14;
        $avgtopOrientatiion=round($d*100);

        $topQualityManagement=$topDigitalGov->quality_management;
        $e=$topQualityManagement/15;
        $avgtopQualityManagement=round($e*100);

        $topLeadership=$topDigitalGov->Leadership;
        $f=$topLeadership/29;
        $avgtopLeadership=round($f*100);

        $result = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgtopProjectManagement],
            ['Change Management', (int) $avgtopChangeManagement],
            ['Collaboration and Partnership', (int) $avgtopCollaboration],
            ['Results Orientation', (int) $avgtopOrientatiion],
            ['Quality Management', (int) $avgtopQualityManagement],
            ['Digital Government Leadership', (int) $avgtopLeadership],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topProjectManagement2=$govOfficial->topProjectManagement;
        $topChangeManagement2=$govOfficial->topChangeManagement;
        $topCollaboration2=$govOfficial->topCollaboration;
        $topOrientation2=$govOfficial->topOrientation;
        $topQualityManagement2=$govOfficial->topQualityManagement;
        $topLeadership2=$govOfficial->topLeadership;
        return view('govOfficials.Top&2ndTier.DigitalGovernment.report',compact('govOfficial','topLeadership2','topProjectManagement2','result','avgtopChangeManagement','avgtopCollaboration','avgtopOrientatiion','avgtopQualityManagement','avgtopLeadership','topChangeManagement2','topCollaboration2','topOrientation2','topQualityManagement2'));
    }

    public function topManagementPage01(){
        return view('govOfficials.Top&2ndTier.Management.page01');
    }

    public function topManagementPage02(){
        return view('govOfficials.Top&2ndTier.Management.page02');
    }

    public function topManagementPage03(){
        return view('govOfficials.Top&2ndTier.Management.page03');
    }

    public function topManagementPage04(){
        return view('govOfficials.Top&2ndTier.Management.page04');
    }


    public function topManagementPage05(){
        return view('govOfficials.Top&2ndTier.Management.page05');
    }

    public function topManagementPage06(){
        return view('govOfficials.Top&2ndTier.Management.page06');
    }

    public function topManagementPage07(){
        return view('govOfficials.Top&2ndTier.Management.page07');
    }

    public function topManagementPage08(){
        $topOrganizationalLeadership=Auth::user()->govofficial->topOrganizationalLeadership;
        $totTopOrganizationalLeadership=$topOrganizationalLeadership->mgt1+$topOrganizationalLeadership->mgt2+$topOrganizationalLeadership->mgt3+$topOrganizationalLeadership->mgt4;

        $topCommunication=Auth::user()->govofficial->topCommunication;
        $totTopCommunication=$topCommunication->mgt5+$topCommunication->mgt6+$topCommunication->mgt7+$topCommunication->mgt8+$topCommunication->mgt9;

        $topWorkplaceManagement=Auth::user()->govofficial->topWorkplaceManagement;
        $totTopWorkplaceManagement=$topWorkplaceManagement->mgt10+$topWorkplaceManagement->mgt11+$topWorkplaceManagement->mgt12;

        $topDecisionMaking=Auth::user()->govofficial->topDecisionMaking;
        $totTopDecisionMaking = (int)$topDecisionMaking->mgt13 + (int)$topDecisionMaking->mgt14 + (int)$topDecisionMaking->mgt15 + (int)$topDecisionMaking->mgt16 + (int)$topDecisionMaking->mgt17;

        $topCapacityBuilding=Auth::user()->govofficial->topCapacityBuilding;
        $totTopCapacityBuilding=$topCapacityBuilding->mgt18_1+$topCapacityBuilding->mgt18_2+$topCapacityBuilding->mgt18_3+$topCapacityBuilding->mgt19+$topCapacityBuilding->mgt20+$topCapacityBuilding->mgt21;

        $topStakeholder=Auth::user()->govofficial->topStakeholder;
        $totTopStakeholder=$topStakeholder->mgt22+$topStakeholder->mgt23_1+$topStakeholder->mgt23_2+$topStakeholder->mgt24+$topStakeholder->mgt25;

        $topHumanResource=Auth::user()->govofficial->topHumanResource;
        $totTopHumanResource=$topHumanResource->mgt26+$topHumanResource->mgt27;

        return view('govOfficials.Top&2ndTier.Management.page08',compact('totTopHumanResource','totTopStakeholder','totTopCapacityBuilding','totTopDecisionMaking','totTopWorkplaceManagement','totTopCommunication','totTopOrganizationalLeadership'));
    }

    public function storeTopOrganizationalLeadership(Request $request){
        request()->validate([
            'mgt1'=>'required|string',
            'mgt2'=>'required|string',
            'mgt3'=>'required|string',
            'mgt4'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topOrganizationalLeadership = new TopOrganizationalLeadership;

        $topOrganizationalLeadership->mgt1=$request->mgt1;
        $topOrganizationalLeadership->mgt2=$request->mgt2;
        $topOrganizationalLeadership->mgt3=$request->mgt3;
        $topOrganizationalLeadership->mgt4=$request->mgt4;
        $topOrganizationalLeadership->govofficial_id=$request->govofficial_id;

        $topOrganizationalLeadership->save();

        return redirect()->route('topManagementPage02');
    }

    public function storeTopCommunication(Request $request){
        request()->validate([
            'mgt5'=>'required|string',
            'mgt6'=>'required|string',
            'mgt7'=>'required|string',
            'mgt8'=>'required|string',
            'mgt9'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topCommunication = new TopCommunication;

        $topCommunication->mgt5=$request->mgt5;
        $topCommunication->mgt6=$request->mgt6;
        $topCommunication->mgt7=$request->mgt7;
        $topCommunication->mgt8=$request->mgt8;
        $topCommunication->mgt9=$request->mgt9;
        $topCommunication->govofficial_id=$request->govofficial_id;

        $topCommunication->save();

        return redirect()->route('topManagementPage03');
    }

    public function storeTopWorkplaceManagement(Request $request){
        request()->validate([
            'mgt10'=>'required|string',
            'mgt11'=>'required|string',
            'mgt12'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topWorkplaceManagemet = new TopWorkplaceManagement;

        $topWorkplaceManagemet->mgt10=$request->mgt10;
        $topWorkplaceManagemet->mgt11=$request->mgt11;
        $topWorkplaceManagemet->mgt12=$request->mgt12;
        $topWorkplaceManagemet->govofficial_id=$request->govofficial_id;

        $topWorkplaceManagemet->save();

        return redirect()->route('topManagementPage04');
    }

    public function storeTopDecisionMaking(Request $request){
        request()->validate([
            'mgt13'=>'required|string',
            'mgt14'=>'required|string',
            'mgt15'=>'required|string',
            'mgt16'=>'required|string',
            'mgt17'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);
        // dd($request);

        $topDecionMaking = new TopDecisionMaking;

        $topDecionMaking->mgt13=$request->mgt13;
        $topDecionMaking->mgt14=$request->mgt14;
        $topDecionMaking->mgt15=$request->mgt15;
        $topDecionMaking->mgt16=$request->mgt16;
        $topDecionMaking->mgt17=$request->mgt17;
        $topDecionMaking->govofficial_id=$request->govofficial_id;

        $topDecionMaking->save();

        return redirect()->route('topManagementPage05');
    }

    public function storeTopCapacityBuilding(Request $request){
        request()->validate([
            'mgt18_1'=>'required|string',
            'mgt18_2'=>'required|string',
            'mgt18_3'=>'required|string',
            'mgt19'=>'required|string',
            'mgt20'=>'required|string',
            'mgt21'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topCapacityBuilding = new TopCapacityBuilding;

        $topCapacityBuilding->mgt18_1=$request->mgt18_1;
        $topCapacityBuilding->mgt18_2=$request->mgt18_2;
        $topCapacityBuilding->mgt18_3=$request->mgt18_3;
        $topCapacityBuilding->mgt19=$request->mgt19;
        $topCapacityBuilding->mgt20=$request->mgt20;
        $topCapacityBuilding->mgt21=$request->mgt21;
        $topCapacityBuilding->govofficial_id=$request->govofficial_id;

        $topCapacityBuilding->save();

        return redirect()->route('topManagementPage06');

    }

    public function storeTopStakeholder(Request $request){
        // dd($request);
        request()->validate([
            'mgt22'=>'required|string',
            'mgt23_1'=>'required|string',
            'mgt23_2'=>'required|string',
            'mgt24'=>'required|string',
            'mgt25'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);
        // dd($request);

        $topStakeholder = new TopStakeholderManagement;

        $topStakeholder->mgt22=$request->mgt22;
        $topStakeholder->mgt23_1=$request->mgt23_1;
        $topStakeholder->mgt23_2=$request->mgt23_2;
        $topStakeholder->mgt24=$request->mgt24;
        $topStakeholder->mgt25=$request->mgt25;
        $topStakeholder->govofficial_id=$request->govofficial_id;

        $topStakeholder->save();

        return redirect()->route('topManagementPage07');
    }

    public function storeTopHumanResource(Request $request){
        // dd($request);
        request()->validate([
            'mgt26'=>'required|string',
            'mgt27'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topHumanResource = new TopHumanResource;

        $topHumanResource->mgt26=$request->mgt26;
        $topHumanResource->mgt27=$request->mgt27;
        $topHumanResource->govofficial_id=$request->govofficial_id;

        $topHumanResource->save();

        return redirect()->route('topManagementPage08');
    }

    public function storeTopPersonalDevelopment(Request $request){
        // dd($request);
        request()->validate([
            'mgt28'=>'required|string',
            'mgt29'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $topPersonalDevelopment = new TopPersonalDevelopment;

        $topPersonalDevelopment->mgt28=$request->mgt28;
        $topPersonalDevelopment->mgt29=$request->mgt29;
        $topPersonalDevelopment->govofficial_id=$request->govofficial_id;

        $topPersonalDevelopment->save();

        $totTopPersonalDevelopment=$request->mgt28+$request->mgt29;
        $totTopManagement=$request->totTopOrganizationalLeadership+$request->totTopCommunication+$request->totTopWorkplaceManagement+$request->totTopDecisionMaking+$request->totTopCapacityBuilding+$request->totTopStakeholder+$request->totTopHumanResoure+$request->totTopPersonalDevelopment;

        $topManagement=new TopManagement;

        $topManagement->organizational_leadership=$request->totTopOrganizationalLeadership;
        $topManagement->communication=$request->totTopCommunication;
        $topManagement->workplace_management=$request->totTopWorkplaceManagement;
        $topManagement->decision_making=$request->totTopDecisionMaking;
        $topManagement->capacity_building=$request->totTopCapacityBuilding;
        $topManagement->stakeholder_management=$request->totTopStakeholder;
        $topManagement->human_resource=$request->totTopHumanResource;
        $topManagement->personal_development=$totTopPersonalDevelopment;
        $topManagement->overall_top_management=$totTopManagement;
        $topManagement->govofficial_id=$request->govofficial_id;

        $topManagement->save();

        return redirect()->route('topManagementResult');
    }

    public function topManagementResult(){

        $topManagement = Auth::user()->govofficial->topManagement;

        $topOrganizationalLeadership=$topManagement->organizational_leadership;
        $i=$topOrganizationalLeadership/12;
        $avgtopOrganizationalLeadership=round($i*100);

        $topCommunication=$topManagement->communication;
        $a=$topCommunication/12;
        $avgtopCommunication=round($a*100);

        $topWorkplaceManagement=$topManagement->workplace_management;
        $b=$topWorkplaceManagement/10;
        $avgtopWorkplaceManagement=round($b*100);

        $topDecisionMaking=$topManagement->decision_making;
        $c=$topDecisionMaking/19;
        $avgtopDecisionMaking=round($c*100);

        $topCapacityBuilding=$topManagement->capacity_building;
        $d=$topCapacityBuilding/8;
        $avgtopCapacityBuilding=round($d*100);

        $topStakeholderManagement=$topManagement->stakeholder_management;
        $e=$topStakeholderManagement/25;
        $avgtopStakeholderManagement=round($e*100);

        $topHumanResource=$topManagement->human_resource;
        $f=$topHumanResource/17;
        $avgtopHumanResource=round($f*100);

        $topPersonalDevelopment=$topManagement->personal_development;
        $h=$topPersonalDevelopment/5;
        $avgtopPersonalDevelopment=round($h*100);

        $result = [
            ['Category', 'Value'],
            ['Organizational Leadership', (int) $avgtopOrganizationalLeadership],
            ['Communication', (int) $avgtopCommunication],
            ['Workplace Management', (int) $avgtopWorkplaceManagement],
            ['Decision Making', (int) $avgtopDecisionMaking],
            ['Capacity Building', (int) $avgtopCapacityBuilding],
            ['Stakeholder Management', (int) $avgtopStakeholderManagement],
            ['Human Resource', (int) $avgtopHumanResource],
            ['Personal Development', (int) $avgtopPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topOrganizationalLeadership2=$govOfficial->topOrganizationalLeadership;
        $topCommunication2=$govOfficial->topCommunication;
        $topWorkplaceManagement2=$govOfficial->topWorkplaceManagement;
        $topDecisionMaking2=$govOfficial->topDecisionMaking;
        $topCapacityBuilding2=$govOfficial->topCapacityBuilding;
        $topStakeholderManagement2=$govOfficial->topStakeholder;
        $topHumanResource2=$govOfficial->topHumanResource;
        $topPersonalDevelopment2=$govOfficial->topPersonalDevelopment;

        //dd(compact('avgtopCapacityBuilding','avgtopDecisionMaking','topCapacityBuilding2','topDecisionMaking2','result','topCommunication2','topWorkplaceManagement2','topStakeholderManagement2','topPersonalDevelopment2','avgtopCommunication','avgtopWorkplaceManagement','avgtopStakeholderManagement','avgtopPersonalDevelopment'));

        return view('govOfficials.Top&2ndTier.Management.results',compact('avgtopCapacityBuilding','avgtopDecisionMaking','topCapacityBuilding2','topDecisionMaking2','result','topCommunication2','topWorkplaceManagement2','topStakeholderManagement2','topPersonalDevelopment2','avgtopCommunication','avgtopWorkplaceManagement','avgtopStakeholderManagement','avgtopPersonalDevelopment'));
    }

    public function topManagementReport(){

        /*
        $topManagement = Auth::user()->govofficial->topManagement;

        $topOrganizationalLeadership=$topManagement->organizational_leadership;
        $i=$topOrganizationalLeadership/12;
        $avgtopOrganizationalLeadership=round($i*100);

        $topCommunication=$topManagement->communication;
        $a=$topCommunication/12;
        $avgtopCommunication=round($a*100);

        $topWorkplaceManagement=$topManagement->workplace_management;
        $b=$topWorkplaceManagement/10;
        $avgtopWorkplaceManagement=round($b*100);

        $topDecisionMaking=$topManagement->decision_making;
        $c=$topDecisionMaking/19;
        $avgtopDecisionMaking=round($c*100);

        $topCapacityBuilding=$topManagement->capacity_building;
        $d=$topCapacityBuilding/8;
        $avgtopCapacityBuilding=round($d*100);

        $topStakeholderManagement=$topManagement->stakeholder_management;
        $e=$topStakeholderManagement/25;
        $avgtopStakeholderManagement=round($e*100);

        $topHumanResource=$topManagement->human_resource;
        $f=$topHumanResource/17;
        $avgtopHumanResource=round($f*100);

        $topPersonalDevelopment=$topManagement->personal_development;
        $h=$topPersonalDevelopment/5;
        $avgtopPersonalDevelopment=round($h*100);

        $result = [
            ['Category', 'Value'],
            ['Organizational Leadership', (int) $avgtopOrganizationalLeadership],
            ['Communication', (int) $avgtopCommunication],
            ['Workplace Management', (int) $avgtopWorkplaceManagement],
            ['Decision Making', (int) $avgtopDecisionMaking],
            ['Capacity Building', (int) $avgtopCapacityBuilding],
            ['Stakeholder Management', (int) $avgtopStakeholderManagement],
            ['Human Resource', (int) $avgtopHumanResource],
            ['Personal Development', (int) $avgtopPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topOrganizationalLeadership2=$govOfficial->topOrganizationalLeadership;
        $topCommunication2=$govOfficial->topCommunication;
        $topWorkplaceManagement2=$govOfficial->topWorkplaceManagement;
        $topDecisionMaking2=$govOfficial->topDecisionMaking;
        $topCapacityBuilding2=$govOfficial->topCapacityBuilding;
        $topStakeholderManagement2=$govOfficial->topStakeholder;
        $topHumanResource2=$govOfficial->topHumanResource;
        $topPersonalDevelopment2=$govOfficial->topPersonalDevelopment;
*/
        //return view('govOfficials.Top&2ndTier.Management.report',compact('govOfficial','avgtopCapacityBuilding','avgtopDecisionMaking','topCapacityBuilding2','topDecisionMaking2','result','topCommunication2','topWorkplaceManagement2','topStakeholderManagement2','topPersonalDevelopment2','avgtopCommunication','avgtopWorkplaceManagement','avgtopStakeholderManagement','avgtopPersonalDevelopment'));
        //$pdf = PDF::loadView('govOfficials.Top&2ndTier.Management.report-test',compact('govOfficial','avgtopCapacityBuilding','avgtopDecisionMaking','topCapacityBuilding2','topDecisionMaking2','result','topCommunication2','topWorkplaceManagement2','topStakeholderManagement2','topPersonalDevelopment2','avgtopCommunication','avgtopWorkplaceManagement','avgtopStakeholderManagement','avgtopPersonalDevelopment'));

        //$pdf = PDF::loadView('govOfficials.Top&2ndTier.Management.report-test',compact('govOfficial','avgtopCapacityBuilding','avgtopDecisionMaking','topCapacityBuilding2','topDecisionMaking2','result','topCommunication2','topWorkplaceManagement2','topStakeholderManagement2','topPersonalDevelopment2','avgtopCommunication','avgtopWorkplaceManagement','avgtopStakeholderManagement','avgtopPersonalDevelopment'));
        //$pdf = PDF::loadView('govOfficials.Top&2ndTier.Management.report-test');
        //$pdf = PDF::loadView('pdf.report');
        $pdf = PDF::loadView('pdf.report');
        return $pdf->stream('report.pdf', array('Attachment' => 0));
    }

//     public function topManagementReport()
// {
//     // Retrieve data needed for the report
//     $govOfficial = Auth::user()->govofficial;
//     $topManagement = $govOfficial->topManagement;

//     // Calculate averages
//     $avgtopOrganizationalLeadership = round($topManagement->organizational_leadership / 12 * 100);
//     $avgtopCommunication = round($topManagement->communication / 12 * 100);
//     $avgtopWorkplaceManagement = round($topManagement->workplace_management / 10 * 100);
//     $avgtopDecisionMaking = round($topManagement->decision_making / 19 * 100);
//     $avgtopCapacityBuilding = round($topManagement->capacity_building / 8 * 100);
//     $avgtopStakeholderManagement = round($topManagement->stakeholder_management / 25 * 100);
//     $avgtopHumanResource = round($topManagement->human_resource / 17 * 100);
//     $avgtopPersonalDevelopment = round($topManagement->personal_development / 5 * 100);

//     // Prepare data for the chart
//     $result = [
//         ['Category', 'Value'],
//         ['Organizational Leadership', $avgtopOrganizationalLeadership],
//         ['Communication', $avgtopCommunication],
//         ['Workplace Management', $avgtopWorkplaceManagement],
//         ['Decision Making', $avgtopDecisionMaking],
//         ['Capacity Building', $avgtopCapacityBuilding],
//         ['Stakeholder Management', $avgtopStakeholderManagement],
//         ['Human Resource', $avgtopHumanResource],
//         ['Personal Development', $avgtopPersonalDevelopment],
//     ];

//     // Pass the data to the Blade view
//     $data = compact('govOfficial', 'result');

//     // Render the Blade view to HTML content
//     $htmlContent = View::make('pdf.content', $data)->render();

//     // Create a new Dompdf instance
//     $dompdf = new Dompdf();

//     // Load HTML content
//     $dompdf->loadHtml($htmlContent);

//     // Set paper size (optional)
//     $dompdf->setPaper('A4', 'portrait');

//     // Render the HTML as PDF
//     $dompdf->render();

//     // Output the generated PDF (inline or attachment)
//     return $dompdf->stream('report.pdf');
// }

    public function overalresult(){
        $labels = ["ICT", "Digital Government", "Management"];
        $topIct=Auth::user()->govofficial->topIct;
        $topDigitalGov=Auth::user()->govofficial->topDigitalGovernment;
        $topManagement=Auth::user()->govofficial->topManagement;
        $data=[
            (int) $topIct->overall_top_ict,
            (int) $topDigitalGov->overall_top_digital_government,
            (int) $topManagement->overall_top_management
        ];

        $topIctInWorkplace=$topIct->ict_in_workplace;
        $a=$topIctInWorkplace/24;
        $avgTopIctInWorkplace=round($a*100);

        $topInformationManagement=$topIct->information_management;
        $b=$topInformationManagement/6;
        $avgTopInformationManagement=round($b*100);

        $topDigitalCitizenship=$topIct->digital_citizenship;
        $c=$topDigitalCitizenship/70;
        $avgTopDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topIctInWorkplace2=$govOfficial->topIctInWorkplace;
        $topInformationManagement2=$govOfficial->topInformationManagement;
        $topDigitalCitizenship2=$govOfficial->topDigitalCitizenship;

        $topProjectManagement=$topDigitalGov->project_management;
        $a=$topProjectManagement/12;
        $avgtopProjectManagement=round($a*100);

        $topChangeManagement=$topDigitalGov->change_management;
        $b=$topChangeManagement/18;
        $avgtopChangeManagement=round($b*100);

        $topCollaboration=$topDigitalGov->collaboration;
        $c=$topCollaboration/12;
        $avgtopCollaboration=round($c*100);

        $topOrientatiion=$topDigitalGov->orientation;
        $d=$topOrientatiion/14;
        $avgtopOrientatiion=round($d*100);

        $topQualityManagement=$topDigitalGov->quality_management;
        $e=$topQualityManagement/15;
        $avgtopQualityManagement=round($e*100);

        $topLeadership=$topDigitalGov->Leadership;
        $f=$topLeadership/29;
        $avgtopLeadership=round($f*100);

        $result2 = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgtopProjectManagement],
            ['Change Management', (int) $avgtopChangeManagement],
            ['Collaboration and Partnership', (int) $avgtopCollaboration],
            ['Results Orientation', (int) $avgtopOrientatiion],
            ['Quality Management', (int) $avgtopQualityManagement],
            ['Digital Government Leadership', (int) $avgtopLeadership],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topProjectManagement2=$govOfficial->topProjectManagement;
        $topChangeManagement2=$govOfficial->topChangeManagement;
        $topCollaboration2=$govOfficial->topCollaboration;
        $topOrientation2=$govOfficial->topOrientation;
        $topQualityManagement2=$govOfficial->topQualityManagement;
        $topLeadership2=$govOfficial->topLeadership;

        $topOrganizationalLeadership=$topManagement->organizational_leadership;
        $i=$topOrganizationalLeadership/12;
        $avgtopOrganizationalLeadership=round($i*100);

        $topCommunication=$topManagement->communication;
        $a=$topCommunication/12;
        $avgtopCommunication=round($a*100);

        $topWorkplaceManagement=$topManagement->workplace_management;
        $b=$topWorkplaceManagement/10;
        $avgtopWorkplaceManagement=round($b*100);

        $topDecisionMaking=$topManagement->decision_making;
        $c=$topDecisionMaking/19;
        $avgtopDecisionMaking=round($c*100);

        $topCapacityBuilding=$topManagement->capacity_building;
        $d=$topCapacityBuilding/8;
        $avgtopCapacityBuilding=round($d*100);

        $topStakeholderManagement=$topManagement->stakeholder_management;
        $e=$topStakeholderManagement/25;
        $avgtopStakeholderManagement=round($e*100);

        $topHumanResource=$topManagement->human_resource;
        $f=$topHumanResource/17;
        $avgtopHumanResource=round($f*100);

        $topPersonalDevelopment=$topManagement->personal_development;
        $h=$topPersonalDevelopment/5;
        $avgtopPersonalDevelopment=round($h*100);

        $result3 = [
            ['Category', 'Value'],
            ['Organizational Leadership', (int) $avgtopOrganizationalLeadership],
            ['Communication', (int) $avgtopCommunication],
            ['Workplace Management', (int) $avgtopWorkplaceManagement],
            ['Decision Making', (int) $avgtopDecisionMaking],
            ['Capacity Building', (int) $avgtopCapacityBuilding],
            ['Stakeholder Management', (int) $avgtopStakeholderManagement],
            ['Human Resource', (int) $avgtopHumanResource],
            ['Personal Development', (int) $avgtopPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topOrganizationalLeadership2=$govOfficial->topOrganizationalLeadership;
        $topCommunication2=$govOfficial->topCommunication;
        $topWorkplaceManagement2=$govOfficial->topWorkplaceManagement;
        $topDecisionMaking2=$govOfficial->topDecisionMaking;
        $topCapacityBuilding2=$govOfficial->topCapacityBuilding;
        $topStakeholderManagement2=$govOfficial->topStakeholder;
        $topHumanResource2=$govOfficial->topHumanResource;
        $topPersonalDevelopment2=$govOfficial->topPersonalDevelopment;

        return view('govOfficials.Top&2ndTier.overallResults',compact('data','labels','topDigitalCitizenship2','topInformationManagement2','topIctInWorkplace2','avgTopDigitalCitizenship','avgTopInformationManagement','avgTopIctInWorkplace','result','topLeadership2','topProjectManagement2','result2','avgtopChangeManagement','avgtopCollaboration','avgtopOrientatiion','avgtopQualityManagement','avgtopLeadership','topChangeManagement2','topCollaboration2','topOrientation2','topQualityManagement2','avgtopCapacityBuilding','avgtopDecisionMaking','topCapacityBuilding2','topDecisionMaking2','result3','topCommunication2','topWorkplaceManagement2','topStakeholderManagement2','topPersonalDevelopment2','avgtopCommunication','avgtopWorkplaceManagement','avgtopStakeholderManagement','avgtopPersonalDevelopment'));
    }

    public function overalreport(){
        $labels = ["ICT", "Digital Government", "Management"];
        $topIct=Auth::user()->govofficial->topIct;
        $topDigitalGov=Auth::user()->govofficial->topDigitalGovernment;
        $topManagement=Auth::user()->govofficial->topManagement;
        $data=[
            (int) $topIct->overall_top_ict,
            (int) $topDigitalGov->overall_top_digital_government,
            (int) $topManagement->overall_top_management
        ];

        $topIctInWorkplace=$topIct->ict_in_workplace;
        $a=$topIctInWorkplace/24;
        $avgTopIctInWorkplace=round($a*100);

        $topInformationManagement=$topIct->information_management;
        $b=$topInformationManagement/6;
        $avgTopInformationManagement=round($b*100);

        $topDigitalCitizenship=$topIct->digital_citizenship;
        $c=$topDigitalCitizenship/70;
        $avgTopDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgTopIctInWorkplace],
            ['Information Management', (int) $avgTopInformationManagement],
            ['Digital Citizenship', (int) $avgTopDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topIctInWorkplace2=$govOfficial->topIctInWorkplace;
        $topInformationManagement2=$govOfficial->topInformationManagement;
        $topDigitalCitizenship2=$govOfficial->topDigitalCitizenship;

        $topProjectManagement=$topDigitalGov->project_management;
        $a=$topProjectManagement/12;
        $avgtopProjectManagement=round($a*100);

        $topChangeManagement=$topDigitalGov->change_management;
        $b=$topChangeManagement/18;
        $avgtopChangeManagement=round($b*100);

        $topCollaboration=$topDigitalGov->collaboration;
        $c=$topCollaboration/12;
        $avgtopCollaboration=round($c*100);

        $topOrientatiion=$topDigitalGov->orientation;
        $d=$topOrientatiion/14;
        $avgtopOrientatiion=round($d*100);

        $topQualityManagement=$topDigitalGov->quality_management;
        $e=$topQualityManagement/15;
        $avgtopQualityManagement=round($e*100);

        $topLeadership=$topDigitalGov->Leadership;
        $f=$topLeadership/29;
        $avgtopLeadership=round($f*100);

        $result2 = [
            ['Category', 'Value'],
            ['Project Management', (int) $avgtopProjectManagement],
            ['Change Management', (int) $avgtopChangeManagement],
            ['Collaboration and Partnership', (int) $avgtopCollaboration],
            ['Results Orientation', (int) $avgtopOrientatiion],
            ['Quality Management', (int) $avgtopQualityManagement],
            ['Digital Government Leadership', (int) $avgtopLeadership],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topProjectManagement2=$govOfficial->topProjectManagement;
        $topChangeManagement2=$govOfficial->topChangeManagement;
        $topCollaboration2=$govOfficial->topCollaboration;
        $topOrientation2=$govOfficial->topOrientation;
        $topQualityManagement2=$govOfficial->topQualityManagement;
        $topLeadership2=$govOfficial->topLeadership;

        $topOrganizationalLeadership=$topManagement->organizational_leadership;
        $i=$topOrganizationalLeadership/14;
        $avgtopOrganizationalLeadership=round($i*100);

        $topCommunication=$topManagement->communication;
        $a=$topCommunication/18;
        $avgtopCommunication=round($a*100);

        $topWorkplaceManagement=$topManagement->workplace_management;
        $b=$topWorkplaceManagement/12;
        $avgtopWorkplaceManagement=round($b*100);

        $topDecisionMaking=$topManagement->decision_making;
        $c=$topDecisionMaking/10;
        $avgtopDecisionMaking=round($c*100);

        $topCapacityBuilding=$topManagement->capacity_building;
        $d=$topCapacityBuilding/20;
        $avgtopCapacityBuilding=round($d*100);

        $topStakeholderManagement=$topManagement->stakeholder_management;
        $e=$topStakeholderManagement/14;
        $avgtopStakeholderManagement=round($e*100);

        $topHumanResource=$topManagement->human_resource;
        $f=$topHumanResource/6;
        $avgtopHumanResource=round($f*100);

        $topPersonalDevelopment=$topManagement->personal_development;
        $h=$topPersonalDevelopment/6;
        $avgtopPersonalDevelopment=round($h*100);

        $result3 = [
            ['Category', 'Value'],
            ['Organizational Leadership', (int) $avgtopOrganizationalLeadership],
            ['Communication', (int) $avgtopCommunication],
            ['Workplace Management', (int) $avgtopWorkplaceManagement],
            ['Decision Making', (int) $avgtopDecisionMaking],
            ['Capacity Building', (int) $avgtopCapacityBuilding],
            ['Stakeholder Management', (int) $avgtopStakeholderManagement],
            ['Human Resource', (int) $avgtopHumanResource],
            ['Personal Development', (int) $avgtopPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $topOrganizationalLeadership2=$govOfficial->topOrganizationalLeadership;
        $topCommunication2=$govOfficial->topCommunication;
        $topWorkplaceManagement2=$govOfficial->topWorkplaceManagement;
        $topDecisionMaking2=$govOfficial->topDecisionMaking;
        $topCapacityBuilding2=$govOfficial->topCapacityBuilding;
        $topStakeholderManagement2=$govOfficial->topStakeholder;
        $topHumanResource2=$govOfficial->topHumanResource;
        $topPersonalDevelopment2=$govOfficial->topPersonalDevelopment;

        return view('govOfficials.Top&2ndTier.overallReport',compact('govOfficial','data','labels','topDigitalCitizenship2','topInformationManagement2','topIctInWorkplace2','avgTopDigitalCitizenship','avgTopInformationManagement','avgTopIctInWorkplace','result','topLeadership2','topProjectManagement2','result2','avgtopChangeManagement','avgtopCollaboration','avgtopOrientatiion','avgtopQualityManagement','avgtopLeadership','topChangeManagement2','topCollaboration2','topOrientation2','topQualityManagement2','avgtopCapacityBuilding','avgtopDecisionMaking','topCapacityBuilding2','topDecisionMaking2','result3','topCommunication2','topWorkplaceManagement2','topStakeholderManagement2','topPersonalDevelopment2','avgtopCommunication','avgtopWorkplaceManagement','avgtopStakeholderManagement','avgtopPersonalDevelopment'));
    }






    // adding generate the pdf 
    public function downloadPdf()
{
    // Generate $result data (same as in topIctResult())
    $result = [
        ['Category', 'Value'],
        ['ICT in Workplace', 50], // Example values
        ['Information Management', 75],
        ['Digital Citizenship', 80],
    ];

    $data = [
        'result' => $result,
    ];

    // Render the chart view to HTML
    $chartHtml = view('govOfficials.Top&2ndTier.ICT.results', $data)->render();

    // Initialize Dompdf
    $dompdf = new Dompdf();
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $dompdf->setOptions($options);

    // Load HTML content (chart) into Dompdf
    $dompdf->loadHtml($chartHtml);

    // Render PDF (optional: you can also set paper size, orientation, etc.)
    $dompdf->render();

    // Output PDF as a download
    return $dompdf->stream("chart_report.pdf");
}

}
// } 


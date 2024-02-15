<?php

namespace App\Http\Controllers;

use App\Models\OpIct;
use App\Models\OpTeamwork;
use App\Models\Govofficial;
use App\Models\OpInitiative;
use App\Models\OpManagement;
use Illuminate\Http\Request;
use App\Models\OpOrientation;
use App\Models\OpCollaboration;
use App\Models\OpCommunication;
use App\Models\OpIctInWorkplace;
use App\Models\OpChangeManagement;
use Illuminate\Support\Facades\DB;
use App\Models\OpDigitalGovernment;
use App\Models\OpQualityManagement;
use App\Models\OpDigitalCitizenship;
use Illuminate\Support\Facades\Auth;
use App\Models\OpPersonalDevelopment;
use App\Models\OpWorkplaceManagement;
use App\Models\OpStakeholderManagement;
use App\Models\OpInformationManagements;

class OperationalLayerController extends Controller
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

    public function operational()
    {
        $opChangeManagementDataExists = Auth::user()->govofficial->opChangeManagement;
        $opCollaborationDataExists = Auth::user()->govofficial->opCollaboration;
        $opOrientationDataExists = Auth::user()->govofficial->opOrientation;
        $opQualityManagementDataExists = Auth::user()->govofficial->opQualityManagement;
        $digitalGovDataExists = Auth::user()->govofficial->opInitiative;

        $ictDataExists = Auth::user()->govofficial->opIct;
        $opIctInWorkplaceDataExists = Auth::user()->govofficial->opIctInWorkPlace;
        $opInformationManagementDataExists = Auth::user()->govofficial->opInformationManagement;

        $managementDataExists = Auth::user()->govofficial->opManagement;
        $opCommunicationDataExists = Auth::user()->govofficial->opCommunication;
        $opWorkplaceManagementDataExists = Auth::user()->govofficial->opWorkplaceManagement;
        $opStakeholderManagementDataExists = Auth::user()->govofficial->opStakeholderManagement;
        $opTeamworkDataExists = Auth::user()->govofficial->opTeamwork;

        return view('govOfficials.Operational.main',compact('opTeamworkDataExists','opStakeholderManagementDataExists','opWorkplaceManagementDataExists','opCommunicationDataExists','opTeamworkDataExists','opStakeholderManagementDataExists','opWorkplaceManagementDataExists','opInformationManagementDataExists','opIctInWorkplaceDataExists','digitalGovDataExists','opChangeManagementDataExists','opCollaborationDataExists','opOrientationDataExists','opQualityManagementDataExists','ictDataExists','managementDataExists'));
    }

    public function digitalGovernmentPage01()
    {
        return view('govOfficials.Operational.DigitalGovernment.page01');
    }

    public function digitalGovernmentPage02()
    {
        return view('govOfficials.Operational.DigitalGovernment.page02');
    }

    public function digitalGovernmentPage03()
    {
        return view('govOfficials.Operational.DigitalGovernment.page03');
    }

    public function digitalGovernmentPage04()
    {
        return view('govOfficials.Operational.DigitalGovernment.page04');
    }

    public function digitalGovernmentPage05()
    {
        $dg1=Auth::user()->govofficial->opChangeManagement->dg1;
        $dg2=Auth::user()->govofficial->opChangeManagement->dg2;

        $totOpChangeManagement=$dg1+$dg2;

        $dg3=Auth::user()->govofficial->opCollaboration->dg3;
        $dg4=Auth::user()->govofficial->opCollaboration->dg4;

        $totOpCollaboaration=$dg3+$dg4;

        $dg5=Auth::user()->govofficial->opOrientation->dg5;
        $dg6=Auth::user()->govofficial->opOrientation->dg6;

        $totOpOrientation=$dg5+$dg6;

        $dg7=Auth::user()->govofficial->opQualityManagement->dg7;
        $dg8=Auth::user()->govofficial->opQualityManagement->dg8;
        $dg9=Auth::user()->govofficial->opQualityManagement->dg9;

        $totOpQualityManagement=$dg7+$dg8+$dg9;

        return view('govOfficials.Operational.DigitalGovernment.page05',compact('totOpChangeManagement','totOpCollaboaration','totOpOrientation','totOpQualityManagement'));
    }

    public function storeOpChangeManagement(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg1'=>'required|string',
            'dg2'=>'required|string',
        ]);

        $opChangeManagement = new OpChangeManagement;

        $opChangeManagement->dg1=$request->dg1;
        $opChangeManagement->dg2=$request->dg2;
        $opChangeManagement->govofficial_id=$request->govofficial_id;

        $opChangeManagement->save();

        return redirect()->route('operationalDigitalGovernmentPage02');
    }

    public function storeOpCollaboration(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg3'=>'required|string',
            'dg4'=>'required|string',
        ]);

        $opCollaboration = new OpCollaboration;

        $opCollaboration->dg3=$request->dg3;
        $opCollaboration->dg4=$request->dg4;
        $opCollaboration->govofficial_id=$request->govofficial_id;

        $opCollaboration->save();

        return redirect()->route('operationalDigitalGovernmentPage03');
    }

    public function storeOpOrientation(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg5'=>'required|string',
            'dg6'=>'required|string',
        ]);

        $opOrientation = new OpOrientation;

        $opOrientation->dg5=$request->dg5;
        $opOrientation->dg6=$request->dg6;
        $opOrientation->govofficial_id=$request->govofficial_id;

        $opOrientation->save();

        return redirect()->route('operationalDigitalGovernmentPage04');
    }

    public function storeOpQualityManagement(Request $request){
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg7'=>'required|string',
            'dg8'=>'required|string',
            'dg9'=>'required|string',
        ]);

        $opQualityManagement = new OpQualityManagement;

        $opQualityManagement->dg7=$request->dg7;
        $opQualityManagement->dg8=$request->dg8;
        $opQualityManagement->dg9=$request->dg9;
        $opQualityManagement->govofficial_id=$request->govofficial_id;

        $opQualityManagement->save();

        return redirect()->route('operationalDigitalGovernmentPage05');
    }

    public function storeOpInitiative(Request $request)
    {//dd($request);
        request()->validate([
            'govofficial_id'=> 'required|string',
            'dg10'=>'required|string',
            'dg11'=>'required|string',
            'dg12'=>'required|string',
            'dg13'=>'required|string',
            'dg14_1'=>'required|string',
            'dg14_2'=>'required|string',
            'dg15'=>'required|string',
            'dg16'=>'required|string',
            'dg17'=>'required|string',
            'totOpChangeManagement'=>'required|string',
            'totOpCollaboaration'=>'required|string',
            'totOpOrientation'=>'required|string',
            'totOpQualityManagement'=>'required|string',
        ]);

        $opInitiative = new OpInitiative;

        $opInitiative->dg10=$request->dg10;
        $opInitiative->dg11=$request->dg11;
        $opInitiative->dg12=$request->dg12;
        $opInitiative->dg13=$request->dg13;
        $opInitiative->dg14_1=$request->dg14_1;
        $opInitiative->dg14_2=$request->dg14_2;
        $opInitiative->dg15=$request->dg15;
        $opInitiative->dg16=$request->dg16;
        $opInitiative->dg17=$request->dg17;
        $opInitiative->govofficial_id=$request->govofficial_id;

        $opInitiative->save();

        $d10=$request->dg10;
        $d11=$request->dg11;
        $d12=$request->dg12;
        $d13=$request->dg13;
        $d14_1=$request->dg14_1;
        $d14_2=$request->dg14_2;
        $d15=$request->dg15;
        $d16=$request->dg16;
        $d17=$request->dg17;
        $totOpInitiative=$d10 + $d11 + $d12 + $d13 + $d14_1 + $d14_2 + $d15 + $d16 + $d17;

        $marksOpDigitalGovernment=$request->totOpChangeManagement + $request->totOpCollaboaration + $request->totOpOrientation + $request->totOpQualityManagement + $totOpInitiative;

        $opDigitalGovernment=new OpDigitalGovernment;

        $opDigitalGovernment->op_change_management=$request->totOpChangeManagement;
        $opDigitalGovernment->op_collaboration=$request->totOpCollaboaration;
        $opDigitalGovernment->op_orientation=$request->totOpOrientation;
        $opDigitalGovernment->op_quality_management=$request->totOpQualityManagement;
        $opDigitalGovernment->op_initiative=$totOpInitiative;
        $opDigitalGovernment->marks_op_digital_government=$marksOpDigitalGovernment;
        $opDigitalGovernment->govofficial_id=$request->govofficial_id;

        $opDigitalGovernment->save();

        return redirect()->route('operationalDigitalgovernmentResults');
    }

    public function results(){
        $opDigitalGov = Auth::user()->govofficial->opDigitalGovernment;

        $opChangeManagement=$opDigitalGov->op_change_management;
        $a=$opChangeManagement/11;
        $avgOpChangeManagement=round($a*100);

        $opCollaboration=$opDigitalGov->op_collaboration;
        $b=$opCollaboration/11;
        $avgOpCollaboration=round($b*100);

        $opOrientatiion=$opDigitalGov->op_orientation;
        $c=$opOrientatiion/12;
        $avgOpOrientatiion=round($c*100);

        $opQualityManagement=$opDigitalGov->op_quality_management;
        $d=$opQualityManagement/18;
        $avgOpQualityManagement=round($d*100);

        $opInitiative=$opDigitalGov->op_initiative;
        $e=$opInitiative/46;
        $avgOpInitiative=round($e*100);

    $result = [
        ['Category', 'Value'],
        ['Change Management', (int) $avgOpChangeManagement],
        ['Collaboration and Partnership', (int) $avgOpCollaboration],
        ['Results Orientation', (int) $avgOpOrientatiion],
        ['Quality Management', (int) $avgOpQualityManagement],
        ['Execute Digital Government Initiatives', (int) $avgOpInitiative],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opChangeManagement2=$govOfficial->opChangeManagement;
    $opCollaboration2=$govOfficial->opCollaboration;
    $opOrientation2=$govOfficial->opOrientation;
    $opQualityManagement2=$govOfficial->opQualityManagement;
    $opInitiative2=$govOfficial->opInitiative;

        return view('govOfficials.Operational.DigitalGovernment.results',compact('result','avgOpChangeManagement','avgOpCollaboration','avgOpOrientatiion','avgOpQualityManagement','avgOpInitiative','opChangeManagement2','opCollaboration2','opOrientation2','opQualityManagement2','opInitiative2'));
    }

    public function digitalGovernmentReport(){
        $govOfficial=Auth::user()->govofficial;
        $opDigitalGov = Auth::user()->govofficial->opDigitalGovernment;

        $opChangeManagement=$opDigitalGov->op_change_management;
        $a=$opChangeManagement/11;
        $avgOpChangeManagement=round($a*100);

        $opCollaboration=$opDigitalGov->op_collaboration;
        $b=$opCollaboration/11;
        $avgOpCollaboration=round($b*100);

        $opOrientatiion=$opDigitalGov->op_orientation;
        $c=$opOrientatiion/12;
        $avgOpOrientatiion=round($c*100);

        $opQualityManagement=$opDigitalGov->op_quality_management;
        $d=$opQualityManagement/18;
        $avgOpQualityManagement=round($d*100);

        $opInitiative=$opDigitalGov->op_initiative;
        $e=$opInitiative/46;
        $avgOpInitiative=round($e*100);

    $result = [
        ['Category', 'Value'],
        ['Change Management', (int) $avgOpChangeManagement],
        ['Collaboration and Partnership', (int) $avgOpCollaboration],
        ['Results Orientation', (int) $avgOpOrientatiion],
        ['Quality Management', (int) $avgOpQualityManagement],
        ['Execute Digital Government Initiatives', (int) $avgOpInitiative],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opChangeManagement2=$govOfficial->opChangeManagement;
    $opCollaboration2=$govOfficial->opCollaboration;
    $opOrientation2=$govOfficial->opOrientation;
    $opQualityManagement2=$govOfficial->opQualityManagement;
    $opInitiative2=$govOfficial->opInitiative;
        return view('govOfficials.Operational.DigitalGovernment.report',compact('result','govOfficial','avgOpChangeManagement','avgOpCollaboration','avgOpOrientatiion','avgOpQualityManagement','avgOpInitiative','opChangeManagement2','opCollaboration2','opOrientation2','opQualityManagement2','opInitiative2'));
    }

    public function ictPage01(){
        return view('govOfficials.Operational.ICT.page01');
    }

    public function ictPage02(){
        return view('govOfficials.Operational.ICT.page02');
    }

    public function ictPage03(){
        $ict1_1=Auth::user()->govofficial->opIctInWorkPlace->ict1_1;
        $ict1_2=Auth::user()->govofficial->opIctInWorkPlace->ict1_2;
        $ict1_3=Auth::user()->govofficial->opIctInWorkPlace->ict1_3;
        $ict2=Auth::user()->govofficial->opIctInWorkPlace->ict2;
        $ict3_1=Auth::user()->govofficial->opIctInWorkPlace->ict3_1;
        $ict3_2=Auth::user()->govofficial->opIctInWorkPlace->ict3_2;
        $ict3_3=Auth::user()->govofficial->opIctInWorkPlace->ict3_3;
        $ict4=Auth::user()->govofficial->opIctInWorkPlace->ict4;
        $ict5=Auth::user()->govofficial->opIctInWorkPlace->ict5;
        $ict6=Auth::user()->govofficial->opIctInWorkPlace->ict6;
        $ict7=Auth::user()->govofficial->opIctInWorkPlace->ict7;
        $ict8=Auth::user()->govofficial->opIctInWorkPlace->ict8;
        $ict9=Auth::user()->govofficial->opIctInWorkPlace->ict9;

        $totOpIctInWorPlace=$ict1_1+$ict1_2+$ict1_3+$ict2+$ict3_1+$ict3_2+$ict3_3+$ict4+$ict5+$ict6+$ict7+$ict8+$ict9;

        $ict10_1=Auth::user()->govofficial->opInformationManagement->ict10_1;
        $ict10_2=Auth::user()->govofficial->opInformationManagement->ict10_2;
        $ict10_3=Auth::user()->govofficial->opInformationManagement->ict10_3;
        $ict11=Auth::user()->govofficial->opInformationManagement->ict11;
        $ict12=Auth::user()->govofficial->opInformationManagement->ict12;
        $ict13_1=Auth::user()->govofficial->opInformationManagement->ict13_1;
        $ict13_2=Auth::user()->govofficial->opInformationManagement->ict13_2;
        $ict13_3=Auth::user()->govofficial->opInformationManagement->ict13_3;
        $ict14=Auth::user()->govofficial->opInformationManagement->ict14;

        $totOpInformationManagement=$ict10_1+$ict10_2+$ict10_3+$ict11+$ict12+$ict13_1+$ict13_2+$ict13_3+$ict14;

        return view('govOfficials.Operational.ICT.page03',compact('totOpIctInWorPlace','totOpInformationManagement'));
    }

    public function storeOpIctInWorkPlace(Request $request)
    {//dd($request);
        request()->validate([
            'ict1_1'=>'required|string',
            'ict1_2'=>'required|string',
            'ict1_3'=>'required|string',
            'ict2'=>'required|string',
            'ict3_1'=>'required|string',
            'ict3_2'=>'required|string',
            'ict3_3'=>'required|string',
            'ict4'=>'required|string',
            'ict5'=>'required|string',
            'ict6'=>'required|string',
            'ict7'=>'required|string',
            'ict8'=>'required|string',
            'ict9'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $opIctInWorkPlace = new OpIctInWorkplace;

        $opIctInWorkPlace->ict1_1=$request->ict1_1;
        $opIctInWorkPlace->ict1_2=$request->ict1_2;
        $opIctInWorkPlace->ict1_3=$request->ict1_3;
        $opIctInWorkPlace->ict2=$request->ict2;
        $opIctInWorkPlace->ict3_1=$request->ict3_1;
        $opIctInWorkPlace->ict3_2=$request->ict3_2;
        $opIctInWorkPlace->ict3_3=$request->ict3_3;
        $opIctInWorkPlace->ict4=$request->ict4;
        $opIctInWorkPlace->ict5=$request->ict5;
        $opIctInWorkPlace->ict6=$request->ict6;
        $opIctInWorkPlace->ict7=$request->ict7;
        $opIctInWorkPlace->ict8=$request->ict8;
        $opIctInWorkPlace->ict9=$request->ict9;
        $opIctInWorkPlace->govofficial_id=$request->govofficial_id;

        $opIctInWorkPlace->save();

        return redirect()->route('operationalIctPage02');

    }

    public function storeOpInformationManagement(Request $request){
        request()->validate([
            'ict10_1'=>'required|string',
            'ict10_2'=>'required|string',
            'ict10_3'=>'required|string',
            'ict11'=>'required|string',
            'ict12'=>'required|string',
            'ict13_1'=>'required|string',
            'ict13_2'=>'required|string',
            'ict13_3'=>'required|string',
            'ict14'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $opInformationManagement = new OpInformationManagements;

        $opInformationManagement->ict10_1=$request->ict10_1;
        $opInformationManagement->ict10_2=$request->ict10_2;
        $opInformationManagement->ict10_3=$request->ict10_3;
        $opInformationManagement->ict11=$request->ict11;
        $opInformationManagement->ict12=$request->ict12;
        $opInformationManagement->ict13_1=$request->ict13_1;
        $opInformationManagement->ict13_2=$request->ict13_2;
        $opInformationManagement->ict13_3=$request->ict13_3;
        $opInformationManagement->ict14=$request->ict14;
        $opInformationManagement->govofficial_id=$request->govofficial_id;

        $opInformationManagement->save();

        return redirect()->route('operationalIctPage03');
    }

    public function storeOpDigitalCitizenship(Request $request){
        request()->validate([
            'ict15'=>'required|string',
            'ict16'=>'required|string',
            'ict17'=>'required|string',
            'ict18'=>'required|string',
            'ict19'=>'required|string',
            'ict20_1'=>'required|string',
            'ict20_2'=>'required|string',
            'ict20_3'=>'required|string',
            'ict21'=>'required|string',
            'ict22'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $storeOpDigitalCitizenship = new OpDigitalCitizenship;

        $storeOpDigitalCitizenship->ict15=$request->ict15;
        $storeOpDigitalCitizenship->ict16=$request->ict16;
        $storeOpDigitalCitizenship->ict17=$request->ict17;
        $storeOpDigitalCitizenship->ict18=$request->ict18;
        $storeOpDigitalCitizenship->ict19=$request->ict19;
        $storeOpDigitalCitizenship->ict20_1=$request->ict20_1;
        $storeOpDigitalCitizenship->ict20_2=$request->ict20_2;
        $storeOpDigitalCitizenship->ict20_3=$request->ict20_3;
        $storeOpDigitalCitizenship->ict21=$request->ict21;
        $storeOpDigitalCitizenship->ict22=$request->ict22;
        $storeOpDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $storeOpDigitalCitizenship->save();

        $marksOpDigitalCitizenship=$request->ict15+$request->ict16+$request->ict17+$request->ict18+$request->ict19+$request->ict20_1+$request->ict20_2+$request->ict20_3+$request->ict21+$request->ict22;
        $marks_op_ict=$request->totOpIctInWorkplace+$request->totOpInformationManagement+$marksOpDigitalCitizenship;

        $opIct = new OpIct;

        $opIct->op_ict_in_workplace=$request->totOpIctInWorkplace;
        $opIct->op_information_management=$request->totOpInformationManagement;
        $opIct->op_digital_citizenship=$marksOpDigitalCitizenship;
        $opIct->marks_op_ict=$marks_op_ict;
        $opIct->govofficial_id=$request->govofficial_id;

        $opIct->save();

        return redirect()->route('operationalIctResults');
    }

    public function opIctResults(){
        $opDigitalGov = Auth::user()->govofficial->opIct;

        $opIctInWorkplace=$opDigitalGov->op_ict_in_workplace;
        $a=$opIctInWorkplace/40;
        $avgOpIctInWorkplace=round($a*100);

        $opInformationManagement=$opDigitalGov->op_information_management;
        $b=$opInformationManagement/24;
        $avgOpInformationManagement=round($b*100);

        $opDigitalCitizenship=$opDigitalGov->op_digital_citizenship;
        $c=$opDigitalCitizenship/36;
        $avgOpDigitalCitizenship=round($c*100);



    $result = [
        ['Category', 'Value'],
        ['ICT in Workplace', (int) $avgOpIctInWorkplace],
        ['Information Management', (int) $avgOpInformationManagement],
        ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opIctInWorkplace2=$govOfficial->opIctInWorkplace;
    $opInformationManagement2=$govOfficial->opInformationManagement;
    $opDigitalCitizenship2=$govOfficial->opDigitalCitizenship;

        return view('govOfficials.Operational.ICT.results',compact('result','opIctInWorkplace2','opInformationManagement2','opDigitalCitizenship2','avgOpIctInWorkplace','avgOpInformationManagement','avgOpDigitalCitizenship'));
    }

    public function opIctReport(){
        $opDigitalGov = Auth::user()->govofficial->opIct;

        $opIctInWorkplace=$opDigitalGov->op_ict_in_workplace;
        $a=$opIctInWorkplace/40;
        $avgOpIctInWorkplace=round($a*100);

        $opInformationManagement=$opDigitalGov->op_information_management;
        $b=$opInformationManagement/24;
        $avgOpInformationManagement=round($b*100);

        $opDigitalCitizenship=$opDigitalGov->op_digital_citizenship;
        $c=$opDigitalCitizenship/36;
        $avgOpDigitalCitizenship=round($c*100);



    $result = [
        ['Category', 'Value'],
        ['ICT in Workplace', (int) $avgOpIctInWorkplace],
        ['Information Management', (int) $avgOpInformationManagement],
        ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
    ];

    $govOfficial=Auth::user()->govofficial;

    $opIctInWorkplace2=$govOfficial->opIctInWorkplace;
    $opInformationManagement2=$govOfficial->opInformationManagement;
    $opDigitalCitizenship2=$govOfficial->opDigitalCitizenship;

        return view('govOfficials.Operational.ICT.report',compact('result','opIctInWorkplace2','opInformationManagement2','opDigitalCitizenship2','avgOpIctInWorkplace','avgOpInformationManagement','avgOpDigitalCitizenship','govOfficial'));
    }

    public function opManagementPage01()
    {
        return view('govOfficials.Operational.Management.page01');
    }

    public function opManagementPage02()
    {
        return view('govOfficials.Operational.Management.page02');
    }

    public function opManagementPage03()
    {
        return view('govOfficials.Operational.Management.page03');
    }

    public function opManagementPage04()
    {
        return view('govOfficials.Operational.Management.page04');
    }

    public function opManagementPage05()
    {
        $opCommunication=Auth::user()->govofficial->opCommunication;
        $opWorkplaceManagement=Auth::user()->govofficial->opWorkplaceManagement;
        $opStakeholderManagement=Auth::user()->govofficial->opStakeholderManagement;
        $opTeamwork=Auth::user()->govofficial->opTeamwork;

        $totOpCommunication=$opCommunication->mgt1+$opCommunication->mgt2+$opCommunication->mgt3+$opCommunication->mgt4;
        $totOpWorkplaceManagement=$opWorkplaceManagement->mgt5+$opWorkplaceManagement->mgt6;
        $totOpStakeholderManagement=$opStakeholderManagement->mgt7+$opStakeholderManagement->mgt8+$opStakeholderManagement->mgt9+$opStakeholderManagement->mgt10;
        $totOpTeamwork=$opTeamwork->mg11+$opTeamwork->mgt12+$opTeamwork->mgt13+$opTeamwork->mgt14;

        return view('govOfficials.Operational.Management.page05',compact('totOpCommunication','totOpWorkplaceManagement','totOpStakeholderManagement','totOpTeamwork'));
    }

    public function storeOpCommunication(Request $request){
        request()->validate([
            'mgt1'=>'required|string',
            'mgt2'=>'required|string',
            'mgt3'=>'required|string',
            'mgt4'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $opCommunicaton = new OpCommunication;

        $opCommunicaton->mgt1=$request->mgt1;
        $opCommunicaton->mgt2=$request->mgt2;
        $opCommunicaton->mgt3=$request->mgt3;
        $opCommunicaton->mgt4=$request->mgt4;
        $opCommunicaton->govofficial_id=$request->govofficial_id;

        $opCommunicaton->save();

        return redirect()->route('operationalManagementPage02');

    }

    public function storeOpWorkplaceManagement(Request $request){
        request()->validate([
            'mgt5'=>'required|string',
            'mgt6'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $opWorkplaceManagement = new OpWorkplaceManagement;

        $opWorkplaceManagement->mgt5=$request->mgt5;
        $opWorkplaceManagement->mgt6=$request->mgt6;
        $opWorkplaceManagement->govofficial_id=$request->govofficial_id;

        $opWorkplaceManagement->save();

        return redirect()->route('operationalManagementPage03');

    }

    public function storeOpStakeholderManagement(Request $request){
        request()->validate([
            'mgt7'=>'required|string',
            'mgt8'=>'required|string',
            'mgt9'=>'required|string',
            'mgt10'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $opStakeholderManagement = new OpStakeholderManagement;

        $opStakeholderManagement->mgt7=$request->mgt7;
        $opStakeholderManagement->mgt8=$request->mgt8;
        $opStakeholderManagement->mgt9=$request->mgt9;
        $opStakeholderManagement->mgt10=$request->mgt10;
        $opStakeholderManagement->govofficial_id=$request->govofficial_id;

        $opStakeholderManagement->save();

        return redirect()->route('operationalManagementPage04');
    }

    public function storeOpTeamwork(Request $request){
        request()->validate([
            'mgt11'=>'required|string',
            'mgt12'=>'required|string',
            'mgt13'=>'required|string',
            'mgt14'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $opTeamwork = new OpTeamwork;

        $opTeamwork->mgt11=$request->mgt11;
        $opTeamwork->mgt12=$request->mgt12;
        $opTeamwork->mgt13=$request->mgt13;
        $opTeamwork->mgt14=$request->mgt14;
        $opTeamwork->govofficial_id=$request->govofficial_id;

        $opTeamwork->save();

        return redirect()->route('operationalManagementPage05');

    }

    public function storeOpPersonalDevelopment(Request $request){
        request()->validate([
            'mgt15'=>'required|string',
            'mgt16'=>'required|string',
            'govofficial_id'=>'required|string',
        ]);

        $opPersonalDevelopment = new OpPersonalDevelopment;

        $opPersonalDevelopment->mgt15=$request->mgt15;
        $opPersonalDevelopment->mgt16=$request->mgt16;
        $opPersonalDevelopment->govofficial_id=$request->govofficial_id;

        $opPersonalDevelopment->save();

        $marksOpPersonalDevelopment=$request->mgt15+$request->mgt16;
        $marks_op_management=$request->opCommunication+$request->opWorkplaceManagement+$request->opStakeholderManagement+$request->opTeamwork+$marksOpPersonalDevelopment;
// dd($marks_op_management);
        $opManagement = new OpManagement;

        $opManagement->op_communication=$request->opCommunication;
        $opManagement->op_workplace_management=$request->opWorkplaceManagement;
        $opManagement->op_stakeholder_management=$request->opStakeholderManagement;
        $opManagement->op_teamwork=$request->opTeamwork;
        $opManagement->op_personal_development=$marksOpPersonalDevelopment;
        $opManagement->marks_op_management =$marks_op_management;
        $opManagement->govofficial_id =$request->govofficial_id;

        $opManagement->save();

        return redirect()->route('operationalManagementResults');

    }

    public function opManagementResult(){
        $opManagement = Auth::user()->govofficial->opManagement;

        $opCommunication=$opManagement->op_communication;
        $a=$opCommunication/28;
        $avgOpCommunication=round($a*100);

        $opWorkplaceManagement=$opManagement->op_workplace_management;
        $a=$opWorkplaceManagement/12;
        $avgOpWorkplaceManagement=round($a*100);

        $opStakeholderManagement=$opManagement->op_stakeholder_management;
        $a=$opStakeholderManagement/24;
        $avgOpStakeholderManagement=round($a*100);

        $opTeamwork=$opManagement->op_teamwork;
        $a=$opTeamwork/24;
        $avgOpTeamwork=round($a*100);

        $opPersonalDevelopment=$opManagement->op_personal_development;
        $a=$opPersonalDevelopment/12;
        $avgOpPersonalDevelopment=round($a*100);

        $result = [
            ['Category', 'Value'],
            ['Communication', (int) $avgOpCommunication],
            ['Workplace Management', (int) $avgOpWorkplaceManagement],
            ['Stakeholder Management', (int) $avgOpStakeholderManagement],
            ['Teamwork', (int) $avgOpTeamwork],
            ['Personal Development', (int) $avgOpPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $opCommunication2=$govOfficial->opCommunication;
        $opWorkplaceManagement2=$govOfficial->opWorkplaceManagement;
        $opStakeholderManagement2=$govOfficial->opStakeholderManagement;
        $opTeamwork2=$govOfficial->opTeamwork;
        $opPersonalDevelopment2=$govOfficial->opPersonalDevelopment;

        return view('govOfficials.Operational.Management.results',compact('result','opCommunication2','opWorkplaceManagement2','opStakeholderManagement2','opTeamwork2','opPersonalDevelopment2','avgOpCommunication','avgOpWorkplaceManagement','avgOpStakeholderManagement','avgOpTeamwork','avgOpPersonalDevelopment'));
    }

    public function opManagementReport(){
        $opManagement = Auth::user()->govofficial->opManagement;

        $opCommunication=$opManagement->op_communication;
        $a=$opCommunication/28;
        $avgOpCommunication=round($a*100);

        $opWorkplaceManagement=$opManagement->op_workplace_management;
        $a=$opWorkplaceManagement/12;
        $avgOpWorkplaceManagement=round($a*100);

        $opStakeholderManagement=$opManagement->op_stakeholder_management;
        $a=$opStakeholderManagement/24;
        $avgOpStakeholderManagement=round($a*100);

        $opTeamwork=$opManagement->op_teamwork;
        $a=$opTeamwork/24;
        $avgOpTeamwork=round($a*100);

        $opPersonalDevelopment=$opManagement->op_personal_development;
        $a=$opPersonalDevelopment/12;
        $avgOpPersonalDevelopment=round($a*100);

        $result = [
            ['Category', 'Value'],
            ['Communication', (int) $avgOpCommunication],
            ['Workplace Management', (int) $avgOpWorkplaceManagement],
            ['Stakeholder Management', (int) $avgOpStakeholderManagement],
            ['Teamwork', (int) $avgOpTeamwork],
            ['Personal Development', (int) $avgOpPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $opCommunication2=$govOfficial->opCommunication;
        $opWorkplaceManagement2=$govOfficial->opWorkplaceManagement;
        $opStakeholderManagement2=$govOfficial->opStakeholderManagement;
        $opTeamwork2=$govOfficial->opTeamwork;
        $opPersonalDevelopment2=$govOfficial->opPersonalDevelopment;


        return view('govOfficials.Operational.Management.report',compact('govOfficial','result','opCommunication2','opWorkplaceManagement2','opStakeholderManagement2','opTeamwork2','opPersonalDevelopment2','avgOpCommunication','avgOpWorkplaceManagement','avgOpStakeholderManagement','avgOpTeamwork','avgOpPersonalDevelopment'));
    }

    public function overalresult(){
            $labels = ["ICT", "Digital Government", "Management"];
            $govOfficial=Auth::user()->govofficial;
            $opIct=Auth::user()->govofficial->opIct;
            $opDigitalGov=Auth::user()->govofficial->opDigitalGovernment;
            $opManagement=Auth::user()->govofficial->opManagement;
            $data=[
                (int) $opIct->marks_op_ict,
                (int) $opDigitalGov->marks_op_digital_government,
                (int) $opManagement->marks_op_management
            ];
            $opIct = Auth::user()->govofficial->opIct;

            $opIctInWorkplace=$opIct->op_ict_in_workplace;
            $a=$opIctInWorkplace/40;
            $avgOpIctInWorkplace=round($a*100);

            $opInformationManagement=$opIct->op_information_management;
            $b=$opInformationManagement/24;
            $avgOpInformationManagement=round($b*100);

            $opDigitalCitizenship=$opIct->op_digital_citizenship;
            $c=$opDigitalCitizenship/36;
            $avgOpDigitalCitizenship=round($c*100);

            $result = [
                ['Category', 'Value'],
                ['ICT in Workplace', (int) $avgOpIctInWorkplace],
                ['Information Management', (int) $avgOpInformationManagement],
                ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
            ];

            $opIctInWorkplace2=$govOfficial->opIctInWorkplace;
            $opInformationManagement2=$govOfficial->opInformationManagement;
            $opDigitalCitizenship2=$govOfficial->opDigitalCitizenship;

            $opDigitalGov = Auth::user()->govofficial->opDigitalGovernment;

            $opChangeManagement=$opDigitalGov->op_change_management;
            $a=$opChangeManagement/11;
            $avgOpChangeManagement=round($a*100);

            $opCollaboration=$opDigitalGov->op_collaboration;
            $b=$opCollaboration/11;
            $avgOpCollaboration=round($b*100);

            $opOrientatiion=$opDigitalGov->op_orientation;
            $c=$opOrientatiion/12;
            $avgOpOrientatiion=round($c*100);

            $opQualityManagement=$opDigitalGov->op_quality_management;
            $d=$opQualityManagement/18;
            $avgOpQualityManagement=round($d*100);

            $opInitiative=$opDigitalGov->op_initiative;
            $e=$opInitiative/46;
            $avgOpInitiative=round($e*100);

        $result2 = [
            ['Category', 'Value'],
            ['Change Management', (int) $avgOpChangeManagement],
            ['Collaboration and Partnership', (int) $avgOpCollaboration],
            ['Results Orientation', (int) $avgOpOrientatiion],
            ['Quality Management', (int) $avgOpQualityManagement],
            ['Execute Digital Government Initiatives', (int) $avgOpInitiative],
        ];

        $opChangeManagement2=$govOfficial->opChangeManagement;
        $opCollaboration2=$govOfficial->opCollaboration;
        $opOrientation2=$govOfficial->opOrientation;
        $opQualityManagement2=$govOfficial->opQualityManagement;
        $opInitiative2=$govOfficial->opInitiative;

        $opManagement = Auth::user()->govofficial->opManagement;

        $opCommunication=$opManagement->op_communication;
        $a=$opCommunication/28;
        $avgOpCommunication=round($a*100);

        $opWorkplaceManagement=$opManagement->op_workplace_management;
        $a=$opWorkplaceManagement/12;
        $avgOpWorkplaceManagement=round($a*100);

        $opStakeholderManagement=$opManagement->op_stakeholder_management;
        $a=$opStakeholderManagement/24;
        $avgOpStakeholderManagement=round($a*100);

        $opTeamwork=$opManagement->op_teamwork;
        $a=$opTeamwork/24;
        $avgOpTeamwork=round($a*100);

        $opPersonalDevelopment=$opManagement->op_personal_development;
        $a=$opPersonalDevelopment/12;
        $avgOpPersonalDevelopment=round($a*100);

        $result3 = [
            ['Category', 'Value'],
            ['Communication', (int) $avgOpCommunication],
            ['Workplace Management', (int) $avgOpWorkplaceManagement],
            ['Stakeholder Management', (int) $avgOpStakeholderManagement],
            ['Teamwork', (int) $avgOpTeamwork],
            ['Personal Development', (int) $avgOpPersonalDevelopment],
        ];

        $opCommunication2=$govOfficial->opCommunication;
        $opWorkplaceManagement2=$govOfficial->opWorkplaceManagement;
        $opStakeholderManagement2=$govOfficial->opStakeholderManagement;
        $opTeamwork2=$govOfficial->opTeamwork;
        $opPersonalDevelopment2=$govOfficial->opPersonalDevelopment;

        return view('govOfficials.Operational.overalResults',compact('result3','opCommunication2','opWorkplaceManagement2','opStakeholderManagement2','opTeamwork2','opPersonalDevelopment2','avgOpCommunication','avgOpWorkplaceManagement','avgOpStakeholderManagement','avgOpTeamwork','avgOpPersonalDevelopment','avgOpInitiative','avgOpQualityManagement','avgOpOrientatiion','avgOpCollaboration','avgOpChangeManagement','opInitiative2','opQualityManagement2','opOrientation2','opCollaboration2','opChangeManagement2','result2','avgOpDigitalCitizenship','avgOpInformationManagement','avgOpIctInWorkplace','opDigitalCitizenship2','opInformationManagement2','opIctInWorkplace2','labels','data','result'));
    }

    public function overalreport(){
        $opDigitalGov = Auth::user()->govofficial->opIct;

        $opIctInWorkplace=$opDigitalGov->op_ict_in_workplace;
        $a=$opIctInWorkplace/40;
        $avgOpIctInWorkplace=round($a*100);

        $opInformationManagement=$opDigitalGov->op_information_management;
        $b=$opInformationManagement/24;
        $avgOpInformationManagement=round($b*100);

        $opDigitalCitizenship=$opDigitalGov->op_digital_citizenship;
        $c=$opDigitalCitizenship/36;
        $avgOpDigitalCitizenship=round($c*100);

        $result = [
            ['Category', 'Value'],
            ['ICT in Workplace', (int) $avgOpIctInWorkplace],
            ['Information Management', (int) $avgOpInformationManagement],
            ['Digital Citizenship', (int) $avgOpDigitalCitizenship],
        ];

        $govOfficial=Auth::user()->govofficial;

        $opIctInWorkplace2=$govOfficial->opIctInWorkplace;
        $opInformationManagement2=$govOfficial->opInformationManagement;
        $opDigitalCitizenship2=$govOfficial->opDigitalCitizenship;

        $govOfficial=Auth::user()->govofficial;
        $opDigitalGov = Auth::user()->govofficial->opDigitalGovernment;

        $opChangeManagement=$opDigitalGov->op_change_management;
        $a=$opChangeManagement/11;
        $avgOpChangeManagement=round($a*100);

        $opCollaboration=$opDigitalGov->op_collaboration;
        $b=$opCollaboration/11;
        $avgOpCollaboration=round($b*100);

        $opOrientatiion=$opDigitalGov->op_orientation;
        $c=$opOrientatiion/12;
        $avgOpOrientatiion=round($c*100);

        $opQualityManagement=$opDigitalGov->op_quality_management;
        $d=$opQualityManagement/18;
        $avgOpQualityManagement=round($d*100);

        $opInitiative=$opDigitalGov->op_initiative;
        $e=$opInitiative/46;
        $avgOpInitiative=round($e*100);

        $result2 = [
            ['Category', 'Value'],
            ['Change Management', (int) $avgOpChangeManagement],
            ['Collaboration and Partnership', (int) $avgOpCollaboration],
            ['Results Orientation', (int) $avgOpOrientatiion],
            ['Quality Management', (int) $avgOpQualityManagement],
            ['Execute Digital Government Initiatives', (int) $avgOpInitiative],
        ];

        $govOfficial=Auth::user()->govofficial;

        $opChangeManagement2=$govOfficial->opChangeManagement;
        $opCollaboration2=$govOfficial->opCollaboration;
        $opOrientation2=$govOfficial->opOrientation;
        $opQualityManagement2=$govOfficial->opQualityManagement;
        $opInitiative2=$govOfficial->opInitiative;

        $opManagement = Auth::user()->govofficial->opManagement;

        $opCommunication=$opManagement->op_communication;
        $a=$opCommunication/28;
        $avgOpCommunication=round($a*100);

        $opWorkplaceManagement=$opManagement->op_workplace_management;
        $a=$opWorkplaceManagement/12;
        $avgOpWorkplaceManagement=round($a*100);

        $opStakeholderManagement=$opManagement->op_stakeholder_management;
        $a=$opStakeholderManagement/24;
        $avgOpStakeholderManagement=round($a*100);

        $opTeamwork=$opManagement->op_teamwork;
        $a=$opTeamwork/24;
        $avgOpTeamwork=round($a*100);

        $opPersonalDevelopment=$opManagement->op_personal_development;
        $a=$opPersonalDevelopment/12;
        $avgOpPersonalDevelopment=round($a*100);

        $result3 = [
            ['Category', 'Value'],
            ['Communication', (int) $avgOpCommunication],
            ['Workplace Management', (int) $avgOpWorkplaceManagement],
            ['Stakeholder Management', (int) $avgOpStakeholderManagement],
            ['Teamwork', (int) $avgOpTeamwork],
            ['Personal Development', (int) $avgOpPersonalDevelopment],
        ];

        $govOfficial=Auth::user()->govofficial;

        $opCommunication2=$govOfficial->opCommunication;
        $opWorkplaceManagement2=$govOfficial->opWorkplaceManagement;
        $opStakeholderManagement2=$govOfficial->opStakeholderManagement;
        $opTeamwork2=$govOfficial->opTeamwork;
        $opPersonalDevelopment2=$govOfficial->opPersonalDevelopment;

        $labels = ["ICT", "Digital Government", "Management"];
            $govOfficial=Auth::user()->govofficial;
            $opIct=Auth::user()->govofficial->opIct;
            $opDigitalGov=Auth::user()->govofficial->opDigitalGovernment;
            $opManagement=Auth::user()->govofficial->opManagement;
            $data=[
                (int) $opIct->marks_op_ict,
                (int) $opDigitalGov->marks_op_digital_government,
                (int) $opManagement->marks_op_management
            ];


        return view('govOfficials.Operational.overalReport',compact('data','labels','result3','opCommunication2','opWorkplaceManagement2','opStakeholderManagement2','opTeamwork2','opPersonalDevelopment2','avgOpCommunication','avgOpWorkplaceManagement','avgOpStakeholderManagement','avgOpTeamwork','avgOpPersonalDevelopment','result2','avgOpChangeManagement','avgOpCollaboration','avgOpOrientatiion','avgOpQualityManagement','avgOpInitiative','opChangeManagement2','opCollaboration2','opOrientation2','opQualityManagement2','opInitiative2','result','opIctInWorkplace2','opInformationManagement2','opDigitalCitizenship2','avgOpIctInWorkplace','avgOpInformationManagement','avgOpDigitalCitizenship','govOfficial'));
    }

}

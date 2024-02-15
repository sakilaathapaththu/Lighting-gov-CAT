<?php

namespace App\Http\Controllers;

use App\Models\CdioIct;
use App\Models\CdioTeamwork;
use Illuminate\Http\Request;
use App\Models\CdioManagement;
use App\Models\CdioOrientation;
use App\Models\CdioStakeholder;
use App\Models\CdioCollaboration;
use App\Models\CdioCommunication;
use App\Models\CdioHumanResource;
use App\Models\CdioDecisionMaking;
use App\Models\CdioIctInWorkplace;
use App\Models\CdioManagingQuality;
use App\Models\CdioSelfDevelopment;
use App\Models\CdioBuildingCapacity;
use App\Models\CdioChangeManagement;
use App\Models\CdioDriveTheAdoption;
use Illuminate\Support\Facades\Auth;
use App\Models\CdioDigitalGovernment;
use App\Models\CdioDigitalInitiative;
use App\Models\CdioDigitalCitizenship;
use App\Models\CdioDigitalTransformation;
use App\Models\CdioInformationManagement;
use App\Models\CdioManagingEffectiveWorkplace;
use App\Models\CdioProjectAndProgrammeManagement;
use App\Models\CdioManagingTechnologicalIntervention;

class CdioController extends Controller
{
    public function main(){
        return view('cdio.main');
    }

    public function technology(){
        return view('cdio.Technology & Data.main');
    }

    public function customer(){
        return view('cdio.Customer.main'); 
    }

    public function operation(){
        return view('cdio.Operation.main');
    }

    public function strategy(){
        return view('cdio.Strategy.main');
    }

    public function organization(){
        return view('cdio.Organization & Culture.main');
    }

    public function assessments(){
        $govofficial=Auth::user()->govofficial;
        $ictInWorkplaceExists=$govofficial->cdioIctInWorkplace;
        $informationManagementExists=$govofficial->cdioInformationManagement;
        $managingTechnologicalInterventionExists=$govofficial->cdioManagingTechnologicalIntervention;
        $digitalCitizenshipExists=$govofficial->cdioDigitalCitizenship;

        $projectAndProgrammeManagement=$govofficial->cdioProjectAndProgrammeManagement;
        $changeManagement=$govofficial->cdioChangeManagement;
        $collaboration=$govofficial->cdioCollaboration;
        $orientation=$govofficial->cdioOrientation;
        $driveTheAdoption=$govofficial->cdioDriveTheAdoption;
        $digitalInitiative=$govofficial->cdioDigitalInitiative;
        $managingQuality=$govofficial->cdioManagingQuality;

        $communication=$govofficial->cdioCommunication;
        $managingEffectiveWorkplace=$govofficial->cdioManagingEffectiveWorkplace;
        $decisionMaking=$govofficial->cdioDecisionMaking;
        $buildingCapacity=$govofficial->cdioBuildingCapacity;
        $stakeholder=$govofficial->cdioStakeholder;
        $humanResource=$govofficial->cdioHumanResource;
        $teamwork=$govofficial->cdioTeamwork;
        $selfDevelopment=$govofficial->cdioSelfDevelopment;
        $digitalTransformation=$govofficial->cdioDigitalTransformation;

        return view('cdio.Assessments.main',compact('communication','managingEffectiveWorkplace','decisionMaking','buildingCapacity','stakeholder','humanResource','teamwork','selfDevelopment','digitalTransformation','managingQuality','digitalInitiative','driveTheAdoption','orientation','collaboration','changeManagement','projectAndProgrammeManagement','ictInWorkplaceExists','informationManagementExists','managingTechnologicalInterventionExists','digitalCitizenshipExists'));
    }

    public function cdioIctPage01(){
        return view('cdio.assessments.ICT.page01');
    }

    public function cdioIctPage02(){
        return view('cdio.assessments.ICT.page02');
    }

    public function cdioIctPage03(){
        return view('cdio.assessments.ICT.page03');
    }

    public function cdioIctPage04(){
        $cdioIctInWorkplace=Auth::user()->govofficial->cdioIctInWorkplace;
        $cdioInformationManagement=Auth::user()->govofficial->cdioInformationManagement;
        $cdioManagingTechnologicalIntervention=Auth::user()->govofficial->cdioManagingTechnologicalIntervention;

        $totCdioIctInWorkplace=$cdioIctInWorkplace->ict1+$cdioIctInWorkplace->ict2+$cdioIctInWorkplace->ict3+$cdioIctInWorkplace->ict4+$cdioIctInWorkplace->ict5+$cdioIctInWorkplace->ict6;
        $totCdioInformationManagement=$cdioInformationManagement->ict7;
        $totCdioManagingTechnologicalIntervention=$cdioManagingTechnologicalIntervention->ict8+$cdioManagingTechnologicalIntervention->ict9+$cdioManagingTechnologicalIntervention->ict10+$cdioManagingTechnologicalIntervention->ict11+$cdioManagingTechnologicalIntervention->ict12;
        return view('cdio.assessments.ICT.page04',compact('totCdioIctInWorkplace','totCdioInformationManagement','totCdioManagingTechnologicalIntervention'));
    }

    public function storeCdioIctInWorkplace(Request $request){
        request()->validate([
            'ict1'=>'required|string',
            'ict2'=>'required|string',
            'ict3'=>'required|string',
            'ict4'=>'required|string',
            'ict5'=>'required|string',
            'ict6'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioIctInWorkplace = new CdioIctInWorkplace;

        $cdioIctInWorkplace->ict1=$request->ict1;
        $cdioIctInWorkplace->ict2=$request->ict2;
        $cdioIctInWorkplace->ict3=$request->ict3;
        $cdioIctInWorkplace->ict4=$request->ict4;
        $cdioIctInWorkplace->ict5=$request->ict5;
        $cdioIctInWorkplace->ict6=$request->ict6;
        $cdioIctInWorkplace->govofficial_id=$request->govofficial_id;

        $cdioIctInWorkplace->save();

        return redirect()->route('cdioIctPage02');
    }

    public function storeCdioInformationManagement(Request $request){
        request()->validate([
            'ict7'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioInformationManagement = new CdioInformationManagement;

        $cdioInformationManagement->ict7=$request->ict7;
        $cdioInformationManagement->govofficial_id=$request->govofficial_id;

        $cdioInformationManagement->save();

        return redirect()->route('cdioIctPage03');
    }

    public function storeCdioManagingTechnologicalIntervention(Request $request){
        request()->validate([
            'ict8'=>'required|string',
            'ict9'=>'required|string',
            'ict10'=>'required|string',
            'ict11'=>'required|string',
            'ict12'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioManagingTechnologicalIntervention = new CdioManagingTechnologicalIntervention;

        $cdioManagingTechnologicalIntervention->ict8=$request->ict8;
        $cdioManagingTechnologicalIntervention->ict9=$request->ict9;
        $cdioManagingTechnologicalIntervention->ict10=$request->ict10;
        $cdioManagingTechnologicalIntervention->ict11=$request->ict11;
        $cdioManagingTechnologicalIntervention->ict12=$request->ict12;
        $cdioManagingTechnologicalIntervention->govofficial_id=$request->govofficial_id;

        $cdioManagingTechnologicalIntervention->save();

        return redirect()->route('cdioIctPage04');
    }

    public function storeCdioDigitalCitizenship(Request $request){
        request()->validate([
            'ict13'=>'required|string',
            'ict14'=>'required|string',
            'ict15'=>'required|string',
            'ict16'=>'required|string',
            'ict17'=>'required|string',
            'ict18'=>'required|string',
            'ict19'=>'required|string',
            'ict20'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioDigitalCitizenship = new CdioDigitalCitizenship;

        $cdioDigitalCitizenship->ict13=$request->ict13;
        $cdioDigitalCitizenship->ict14=$request->ict14;
        $cdioDigitalCitizenship->ict15=$request->ict15;
        $cdioDigitalCitizenship->ict16=$request->ict16;
        $cdioDigitalCitizenship->ict17=$request->ict17;
        $cdioDigitalCitizenship->ict18=$request->ict18;
        $cdioDigitalCitizenship->ict19=$request->ict19;
        $cdioDigitalCitizenship->ict20=$request->ict20;
        $cdioDigitalCitizenship->govofficial_id=$request->govofficial_id;

        $cdioDigitalCitizenship->save();

        $totCdioDigitalCitizenship=$request->ict13+$request->ict14+$request->ict15+$request->ict16+$request->ict17+$request->ict18+$request->ict19+$request->ict20;
        $totCdioIct=$request->totCdioIctInWorkplace+$request->totCdioInformationManagement+$request->totCdioManagingTechnologicalIntervention+$totCdioDigitalCitizenship;

        $cdioIct = new CdioIct;
        
        $cdioIct->ict_in_workplace=$request->totCdioIctInWorkplace;
        $cdioIct->information_management=$request->totCdioInformationManagement;
        $cdioIct->managing_technological_intervention=$request->totCdioManagingTechnologicalIntervention;
        $cdioIct->digital_citizenship=$totCdioDigitalCitizenship;
        $cdioIct->overall_cdio_ict=$totCdioIct;
        $cdioIct->govofficial_id=$request->govofficial_id;

        $cdioIct->save();

        return redirect()->route('cdioAssessments');
    }

    public function cdioIctResults(){
        $cdioIct=Auth::user()->govofficial->cdioIct;

        $cdioIctInWorkplace=$cdioIct->ict_in_workplace;
        $a=$cdioIctInWorkplace/30;
        $avgCdioIctInWorkplace=round($a*100);

        $cdioInformationManagement=$cdioIct->information_management;
        $b=$cdioInformationManagement/5;
        $avgCdioInformationManagement=round($b*100);

        $cdioManagingTechnologicalIntervention=$cdioIct->managing_technological_intervention;
        $c=$cdioManagingTechnologicalIntervention/25;
        $avgCdioManagingTechnologicalIntervention=round($c*100);

        $cdioDigitalCitizenship=$cdioIct->digital_citizenship;
        $d=$cdioDigitalCitizenship/35;
        $avgCdioDigitalCitizenship=round($d*100);

        $govofficial=Auth::user()->govofficial;

        $cdioIctInWorkplace2=$govofficial->cdioIctInWorkplace;
        $cdioInformationManagement2=$govofficial->cdioInformationManagement;
        $cdioManagingTechnologicalIntervention2=$govofficial->cdioManagingTechnologicalIntervention;
        $cdioDigitalCitizenship2=$govofficial->cdioDigitalCitizenship;

        $result = [
            ['Category', 'Value'],
            ['ICT In Workplace', (int) $avgCdioIctInWorkplace],
            ['Information Management', (int) $avgCdioInformationManagement],
            ['Managing Technological Interventions', (int) $avgCdioManagingTechnologicalIntervention],
            ['Digital Citizenship', (int) $avgCdioDigitalCitizenship]
        ];

        return view('cdio.assessments.ICT.results',compact('result','cdioDigitalCitizenship2','cdioManagingTechnologicalIntervention2','cdioInformationManagement2','cdioIctInWorkplace2','avgCdioIctInWorkplace','avgCdioInformationManagement','avgCdioManagingTechnologicalIntervention','avgCdioDigitalCitizenship'));
    }

    public function cdioIctReport(){
        $cdioIct=Auth::user()->govofficial->cdioIct;

        $cdioIctInWorkplace=$cdioIct->ict_in_workplace;
        $a=$cdioIctInWorkplace/30;
        $avgCdioIctInWorkplace=round($a*100);

        $cdioInformationManagement=$cdioIct->information_management;
        $b=$cdioInformationManagement/5;
        $avgCdioInformationManagement=round($b*100);

        $cdioManagingTechnologicalIntervention=$cdioIct->managing_technological_intervention;
        $c=$cdioManagingTechnologicalIntervention/25;
        $avgCdioManagingTechnologicalIntervention=round($c*100);

        $cdioDigitalCitizenship=$cdioIct->digital_citizenship;
        $d=$cdioDigitalCitizenship/35;
        $avgCdioDigitalCitizenship=round($d*100);

        $govOfficial=Auth::user()->govofficial;

        $cdioIctInWorkplace2=$govOfficial->cdioIctInWorkplace;
        $cdioInformationManagement2=$govOfficial->cdioInformationManagement;
        $cdioManagingTechnologicalIntervention2=$govOfficial->cdioManagingTechnologicalIntervention;
        $cdioDigitalCitizenship2=$govOfficial->cdioDigitalCitizenship;

        $result = [
            ['Category', 'Value'],
            ['ICT In Workplace', (int) $avgCdioIctInWorkplace],
            ['Information Management', (int) $avgCdioInformationManagement],
            ['Managing Technological Interventions', (int) $avgCdioManagingTechnologicalIntervention],
            ['Digital Citizenship', (int) $avgCdioDigitalCitizenship]
        ];
 
        return view('cdio.assessments.ICT.report',compact('govOfficial','result','cdioDigitalCitizenship2','cdioManagingTechnologicalIntervention2','cdioInformationManagement2','cdioIctInWorkplace2','avgCdioIctInWorkplace','avgCdioInformationManagement','avgCdioManagingTechnologicalIntervention','avgCdioDigitalCitizenship'));
    }

    public function cdioDigitalGovernmentPage01(){
        return view('cdio.assessments.DigitalGovernment.page01');
    }

    public function cdioDigitalGovernmentPage02(){
        return view('cdio.assessments.DigitalGovernment.page02');
    }

    public function cdioDigitalGovernmentPage03(){
        return view('cdio.assessments.DigitalGovernment.page03');
    }

    public function cdioDigitalGovernmentPage04(){
        return view('cdio.assessments.DigitalGovernment.page04');
    }

    public function cdioDigitalGovernmentPage05(){
        return view('cdio.assessments.DigitalGovernment.page05');
    }

    public function cdioDigitalGovernmentPage06(){
        return view('cdio.assessments.DigitalGovernment.page06');
    }

    public function cdioDigitalGovernmentPage07(){
        $cdioChangeManagement=Auth::user()->govofficial->cdioChangeManagement;
        $cdioCollaboration=Auth::user()->govofficial->cdioCollaboration;
        $cdioDriveTheAdoption=Auth::user()->govofficial->cdioDriveTheAdoption;
        $cdioManagingQuality=Auth::user()->govofficial->cdioManagingQuality;
        $cdioOrientation=Auth::user()->govofficial->cdioOrientation;
        $cdioProjectAndProgrammeManagement=Auth::user()->govofficial->cdioProjectAndProgrammeManagement;

        $totCdioProjectAndProgrammeManagement=$cdioProjectAndProgrammeManagement->dg1+$cdioProjectAndProgrammeManagement->dg2+$cdioProjectAndProgrammeManagement->dg3+$cdioProjectAndProgrammeManagement->dg4;
        $totCdioChangeManagement=$cdioChangeManagement->dg5+$cdioChangeManagement->dg6+$cdioChangeManagement->dg7+$cdioChangeManagement->dg8;
        $totCdioCollaboration=$cdioCollaboration->dg9+$cdioCollaboration->dg10+$cdioCollaboration->dg11+$cdioCollaboration->dg12;
        $totCdioOrientation=$cdioOrientation->dg13+$cdioOrientation->dg14;
        $totCdioManagingQuality=$cdioManagingQuality->dg15+$cdioManagingQuality->dg16+$cdioManagingQuality->dg17+$cdioManagingQuality->dg18+$cdioManagingQuality->dg19;
        $totCdioDriveTheAdoption=$cdioDriveTheAdoption->dg20+$cdioDriveTheAdoption->dg21+$cdioDriveTheAdoption->dg22+$cdioDriveTheAdoption->dg23+$cdioDriveTheAdoption->dg24+$cdioDriveTheAdoption->dg25;

        return view('cdio.assessments.DigitalGovernment.page07',compact('totCdioDriveTheAdoption','totCdioManagingQuality','totCdioOrientation','totCdioCollaboration','totCdioProjectAndProgrammeManagement','totCdioChangeManagement'));
    }

    public function storeCdioProjectAndProgrammeManagement(Request $request){
        request()->validate([
            'dg1'=>'required|string',
            'dg2'=>'required|string',
            'dg3'=>'required|string',
            'dg4'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioProjectAndProgrammeManagement=new CdioProjectAndProgrammeManagement;

        $cdioProjectAndProgrammeManagement->dg1=$request->dg1;
        $cdioProjectAndProgrammeManagement->dg2=$request->dg2;
        $cdioProjectAndProgrammeManagement->dg3=$request->dg3;
        $cdioProjectAndProgrammeManagement->dg4=$request->dg4;
        $cdioProjectAndProgrammeManagement->govofficial_id=$request->govofficial_id;

        $cdioProjectAndProgrammeManagement->save();

        return redirect()->route('cdioDigitalGovernmentPage02');
    }

    public function storeCdioChangeManagement(Request $request){
        request()->validate([
            'dg5'=>'required|string',
            'dg6'=>'required|string',
            'dg7'=>'required|string',
            'dg8'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioChangeManagement = new CdioChangeManagement;

        $cdioChangeManagement->dg5=$request->dg5;
        $cdioChangeManagement->dg6=$request->dg6;
        $cdioChangeManagement->dg7=$request->dg7;
        $cdioChangeManagement->dg8=$request->dg8;
        $cdioChangeManagement->govofficial_id=$request->govofficial_id;

        $cdioChangeManagement->save();

        return redirect()->route('cdioDigitalGovernmentPage03');

    }

    public function storeCdioCollaboration(Request $request){
        request()->validate([
            'dg9'=>'required|string',
            'dg10'=>'required|string',
            'dg11'=>'required|string',
            'dg12'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioCollaboration = new CdioCollaboration;

        $cdioCollaboration->dg9=$request->dg9;
        $cdioCollaboration->dg10=$request->dg10;
        $cdioCollaboration->dg11=$request->dg11;
        $cdioCollaboration->dg12=$request->dg12;
        $cdioCollaboration->govofficial_id=$request->govofficial_id;

        $cdioCollaboration->save();

        return redirect()->route('cdioDigitalGovernmentPage04');

    }

    public function storeCdioOrientation(Request $request){
        request()->validate([
            'dg13'=>'required|string',
            'dg14'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioOrientation = new CdioOrientation;

        $cdioOrientation->dg13=$request->dg13;
        $cdioOrientation->dg14=$request->dg14;
        $cdioOrientation->govofficial_id=$request->govofficial_id;

        $cdioOrientation->save();

        return redirect()->route('cdioDigitalGovernmentPage05');

    }

    public function storeCdioManagingQuality(Request $request){
        request()->validate([
            'dg15'=>'required|string',
            'dg16'=>'required|string',
            'dg17'=>'required|string',
            'dg18'=>'required|string',
            'dg19'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioManagingQuality = new CdioManagingQuality;

        $cdioManagingQuality->dg15=$request->dg15;
        $cdioManagingQuality->dg16=$request->dg16;
        $cdioManagingQuality->dg17=$request->dg17;
        $cdioManagingQuality->dg18=$request->dg18;
        $cdioManagingQuality->dg19=$request->dg19;
        $cdioManagingQuality->govofficial_id=$request->govofficial_id;

        $cdioManagingQuality->save();

        return redirect()->route('cdioDigitalGovernmentPage06');

    }

    public function storeCdioDriveTheAdoption(Request $request){
        request()->validate([
            'dg20'=>'required|string',
            'dg21'=>'required|string',
            'dg22'=>'required|string',
            'dg23'=>'required|string',
            'dg24'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioDriveTheAdoption = new CdioDriveTheAdoption;

        $cdioDriveTheAdoption->dg20=$request->dg20;
        $cdioDriveTheAdoption->dg21=$request->dg21;
        $cdioDriveTheAdoption->dg22=$request->dg22;
        $cdioDriveTheAdoption->dg23=$request->dg23;
        $cdioDriveTheAdoption->dg24=$request->dg24;
        $cdioDriveTheAdoption->govofficial_id=$request->govofficial_id;

        $cdioDriveTheAdoption->save();

        return redirect()->route('cdioDigitalGovernmentPage07');

    }

    public function storeCdioDigitalInitiative(Request $request){
        request()->validate([
            'dg26'=>'required|string',
            'dg27'=>'required|string',
            'dg28'=>'required|string',
            'dg29'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioDigitalInitiative = new CdioDigitalInitiative;

        $cdioDigitalInitiative->dg26=$request->dg26;
        $cdioDigitalInitiative->dg27=$request->dg27;
        $cdioDigitalInitiative->dg28=$request->dg28;
        $cdioDigitalInitiative->dg29=$request->dg29;
        $cdioDigitalInitiative->govofficial_id=$request->govofficial_id;

        $cdioDigitalInitiative->save();

        $totCdioDigitalInitiative=$request->dg26+$request->dg27+$request->dg28+$request->dg29;
        $overall=$request->totCdioProjectAndProgrammeManagement+$request->totCdioCollaboration+$request->totCdioChangeManagement+$request->totCdioOrientation+$request->totCdioManagingQuality+$request->totCdioDriveTheAdoption+$totCdioDigitalInitiative;

        $cdioDigitalGovernment = new CdioDigitalGovernment;

        $cdioDigitalGovernment->project_and_programme_management=$request->totCdioProjectAndProgrammeManagement;
        $cdioDigitalGovernment->change_management=$request->totCdioChangeManagement;
        $cdioDigitalGovernment->collaboration=$request->totCdioCollaboration;
        $cdioDigitalGovernment->orientation=$request->totCdioOrientation;
        $cdioDigitalGovernment->managing_quality=$request->totCdioManagingQuality;
        $cdioDigitalGovernment->drive_the_adoption=$request->totCdioDriveTheAdoption;
        $cdioDigitalGovernment->digital_initiative=$totCdioDigitalInitiative;
        $cdioDigitalGovernment->overall=$overall;
        $cdioDigitalGovernment->govofficial_id=$request->govofficial_id;

        $cdioDigitalGovernment->save();

        return redirect()->route('cdioAssessments');

    }

    public function cdioDigitalGovernmentResults(){
        $cdioDigitalGovernment=Auth::user()->govofficial->cdioDigitalGovernment;

        $cdioProjectAndProgrammeManagement=$cdioDigitalGovernment->project_and_programme_management;
        $a=$cdioProjectAndProgrammeManagement/16;
        $avgCdioProjectAndProgrammeManagement=round($a*100);

        $cdioChangeManagement=$cdioDigitalGovernment->change_management;
        $b=$cdioChangeManagement/12;
        $avgCdioChangeManagement=round($b*100);

        $cdioCollaboration=$cdioDigitalGovernment->collaboration;
        $c=$cdioCollaboration/16;
        $avgCdioCollaboration=round($c*100);

        $cdioOrientation=$cdioDigitalGovernment->orientation;
        $d=$cdioOrientation/8;
        $avgCdioOrientation=round($d*100);

        $cdioManagingQuality=$cdioDigitalGovernment->managing_quality;
        $e=$cdioManagingQuality/17;
        $avgCdioManagingQuality=round($e*100);

        $cdioDriveTheAdoption=$cdioDigitalGovernment->drive_the_adoption;
        $f=$cdioDriveTheAdoption/15;
        $avgCdioDriveTheAdoption=round($f*100);

        $cdioDigitalInitiative=$cdioDigitalGovernment->digital_initiative;
        $g=$cdioDigitalInitiative/9;
        $avgCdioDigitalInitiative=round($g*100);

        $result = [
            ['Category', 'Value'],
            ['Project and Programme Management', (int) $avgCdioProjectAndProgrammeManagement],
            ['Change Management', (int) $avgCdioChangeManagement],
            ['Collaboration and Partnership', (int) $avgCdioCollaboration],
            ['Results orientation', (int) $avgCdioOrientation],
            ['Managing quality in digital government services', (int) $avgCdioManagingQuality],
            ['Drive the adoption of the digital  transformation strategy ', (int) $avgCdioDriveTheAdoption],
            ['Carryout Digital Government initiatives', (int) $avgCdioDigitalInitiative],
        ];

        $govofficial=Auth::user()->govofficial;

        $cdioProjectAndProgrammeManagement2=$govofficial->cdioProjectAndProgrammeManagement;
        $cdioChangeManagement2=$govofficial->cdioChangeManagement;
        $cdioCollaboration2=$govofficial->cdioCollaboration;
        $cdioOrientation2=$govofficial->cdioOrientation;
        $cdioManagingQuality2=$govofficial->cdioManagingQuality;
        $cdioDriveTheAdoption2=$govofficial->cdioDriveTheAdoption;
        $cdioDigitalInitiative2=$govofficial->cdioDigitalInitiative;

        return view('cdio.assessments.DigitalGovernment.results',compact('avgCdioDigitalInitiative','avgCdioDriveTheAdoption','avgCdioManagingQuality','avgCdioOrientation','avgCdioCollaboration','avgCdioChangeManagement','avgCdioProjectAndProgrammeManagement','result','cdioDigitalInitiative2','cdioDriveTheAdoption2','cdioManagingQuality2','cdioOrientation2','cdioCollaboration2','cdioChangeManagement2','cdioProjectAndProgrammeManagement2'));
    }

    public function cdioDigitalGovernmentReport(){
        $cdioDigitalGovernment=Auth::user()->govofficial->cdioDigitalGovernment;

        $cdioProjectAndProgrammeManagement=$cdioDigitalGovernment->project_and_programme_management;
        $a=$cdioProjectAndProgrammeManagement/16;
        $avgCdioProjectAndProgrammeManagement=round($a*100);

        $cdioChangeManagement=$cdioDigitalGovernment->change_management;
        $b=$cdioChangeManagement/12;
        $avgCdioChangeManagement=round($b*100);

        $cdioCollaboration=$cdioDigitalGovernment->collaboration;
        $c=$cdioCollaboration/16;
        $avgCdioCollaboration=round($c*100);

        $cdioOrientation=$cdioDigitalGovernment->orientation;
        $d=$cdioOrientation/8;
        $avgCdioOrientation=round($d*100);

        $cdioManagingQuality=$cdioDigitalGovernment->managing_quality;
        $e=$cdioManagingQuality/17;
        $avgCdioManagingQuality=round($e*100);

        $cdioDriveTheAdoption=$cdioDigitalGovernment->drive_the_adoption;
        $f=$cdioDriveTheAdoption/15;
        $avgCdioDriveTheAdoption=round($f*100);

        $cdioDigitalInitiative=$cdioDigitalGovernment->digital_initiative;
        $g=$cdioDigitalInitiative/9;
        $avgCdioDigitalInitiative=round($g*100);

        $result = [
            ['Category', 'Value'],
            ['Project and Programme Management', (int) $avgCdioProjectAndProgrammeManagement],
            ['Change Management', (int) $avgCdioChangeManagement],
            ['Collaboration and Partnership', (int) $avgCdioCollaboration],
            ['Results orientation', (int) $avgCdioOrientation],
            ['Managing quality in digital government services', (int) $avgCdioManagingQuality],
            ['Drive the adoption of the digital  transformation strategy ', (int) $avgCdioDriveTheAdoption],
            ['Carryout Digital Government initiatives', (int) $avgCdioDigitalInitiative],
        ];

        $govofficial=Auth::user()->govofficial;

        $cdioProjectAndProgrammeManagement2=$govofficial->cdioProjectAndProgrammeManagement;
        $cdioChangeManagement2=$govofficial->cdioChangeManagement;
        $cdioCollaboration2=$govofficial->cdioCollaboration;
        $cdioOrientation2=$govofficial->cdioOrientation;
        $cdioManagingQuality2=$govofficial->cdioManagingQuality;
        $cdioDriveTheAdoption2=$govofficial->cdioDriveTheAdoption;
        $cdioDigitalInitiative2=$govofficial->cdioDigitalInitiative;

        return view('cdio.assessments.DigitalGovernment.report',compact('govofficial','avgCdioDigitalInitiative','avgCdioDriveTheAdoption','avgCdioManagingQuality','avgCdioOrientation','avgCdioCollaboration','avgCdioChangeManagement','avgCdioProjectAndProgrammeManagement','result','cdioDigitalInitiative2','cdioDriveTheAdoption2','cdioManagingQuality2','cdioOrientation2','cdioCollaboration2','cdioChangeManagement2','cdioProjectAndProgrammeManagement2'));
    }

    public function cdioManagementPage01(){
        return view('cdio.assessments.Management.page01');
    }

    public function cdioManagementPage02(){
        return view('cdio.assessments.Management.page02');
    }

    public function cdioManagementPage03(){
        return view('cdio.assessments.Management.page03');
    }

    public function cdioManagementPage04(){
        return view('cdio.assessments.Management.page04');
    }

    public function cdioManagementPage05(){
        return view('cdio.assessments.Management.page05');
    }

    public function cdioManagementPage06(){
        return view('cdio.assessments.Management.page06');
    }

    public function cdioManagementPage07(){
        return view('cdio.assessments.Management.page07');
    }

    public function cdioManagementPage08(){
        return view('cdio.assessments.Management.page08');
    }

    public function cdioManagementPage09(){
        $cdioCommunication=Auth::user()->govofficial->cdioCommunication;
        $cdioManagingEffectiveWorkplace=Auth::user()->govofficial->cdioManagingEffectiveWorkplace;
        $cdioDecisionMaking=Auth::user()->govofficial->cdioDecisionMaking;
        $cdioBuildingCapacity=Auth::user()->govofficial->cdioBuildingCapacity;
        $cdioStakeholder=Auth::user()->govofficial->cdioStakeholder;
        $cdioHumanResource=Auth::user()->govofficial->cdioHumanResource;
        $cdioTeamwork=Auth::user()->govofficial->cdioTeamwork;
        $cdioSelfDevelopment=Auth::user()->govofficial->cdioSelfDevelopment;

        $totCdioCommunication=$cdioCommunication->mgt1+$cdioCommunication->mgt2+$cdioCommunication->mgt3+$cdioCommunication->mgt4+$cdioCommunication->mgt5+$cdioCommunication->mgt6+$cdioCommunication->mgt7;
        $totCdioManagingEffectiveWorkplace=$cdioManagingEffectiveWorkplace->mgt8+$cdioManagingEffectiveWorkplace->mgt9+$cdioManagingEffectiveWorkplace->mgt10;
        $totCdioDecisionMaking=$cdioDecisionMaking->mgt11+$cdioDecisionMaking->mgt12+$cdioDecisionMaking->mgt13+$cdioDecisionMaking->mgt14+$cdioDecisionMaking->mgt15+$cdioDecisionMaking->mgt16+$cdioDecisionMaking->mgt17;
        $totCdioBuildingCapacity=$cdioBuildingCapacity->mgt18+$cdioBuildingCapacity->mgt19+$cdioBuildingCapacity->mgt20+$cdioBuildingCapacity->mgt21+$cdioBuildingCapacity->mgt22;
        $totCdioStakeholder=$cdioStakeholder->mgt23+$cdioStakeholder->mgt24+$cdioStakeholder->mgt25+$cdioStakeholder->mgt26+$cdioStakeholder->mgt27;
        $totCdioHumanResource=$cdioHumanResource->mgt28+$cdioHumanResource->mgt29+$cdioHumanResource->mgt30+$cdioHumanResource->mgt31+$cdioHumanResource->mgt32+$cdioHumanResource->mgt33+$cdioHumanResource->mgt34;
        $totCdioTeamwork=$cdioTeamwork->mgt35+$cdioTeamwork->mgt36;
        $totCdioSelfDevelopment=$cdioSelfDevelopment->mgt37+$cdioSelfDevelopment->mgt38;

        return view('cdio.assessments.Management.page09',compact('totCdioSelfDevelopment','totCdioTeamwork','totCdioHumanResource','totCdioStakeholder','totCdioBuildingCapacity','totCdioDecisionMaking','totCdioManagingEffectiveWorkplace','totCdioCommunication'));
    }

    public function storeCdioCommunication(Request $request){
        request()->validate([
            'mgt1'=>'required|string',
            'mgt2'=>'required|string',
            'mgt3'=>'required|string',
            'mgt4'=>'required|string',
            'mgt5'=>'required|string',
            'mgt6'=>'required|string',
            'mgt7'=>'required|string',
            'govofficial_id'=>'required|string'
        ]);

        $cdioCommunication = new CdioCommunication;

        $cdioCommunication->mgt1=$request->mgt1;
        $cdioCommunication->mgt2=$request->mgt2;
        $cdioCommunication->mgt3=$request->mgt3;
        $cdioCommunication->mgt4=$request->mgt4;
        $cdioCommunication->mgt5=$request->mgt5;
        $cdioCommunication->mgt6=$request->mgt6;
        $cdioCommunication->mgt7=$request->mgt7;
        $cdioCommunication->govofficial_id=$request->govofficial_id;

        $cdioCommunication->save();

        return redirect()->route('cdioManagementPage02');

    }

    public function storeCdioManagingEffectiveWorkplace(Request $request){
        request()->validate([
            'mgt8'=>'required|string',
            'mgt9'=>'required|string',
            'mgt10'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioManagingEffectiveWorkplace = new CdioManagingEffectiveWorkplace;

        $cdioManagingEffectiveWorkplace->mgt8=$request->mgt8;
        $cdioManagingEffectiveWorkplace->mgt9=$request->mgt9;
        $cdioManagingEffectiveWorkplace->mgt10=$request->mgt10;
        $cdioManagingEffectiveWorkplace->govofficial_id=$request->govofficial_id;

        $cdioManagingEffectiveWorkplace->save();

        return redirect()->route('cdioManagementPage03');
    }

    public function storeCdioDecisionMaking(Request $request){
        request()->validate([
            'mgt11'=>'required|string',
            'mgt12'=>'required|string',
            'mgt13'=>'required|string',
            'mgt14'=>'required|string',
            'mgt15'=>'required|string',
            'mgt16'=>'required|string',
            'mgt17'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioDecisionMaking = new CdioDecisionMaking;

        $cdioDecisionMaking->mgt11=$request->mgt11;
        $cdioDecisionMaking->mgt12=$request->mgt12;
        $cdioDecisionMaking->mgt13=$request->mgt13;
        $cdioDecisionMaking->mgt14=$request->mgt14;
        $cdioDecisionMaking->mgt15=$request->mgt15;
        $cdioDecisionMaking->mgt16=$request->mgt16;
        $cdioDecisionMaking->mgt17=$request->mgt17;
        $cdioDecisionMaking->govofficial_id=$request->govofficial_id;

        $cdioDecisionMaking->save();

        return redirect()->route('cdioManagementPage04');
    }

    public function storeCdioBuildingCapacity(Request $request){
        request()->validate([
            'mgt18'=>'required|string',
            'mgt19'=>'required|string',
            'mgt20'=>'required|string',
            'mgt21'=>'required|string',
            'mgt22'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioBuildingCapacity = new CdioBuildingCapacity;

        $cdioBuildingCapacity->mgt18=$request->mgt18;
        $cdioBuildingCapacity->mgt19=$request->mgt19;
        $cdioBuildingCapacity->mgt20=$request->mgt20;
        $cdioBuildingCapacity->mgt21=$request->mgt21;
        $cdioBuildingCapacity->mgt22=$request->mgt22;
        $cdioBuildingCapacity->govofficial_id=$request->govofficial_id;

        $cdioBuildingCapacity->save();

        return redirect()->route('cdioManagementPage05');
    }

    public function storeCdioStakeholder(Request $request){
        request()->validate([
            'mgt23'=>'required|string',
            'mgt24'=>'required|string',
            'mgt25'=>'required|string',
            'mgt26'=>'required|string',
            'mgt27'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioStakeholder = new CdioStakeholder;

        $cdioStakeholder->mgt23=$request->mgt23;
        $cdioStakeholder->mgt24=$request->mgt24;
        $cdioStakeholder->mgt25=$request->mgt25;
        $cdioStakeholder->mgt26=$request->mgt26;
        $cdioStakeholder->mgt27=$request->mgt27;
        $cdioStakeholder->govofficial_id=$request->govofficial_id;

        $cdioStakeholder->save();

        return redirect()->route('cdioManagementPage06');
    }

    public function storeCdioHumanResource(Request $request){
        request()->validate([
            'mgt28'=>'required|string',
            'mgt29'=>'required|string',
            'mgt30'=>'required|string',
            'mgt31'=>'required|string',
            'mgt32'=>'required|string',
            'mgt33'=>'required|string',
            'mgt34'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioHumanResource = new CdioHumanResource;

        $cdioHumanResource->mgt28=$request->mgt28;
        $cdioHumanResource->mgt29=$request->mgt29;
        $cdioHumanResource->mgt30=$request->mgt30;
        $cdioHumanResource->mgt31=$request->mgt31;
        $cdioHumanResource->mgt32=$request->mgt32;
        $cdioHumanResource->mgt33=$request->mgt33;
        $cdioHumanResource->mgt34=$request->mgt34;
        $cdioHumanResource->govofficial_id=$request->govofficial_id;

        $cdioHumanResource->save();

        return redirect()->route('cdioManagementPage07');
    }

    public function storeCdioTeamwork(Request $request){
        request()->validate([
            'mgt35'=>'required|string',
            'mgt36'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioTeamwork = new CdioTeamwork;

        $cdioTeamwork->mgt35=$request->mgt35;
        $cdioTeamwork->mgt36=$request->mgt36;
        $cdioTeamwork->govofficial_id=$request->govofficial_id;

        $cdioTeamwork->save();

        return redirect()->route('cdioManagementPage08');
    }

    public function storeCdioSelfDevelopment(Request $request){
        request()->validate([
            'mgt37'=>'required|string',
            'mgt38'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioSelfDevelopment = new CdioSelfDevelopment;

        $cdioSelfDevelopment->mgt37=$request->mgt37;
        $cdioSelfDevelopment->mgt38=$request->mgt38;
        $cdioSelfDevelopment->govofficial_id=$request->govofficial_id;

        $cdioSelfDevelopment->save();

        return redirect()->route('cdioManagementPage09');
    }

    public function storeCdioDigitalTransformation(Request $request){
        request()->validate([
            'mgt39'=>'required|string',
            'mgt40'=>'required|string',
            'mgt41'=>'required|string',
            'mgt42'=>'required|string',
            'mgt43'=>'required|string',
            'mgt44'=>'required|string',
            'govofficial_id'=>'required|string'
        ]); 
        
        $cdioDigitalTransformation = new CdioDigitalTransformation;

        $cdioDigitalTransformation->mgt39=$request->mgt39;
        $cdioDigitalTransformation->mgt40=$request->mgt40;
        $cdioDigitalTransformation->mgt41=$request->mgt41;
        $cdioDigitalTransformation->mgt42=$request->mgt42;
        $cdioDigitalTransformation->mgt43=$request->mgt43;
        $cdioDigitalTransformation->mgt44=$request->mgt44;
        $cdioDigitalTransformation->govofficial_id=$request->govofficial_id;

        $cdioDigitalTransformation->save();

        $totCdioDigitalTransformation=$request->mgt39+$request->mgt40+$request->mgt41+$request->mgt42+$request->mgt43+$request->mgt44;
        $overall=$request->totCdioCommunication+$request->totCdioManagingEffectiveWorkplace+$request->totCdioDecisionMaking+$request->totCdioBuildingCapacity+$request->totCdioStakeholder+$request->totCdioHumanResource+$request->totCdioTeamwork+$request->totCdioSelfDevelopment+$totCdioDigitalTransformation;

        $cdioManagement = new CdioManagement;

        $cdioManagement->commmunication=$request->totCdioCommunication;
        $cdioManagement->managing_effective_workplace=$request->totCdioManagingEffectiveWorkplace;
        $cdioManagement->decision_making=$request->totCdioDecisionMaking;
        $cdioManagement->building_capacity=$request->totCdioBuildingCapacity;
        $cdioManagement->stakeholder=$request->totCdioStakeholder;
        $cdioManagement->human_resource=$request->totCdioHumanResource;
        $cdioManagement->teamwork=$request->totCdioTeamwork;
        $cdioManagement->self_development=$request->totCdioSelfDevelopment;
        $cdioManagement->digital_transformation=$totCdioDigitalTransformation;
        $cdioManagement->overall=$overall;
        $cdioManagement->govofficial_id=$request->govofficial_id;

        $cdioManagement->save();

        return redirect()->route('cdioAssessments');
    }

    public function cdioManagementResults(){
        $cdioManagement=Auth::user()->govofficial->cdioManagement;

        $communication=$cdioManagement->commmunication;
        $a=$communication/21;
        $avgCommunication=round($a*100);

        $managingEffectiveWorkplace=$cdioManagement->managing_effective_workplace;
        $b=$managingEffectiveWorkplace/9;
        $avgManagingEffectiveWorkplace=round($b*100);

        $decisionMaking=$cdioManagement->decision_making;
        $c=$decisionMaking/16;
        $avgDecisionMaking=round($c*100);

        $buildingCapacity=$cdioManagement->building_capacity;
        $d=$buildingCapacity/10;
        $avgBuildingCapacity=round($d*100);

        $stakeholder=$cdioManagement->stakeholder;
        $e=$stakeholder/8;
        $avgStakeholder=round($e*100);

        $humanResource=$cdioManagement->human_resource;
        $f=$humanResource/14;
        $avgHumanResource=round($f*100);

        $teamwork=$cdioManagement->teamwork;
        $g=$teamwork/4;
        $avgTeamwork=round($g*100);

        $selfDevelopment=$cdioManagement->self_development;
        $h=$selfDevelopment/4;
        $avgSelfDevelopment=round($h*100);

        $digitalTransformation=$cdioManagement->digital_transformation;
        $i=$digitalTransformation/10;
        $avgDigitalTransformation=round($i*100);

        $result = [
            ['Category', 'Value'],
            ['Communication in Digital Government', (int) $avgCommunication],
            ['Managing effective workplace in a Digital Government setting', (int) $avgManagingEffectiveWorkplace],
            ['Effective decision making for digital government interventions', (int) $avgDecisionMaking],
            ['Building capacities for Digital Government', (int) $avgBuildingCapacity],
            ['Effectively managing stakeholders for digital government initiatives', (int) $avgStakeholder],
            ['Managing human resources to enhance performance in Digital Government', (int) $avgHumanResource],
            ['Effective teamwork', (int) $avgTeamwork],
            ['Specialized knowledge, expertise and self development', (int) $avgSelfDevelopment],
            ['Institutional digital transformation', (int) $avgDigitalTransformation],
        ];

        $govofficial=Auth::user()->govofficial;

        $cdioCommunication=$govofficial->cdioCommunication;
        $cdioManagingEffectiveWorkplace=$govofficial->cdioManagingEffectiveWorkplace;
        $cdioDecisionMaking=$govofficial->cdioDecisionMaking;
        $cdioBuildingCapacity=$govofficial->cdioBuildingCapacity;
        $cdioHumanResource=$govofficial->cdioHumanResource;
        $cdioStakeholder=$govofficial->cdioStakeholder;
        $cdioTeamwork=$govofficial->cdioTeamwork;
        $cdioSelfDevelopment=$govofficial->cdioSelfDevelopment;
        $cdioDigitalTransformation=$govofficial->cdioDigitalTransformation;

        return view('cdio.assessments.Management.result',compact('cdioHumanResource','avgCommunication','avgManagingEffectiveWorkplace','avgDecisionMaking','avgBuildingCapacity','avgStakeholder','avgHumanResource','avgTeamwork','avgSelfDevelopment','avgDigitalTransformation','cdioCommunication','cdioManagingEffectiveWorkplace','cdioDecisionMaking','cdioBuildingCapacity','cdioStakeholder','cdioTeamwork','cdioSelfDevelopment','cdioDigitalTransformation','result'));
    }

    public function cdioManagementReport(){
        $cdioManagement=Auth::user()->govofficial->cdioManagement;

        $communication=$cdioManagement->commmunication;
        $a=$communication/21;
        $avgCommunication=round($a*100);

        $managingEffectiveWorkplace=$cdioManagement->managing_effective_workplace;
        $b=$managingEffectiveWorkplace/9;
        $avgManagingEffectiveWorkplace=round($b*100);

        $decisionMaking=$cdioManagement->decision_making;
        $c=$decisionMaking/16;
        $avgDecisionMaking=round($c*100);

        $buildingCapacity=$cdioManagement->building_capacity;
        $d=$buildingCapacity/10;
        $avgBuildingCapacity=round($d*100);

        $stakeholder=$cdioManagement->stakeholder;
        $e=$stakeholder/8;
        $avgStakeholder=round($e*100);

        $humanResource=$cdioManagement->human_resource;
        $f=$humanResource/14;
        $avgHumanResource=round($f*100);

        $teamwork=$cdioManagement->teamwork;
        $g=$teamwork/4;
        $avgTeamwork=round($g*100);

        $selfDevelopment=$cdioManagement->self_development;
        $h=$selfDevelopment/4;
        $avgSelfDevelopment=round($h*100);

        $digitalTransformation=$cdioManagement->digital_transformation;
        $i=$digitalTransformation/10;
        $avgDigitalTransformation=round($i*100);

        $result = [
            ['Category', 'Value'],
            ['Communication in Digital Government', (int) $avgCommunication],
            ['Managing effective workplace in a Digital Government setting', (int) $avgManagingEffectiveWorkplace],
            ['Effective decision making for digital government interventions', (int) $avgDecisionMaking],
            ['Building capacities for Digital Government', (int) $avgBuildingCapacity],
            ['Effectively managing stakeholders for digital government initiatives', (int) $avgStakeholder],
            ['Managing human resources to enhance performance in Digital Government', (int) $avgHumanResource],
            ['Effective teamwork', (int) $avgTeamwork],
            ['Specialized knowledge, expertise and self development', (int) $avgSelfDevelopment],
            ['Institutional digital transformation', (int) $avgDigitalTransformation],
        ];

        $govofficial=Auth::user()->govofficial;

        $cdioCommunication=$govofficial->cdioCommunication;
        $cdioManagingEffectiveWorkplace=$govofficial->cdioManagingEffectiveWorkplace;
        $cdioDecisionMaking=$govofficial->cdioDecisionMaking;
        $cdioBuildingCapacity=$govofficial->cdioBuildingCapacity;
        $cdioHumanResource=$govofficial->cdioHumanResource;
        $cdioStakeholder=$govofficial->cdioStakeholder;
        $cdioTeamwork=$govofficial->cdioTeamwork;
        $cdioSelfDevelopment=$govofficial->cdioSelfDevelopment;
        $cdioDigitalTransformation=$govofficial->cdioDigitalTransformation;

        return view('cdio.assessments.Management.report',compact('govofficial','cdioHumanResource','avgCommunication','avgManagingEffectiveWorkplace','avgDecisionMaking','avgBuildingCapacity','avgStakeholder','avgHumanResource','avgTeamwork','avgSelfDevelopment','avgDigitalTransformation','cdioCommunication','cdioManagingEffectiveWorkplace','cdioDecisionMaking','cdioBuildingCapacity','cdioStakeholder','cdioTeamwork','cdioSelfDevelopment','cdioDigitalTransformation','result'));

    }


}

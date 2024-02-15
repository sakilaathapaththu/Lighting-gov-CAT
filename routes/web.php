<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CdioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TopLayerController;
use App\Http\Controllers\GovofficialController;
use App\Http\Controllers\MiddleLayerController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DeepAssessmentController;
use App\Http\Controllers\OperationalLayerController;



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/



Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();


Route::resource('govofficials', GovofficialController::class);

/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('userHome');
    Route::get('/registered/user', [HomeController::class, 'registered'])->name('registered');
    Route::get('/signup', [GovofficialController::class, 'create'])->name('signup');
    Route::get('/toplayer', [TopLayerController::class, 'top'])->name('toplayer');

    Route::get('/operationallayer', [OperationalLayerController::class, 'operational'])->name('operationallayer');
    Route::get('/operational/digitalGovernment/page01', [OperationalLayerController::class, 'digitalGovernmentPage01'])->name('operationalDigitalGovernmentPage01');
    Route::get('/operational/digitalGovernment/page02', [OperationalLayerController::class, 'digitalGovernmentPage02'])->name('operationalDigitalGovernmentPage02');
    Route::get('/operational/digitalGovernment/page03', [OperationalLayerController::class, 'digitalGovernmentPage03'])->name('operationalDigitalGovernmentPage03');
    Route::get('/operational/digitalGovernment/page04', [OperationalLayerController::class, 'digitalGovernmentPage04'])->name('operationalDigitalGovernmentPage04');
    Route::get('/operational/digitalGovernment/page05', [OperationalLayerController::class, 'digitalGovernmentPage05'])->name('operationalDigitalGovernmentPage05');

    Route::post('storeOpChangeManagement', [OperationalLayerController::class, 'storeOpChangeManagement'])->name('storeOpChangeManagement');
    Route::post('storeOpCollaboration', [OperationalLayerController::class, 'storeOpCollaboration'])->name('storeOpCollaboration');
    Route::post('storeOpOrientation', [OperationalLayerController::class, 'storeOpOrientation'])->name('storeOpOrientation');
    Route::post('storeOpQualityManagement', [OperationalLayerController::class, 'storeOpQualityManagement'])->name('storeOpQualityManagement');
    Route::post('storeOpInitiative', [OperationalLayerController::class, 'storeOpInitiative'])->name('storeOpInitiative');
    Route::get('/operational/digitalgovernment/results', [OperationalLayerController::class, 'results'])->name('operationalDigitalgovernmentResults');
    Route::get('/operational/digitalgovernment/report', [OperationalLayerController::class, 'digitalGovernmentReport'])->name('operationalDigitalgovernmentReport');

    Route::get('/operational/ict/page01', [OperationalLayerController::class, 'ictPage01'])->name('operationalIctPage01');
    Route::get('/operational/ict/page02', [OperationalLayerController::class, 'ictPage02'])->name('operationalIctPage02');
    Route::get('/operational/ict/page03', [OperationalLayerController::class, 'ictPage03'])->name('operationalIctPage03');

    Route::post('storeOpIctInWorkPlace', [OperationalLayerController::class, 'storeOpIctInWorkPlace'])->name('storeOpIctInWorkPlace');
    Route::post('storeOpInformationManagement', [OperationalLayerController::class, 'storeOpInformationManagement'])->name('storeOpInformationManagement');
    Route::post('storeOpDigitalCitizenship', [OperationalLayerController::class, 'storeOpDigitalCitizenship'])->name('storeOpDigitalCitizenship');
    Route::get('/operational/ict/results', [OperationalLayerController::class, 'opIctResults'])->name('operationalIctResults');
    Route::get('/operational/ict/report', [OperationalLayerController::class, 'opIctReport'])->name('operationalIctReport');

    Route::get('/operational/management/page01', [OperationalLayerController::class, 'opManagementPage01'])->name('operationalManagementPage01');
    Route::get('/operational/management/page02', [OperationalLayerController::class, 'opManagementPage02'])->name('operationalManagementPage02');
    Route::get('/operational/management/page03', [OperationalLayerController::class, 'opManagementPage03'])->name('operationalManagementPage03');
    Route::get('/operational/management/page04', [OperationalLayerController::class, 'opManagementPage04'])->name('operationalManagementPage04');
    Route::get('/operational/management/page05', [OperationalLayerController::class, 'opManagementPage05'])->name('operationalManagementPage05');

    Route::post('storeOpCommunication', [OperationalLayerController::class, 'storeOpCommunication'])->name('storeOpCommunication');
    Route::post('storeOpWorkplaceManagement', [OperationalLayerController::class, 'storeOpWorkplaceManagement'])->name('storeOpWorkplaceManagement');
    Route::post('storeOpStakeholderManagement', [OperationalLayerController::class, 'storeOpStakeholderManagement'])->name('storeOpStakeholderManagement');
    Route::post('storeOpTeamwork', [OperationalLayerController::class, 'storeOpTeamwork'])->name('storeOpTeamwork');
    Route::post('storeOpPersonalDevelopment', [OperationalLayerController::class, 'storeOpPersonalDevelopment'])->name('storeOpPersonalDevelopment');
    Route::get('/operational/management/results', [OperationalLayerController::class, 'opManagementResult'])->name('operationalManagementResults');
    Route::get('/operational/management/report', [OperationalLayerController::class, 'opManagementReport'])->name('operationalManagementReport');
    Route::get('/operational/overal', [OperationalLayerController::class, 'overalresult'])->name('operationalOveral');

    Route::get('/operational/overall/report', [OperationalLayerController::class, 'overalreport'])->name('operationalOverallReport');

    Route::get('/middlelayer', [MiddleLayerController::class, 'middle'])->name('middlelayer');
    Route::get('/middle/ict/page01', [MiddleLayerController::class, 'midIctPage01'])->name('middleIctPage01');
    Route::get('/middle/ict/page02', [MiddleLayerController::class, 'midIctPage02'])->name('middleIctPage02');
    Route::get('/middle/ict/page03', [MiddleLayerController::class, 'midIctPage03'])->name('middleIctPage03');

    Route::post('storeMidIctInWorkplace', [MiddleLayerController::class, 'storeMidIctInWorkplace'])->name('storeMidIctInWorkplace');
    Route::post('storeMidInformationManagement', [MiddleLayerController::class, 'storeMidInformationManagement'])->name('storeMidInformationManagement');
    Route::post('storeMidDigitalCitizenship', [MiddleLayerController::class, 'storeMidDigitalCitizenship'])->name('storeMidDigitalCitizenship');
    Route::get('/middle/ict/results', [MiddleLayerController::class, 'midIctResult'])->name('middleIctResult');
    Route::get('/middle/ict/report', [MiddleLayerController::class, 'midIctReport'])->name('middleIctReport');

    Route::get('/middle/digitalgovernment/page01', [MiddleLayerController::class, 'midDigitalGovernmentPage01'])->name('midDigitalGovernmentPage01');
    Route::get('/middle/digitalgovernment/page02', [MiddleLayerController::class, 'midDigitalGovernmentPage02'])->name('midDigitalGovernmentPage02');
    Route::get('/middle/digitalgovernment/page03', [MiddleLayerController::class, 'midDigitalGovernmentPage03'])->name('midDigitalGovernmentPage03');
    Route::get('/middle/digitalgovernment/page04', [MiddleLayerController::class, 'midDigitalGovernmentPage04'])->name('midDigitalGovernmentPage04');
    Route::get('/middle/digitalgovernment/page05', [MiddleLayerController::class, 'midDigitalGovernmentPage05'])->name('midDigitalGovernmentPage05');
    Route::get('/middle/digitalgovernment/page06', [MiddleLayerController::class, 'midDigitalGovernmentPage06'])->name('midDigitalGovernmentPage06');

    Route::post('storeMidProjectManagement', [MiddleLayerController::class, 'storeMidProjectManagement'])->name('storeMidProjectManagement');
    Route::post('storeMidChangeManagement', [MiddleLayerController::class, 'storeMidChangeManagement'])->name('storeMidChangeManagement');
    Route::post('storeMidCollaboration', [MiddleLayerController::class, 'storeMidCollaboration'])->name('storeMidCollaboration');
    Route::post('storeMidOrientation', [MiddleLayerController::class, 'storeMidOrientation'])->name('storeMidOrientation');
    Route::post('storeMidQualityManagement', [MiddleLayerController::class, 'storeMidQualityManagement'])->name('storeMidQualityManagement');
    Route::post('storeMidInitiative', [MiddleLayerController::class, 'storeMidInitiative'])->name('storeMidInitiative');
    Route::get('/middle/Dg/results', [MiddleLayerController::class, 'midDgResult'])->name('middleDgResult');
    Route::get('/middle/Dg/report', [MiddleLayerController::class, 'midDgReport'])->name('middleDgReport');

    Route::get('/middle/management/page01', [MiddleLayerController::class, 'midManagementPage01'])->name('midManagementPage01');
    Route::get('/middle/management/page02', [MiddleLayerController::class, 'midManagementPage02'])->name('midManagementPage02');
    Route::get('/middle/management/page03', [MiddleLayerController::class, 'midManagementPage03'])->name('midManagementPage03');
    Route::get('/middle/management/page04', [MiddleLayerController::class, 'midManagementPage04'])->name('midManagementPage04');
    Route::get('/middle/management/page05', [MiddleLayerController::class, 'midManagementPage05'])->name('midManagementPage05');
    Route::get('/middle/management/page06', [MiddleLayerController::class, 'midManagementPage06'])->name('midManagementPage06');
    Route::get('/middle/management/page07', [MiddleLayerController::class, 'midManagementPage07'])->name('midManagementPage07');
    Route::get('/middle/management/page08', [MiddleLayerController::class, 'midManagementPage08'])->name('midManagementPage08');

    Route::post('storeMidCommunication', [MiddleLayerController::class, 'storeMidCommunication'])->name('storeMidCommunication');
    Route::post('storeMidWorkplaceManagement', [MiddleLayerController::class, 'storeMidWorkplaceManagement'])->name('storeMidWorkplaceManagement');
    Route::post('storeMidDecisionMaking', [MiddleLayerController::class, 'storeMidDecisionMaking'])->name('storeMidDecisionMaking');
    Route::post('storeMidCapacityBuilding', [MiddleLayerController::class, 'storeMidCapacityBuilding'])->name('storeMidCapacityBuilding');
    Route::post('storeMidStakeholder', [MiddleLayerController::class, 'storeMidStakeholder'])->name('storeMidStakeholder');
    Route::post('storeMidPerformanceManagement', [MiddleLayerController::class, 'storeMidPerformanceManagement'])->name('storeMidPerformanceManagement');
    Route::post('storeMidTeamWork', [MiddleLayerController::class, 'storeMidTeamWork'])->name('storeMidTeamWork');
    Route::post('storeMidPersonalDevelopment', [MiddleLayerController::class, 'storeMidPersonalDevelopment'])->name('storeMidPersonalDevelopment');

    Route::get('/middle/management/result', [MiddleLayerController::class, 'midManagementResult'])->name('middleManagementResult');
    Route::get('/middle/management/report', [MiddleLayerController::class, 'midManagementReport'])->name('middleManagementReport');

    Route::get('/middle/overall/result', [MiddleLayerController::class, 'overallResult'])->name('middleOverallResult');
    Route::get('/middle/overall/report', [MiddleLayerController::class, 'overallReport'])->name('middleOverallReport');

    Route::get('/top/ict/page01', [TopLayerController::class, 'topIctPage01'])->name('topIctPage01');
    Route::get('/top/ict/page02', [TopLayerController::class, 'topIctPage02'])->name('topIctPage02');
    Route::get('/top/ict/page03', [TopLayerController::class, 'topIctPage03'])->name('topIctPage03');

    Route::post('storeTopIctInWorplace', [TopLayerController::class, 'storeTopIctInWorkplace'])->name('storeTopIctInWorplace');
    Route::post('storeTopInformationManagement', [TopLayerController::class, 'storeTopInformationManagement'])->name('storeTopInformationManagement');
    Route::post('storeTopDigitalCitizenship', [TopLayerController::class, 'storeTopDigitalCitizenship'])->name('storeTopDigitalCitizenship');

    Route::get('/top/ict/result', [TopLayerController::class, 'topIctResult'])->name('topIctResult');
    Route::get('/top/ict/report', [TopLayerController::class, 'topIctReport'])->name('topIctReport');

    Route::get('/top/digitalgovernment/page01', [TopLayerController::class, 'topDigitalGovernmentPage01'])->name('topDigitalGovernmentPage01');
    Route::get('/top/digitalgovernment/page02', [TopLayerController::class, 'topDigitalGovernmentPage02'])->name('topDigitalGovernmentPage02');
    Route::get('/top/digitalgovernment/page03', [TopLayerController::class, 'topDigitalGovernmentPage03'])->name('topDigitalGovernmentPage03');
    Route::get('/top/digitalgovernment/page04', [TopLayerController::class, 'topDigitalGovernmentPage04'])->name('topDigitalGovernmentPage04');
    Route::get('/top/digitalgovernment/page05', [TopLayerController::class, 'topDigitalGovernmentPage05'])->name('topDigitalGovernmentPage05');
    Route::get('/top/digitalgovernment/page06', [TopLayerController::class, 'topDigitalGovernmentPage06'])->name('topDigitalGovernmentPage06');

    Route::post('storeTopProjectManagement', [TopLayerController::class, 'storeTopProjectManagement'])->name('storeTopProjectManagement');
    Route::post('storeTopChangeManagement', [TopLayerController::class, 'storeTopChangeManagement'])->name('storeTopChangeManagement');
    Route::post('storeTopCollaboration', [TopLayerController::class, 'storeTopCollaboration'])->name('storeTopCollaboration');
    Route::post('storeTopOrientation', [TopLayerController::class, 'storeTopOrientation'])->name('storeTopOrientation');
    Route::post('storeTopQualityManagement', [TopLayerController::class, 'storeTopQualityManagement'])->name('storeTopQualityManagement');
    Route::post('storeTopLeadership', [TopLayerController::class, 'storeTopLeadership'])->name('storeTopLeadership');

    Route::get('/top/dg/result', [TopLayerController::class, 'topDigitalGovernmentResult'])->name('topDigitalGovernmentResult');
    Route::get('/top/dg/report', [TopLayerController::class, 'topDigitalGovernmentReport'])->name('topDigitalGovernmentReport');

    Route::get('/top/management/page01', [TopLayerController::class, 'topManagementPage01'])->name('topManagementPage01');
    Route::get('/top/management/page02', [TopLayerController::class, 'topManagementPage02'])->name('topManagementPage02');
    Route::get('/top/management/page03', [TopLayerController::class, 'topManagementPage03'])->name('topManagementPage03');
    Route::get('/top/management/page04', [TopLayerController::class, 'topManagementPage04'])->name('topManagementPage04');

    Route::get('/top/management/page05', [TopLayerController::class, 'topManagementPage05'])->name('topManagementPage05');
    Route::get('/top/management/page06', [TopLayerController::class, 'topManagementPage06'])->name('topManagementPage06');
    Route::get('/top/management/page07', [TopLayerController::class, 'topManagementPage07'])->name('topManagementPage07');
    Route::get('/top/management/page08', [TopLayerController::class, 'topManagementPage08'])->name('topManagementPage08');

    Route::post('storeTopOrganizationalLeadership', [TopLayerController::class, 'storeTopOrganizationalLeadership'])->name('storeTopOrganizationalLeadership');
    Route::post('storeTopCommunication', [TopLayerController::class, 'storeTopCommunication'])->name('storeTopCommunication');
    Route::post('storeTopWorkplaceManagement', [TopLayerController::class, 'storeTopWorkplaceManagement'])->name('storeTopWorkplaceManagement');
    Route::post('storeTopDecisionMaking', [TopLayerController::class, 'storeTopDecisionMaking'])->name('storeTopDecisionMaking');
    Route::post('storeTopCapacityBuilding', [TopLayerController::class, 'storeTopCapacityBuilding'])->name('storeTopCapacityBuilding');
    Route::post('storeTopStakeholder', [TopLayerController::class, 'storeTopStakeholder'])->name('storeTopStakeholder');
    Route::post('storeTopHumanResource', [TopLayerController::class, 'storeTopHumanResource'])->name('storeTopHumanResource');
    Route::post('storeTopPersonalDevelopment', [TopLayerController::class, 'storeTopPersonalDevelopment'])->name('storeTopPersonalDevelopment');

    Route::get('/top/mgt/result', [TopLayerController::class, 'topManagementResult'])->name('topManagementResult');
    Route::get('/top/mgt/report', [TopLayerController::class, 'topManagementReport'])->name('topManagementReport');

    Route::get('/top/overallResults', [TopLayerController::class, 'overalresult'])->name('topOverallResults');
    Route::get('/top/overallReport', [TopLayerController::class, 'overalreport'])->name('topOverallReport');

    Route::resource('govofficials', GovofficialController::class);

    Route::get('/resetPassword', [ChangePasswordController::class, 'changePassword'])->name('changePassword');
    Route::get('change-password', [ChangePasswordController::class, 'index']);
    Route::post('change-password', [ChangePasswordController::class, 'store'])->name('change.password');


    Route::get('/deep/main', [CdioController::class, 'main'])->name('deepMain');
    Route::get('/deep/technology/main', [CdioController::class, 'technology'])->name('deepTechnology');
    Route::get('/deep/customer/main', [CdioController::class, 'customer'])->name('deepCustomer');
    Route::get('/deep/operation/main', [CdioController::class, 'operation'])->name('deepOperation');
    Route::get('/deep/strategy/main', [CdioController::class, 'strategy'])->name('deepStrategy');
    Route::get('/deep/organization/main', [CdioController::class, 'organization'])->name('deepOrganization');



    Route::get('/edit', [GovofficialController::class, 'updateProfile'])->name('edit');


    Route::get('/cdio/main', [CdioController::class, 'main'])->name('cdioMain');
    Route::get('/cdio/technology/main', [CdioController::class, 'technology'])->name('cdioTechnology');
    Route::get('/cdio/customer/main', [CdioController::class, 'customer'])->name('cdioCustomer');
    Route::get('/cdio/operation/main', [CdioController::class, 'operation'])->name('cdioOperation');
    Route::get('/cdio/strategy/main', [CdioController::class, 'strategy'])->name('cdioStrategy');

    Route::get('/cdio/assessments/main', [CdioController::class, 'assessments'])->name('cdioAssessments');

    Route::get('/cdio/ict/page01', [CdioController::class, 'cdioIctPage01'])->name('cdioIctPage01');
    Route::get('/cdio/ict/page02', [CdioController::class, 'cdioIctPage02'])->name('cdioIctPage02');
    Route::get('/cdio/ict/page03', [CdioController::class, 'cdioIctPage03'])->name('cdioIctPage03');
    Route::get('/cdio/ict/page04', [CdioController::class, 'cdioIctPage04'])->name('cdioIctPage04');
    Route::get('/cdio/ict/results', [CdioController::class, 'cdioIctResults'])->name('cdioIctResults');
    Route::get('/cdio/ict/report', [CdioController::class, 'cdioIctReport'])->name('cdioIctReport');

    Route::post('storeCdioIctInWorkplace', [CdioController::class, 'storeCdioIctInWorkplace'])->name('storeCdioIctInWorkplace');
    Route::post('storeCdioInformationManagement', [CdioController::class, 'storeCdioInformationManagement'])->name('storeCdioInformationManagement');
    Route::post('storeCdioManagingTechnologicalIntervention', [CdioController::class, 'storeCdioManagingTechnologicalIntervention'])->name('storeCdioManagingTechnologicalIntervention');
    Route::post('storeCdioDigitalCitizenship', [CdioController::class, 'storeCdioDigitalCitizenship'])->name('storeCdioDigitalCitizenship');

    Route::get('/cdio/dg/page01', [CdioController::class, 'cdioDigitalGovernmentPage01'])->name('cdioDigitalGovernmentPage01');
    Route::get('/cdio/dg/page02', [CdioController::class, 'cdioDigitalGovernmentPage02'])->name('cdioDigitalGovernmentPage02');
    Route::get('/cdio/dg/page03', [CdioController::class, 'cdioDigitalGovernmentPage03'])->name('cdioDigitalGovernmentPage03');
    Route::get('/cdio/dg/page04', [CdioController::class, 'cdioDigitalGovernmentPage04'])->name('cdioDigitalGovernmentPage04');
    Route::get('/cdio/dg/page05', [CdioController::class, 'cdioDigitalGovernmentPage05'])->name('cdioDigitalGovernmentPage05');
    Route::get('/cdio/dg/page06', [CdioController::class, 'cdioDigitalGovernmentPage06'])->name('cdioDigitalGovernmentPage06');
    Route::get('/cdio/dg/page07', [CdioController::class, 'cdioDigitalGovernmentPage07'])->name('cdioDigitalGovernmentPage07');

    Route::get('/cdio/mgt/page01', [CdioController::class, 'cdioManagementPage01'])->name('cdioManagementPage01');
    Route::get('/cdio/mgt/page02', [CdioController::class, 'cdioManagementPage02'])->name('cdioManagementPage02');
    Route::get('/cdio/mgt/page03', [CdioController::class, 'cdioManagementPage03'])->name('cdioManagementPage03');
    Route::get('/cdio/mgt/page04', [CdioController::class, 'cdioManagementPage04'])->name('cdioManagementPage04');
    Route::get('/cdio/mgt/page05', [CdioController::class, 'cdioManagementPage05'])->name('cdioManagementPage05');
    Route::get('/cdio/mgt/page06', [CdioController::class, 'cdioManagementPage06'])->name('cdioManagementPage06');
    Route::get('/cdio/mgt/page07', [CdioController::class, 'cdioManagementPage07'])->name('cdioManagementPage07');
    Route::get('/cdio/mgt/page08', [CdioController::class, 'cdioManagementPage08'])->name('cdioManagementPage08');
    Route::get('/cdio/mgt/page09', [CdioController::class, 'cdioManagementPage09'])->name('cdioManagementPage09');

    Route::post('storeCdioProjectAndProgrammeManagement', [CdioController::class, 'storeCdioProjectAndProgrammeManagement'])->name('storeCdioProjectAndProgrammeManagement');
    Route::post('storeCdioChangeManagement', [CdioController::class, 'storeCdioChangeManagement'])->name('storeCdioChangeManagement');
    Route::post('storeCdioCollaboration', [CdioController::class, 'storeCdioCollaboration'])->name('storeCdioCollaboration');
    Route::post('storeCdioOrientation', [CdioController::class, 'storeCdioOrientation'])->name('storeCdioOrientation');
    Route::post('storeCdioManagingQuality', [CdioController::class, 'storeCdioManagingQuality'])->name('storeCdioManagingQuality');
    Route::post('storeCdioDriveTheAdoption', [CdioController::class, 'storeCdioDriveTheAdoption'])->name('storeCdioDriveTheAdoption');
    Route::post('storeCdioDigitalInitiative', [CdioController::class, 'storeCdioDigitalInitiative'])->name('storeCdioDigitalInitiative');
    Route::get('/cdio/dg/results', [CdioController::class, 'cdioDigitalGovernmentResults'])->name('cdioDigitalGovernmentResults');
    Route::get('/cdio/dg/report', [CdioController::class, 'cdioDigitalGovernmentReport'])->name('cdioDigitalGovernmentReport');

    Route::post('storeCdioCommunication', [CdioController::class, 'storeCdioCommunication'])->name('storeCdioCommunication');
    Route::post('storeCdioManagingEffectiveWorkplace', [CdioController::class, 'storeCdioManagingEffectiveWorkplace'])->name('storeCdioManagingEffectiveWorkplace');
    Route::post('storeCdioDecisionMaking', [CdioController::class, 'storeCdioDecisionMaking'])->name('storeCdioDecisionMaking');
    Route::post('storeCdioBuildingCapacity', [CdioController::class, 'storeCdioBuildingCapacity'])->name('storeCdioBuildingCapacity');
    Route::post('storeCdioStakeholder', [CdioController::class, 'storeCdioStakeholder'])->name('storeCdioStakeholder');
    Route::post('storeCdioHumanResource', [CdioController::class, 'storeCdioHumanResource'])->name('storeCdioHumanResource');
    Route::post('storeCdioTeamwork', [CdioController::class, 'storeCdioTeamwork'])->name('storeCdioTeamwork');
    Route::post('storeCdioSelfDevelopment', [CdioController::class, 'storeCdioSelfDevelopment'])->name('storeCdioSelfDevelopment');
    Route::post('storeCdioDigitalTransformation', [CdioController::class, 'storeCdioDigitalTransformation'])->name('storeCdioDigitalTransformation');
    Route::get('/cdio/mgt/results', [CdioController::class, 'cdioManagementResults'])->name('cdioManagementResults');
    Route::get('/cdio/mgt/report', [CdioController::class, 'cdioManagementReport'])->name('cdioManagementReport');

    Route::get('/deep/td/page01', [DeepAssessmentController::class, 'deepTdPage01'])->name('deepTdPage01');
    Route::get('/deep/td/page02', [DeepAssessmentController::class, 'deepTdPage02'])->name('deepTdPage02');
    Route::get('/deep/td/page03', [DeepAssessmentController::class, 'deepTdPage03'])->name('deepTdPage03');
    Route::get('/deep/td/page04', [DeepAssessmentController::class, 'deepTdPage04'])->name('deepTdPage04');
    Route::get('/deep/td/page05', [DeepAssessmentController::class, 'deepTdPage05'])->name('deepTdPage05');
    Route::get('/deep/td/page06', [DeepAssessmentController::class, 'deepTdPage06'])->name('deepTdPage06');
    Route::get('/deep/td/page07', [DeepAssessmentController::class, 'deepTdPage07'])->name('deepTdPage07');
    Route::get('/deep/td/page08', [DeepAssessmentController::class, 'deepTdPage08'])->name('deepTdPage08');
    Route::get('/deep/td/page09', [DeepAssessmentController::class, 'deepTdPage09'])->name('deepTdPage09');
    Route::get('/deep/td/page10', [DeepAssessmentController::class, 'deepTdPage10'])->name('deepTdPage10');

    Route::post('deepEmergingTechnology', [DeepAssessmentController::class, 'deepEmergingTechnology'])->name('deepEmergingTechnology');
    Route::post('deepDataManagement', [DeepAssessmentController::class, 'deepDataManagement'])->name('deepDataManagement');
    Route::post('deepDeliveryGovernance', [DeepAssessmentController::class, 'deepDeliveryGovernance'])->name('deepDeliveryGovernance');
    Route::post('deepConnectivity', [DeepAssessmentController::class, 'deepConnectivity'])->name('deepConnectivity');
    Route::post('deepSecurity', [DeepAssessmentController::class, 'deepSecurity'])->name('deepSecurity');
    Route::post('deepTechnologyArchitecture', [DeepAssessmentController::class, 'deepTechnologyArchitecture'])->name('deepTechnologyArchitecture');
    Route::post('deepDataGovernance', [DeepAssessmentController::class, 'deepDataGovernance'])->name('deepDataGovernance');
    Route::post('deepDataEngineering', [DeepAssessmentController::class, 'deepDataEngineering'])->name('deepDataEngineering');
    Route::post('deepInteroperability', [DeepAssessmentController::class, 'deepInteroperability'])->name('deepInteroperability');
    Route::post('deepApplication', [DeepAssessmentController::class, 'deepApplication'])->name('deepApplication');

    Route::get('/deep/cus/page01', [DeepAssessmentController::class, 'deepCusPage01'])->name('deepCusPage01');
    Route::get('/deep/cus/page02', [DeepAssessmentController::class, 'deepCusPage02'])->name('deepCusPage02');
    Route::get('/deep/cus/page03', [DeepAssessmentController::class, 'deepCusPage03'])->name('deepCusPage03');
    Route::get('/deep/cus/page04', [DeepAssessmentController::class, 'deepCusPage04'])->name('deepCusPage04');
    Route::get('/deep/cus/page05', [DeepAssessmentController::class, 'deepCusPage05'])->name('deepCusPage05');

    Route::get('/deep/op/page01', [DeepAssessmentController::class, 'deepOpPage01'])->name('deepOpPage01');
    Route::get('/deep/op/page02', [DeepAssessmentController::class, 'deepOpPage02'])->name('deepOpPage02');
    Route::get('/deep/op/page03', [DeepAssessmentController::class, 'deepOpPage03'])->name('deepOpPage03');
    Route::get('/deep/op/page04', [DeepAssessmentController::class, 'deepOpPage04'])->name('deepOpPage04');
});



Route::controller(SearchController::class)->group(function(){
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
    Route::get('autocomplete2', 'autocomplete2')->name('autocomplete2');
    Route::get('autocomplete3', 'autocomplete3')->name('autocomplete3');

});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});



/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


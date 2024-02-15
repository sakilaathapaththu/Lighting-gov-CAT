<?php

namespace App\Models;

use App\Models\User;
use App\Models\OpIct;
use App\Models\MidIct;
use App\Models\TopIct;
use App\Models\CdioIct;
use App\DeepCitizenTrust;
use App\Models\DeepPolicy;
use App\Models\OpTeamwork;
use App\DeepCitizenInsight;
use App\Models\DeepFinance;
use App\Models\MidTeamWork;
use App\Models\Operational;
use App\Models\CdioTeamwork;
use App\Models\DeepCustomer;
use App\Models\DeepSecurity;
use App\Models\DeepStrategy;
use App\Models\OpInitiative;
use App\Models\OpManagement;
use App\Models\DeepOperation;
use App\Models\MidInitiative;
use App\Models\MidManagement;
use App\Models\OpOrientation;
use App\Models\TopLeadership;
use App\Models\TopManagement;
use App\Models\CdioManagement;
use App\Models\DeepLeadership;
use App\Models\DeepTechnology;
use App\Models\MidOrientation;
use App\Models\MidStakeholder;
use App\Models\TopOrientation;
use App\Models\CdioOrientation;
use App\Models\DeepApplication;
use App\Models\OpCollaboration;
use App\Models\OpCommunication;
use App\Models\DeepConnectivity;
use App\Models\DeepLevelOfSkill;
use App\Models\MidCollaboration;
use App\Models\MidCommunication;
use App\Models\OpIctInWorkplace;
use App\Models\TopCollaboration;
use App\Models\TopCommunication;
use App\Models\TopHumanResource;
use App\Models\CdioCollaboration;
use App\Models\CdioCommunication;
use App\Models\CdioHumanResource;
use App\Models\MidDecisionMaking;
use App\Models\MidIctInWorkplace;
use App\Models\TopDecisionMaking;
// use App\Models\MidDecisionMaking;
// use App\Models\MidIctInWorkplace;
use App\Models\TopIctInWorkplace;
use App\Models\CdioDecisionMaking;
use App\Models\CdioIctInWorkplace;
use App\Models\DeepDataGovernance;
use App\Models\DeepDataManagement;
use App\Models\OpChangeManagement;
use App\Models\CdioManagingQuality;
use App\Models\CdioSelfDevelopment;
use App\Models\DeepBrandManagement;
use App\Models\DeepDataEngineering;
use App\Models\DeepRealTimeInsight;
use App\Models\Govorganizationname;
use App\Models\MidCapacityBuilding;
use App\Models\MidChangeManagement;
use App\Models\OpDigitalGovernment;
use App\Models\OpQualityManagement;
use App\Models\TopCapacityBuilding;
use App\Models\TopChangeManagement;
use App\Models\CdioBuildingCapacity;
use App\Models\CdioChangeManagement;
use App\Models\CdioDriveTheAdoption;
use App\Models\DeepInteroperability;
use App\Models\MidDigitalGovernment;
use App\Models\MidProjectManagement;
use App\Models\MidQualityManagement;
use App\Models\OpDigitalCitizenship;
use App\Models\TopDigitalGovernment;
use App\Models\TopProjectManagement;
use App\Models\TopQualityManagement;
use App\Models\CdioDigitalGovernment;
use App\Models\CdioDigitalInitiative;
use App\Models\DeepCitizenEngagement;
use App\Models\DeepCitizenExperience;
use App\Models\Govorganizationdetail;
use App\Models\MidDigitalCitizenship;
use App\Models\OpPersonalDevelopment;
use App\Models\OpWorkplaceManagement;
use App\Models\TopDigitalCitizenship;
use App\DeepCitizenExperienceStrategy;
use App\Models\CdioDigitalCitizenship;
use App\Models\DeepBusinessManagement;
use App\Models\DeepDeliveryGovernance;
use App\Models\DeepEmergingTechnology;
use App\Models\DeepEmployeeEnablement;
use App\Models\DeepMarketIntelligence;
use App\Models\DeepOrganizationDesign;
use App\Models\MidPersonalDevelopment;
use App\Models\MidWorkplaceManagement;
use App\Models\TopPersonalDevelopment;
use App\Models\TopWorkplaceManagement;
use App\Models\CdioManagingStakeholder;
use App\Models\DeepEcoSystemManagement;
use App\Models\DeepStrategicManagement;
use App\Models\OpStakeholderManagement;
use Illuminate\Database\Eloquent\Model;
use App\Models\MidInformationManagement;
use App\Models\MidPerformanceManagement;
use App\Models\OpInformationManagements;
use App\Models\TopInformationManagement;
use App\Models\TopPerformanceManagement;
use App\Models\TopStakeholderManagement;
use App\Models\CdioDigitalTransformation;
use App\Models\CdioInformationManagement;
use App\Models\DeepAgileChangeManagement;
use App\Models\DeepOrganizationAndCulture;
use App\Models\DeepSmartProcessManagement;
use App\Models\DeepStandardsAndGovernance;
use App\Models\DeepTechnologyArchitecture;
use App\Models\TopOrganizationalLeadership;
use App\Models\CdioManagingEffectiveWorkplace;
use App\Models\DeepIntegratedServiceManagement;
use App\Models\CdioProjectAndProgrammeManagement;
use App\Models\CdioManagingTechnologicalIntervention;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Govofficial extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function govorganizationdetail()
    {
        return $this->belongsTo(Govorganizationdetail::class);
    }

    public function govorganizationname(){
        return $this->belongsTo(Govorganizationname::class);
    }

    public function operational(){
        return $this->hasOne(Operational::class);
    }

    public function opChangeManagement(){
        return $this->hasOne(OpChangeManagement::class);
    }

    public function opCollaboration(){
        return $this->hasOne(OpCollaboration::class);
    }

    public function opOrientation(){
        return $this->hasOne(OpOrientation::class);
    }

    public function opQualityManagement(){
        return $this->hasOne(OpQualityManagement::class);
    }

    public function opInitiative(){
        return $this->hasOne(OpInitiative::class);
    }

    public function opDigitalGovernment(){
        return $this->hasOne(OpDigitalGovernment::class);
    }

    public function opDigitalCitizenship(){
        return $this->hasOne(OpDigitalCitizenship::class);
    }

    public function opIctInWorkPlace(){
        return $this->hasOne(OpIctInWorkplace::class);
    }

    public function opInformationManagement(){
        return $this->hasOne(OpInformationManagements::class);
    }

    public function opIct(){
        return $this->hasOne(OpIct::class);
    }

    public function opCommunication(){
        return $this->hasOne(OpCommunication::class);
    }

    public function opPersonalDevelopment(){
        return $this->hasOne(OpPersonalDevelopment::class);
    }

    public function opStakeholderManagement(){
        return $this->hasOne(OpStakeholderManagement::class);
    }

    public function opTeamwork(){
        return $this->hasOne(OpTeamwork::class);
    }

    public function opWorkplaceManagement(){
        return $this->hasOne(OpWorkplaceManagement::class);
    }

    public function opManagement(){
        return $this->hasOne(OpManagement::class);
    }

    public function midIctInWorkplace(){
        return $this->hasOne(MidIctInWorkplace::class);
    }

    public function midInformationManagement(){
        return $this->hasOne(MidInformationManagement::class);
    }

    public function midDigitalCitizenship(){
        return $this->hasOne(MidDigitalCitizenship::class);
    }

    public function midIct(){
        return $this->hasOne(MidIct::class);
    }

    public function midChangeManagement(){
        return $this->hasOne(MidChangeManagement::class);
    }

    public function midCollaboration(){
        return $this->hasOne(MidCollaboration::class);
    }

    public function midInitiative(){
        return $this->hasOne(MidInitiative::class);
    }

    public function midOrientation(){
        return $this->hasOne(MidOrientation::class);
    }

    public function midProjectManagement(){
        return $this->hasOne(MidProjectManagement::class);
    }

    public function midQualityManagement(){
        return $this->hasOne(MidQualityManagement::class);
    }

    public function midDigitalGovernment(){
        return $this->hasOne(MidDigitalGovernment::class);
    }

    public function midCommunication(){
        return $this->hasOne(MidCommunication::class);
    }

    public function midWorkplaceManagement(){
        return $this->hasOne(MidWorkplaceManagement::class);
    }

    public function midDecisionMaking(){
        return $this->hasOne(MidDecisionMaking::class);
    }

    public function midCapacityBuilding(){
        return $this->hasOne(MidCapacityBuilding::class);
    }

    public function midStakeholder(){
        return $this->hasOne(MidStakeholder::class);
    }

    public function midPerformanceManagement(){
        return $this->hasOne(MidPerformanceManagement::class);
    }

    public function midTeamWork(){
        return $this->hasOne(MidTeamWork::class);
    }

    public function midPersonalDevelopment(){
        return $this->hasOne(MidPersonalDevelopment::class);
    }

    public function midManagement(){
        return $this->hasOne(MidManagement::class);
    }

    public function topIct(){
        return $this->hasOne(TopIct::class);
    }

    public function topIctInWorkplace(){
        return $this->hasOne(TopIctInWorkplace::class);
    }

    public function topInformationManagement(){
        return $this->hasOne(TopInformationManagement::class);
    }

    public function topDigitalCitizenship(){
        return $this->hasOne(TopDigitalCitizenship::class);
    }

    public function topDigitalGovernment(){
        return $this->hasOne(TopDigitalGovernment::class);
    }

    public function topProjectManagement(){
        return $this->hasOne(TopProjectManagement::class);
    }

    public function topChangeManagement(){
        return $this->hasOne(TopChangeManagement::class);
    }

    public function topCollaboration(){
        return $this->hasOne(TopCollaboration::class);
    }

    public function topOrientation(){
        return $this->hasOne(TopOrientation::class);
    }

    public function topQualityManagement(){
        return $this->hasOne(TopQualityManagement::class);
    }

    public function topLeadership(){
        return $this->hasOne(TopLeadership::class);
    }

    public function topManagement(){
        return $this->hasOne(TopManagement::class);
    }

    public function topOrganizationalLeadership(){
        return $this->hasOne(TopOrganizationalLeadership::class);
    }

    public function topCommunication(){
        return $this->hasOne(TopCommunication::class);
    }

    public function topWorkplaceManagement(){
        return $this->hasOne(TopWorkplaceManagement::class);
    }

    public function topDecisionMaking(){
        return $this->hasOne(TopDecisionMaking::class);
    }

    public function topCapacityBuilding(){
        return $this->hasOne(TopCapacityBuilding::class);
    }

    public function topStakeholder(){
        return $this->hasOne(TopStakeholderManagement::class);
    }

    public function topPerformanceManagement(){
        return $this->hasOne(TopPerformanceManagement::class);
    }

    public function topPersonalDevelopment(){
        return $this->hasOne(TopPersonalDevelopment::class);
    }

    public function topHumanResource(){
        return $this->hasOne(TopHumanResource::class);
    }

    public function deepTechnology(){
        return $this->hasOne(DeepTechnology::class);
    }

    public function deepEmergingTechnology(){
        return $this->hasOne(DeepEmergingTechnology::class);
    }

    public function deepDataManagement(){
        return $this->hasOne(DeepDataManagement::class);
    }

    public function deepDeliveryGovernance(){
        return $this->hasOne(DeepDeliveryGovernance::class);
    }

    public function deepConnectivity(){
        return $this->hasOne(DeepConnectivity::class);
    }

    public function deepSecurity(){
        return $this->hasOne(DeepSecurity::class);
    }

    public function deepTechnologyArchitecture(){
        return $this->hasOne(DeepTechnologyArchitecture::class);
    }

    public function deepDataGovernance(){
        return $this->hasOne(DeepDataGovernance::class);
    }

    public function deepDataEngineering(){
        return $this->hasOne(DeepDataEngineering::class);
    }

    public function deepInteroperability(){
        return $this->hasOne(DeepInteroperability::class);
    }

    public function deepApplication(){
        return $this->hasOne(DeepApplication::class);
    }

    public function cdioIct(){
        return $this->hasOne(CdioIct::class);
    }

    public function cdioIctInWorkplace(){
        return $this->hasOne(CdioIctInWorkplace::class);
    }

    public function cdioInformationManagement(){
        return $this->hasOne(CdioInformationManagement::class);
    }

    public function cdioManagingTechnologicalIntervention(){
        return $this->hasOne(CdioManagingTechnologicalIntervention::class);
    }

    public function cdioDigitalCitizenship(){
        return $this->hasOne(CdioDigitalCitizenship::class);
    }

    public function cdioChangeManagement(){
        return $this->hasOne(CdioChangeManagement::class);
    }

    public function cdioCollaboration(){
        return $this->hasOne(CdioCollaboration::class);
    }

    public function cdioDigitalGovernment(){
        return $this->hasOne(CdioDigitalGovernment::class);
    }

    public function cdioDigitalInitiative(){
        return $this->hasOne(CdioDigitalInitiative::class);
    }

    public function cdioDriveTheAdoption(){
        return $this->hasOne(CdioDriveTheAdoption::class);
    }

    public function cdioManagingQuality(){
        return $this->hasOne(CdioManagingQuality::class);
    }

    public function cdioOrientation(){
        return $this->hasOne(CdioOrientation::class);
    }

    public function cdioProjectAndProgrammeManagement(){
        return $this->hasOne(CdioProjectAndProgrammeManagement::class);
    }

    public function cdioBuildingCapacity(){
        return $this->hasOne(CdioBuildingCapacity::class);
    }

    public function cdioCommunication(){
        return $this->hasOne(CdioCommunication::class);
    }

    public function cdioDigitalTransformation(){
        return $this->hasOne(CdioDigitalTransformation::class);
    }

    public function cdioHumanResource(){
        return $this->hasOne(CdioHumanResource::class);
    }

    public function cdioManagement(){
        return $this->hasOne(CdioManagement::class);
    }

    public function cdioManagingEffectiveWorkplace(){
        return $this->hasOne(CdioManagingEffectiveWorkplace::class);
    }

    public function cdioStakeholder(){
        return $this->hasOne(CdioStakeholder::class);
    }

    public function cdioSelfDevelopment(){
        return $this->hasOne(CdioSelfDevelopment::class);
    }

    public function cdioTeamwork(){
        return $this->hasOne(CdioTeamwork::class);
    }

    public function cdioDecisionMaking(){
        return $this->hasOne(CdioDecisionMaking::class);
    }

    public function deepAgileChangeManagement(){
        return $this->hasOne(DeepAgileChangeManagement::class);
    }

    public function deepBrandManagement(){
        return $this->hasOne(DeepBrandManagement::class);
    }

    public function deepBusinessManagement(){
        return $this->hasOne(DeepBusinessManagement::class);
    }

    public function deepCitizenEngagement(){
        return $this->hasOne(DeepCitizenEngagement::class);
    }

    public function deepCitizenExperience(){
        return $this->hasOne(DeepCitizenExperience::class);
    }

    public function deepCitizenExperienceStrategy(){
        return $this->hasOne(DeepCitizenExperienceStrategy::class);
    }

    public function deepCitizenInsight(){
        return $this->hasOne(DeepCitizenInsight::class);
    }

    public function deepCitizenTrust(){
        return $this->hasOne(DeepCitizenTrust::class);
    }

    public function deepCustomer(){
        return $this->hasOne(DeepCustomer::class);
    }

    public function deepEcoSystemManagement(){
        return $this->hasOne(DeepEcoSystemManagement::class);
    }

    public function deepEmployeeEnablement(){
        return $this->hasOne(DeepEmployeeEnablement::class);
    }

    public function deepFinance(){
        return $this->hasOne(DeepFinance::class);
    }

    public function deepIntegratedServiceManagement(){
        return $this->hasOne(DeepIntegratedServiceManagement::class);
    }

    public function deepInvention(){
        return $this->hasOne(DeepInvention::class);
    }

    public function deepLeadership(){
        return $this->hasOne(DeepLeadership::class);
    }

    public function deepLevelOfSkill(){
        return $this->hasOne(DeepLevelOfSkill::class);
    }

    public function deepMarketIntelligence(){
        return $this->hasOne(DeepMarketIntelligence::class);
    }

    public function deepOperation(){
        return $this->hasOne(DeepOperation::class);
    }

    public function deepOrganizationAndCulture(){
        return $this->hasOne(DeepOrganizationAndCulture::class);
    }

    public function deepOrganizationDesign(){
        return $this->hasOne(DeepOrganizationDesign::class);
    }

    public function deepPolicy(){
        return $this->hasOne(DeepPolicy::class);
    }

    public function deepRealTimeInsight(){
        return $this->hasOne(DeepRealTimeInsight::class);
    }

    public function deepSmartProcessManagement(){
        return $this->hasOne(DeepSmartProcessManagement::class);
    }

    public function deepStandardsAndGovernance(){
        return $this->hasOne(DeepStandardsAndGovernance::class);
    }

    public function deepStrategicManagement(){
        return $this->hasOne(DeepStrategicManagement::class);
    }

    public function deepStrategy(){
        return $this->hasOne(DeepStrategy::class);
    }


}

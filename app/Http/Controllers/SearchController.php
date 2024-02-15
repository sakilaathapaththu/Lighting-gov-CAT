<?php

namespace App\Http\Controllers;
use App\Models\Govorganizationname;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $query = $request->get('query');
          $govnames = Govorganizationname::where('gov_org_name', 'LIKE', '%'. $query. '%')->get();

          foreach($govnames as $govname){
            if($govname != null){

             $response[] = array("value"=>$govname->id,"label"=>$govname->gov_org_name);
                }
            }
          return response()->json($response);

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompetencyChartController extends Controller
{
    public function opDigitalGovChart()
    {//
        // Retrieve the customer data for the authenticated user
    $opDigitalGov = Auth::user()->govofficial->opDigitalGovernment;

    // If there is no customer data for the user, you can handle it accordingly
    if (!$opDigitalGov) {
        // Handle the case where the authenticated user doesn't have a related "customer"
        return redirect()->route('home')->with('error', 'No customer data found.');
    }

    // Organize the customer data for Google Charts
    $result = [
        ['Category', 'Value'],
        ['Change Management', (int) $opDigitalGov->op_change_management],
        ['Collaboration and Partnership', (int) $opDigitalGov->op_collaboration],
        ['Results Orientation', (int) $opDigitalGov->op_orientation],
        ['Quality Management', (int) $opDigitalGov->op_quality_management],
        ['Execute Digital Government Initiatives', (int) $opDigitalGov->op_initiative],
    ];

    // Pass the organized data to the view
    return view('Results.customerresults', compact('result'));

    }
}

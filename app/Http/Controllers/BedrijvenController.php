<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Bedrijven;
use App\Models\Irrelevant;
use App\Models\PlanLijst;
use Illuminate\Support\Facades\DB;
use Exception;

class BedrijvenController extends Controller
{
    public function index()
    {
        return(Bedrijven::All());
    }

    public function store(Request $request)
    {
        try{
            $irrelevant = new Irrelevant;
            $irrelevant->mil_locationname = $request->mil_locationname;
            $irrelevant->reden = $request->reden;
            $irrelevant->opmerking = $request->opmerking;
            $irrelevant->save();

            Bedrijven::where("mil_locationname", $request->mil_locationname)->delete();

            return "accepted";
        }catch(Exception $e){
            return $e;
        }


    }

    public function update(Request $request)
    {
        try{
            $planLijst = new PlanLijst();
            $planLijst->bedrijfId = $request->id;
            $planLijst->reden = $request->reden;
            $planLijst->opmerking = $request->opmerking;
            $planLijst->save();

            if(Bedrijven::find($request->id)->status == 'onbekend'){
                DB::table("alle_bedrijven")->where("id", $request->id)->update(["status" => 'bekend']);
            }

            return "accepted";
        }catch(Exception $e){
            return $e;
        }
    }
}

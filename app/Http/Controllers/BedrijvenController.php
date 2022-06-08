<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Bedrijven;

class BedrijvenController extends Controller
{
    public function index()
    {
        return(Bedrijven::All());
    }
}

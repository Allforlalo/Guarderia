<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro;
use App\Models\Ninio;
use App\Models\Familiar;

class HomeController extends Controller
{
    public function index()
    {
        $centros = Centro::all();
        return view('home', compact('centros'));
    }
}

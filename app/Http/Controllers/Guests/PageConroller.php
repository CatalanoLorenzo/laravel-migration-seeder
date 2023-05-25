<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PageConroller extends Controller
{
    public function index()
    {
        $trains =Train::all();
        return view('welcome',compact('trains'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id')->paginate(15);
        return view('services.index', compact('services'));
    }
}

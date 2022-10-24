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
        $viewData = [];
        $viewData["title"] = "Página de Administración - Laboratorio";
        $viewData["services"] = Service::orderBy('id')->paginate(15);
        return view('admin.service.index')->with('viewData', $viewData);
        
    }
}

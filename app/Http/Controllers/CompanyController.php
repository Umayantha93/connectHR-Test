<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        $companies = Company::withCount('locations')->get();

        return view('index', compact('companies'));
    }
}

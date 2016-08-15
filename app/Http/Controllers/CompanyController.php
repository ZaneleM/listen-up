<?php

namespace ListenUp\Http\Controllers;

use Illuminate\Http\Request;

use ListenUp\Http\Requests;

class CompanyController extends Controller
{
    public function index(){
      return view('company.index');
    }

    public function store(Requests\AddCompanyRequest $request){
      $company = \ListenUp\Company::create($request->input());

      return $company;
    }

    public function companies(){
      return \ListenUp\Company::all();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companies = Company::get();

        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $company = Company::create($request->input());
        return redirect()->route('companies.index');
    }

    public function show(Company $company)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $company->update($request->input());
        return redirect()->route('companies.index');
    }

    public function destroy(Company $company)
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company->delete();

        return redirect()->route('companies.index');
    }
}
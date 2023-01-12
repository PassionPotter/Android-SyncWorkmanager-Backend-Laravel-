<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\SubContractor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class SubContractorController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('subcontractor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $subcontractors = SubContractor::get();
        return view('subcontractors.index', compact('subcontractors'));
    }

    public function create()
    {
        abort_if(Gate::denies('subcontractor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('subcontractors.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $subcontractor = SubContractor::create($request->input());
        return redirect()->route('subcontractors.index');
    }

    public function show(SubContractor $subcontractor)
    {
        abort_if(Gate::denies('subcontractor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('subcontractors.show', compact('subcontractor'));
    }

    public function edit(SubContractor $subcontractor)
    {
        abort_if(Gate::denies('subcontractor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('subcontractors.edit', compact('subcontractor'));
    }

    public function update(Request $request, SubContractor $subcontractor)
    {
        $subcontractor->update($request->input());
        return redirect()->route('subcontractors.index');
    }

    public function destroy(SubContractor $subcontractor)
    {
        abort_if(Gate::denies('subcontractor_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subcontractor->delete();

        return redirect()->route('subcontractors.index');
    }
}
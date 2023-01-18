<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Phase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class PhaseController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('phase_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = Phase::get();

        return view('phase.index', compact('types'));
    }

    public function create()
    {
        abort_if(Gate::denies('phase_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('phase.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $type = Phase::create($request->input());
        return redirect()->route('phase.index');
    }

    public function show(Phase $phase)
    {
        abort_if(Gate::denies('phase_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('phase.show', compact('phase'));
    }

    public function edit(Phase $phase)
    {
        abort_if(Gate::denies('phase_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('phase.edit', compact('phase'));
    }

    public function update(Request $request, Phase $phase)
    {
        $phase->update($request->input());
        return redirect()->route('phase.index');
    }

    public function destroy(Phase $phase)
    {
        abort_if(Gate::denies('phase_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $phase->delete();

        return redirect()->route('phase.index');
    }
}
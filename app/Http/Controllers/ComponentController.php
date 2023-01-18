<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ComponentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('component_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = Component::get();

        return view('component.index', compact('types'));
    }

    public function create()
    {
        abort_if(Gate::denies('component_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('component.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $type = Component::create($request->input());
        return redirect()->route('component.index');
    }

    public function show(Component $component)
    {
        abort_if(Gate::denies('component_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('component.show', compact('component'));
    }

    public function edit(Component $component)
    {
        abort_if(Gate::denies('component_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('component.edit', compact('component'));
    }

    public function update(Request $request, Component $component)
    {
        $component->update($request->input());
        return redirect()->route('component.index');
    }

    public function destroy(Component $component)
    {
        abort_if(Gate::denies('component_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $component->delete();

        return redirect()->route('component.index');
    }
}
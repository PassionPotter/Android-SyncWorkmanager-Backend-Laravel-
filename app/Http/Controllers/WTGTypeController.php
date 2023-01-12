<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\WTGType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class WTGTypeController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('wtgtype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $types = WTGType::get();

        return view('wtgtype.index', compact('types'));
    }

    public function create()
    {
        abort_if(Gate::denies('wtgtype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('wtgtype.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $type = WTGType::create($request->input());
        return redirect()->route('wtgtype.index');
    }

    public function show(WTGType $wtgtype)
    {
        abort_if(Gate::denies('wtgtype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('wtgtype.show', compact('wtgtype'));
    }

    public function edit(WTGType $wtgtype)
    {
        abort_if(Gate::denies('wtgtype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('wtgtype.edit', compact('wtgtype'));
    }

    public function update(Request $request, WTGType $wtgtype)
    {
        $wtgtype->update($request->input());
        return redirect()->route('wtgtype.index');
    }

    public function destroy(WTGType $wtgtype)
    {
        abort_if(Gate::denies('wtgtype_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $wtgtype->delete();

        return redirect()->route('wtgtype.index');
    }
}
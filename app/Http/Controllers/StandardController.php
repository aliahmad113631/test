<?php

namespace App\Http\Controllers;

use App\Models\Standard;
use Illuminate\Http\Request;

/**
 * Class StandardController
 * @package App\Http\Controllers
 */
class StandardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $standards = Standard::paginate();

        return view('standard.index', compact('standards'))
            ->with('i', (request()->input('page', 1) - 1) * $standards->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $standard = new Standard();
        return view('standard.create', compact('standard'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Standard::$rules);

        $standard = Standard::create($request->all());

        return redirect()->route('standards.index')
            ->with('success', 'Standard created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $standard = Standard::find($id);

        return view('standard.show', compact('standard'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $standard = Standard::find($id);

        return view('standard.edit', compact('standard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Standard $standard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Standard $standard)
    {
        request()->validate(Standard::$rules);

        $standard->update($request->all());

        return redirect()->route('standards.index')
            ->with('success', 'Standard updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $standard = Standard::find($id)->delete();

        return redirect()->route('standards.index')
            ->with('success', 'Standard deleted successfully');
    }
}

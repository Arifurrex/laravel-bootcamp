<?php

namespace App\Http\Controllers;

use App\Models\laravelApp;
use Illuminate\Http\RedirectResponse as HttpRedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;


class LaravelAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('laravelapp.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):HttpRedirectResponseonse
    {
        $validated = $request->validate([
            'massage' =>'required|string|max:255',
        ]);
        $request->user()->laravelapp()->create($validated);
        return redirect(route('laravelApp.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(laravelApp $laravelApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(laravelApp $laravelApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, laravelApp $laravelApp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(laravelApp $laravelApp)
    {
        //
    }
}

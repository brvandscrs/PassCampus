<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\View\View;

class ContratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        return view('contrat.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Contrat create page";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Store new contrat";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Showing contrat with ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Edit contrat with ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update contrat with ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Delete contrat with ID: " . $id;
    }
}

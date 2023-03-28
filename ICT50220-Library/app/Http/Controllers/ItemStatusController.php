<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemStatusRequest;
use App\Http\Requests\UpdateItemStatusRequest;
use App\Models\ItemStatus;

class ItemStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreItemStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ItemStatus $itemStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ItemStatus $itemStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemStatusRequest $request, ItemStatus $itemStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ItemStatus $itemStatus)
    {
        //
    }
}

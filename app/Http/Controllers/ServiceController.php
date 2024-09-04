<?php

namespace App\Http\Controllers;
use App\Models\ServiceModel;
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $items = ServiceModel::all(); 

        return view('admin.service')->with([
            'items' => $items
        ]);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $items = ServiceModel::all(); 

        return view('admin.service-store')->with([
            'item' => $items
        ]);   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        //
        $data = $request->all();
        $data['images'] = $request->file('images')->store(
            'img', 'public'
        );

        ServiceModel::create($data);

        return back()->with('success', 'Image uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $items = ServiceModel::findOrFail($id); 

        return view('admin.editservice')->with([
            'item' => $items
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, $id)
    {
        //
        $service = ServiceModel::findOrFail($id);

        $data = $request->all();

        // Check if a new image is uploaded
        if ($request->hasFile('images')) {
            // Delete the old image if it exists
            if ($service->images && Storage::disk('public')->exists($service->images)) {
                Storage::disk('public')->delete($service->images);
            }

            // Store the new image in the 'img' directory within the 'public' disk
            $data['images'] = $request->file('images')->store('img', 'public');
        }

        // Update the banner with the new data
        $service->update($data);

        return back()->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

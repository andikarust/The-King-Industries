<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     */

    public function store(Request $request)
    {
        
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     */
    public function edit(Service $service)
    {
        Route::get('/services/{id}', function (varchar $id) {
            return 'Service ' . $id;
        });
    }

    /**
     * Update the specified resource in storage.
     * 
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'service_name' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $service->update($input);

        return redirect('/services')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('/services')->with('message', 'Data Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SavePackageRequest;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $packages = Package::latest('updated_at','ASC')->get();
        $countries = Country::all();
        return view('package/package', compact('packages','countries'));
    }
    public function home()
    {
        $packages = Package::latest('updated_at','ASC')->get();
        $countries = Country::all();
        return view('viajesPack', compact('packages','countries'));
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = Package::latest('updated_at','ASC')->get();
        return view('package/packagetable', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SavePackageRequest $request)
    {
        $package = Package::create($request->validated());
        $package_update = Package::find($package->id);
        $package_update->documento = $request->file('documento')->store('public'); 
        $package_update->save();
       return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package,Country $country)
    {
        return view('package/show', [
            'package' => $package,
            'country' => $country
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package, Country $country)
    {
        return view('package/edit', [
            'package' => $package,
            'country' => $country
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(SavePackageRequest $request)
    {
        $package->update($request->validated());
        $package_update = Package::find($package->id);
        $package_update->documento = $request->file('documento')->store('public'); 
        $package_update->save();        
        return redirect()->route('package.show', $package);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        
        return redirect()->route('package.index');
    }
}

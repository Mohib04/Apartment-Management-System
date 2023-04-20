<?php

namespace App\Http\Controllers\Manager;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Manager\Profile;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manager.profile.index');
        //return "hello";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        try {
            $data = $request->validated();
            Profile::create($data);
            return redirect('/profile')->with('massage', 'Data added successfully');
        } catch (\Exception $ex) {
            return redirect('/profile')->with('massage', 'Someting want wrong' . $ex);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}

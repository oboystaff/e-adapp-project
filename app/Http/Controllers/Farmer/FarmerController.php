<?php

namespace App\Http\Controllers\Farmer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Farmer\CreateFarmerRequest;
use App\Http\Requests\Farmer\UpdateFarmerRequest;
use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $farmers = Farmer::orderBy('created_at', 'DESC')->get();

        return view('farmers.index')->with([
            'farmers' => $farmers
        ]);
    }

    public function create()
    {
        return view('farmers.create');
    }

    public function store(CreateFarmerRequest $request)
    {
        try {

            if ($request->hasFile('image')) {
                $fingerprint_image = $request->file('image');
                $fingerprint_image_name = Farmer::generateFingerPrintFileName();
                $fingerprint_image_name = $fingerprint_image_name . '.' . $fingerprint_image->getClientOriginalExtension();
                $fingerprintDestinationPath = public_path('/assets/images/pictures');
                $fingerprint_image->move($fingerprintDestinationPath, $fingerprint_image_name);
            }

            Farmer::create($request->validated() + [
                'image' => $fingerprint_image_name ?? null,
            ]);

            return redirect()->route('farmers.index')->with('status', 'Farmer created successfully.');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function show(Farmer $farmer)
    {
        return view('farmers.show')->with([
            'farmer' => $farmer
        ]);
    }

    public function edit(Farmer $farmer)
    {
        return view('farmers.edit')->with([
            'farmer' => $farmer
        ]);
    }

    public function update(UpdateFarmerRequest $request, Farmer $farmer)
    {
        try {
            $farmer->update($request->validated());

            return redirect()->route('farmers.index')->with('status', 'Farmer updated successfully.');
        } catch (\Exception $ex) {
        }
    }
}

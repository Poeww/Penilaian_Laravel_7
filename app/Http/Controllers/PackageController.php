<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $data = Package::all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required|string|max:150',
            'description' => 'required|string',
            'location' => 'required|string|max:150',
            'duration' => 'required|string|max:50',
            'price' => 'required|numeric',
            'image' => 'nullable|string'
        ]);

        $package = Package::create($request->all());
        return response()->json(['message' => 'Package created', 'data' => $package], 201);
    }

    public function show($id)
    {
        $package = Package::find($id);
        if (!$package) {
            return response()->json(['message' => 'Package not found'], 404);
        }
        return response()->json($package);
    }

    public function update(Request $request, $id)
    {
        $package = Package::find($id);
        if (!$package) {
            return response()->json(['message' => 'Package not found'], 404);
        }

        $package->update($request->all());
        return response()->json(['message' => 'Package updated', 'data' => $package]);
    }

    public function destroy($id)
    {
        $package = Package::find($id);
        if (!$package) {
            return response()->json(['message' => 'Package not found'], 404);
        }

        $package->delete();
        return response()->json(['message' => 'Package deleted']);
    }

    public function view()
    {
        $data = Package::all();
        return view('packages', ['packages' => $data]);
    }
}

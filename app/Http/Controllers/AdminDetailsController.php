<?php

namespace App\Http\Controllers;

use App\Models\AdminDetail;
use Illuminate\Http\Request;

class AdminDetailsController extends Controller
{
    public function index()
    {
        $adminDetails = AdminDetail::all();
        return view('backend.adminDetails.index', compact('adminDetails'));
    }

    public function edit(Request $request)
    {
        $adminDetails = AdminDetail::first();
        return view('backend.adminDetails.edit', compact('adminDetails'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'phone' => 'required|string|max:255',
            'support' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
        ]);

        $adminDetails = AdminDetail::first();
        if (!$adminDetails) {
            $adminDetails = new AdminDetail();
        }

        $adminDetails->phone = $request->input('phone');
        $adminDetails->support = $request->input('support');
        $adminDetails->email = $request->input('email');
        $adminDetails->address = $request->input('address');
        $adminDetails->save();

        return redirect()->route('admin.details')->with('success', 'Admin details updated successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Login related
    public function showLoginForm()
    {
        return view('admin.admin_login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.admin_dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }

    // Dashboard
    public function dashboard()
    {
        return view('admin.admin_dashboard');
    }

    // Partner management
    public function partnerIndex()
    {
        $partners = Partner::all();
        return view('admin.admin_partner', compact('partners'));
    }

    public function partnerCreate()
    {
        return view('admin.partner.create');
    }

    public function partnerStore(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $path = null;
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('partners', 'public');
        }

        Partner::create([
            'nama' => $request->nama,
            'logo' => $path,
        ]);

        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil ditambahkan.');
    }

    public function partnerEdit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner.edit', compact('partner'));
    }

    public function partnerUpdate(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('logo')) {
            if ($partner->logo) {
                Storage::disk('public')->delete($partner->logo);
            }
            $partner->logo = $request->file('logo')->store('partners', 'public');
        }

        $partner->nama = $request->nama;
        $partner->save();

        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil diperbarui.');
    }

    public function partnerDestroy($id)
    {
        $partner = Partner::findOrFail($id);
        if ($partner->logo) {
            Storage::disk('public')->delete($partner->logo);
        }
        $partner->delete();

        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil dihapus.');
    }
}

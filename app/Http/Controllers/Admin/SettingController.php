<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::first();
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'about_content' => 'nullable|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'phone' => 'required|string|max:30',
            'whatsapp' => 'required|string|max:30',
            'email' => 'required|email|max:255',
            'localisation' => 'required|string|max:255',
        ]);

        $setting = Setting::first();
        if (!$setting) {
            $setting = new Setting();
        }

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('settings', 'public');
        }

        $setting->fill($data)->save();

        return redirect()->route('admin.settings.edit')->with('success', 'Settings updated successfully');
    }
}

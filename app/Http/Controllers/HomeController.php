<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
      

        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function submitContact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string'
        ]);

        // store message
        Contact::create($data);

        // optionally: send email if mail configured (not required here)

        return redirect()->route('contact')->with('success', 'رسالتك تم إرسالها بنجاح. سنرد عليك قريبا.');
    }

    public function services()
    {
        $services = Service::where('is_active', true)
            ->orderBy('order')
            ->get();

        return view('services', compact('services'));
    }

    public function portfolio()
    {
        $projects = Project::latest()->paginate(9);
        return view('portfolio', compact('projects'));
    }

    public function showService(Service $service)
    {
        $otherServices = Service::where('id', '!=', $service->id)->take(3)->get();
        return view('front.service-show', compact('service', 'otherServices'));
    }
}

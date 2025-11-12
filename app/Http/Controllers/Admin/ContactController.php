<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(20);
        return view('admin.pages.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.pages.contacts.show', compact('contact'));
    }
    public function store(Request $request)
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

        return redirect()->back()->with('success', 'merci pour votre message. Nous vous répondrons bientôt.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact supprimé avec succès');
    }
}

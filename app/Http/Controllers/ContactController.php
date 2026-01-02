<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('backend.contacts.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:255',
            'msg_subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'msg_subject' => $request->msg_subject,
                'message' => $request->message,
            ]);

            return redirect()->route('contact')->with('success', 'Your message has been sent successfully! We will get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Something went wrong. Please try again later.');
        }
    }

    public function destroy($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->delete();

            return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('contacts.index')->with('error', 'Error deleting contact: ' . $e->getMessage());
        }
    }

    public function bulkDelete(Request $request)
    {
        try {
            $ids = $request->input('ids', []);
            
            if (empty($ids)) {
                return response()->json(['success' => false, 'message' => 'No contacts selected.']);
            }

            Contact::whereIn('id', $ids)->delete();

            return response()->json(['success' => true, 'message' => 'Selected contacts deleted successfully.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error deleting contacts: ' . $e->getMessage()]);
        }
    }
}

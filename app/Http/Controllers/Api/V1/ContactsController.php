<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = ContactResource::collection(Contact::all());
        return response()->json($contacts);
    }

    public function store(StoreContactRequest $request)
    {
        $contacts = Contact::create($request->validated());
        return response()->json([
           'status'=>'success',
           'data'=> $contacts,
        ], 200);
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {

        $contact->update($request->validated());
        return response()->json([
           'status'=>'success',
           'data'=>$contact,
        ], 200);
    }

    public function show(Contact $contact)
    {
        $contact = new ContactResource($contact);
        return response()->json($contact);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json('Contact Deleted Successfully');
    }
}

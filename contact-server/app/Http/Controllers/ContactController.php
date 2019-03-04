<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function getAll()
    {
        return response()->json(Contact::all());
    }

    public function getChunk(Request $request)
    {
        $this->validate($request, [
            'offset' => 'required|integer',
            'limit' => 'required|integer'
        ]);
    
        $offset = $request->input('offset');
        $limit = $request->input('limit');

        return response()->json(
            Contact::skip($offset)
                        ->take($limit)
                        ->get()
        );
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|regex:/[0-9]{10}/',
            'address' => 'required'
        ]);

        $author = Contact::create($request->all());

        return response()->json($author, 201);
    }
}
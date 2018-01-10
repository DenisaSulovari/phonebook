<?php

namespace Dena\Phonebook;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = ContactsModel::latest('updated_at')->get();

        return view('phonebook::index', compact('contacts'));
    }

    public function show($id)
    {
        $contact = ContactsModel::findOrFail($id);

        return view('phonebook::show', compact('contact'));
    }

    public function create()
    {
        return view('phonebook::create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'type' => 'required',
            'number' => 'required',

        ]);

        $input = $request->all();

        ContactsModel::create($input);

        Session::flash('flash_message', 'Contact successfully added!');

        return redirect()->route('contacts.index');
    }

    public function edit($id)
    {
        $contact = ContactsModel::findOrFail($id);

        return view('phonebook::edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactsModel::findOrFail($id);

        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'type' => 'required',
            'number' => 'required',

        ]);

        $input = $request->all();

        $contact->fill($input)->save();

        Session::flash('flash_message', 'Contact successfully modified!');

        return redirect()->route('contacts.index');
    }

    public function destroy($id)
    {
        $contact = ContactsModel::findOrFail($id);

        $contact->delete();

        Session::flash('flash_message', 'Contact  successfully deleted!');

        return redirect()->route('contacts.index');
    }
}

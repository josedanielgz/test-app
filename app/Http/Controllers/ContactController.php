<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();

        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'primer_nombre' => 'required',
            'primer_apellido' => 'required',
            'correo_electronico' => 'required'
        ]);

        $contact = new Contact([
            'primer_nombre' => $request->get('primer_nombre'),
            'primer_apellido' => $request->get('primer_apellido'),
            'cargo' => $request->get('cargo'),
            'correo_electronico' => $request->get('correo_electronico'),
            'telefono' => $request->get('telefono'),
            'direccion' => $request->get('direccion')
        ]);

        $contact->save();
        return redirect('/contacts')->with('success', 'Contacto almacenado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'primer_nombre' => 'required',
            'primer_apellido' => 'required',
            'correo_electronico' => 'required'
        ]);

        $contact = Contact::find($id);

        $contact->primer_nombre = $request->get('primer_nombre');
        $contact->primer_apellido = $request->get('primer_apellido');
        $contact->cargo = $request->get('cargo');
        $contact->correo_electronico = $request->get('correo_electronico');
        $contact->telefono = $request->get('telefono');
        $contact->direccion = $request->get('direccion');
        $contact->save();

        $contact->save();

        return redirect('/contacts')->with('success', 'Contacto actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/contacts')->with('success', 'Contacto eliminado.');
    }
}

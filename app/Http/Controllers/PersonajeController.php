<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use Illuminate\Http\Request;

/**
 * Class PersonajeController
 * @package App\Http\Controllers
 */
class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personajes = Personaje::paginate();

        return view('personaje.index', compact('personajes'))
            ->with('i', (request()->input('page', 1) - 1) * $personajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personaje = new Personaje();
        return view('personaje.create', compact('personaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Personaje::$rules);

        $personaje = Personaje::create($request->all());

        return redirect()->route('personajes.index')
            ->with('success', 'Personaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personaje = Personaje::find($id);

        return view('personaje.show', compact('personaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personaje = Personaje::find($id);

        return view('personaje.edit', compact('personaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Personaje $personaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personaje $personaje)
    {
        request()->validate(Personaje::$rules);

        $personaje->update($request->all());

        return redirect()->route('personajes.index')
            ->with('success', 'Personaje updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $personaje = Personaje::find($id)->delete();

        return redirect()->route('personajes.index')
            ->with('success', 'Personaje deleted successfully');
    }
}

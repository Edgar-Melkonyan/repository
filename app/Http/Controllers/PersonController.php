<?php

namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Support\Facades\View; 
use Validator;
use Illuminate\Support\Facades\Input;
use Session;
use App\Http\Requests\StorePerson;
use App\Http\Requests\UpdatePerson;
use App\Contracts\PersonServiceInterface;


class PersonController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $persons = Person::all();
        return view('persons.index')
            ->with('persons', $persons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('persons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StorePerson $storePerson , PersonServiceInterface $personService)
    {
        $personService->createPerson(Input::all());
        Session::flash('message', 'Successfully created person!');
        return redirect('persons');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $person = Person::find($id);
        return View::make('persons.show')
            ->with('person', $person);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $person = Person::find($id);
        return View::make('persons.edit')
            ->with('person', $person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UpdatePerson $updatePerson ,$id , PersonServiceInterface $personService)
    {
        $personService->updatePerson($id, Input::all());
        Session::flash('message', 'Successfully updated person!');
        return redirect('persons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id , PersonServiceInterface $personService)
    {
        $personService->deletePerson($id);
        Session::flash('message', 'Successfully deleted the person!');
        return redirect('persons');
    }
}
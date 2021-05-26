<?php

namespace App\Http\Controllers;

use App\Models\Individual;
use Illuminate\Http\Request;

class IndividualsController extends Controller
{
    public function index()
    {
        $individuals = Individual::paginate(5);
        return view('individuals.index', ['individuals' => $individuals]);
    }
    public function create()
    {
        return view('individuals.create');
    }
    public function store()
    {
        Individual::create($this->validateIndividual());
        return redirect('/individuals')->with('success', 'ფიზიკური პირი წარმატებით დამატებულია');
    }

    public function show(Individual $individual)
    {
        return view('individuals.show', ['individual' => $individual]);
    }

    public function edit(Individual $individual)
    {
        return view('individuals.edit', compact('individual'));
    }
    public function update(Individual $individual)
    {
        $individual->update($this->validateIndividual());
        return redirect('/individuals')->with('success', 'ფიზიკური პირი წარმატებით დარედაქტირებულია');
    }
    public function destroy(Individual $individual)
    {
        $individual->delete();
        return redirect('/')->with('success', 'ფიზიკური პირი წარმატებით წაიშალა');
    }

    public function search(Request $request)
    {
        $filter = $request->input('search');
        $individuals = Individual::select('*')
            ->where('firstname', 'LIKE', '%' . $filter . '%')
            ->orWhere('lastname', 'LIKE', '%' . $filter . '%')
            ->orWhere('personal_number', 'LIKE', '%' . $filter . '%')
            ->paginate(5);

        return view('individuals.index',  ['individuals' => $individuals]);
    }
    public function validateIndividual()
    {
        $rules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'personal_number' => 'required|digits:11',
            'birth_date' => 'required|date|before:today',
            'city' => 'required|string',
            'phone_number_1' => 'required|digits:9',
            'phone_number_2' => 'nullable|digits:9'
        ];
        $customMessages = [
            'digits' => 'შეიყვანეთ :digits ციფრი',
            'required' => 'შეავსეთ ველი',
        ];
        return request()->validate($rules, $customMessages);
    }
}

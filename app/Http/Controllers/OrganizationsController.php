<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Individual;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationsController extends Controller
{
    public function index()
    {
        $organizations = Organization::paginate(5);
        return view('organizations.index', ['organizations' => $organizations]);
    }

    public function create()
    {
        return view('organizations.create',[
            'individuals'=>Individual::all()
        ]);
    }

    public function store()
    {
        $organization = new Organization($this->validateOrganization());
        $organization->save();
        $organization->individuals()->attach(request('individuals'));

        return redirect('/organizations')->with('success', 'ორგანიზაცია წარმატებით დამატებულია');
    }
    public function edit(Organization $organization)
    {
        $individuals = Individual::all();
        return view('organizations.edit', compact('organization', 'individuals'));
    }
    public function update(Organization $organization)
    {
        $organization->update($this->validateOrganization());
        $organization->individuals()->sync(request('individuals'));
        return redirect('/organizations')->with('success', 'ორგანიზაცია წარმატებით დარედაქტირებულია');
    }

    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect('/organizations')->with('success', 'ორგანიზაცია წარმატებით წაიშალა');
    }

    public function search(Request $request)
    {
        $filter = $request->input('search');
        $organizations = Organization::select('*')
            ->where('name', 'LIKE', '%' . $filter . '%')
            ->orWhere('address', 'LIKE', '%' . $filter . '%')
            ->orWhere('activities', 'LIKE', '%' . $filter . '%')
            ->paginate(5);

        return view('organizations.index',  ['organizations' => $organizations]);
    }
    public function validateOrganization()
    {
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'activities' => 'required',
        ];
        $customMessages = [
            'required' => 'შეავსეთ ველი',
        ];
        return request()->validate($rules, $customMessages);
    }
}

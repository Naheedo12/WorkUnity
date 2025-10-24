<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('home', compact('employees'));
    }

    public function create()
    {
        return view('ajouter');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:employees',
            'poste' => 'required',
        ]);

        Employee::create($request->all());

        return redirect()->route('Home')->with('success', 'Employé ajouté avec succès!');
    }

    public function show(Employee $employee)
    {
        return view('details', compact('employee'));
    }

    public function edit(Employee $employee)
    {
        return view('modifier', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'poste' => 'required',
        ]);

        $employee->update($request->all());

        return redirect()->route('Home')->with('success', 'Employé modifié avec succès!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('Home')->with('success', 'Employé supprimé avec succès!');
    }
}

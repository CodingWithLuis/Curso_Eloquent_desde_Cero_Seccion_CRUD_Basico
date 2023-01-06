<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    public function index(): View
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    public function create(): View
    {
        return view('employees.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'age' => 'required|integer',
            'hire_date' => 'date',
            'is_active' => 'nullable|boolean'
        ]);

        Employee::create([
            'name' => $data['name'],
            'salary' => $data['salary'],
            'age' => $data['age'],
            'hire_date' => $data['hire_date'],
            'is_active' => $data['is_active'],
        ]);

        return redirect()->route('employees.index');
    }

    public function edit(Employee $employee): View
    {
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'salary' => 'required|numeric',
            'age' => 'required|integer',
            'hire_date' => 'date',
            'is_active' => 'nullable|boolean'
        ]);

        if (empty($request->input('is_active'))) {
            $is_active = false;
        } else {
            $is_active = true;
        }

        $employee->update([
            'name' => $data['name'],
            'salary' => $data['salary'],
            'age' => $data['age'],
            'hire_date' => $data['hire_date'],
            'is_active' => $is_active,
        ]);

        return redirect()->route('employees.index');
    }
}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listado de Empleados</div>

                <div class="card-body">

                    <a href="{{ route('employees.create') }}" class="btn btn-success mb-3">Nuevo Empleado</a>

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Empleado</th>
                                <th>Fecha Contratacion</th>
                                <th>Salario</th>
                                <th>Edad</th>
                                <th>Esta activo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                            <tr>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->hire_date }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td>{{ $employee->age }}</td>
                                <td>{{ $employee->is_active ? 'SI' : 'NO' }}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

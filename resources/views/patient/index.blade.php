@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('patient.partials.error')
            @include('patient.partials.success')
            <div class="card">
                <div class="card-header">
                    <h3>Pacientes</h3>
                    <a href="{{ route('patients.create') }}" class="btn btn-primary float-right">Registrar paciente</a>
                </div>
                <div class="card-body">
                    <table id="patients-table" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.Exp</th>
                                <th>Ap.Paterno</th>
                                <th>Ap.Materno</th>
                                <th>Nombre(s)</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#patients-table').DataTable({
            processing: true,
            serverSider: true,
            ajax: '{!! url('patientsdatatable') !!}',
            pageLength: 10,
            lengthMenu: [5, 10, 25, 50, 75, 100],
            defaultLengthMenu: 5,
            language: {
                url: 'https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json',
            },
            columns: [
                {data: 'file_number', name: 'file_number'},
                {data: 'first_surname', name: 'first_surname'},
                {data: 'second_surname', name: 'second_surname'},
                {data: 'first_name', name: 'first_name'},
                {data: 'action_buttons', orderable: false, searchable: false},
            ],
        });
    } );

</script>
@endpush
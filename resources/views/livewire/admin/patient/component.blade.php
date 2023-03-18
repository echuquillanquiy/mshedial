<div>
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $pageTitle }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">{{ $componentName }}</a></li>
            </ol>
        </nav>
            <div class="dropdown filter custom-dropdown-icon">
                <a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#theModal"><i class="fas fa-user-plus"></i> Nuevo Paciente</a>
            </div>
    </div>

    <div class="row">
        <div class="w-100 mt-3 col-xl-11">
            <input type="text" wire:model="search" class="w-100 form-control product-search br-30" id="input-search" placeholder="Buscar..." >
        </div>

        <div class="w-100 col-xl-1 mt-3">
            <select class="form-control" wire:model="pageSelected">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
        </div>
    </div>

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-one">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>DNI</th>
                            <th>NOMBRES</th>
                            <th>APELLIDOS</th>
                            <th>CELULAR</th>
                            <th>AUTOGENERADO</th>
                            <th>ESTADO</th>
                            <th>FECHA DE REGISTRO</th>
                            <th class="text-center">Opciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patients as $patient)
                            <tr>
                                <td class="text-center">{{ $patient->id }}</td>
                                <td class="text-center">{{ $patient->dni }}</td>
                                <td class="text-center">{{ $patient->firstname }}, {{ $patient->secondname }}</td>
                                <td class="text-center">{{ $patient->surname }}, {{ $patient->lastname }}</td>
                                <td class="text-center">{{ $patient->lastname }}</td>
                                <td class="text-center">{{ $patient->phone }}</td>
                                <td class="text-center">{{ $patient->code }}</td>
                                <td class="text-center">
                                    @if($patient->status == "ACTIVE")
                                        <span class="badge outline-badge-success"> ACTIVO </span>
                                    @else
                                        <span class="badge outline-badge-danger"> INACTIVO </span>
                                    @endif
                                </td>
                                <td class="text-center">{{ $patient->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">
                                        <a href="javascript:void(0);" wire:click="Edit({{ $patient->id }})"  data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit text-warning fa-lg btn btn-outline-warning"></i></a>

                                        <a href="javascript:void(0);"  onclick="Confirm('{{ $patient->id }}')" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt text-danger fa-lg btn btn-outline-danger"></i></a>

                                        <a href="/" class="btn btn-outline-success">HCL INICIAL</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $patients->links() }}
            </div>
            @include('livewire.admin.patient.form')
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function (){
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show')
        });

        window.livewire.on('show-patient-inactive', msg => {
            noty(msg)
        })

        window.livewire.on('patient-added', msg => {
            $('#theModal').modal('hide')
            noty(msg)
        });

        window.livewire.on('patient-updated', msg => {
            $('#theModal').modal('hide')
            noty(msg)
        });
    });

    function Confirm(id)
    {
        swal({
            title: 'CONFIRMAR',
            text: '¿CONFIRMAS ELIMINAR EL REGISTRO?',
            type: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cerrar',
            cancelButtonColor: '#fff',
            confirmButtonColor: '#3B3F5C',
            confirmButtonText: 'Aceptar',
        }).then(function (result){
            if (result.value){
                window.livewire.emit('deleteRow', id)
                swal.close()
            }
        })
    }
</script>


<div>
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $pageTitle }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">{{ $componentName }}</a></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="w-100 mt-3 col-xl-8">
            <input type="text" wire:model="search" class="w-100 form-control product-search br-30" id="input-search" placeholder="Buscar por apellidos" >
        </div>

        <div class="w-100 mt-3 col-xl-3">
            <input type="date" wire:model="dateFilter" class="w-100 form-control product-search br-30">
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
                    <table class="table table-bnurseed table-hover">
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>PACIENTE (Apellidos y Nombres)</th>
                            <th>MODULO</th>
                            <th>TURNO</th>
                            <th>PACIENTE CON COVID19</th>
                            <th>FECHA DE REGISTRO</th>
                            <th class="text-center">VALORACION</th>
                            <th class="text-center">TRATAMIENTO</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($nurses as $nurse)
                            <tr>
                                <td class="text-center">{{ $nurse->id }}</td>
                                <td class="text-center">{{ $nurse->patient->lastname }}, {{ $nurse->patient->name }}</td>
                                <td class="text-center">{{ $nurse->module->name }}</td>
                                <td class="text-center">{{ $nurse->session->name }}</td>
                                <td class="text-center">
                                    @if($nurse->order->covid == 'NO')
                                        <span class="badge badge-success">{{ $nurse->order->covid  }}</span>
                                    @else
                                        <span class="badge badge-danger">{{ $nurse->order->covid  }}</span>
                                    @endif
                                </td>
                                <td class="text-center">{{ $nurse->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('nurse.edit', $nurse) }}" data-toggle="tooltip" data-placement="top" title="HISTORIA"><i class="fas fa-user-nurse text-info fa-lg btn btn-outline-info"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="" data-toggle="tooltip" data-placement="top" title="GENERAR REFERENCIA"><i class="fas fa-book-medical text-secondary fa-lg btn btn-outline-secondary"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $nurses->links() }}
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function (){
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show')
        });

        window.livewire.on('nurse-added', msg => {
            $('#theModal').modal('hide')
            noty(msg)
        });

        window.livewire.on('mnt-withnurses', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });

        window.livewire.on('nurse-exists', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });

        window.livewire.on('nurse-updated', msg => {
            $('#theModal').modal('hide')
        });
    });

    function Confirm(id, nurses)
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

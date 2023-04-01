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
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>PACIENTE (Apellidos y Nombres)</th>
                            <th>MODULO</th>
                            <th>TURNO</th>
                            <th>FECHA DE REGISTRO</th>
                            <th class="text-center">Imprimir</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td class="text-center">{{ $order->id }}</td>
                                <td class="text-center">{{ $order->patient->surname }} {{ $order->patient->lastname }}, {{ $order->patient->firstname }} {{ $order->patient->secondname }}</td>
                                <td class="text-center">{{ $order->module->name }}</td>
                                <td class="text-center">{{ $order->session->name }}</td>
                                <td class="text-center">{{ $order->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-success" wire:click="downloadPdf({{ $order->id }})"><i class="fas fa-print"></i></button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $orders->links() }}
            </div>
            @include('livewire.operative.orden.form')
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function (){
        window.livewire.on('show-modal', msg => {
            $('#theModal').modal('show')
        });

        window.livewire.on('order-added', msg => {
            $('#theModal').modal('hide')
            noty(msg)
        });

        window.livewire.on('mnt-withorders', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });

        window.livewire.on('order-exists', Msg => {
            $('#theModal').modal('hide')
            noty(Msg)
        });

        window.livewire.on('order-updated', msg => {
            $('#theModal').modal('hide')
        });
    });

    function Confirm(id, orders)
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

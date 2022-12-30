<div>
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $name }}, {{ $lastname }}</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">{{ $module }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">{{ $session }}</a></li>
            </ol>
        </nav>
    </div>

    <div class="row layout-top-spacing">
        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header text-center mt-3">
                    <h3>VALORACION DE ENFERMERIA</h3>
                </div>

                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">H.CL:</label>
                                <div class="input-group">
                                    <input wire:model="hcl" type="text" class="form-control" required>
                                </div>
                                @error('hcl')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Frecuencia HD:</label>
                                <div class="input-group">
                                    <input wire:model="frequency" type="text" class="form-control" required>
                                </div>
                                @error('frequency')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">N° HD:</label>
                                <div class="input-group">
                                    <input wire:model="nhd" type="text" class="form-control" required>
                                </div>
                                @error('nhd')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Frecuencia dias:</label>
                                <div class="input-group">
                                    <input wire:model="others" type="text" class="form-control" required>
                                </div>
                                @error('others')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Puesto:</label>
                                <div class="input-group">
                                    <input wire:model="position" type="text" class="form-control" required>
                                </div>
                                @error('position')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Aspecto del dializador:</label>
                                <div class="input-group">
                                    <input wire:model="aspect_dializer" type="text" class="form-control" required>
                                </div>
                                @error('aspect_dializer')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">P.A. Inicial:</label>
                                <div class="input-group">
                                    <input wire:model="start_pa" type="text" class="form-control" required>
                                </div>
                                @error('start_pa')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">P.A. Final:</label>
                                <div class="input-group">
                                    <input wire:model="end_pa" type="text" class="form-control" required>
                                </div>
                                @error('end_pa')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Peso Inicial:</label>
                                <div class="input-group">
                                    <input wire:model="start_weight" type="text" class="form-control" required>
                                </div>
                                @error('start_weight')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Peso Final:</label>
                                <div class="input-group">
                                    <input wire:model="end_weight" type="text" class="form-control" required>
                                </div>
                                @error('end_weight')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">N° de Maquina:</label>
                                <div class="input-group">
                                    <input wire:model="machine" type="text" class="form-control" required>
                                </div>
                                @error('machine')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Marca/Modelo:</label>
                                <div class="input-group">
                                    <input wire:model="brand_model" type="text" class="form-control" required>
                                </div>
                                @error('brand_model')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Filtro:</label>
                                <div class="input-group">
                                    <input wire:model="filter" type="text" class="form-control" required>
                                </div>
                                @error('filter')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">UF:</label>
                                <div class="input-group">
                                    <input wire:model="uf" type="text" class="form-control" required>
                                </div>
                                @error('uf')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">ARTERIAL:</label>
                                <div class="input-group">
                                    <input wire:model="access_arterial" type="text" class="form-control" required>
                                </div>
                                @error('access_arterial')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-3 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">VENOSO:</label>
                                <div class="input-group">
                                    <input wire:model="access_venoso" type="text" class="form-control" required>
                                </div>
                                @error('access_venoso')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Hierro:</label>
                                <div class="input-group">
                                    <input wire:model="iron" type="text" class="form-control" required>
                                </div>
                                @error('iron')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">EPO 2000:</label>
                                <div class="input-group">
                                    <input wire:model="epo2000" type="text" class="form-control" required>
                                </div>
                                @error('epo2000')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">EPO 4000:</label>
                                <div class="input-group">
                                    <input wire:model="epo4000" type="text" class="form-control" required>
                                </div>
                                @error('epo4000')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Hidroxicobalamina:</label>
                                <div class="input-group">
                                    <input wire:model="hidroxi" type="text" class="form-control" required>
                                </div>
                                @error('hidroxi')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Calcitriol:</label>
                                <div class="input-group">
                                    <input wire:model="calcitriol" type="text" class="form-control" required>
                                </div>
                                @error('calcitriol')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Otros Medicamentos:</label>
                                <div class="input-group">
                                    <input wire:model="others_med" type="text" class="form-control" required>
                                </div>
                                @error('others_med')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mb-4 col-lg-3 col-12 text-center">
                            <label for="exampleFormControlTextarea1">S:</label>
                            <textarea class="form-control" wire:model="s" rows="3"></textarea>

                            @error('s')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4 col-lg-3 col-12 text-center">
                            <label for="exampleFormControlTextarea1">O:</label>
                            <textarea class="form-control" wire:model="o" rows="3"></textarea>

                            @error('o')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4 col-lg-3 col-12 text-center">
                            <label for="exampleFormControlTextarea1">A:</label>
                            <textarea class="form-control" wire:model="a" rows="3"></textarea>

                            @error('a')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4 col-lg-3 col-12 text-center">
                            <label for="exampleFormControlTextarea1">p:</label>
                            <textarea class="form-control" wire:model="p" rows="3"></textarea>

                            @error('p')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4 col-lg-12 col-12 text-center">
                            <label for="exampleFormControlTextarea1">Observación Final:</label>
                            <textarea class="form-control" wire:model="end_observation" rows="3"></textarea>

                            @error('end_observation')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <button type="button" wire:click.prevent="Update()" class="btn btn-secondary btn-block">GUARDAR</button>
                        </div>

                        <div class="col-lg-3 col-12">
                            <a href="{{ route('nurse.index') }}" class="btn btn-danger btn-block">REGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function (){


        window.livewire.on('nurse-updated', msg => {
            noty(msg)
        })

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

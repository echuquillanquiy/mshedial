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
                    <h3>EVALUACION MEDICA</h3>
                </div>

                <div class="widget-content widget-content-area">

                    <div class="row">

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">HORA INICIO:</label>
                                <div class="input-group">
                                    <input wire:model="start_hour" type="time" class="form-control" required>
                                </div>
                                @error('start_hour')
                                    <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">HORAS DE HD:</label>
                                <div class="input-group">
                                    <input wire:model="hour_hd" type="text" class="form-control" required>
                                </div>
                                @error('hour_hd')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">PESO INICIAL:</label>
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
                                <label class="control-label">P.A. INICIAL:</label>
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
                                <label class="control-label">FRECUENCIA CARDIACA:</label>
                                <div class="input-group">
                                    <input wire:model="fc" type="text" class="form-control" required>
                                </div>
                                @error('fc')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">ULTRAFILTRADO:</label>
                                <div class="input-group">
                                    <input wire:model="uf" type="text" class="form-control" required>
                                </div>
                                @error('uf')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group mb-4 col-lg-3 col-12 mx-auto">
                            <label for="exampleFormControlTextarea1">Problemas Cl??nicos:</label>
                            <textarea class="form-control" wire:model="clinical_trouble" rows="3"></textarea>

                            @error('clinical_trouble')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="form-group mb-4 col-lg-3 col-12 mx-auto">
                            <label for="exampleFormControlTextarea1">Evaluaci??n</label>
                            <textarea class="form-control" wire:model="evaluation" rows="3"></textarea>

                            @error('evaluation')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4 col-lg-3 col-12 mx-auto">
                            <label for="exampleFormControlTextarea1">Indicaciones</label>
                            <textarea class="form-control" wire:model="indications" rows="3"></textarea>

                            @error('indications')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-4 col-lg-3 col-12 mx-auto">
                            <label for="exampleFormControlTextarea1">Signos y Sintomas</label>
                            <textarea class="form-control" wire:model="signal" rows="3"></textarea>

                            @error('signal')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">HEPARINA:</label>
                                <div class="input-group">
                                    <input wire:model="heparin" type="text" class="form-control" required>
                                </div>
                                @error('heparin')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Peso Seco:</label>
                                <div class="input-group">
                                    <input wire:model="dry_weight" type="text" class="form-control" required>
                                </div>
                                @error('dry_weight')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">QB:</label>
                                <div class="input-group">
                                    <input wire:model="qb" type="text" class="form-control" required>
                                </div>
                                @error('qb')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">QD:</label>
                                <div class="input-group">
                                    <input wire:model="qd" type="text" class="form-control" required>
                                </div>
                                @error('qd')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Bicarbonato:</label>
                                <div class="input-group">
                                    <input wire:model="bicarbonat" type="text" class="form-control" required>
                                </div>
                                @error('bicarbonat')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">NA INICIAL:</label>
                                <div class="input-group">
                                    <input wire:model="start_na" type="text" class="form-control" required>
                                </div>
                                @error('start_na')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">CND:</label>
                                <div class="input-group">
                                    <input wire:model="cnd" type="text" class="form-control" required>
                                </div>
                                @error('cnd')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">NA FINAL:</label>
                                <div class="input-group">
                                    <input wire:model="end_na" type="text" class="form-control" required>
                                </div>
                                @error('end_na')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Perfil Na:</label>
                                <div class="input-group">
                                    <input wire:model="profile_na" type="text" class="form-control" required>
                                </div>
                                @error('profile_na')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">??REA/FILTRO:</label>
                                <div class="input-group">
                                    <input wire:model="area_filter" type="text" class="form-control" required>
                                </div>
                                @error('area_filter')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">MEMBRANA:</label>
                                <div class="input-group">
                                    <input wire:model="membrane" type="text" class="form-control" required>
                                </div>
                                @error('membrane')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Perfil UF:</label>
                                <div class="input-group">
                                    <input wire:model="profile_uf" type="text" class="form-control" required>
                                </div>
                                @error('profile_uf')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mb-4 col-lg-9 col-12">
                            <label for="exampleFormControlTextarea1">Evaluaci??n Final:</label>
                            <textarea class="form-control" wire:model="end_evaluation" rows="3"></textarea>

                            @error('end_evaluation')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="form-group">
                                <label class="control-label">Hora final:</label>
                                <div class="input-group">
                                    <input wire:model="end_hour" type="time" class="form-control" required>
                                </div>
                                @error('end_hour')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <button type="button" wire:click.prevent="Update()" class="btn btn-secondary btn-block">GUARDAR</button>
                        </div>

                        <div class="col-lg-3 col-12">
                            <a href="{{ route('atencion.medica') }}" class="btn btn-danger btn-block">REGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function (){


        window.livewire.on('medical-updated', msg => {
            noty(msg)
        })

    });

    function Confirm(id)
    {
        swal({
            title: 'CONFIRMAR',
            text: '??CONFIRMAS ELIMINAR EL REGISTRO?',
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

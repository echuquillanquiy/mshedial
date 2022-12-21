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
                            <label for="exampleFormControlTextarea1">Problemas Clínicos:</label>
                            <textarea class="form-control" wire:model="clinical_trouble" rows="3"></textarea>

                            @error('clinical_trouble')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="form-group mb-4 col-lg-3 col-12 mx-auto">
                            <label for="exampleFormControlTextarea1">Evaluación</label>
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
                            <textarea class="form-control" wire:model="" rows="3"></textarea>

                            @error('')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">HEPARINA:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Peso Seco:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">QB:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">QD:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Bicarbonato:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">NA INICIAL:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
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
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">NA FINAL:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Perfil Na:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">ÁREA/FILTRO:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">MEMBRANA:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-2 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">Perfil UF:</label>
                                <div class="input-group">
                                    <input wire:model="" type="text" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-group mb-4 col-lg-9 col-12">
                            <label for="exampleFormControlTextarea1">Evaluación Final:</label>
                            <textarea class="form-control" wire:model="" rows="3"></textarea>
                        </div>

                        <div class="col-lg-3 col-12">
                            <div class="form-group">
                                <label class="control-label">Hora final:</label>
                                <div class="input-group">
                                    <input wire:model="" type="time" class="form-control" required>
                                </div>
                                @error('')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <button class="btn btn-secondary btn-block">GUARDAR</button>
                        </div>

                        <div class="col-lg-3 col-12">
                            <button class="btn btn-danger btn-block">REGRESAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

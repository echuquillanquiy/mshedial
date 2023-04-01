<div>
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ $treatment->patient->surname }} {{ $treatment->patient->lastname }}, {{ $treatment->patient->firstname }} {{ $treatment->patient->secondname }}</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">{{ $module }}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">{{ $session }}</a></li>
            </ol>
        </nav>
    </div>

    <div class="row layout-top-spacing">
        <div id="basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header text-center mt-3">
                    <h3>TRATAMIENTO DE ENFERMERIA</h3>
                </div>

                <div class="widget-content widget-content-area">

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">HR:</label>
                                <div class="">
                                    <input wire:model="hr" type="text" class="form-control" required>
                                </div>
                                @error('hr')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">PA:</label>
                                <div class="input-group">
                                    <input wire:model="pa" type="text" class="form-control" required>
                                </div>
                                @error('pa')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">FC:</label>
                                <div class="input-group">
                                    <input wire:model="freq" type="text" class="form-control" required>
                                </div>
                                @error('freq')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
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

                        <div class="col-lg-1 col-12 mx-auto">
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

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">RA:</label>
                                <div class="input-group">
                                    <input wire:model="ra" type="text" class="form-control" required>
                                </div>
                                @error('ra')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">RV:</label>
                                <div class="input-group">
                                    <input wire:model="rv" type="text" class="form-control" required>
                                </div>
                                @error('rv')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <label class="control-label">PTM:</label>
                                <div class="input-group">
                                    <input wire:model="ptm" type="text" class="form-control" required>
                                </div>
                                @error('ptm')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <label for="exampleFormControlTextarea1">SOL/HEMODERIVADOS:</label>
                            <textarea class="form-control" wire:model="sol_hemodev" rows="1"></textarea>

                            @error('sol_hemodev')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <label for="exampleFormControlTextarea1">Observación:</label>
                            <textarea class="form-control" wire:model="obs" rows="1"></textarea>

                            @error('obs')
                                <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="">
                                    <input wire:model="hr2" type="text" class="form-control" required>
                                </div>
                                @error('hr2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="pa2" type="text" class="form-control" required>
                                </div>
                                @error('pa2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="freq2" type="text" class="form-control" required>
                                </div>
                                @error('freq2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="qb2" type="text" class="form-control" required>
                                </div>
                                @error('qb2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="cnd2" type="text" class="form-control" required>
                                </div>
                                @error('cnd2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ra2" type="text" class="form-control" required>
                                </div>
                                @error('ra2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="rv2" type="text" class="form-control" required>
                                </div>
                                @error('rv2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ptm2" type="text" class="form-control" required>
                                </div>
                                @error('ptm2')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <textarea class="form-control" wire:model="sol_hemodev2" rows="1"></textarea>

                            @error('sol_hemodev2')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <textarea class="form-control" wire:model="obs2" rows="1"></textarea>

                            @error('obs2')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="">
                                    <input wire:model="hr3" type="text" class="form-control" required>
                                </div>
                                @error('hr3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="pa3" type="text" class="form-control" required>
                                </div>
                                @error('pa3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="freq3" type="text" class="form-control" required>
                                </div>
                                @error('freq3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="qb3" type="text" class="form-control" required>
                                </div>
                                @error('qb3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="cnd3" type="text" class="form-control" required>
                                </div>
                                @error('cnd3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ra3" type="text" class="form-control" required>
                                </div>
                                @error('ra3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="rv3" type="text" class="form-control" required>
                                </div>
                                @error('rv3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ptm3" type="text" class="form-control" required>
                                </div>
                                @error('ptm3')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <textarea class="form-control" wire:model="sol_hemodev3" rows="1"></textarea>

                            @error('sol_hemodev3')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <textarea class="form-control" wire:model="obs3" rows="1"></textarea>

                            @error('obs3')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="">
                                    <input wire:model="hr4" type="text" class="form-control" required>
                                </div>
                                @error('hr4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="pa4" type="text" class="form-control" required>
                                </div>
                                @error('pa4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="freq4" type="text" class="form-control" required>
                                </div>
                                @error('freq4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="qb4" type="text" class="form-control" required>
                                </div>
                                @error('qb4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="cnd4" type="text" class="form-control" required>
                                </div>
                                @error('cnd4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ra4" type="text" class="form-control" required>
                                </div>
                                @error('ra4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="rv4" type="text" class="form-control" required>
                                </div>
                                @error('rv4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ptm4" type="text" class="form-control" required>
                                </div>
                                @error('ptm4')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <textarea class="form-control" wire:model="sol_hemodev4" rows="1"></textarea>

                            @error('sol_hemodev4')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <textarea class="form-control" wire:model="obs4" rows="1"></textarea>

                            @error('obs4')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="">
                                    <input wire:model="hr5" type="text" class="form-control" required>
                                </div>
                                @error('hr5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="pa5" type="text" class="form-control" required>
                                </div>
                                @error('pa5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="freq5" type="text" class="form-control" required>
                                </div>
                                @error('freq5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="qb5" type="text" class="form-control" required>
                                </div>
                                @error('qb5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="cnd5" type="text" class="form-control" required>
                                </div>
                                @error('cnd5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ra5" type="text" class="form-control" required>
                                </div>
                                @error('ra5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="rv5" type="text" class="form-control" required>
                                </div>
                                @error('rv5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ptm5" type="text" class="form-control" required>
                                </div>
                                @error('ptm5')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <textarea class="form-control" wire:model="sol_hemodev5" rows="1"></textarea>

                            @error('sol_hemodev5')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <textarea class="form-control" wire:model="obs5" rows="1"></textarea>

                            @error('obs5')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="">
                                    <input wire:model="hr6" type="text" class="form-control" required>
                                </div>
                                @error('hr6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="pa6" type="text" class="form-control" required>
                                </div>
                                @error('pa6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="freq6" type="text" class="form-control" required>
                                </div>
                                @error('freq6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="qb6" type="text" class="form-control" required>
                                </div>
                                @error('qb6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="cnd6" type="text" class="form-control" required>
                                </div>
                                @error('cnd6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ra6" type="text" class="form-control" required>
                                </div>
                                @error('ra6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="rv6" type="text" class="form-control" required>
                                </div>
                                @error('rv6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ptm6" type="text" class="form-control" required>
                                </div>
                                @error('ptm6')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <textarea class="form-control" wire:model="sol_hemodev6" rows="1"></textarea>

                            @error('sol_hemodev6')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <textarea class="form-control" wire:model="obs6" rows="1"></textarea>

                            @error('obs6')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="">
                                    <input wire:model="hr7" type="text" class="form-control" required>
                                </div>
                                @error('hr7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="pa7" type="text" class="form-control" required>
                                </div>
                                @error('pa7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="freq7" type="text" class="form-control" required>
                                </div>
                                @error('freq7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="qb7" type="text" class="form-control" required>
                                </div>
                                @error('qb7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="cnd7" type="text" class="form-control" required>
                                </div>
                                @error('cnd7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ra7" type="text" class="form-control" required>
                                </div>
                                @error('ra7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="rv7" type="text" class="form-control" required>
                                </div>
                                @error('rv7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ptm7" type="text" class="form-control" required>
                                </div>
                                @error('ptm7')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <textarea class="form-control" wire:model="sol_hemodev7" rows="1"></textarea>

                            @error('sol_hemodev7')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <textarea class="form-control" wire:model="obs7" rows="1"></textarea>

                            @error('obs7')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row text-center">

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="">
                                    <input wire:model="hr8" type="text" class="form-control" required>
                                </div>
                                @error('hr8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="pa8" type="text" class="form-control" required>
                                </div>
                                @error('pa8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="freq8" type="text" class="form-control" required>
                                </div>
                                @error('freq8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="qb8" type="text" class="form-control" required>
                                </div>
                                @error('qb8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="cnd8" type="text" class="form-control" required>
                                </div>
                                @error('cnd8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ra8" type="text" class="form-control" required>
                                </div>
                                @error('ra8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="rv8" type="text" class="form-control" required>
                                </div>
                                @error('rv8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-1 col-12 mx-auto">
                            <div class="form-group">
                                <div class="input-group">
                                    <input wire:model="ptm8" type="text" class="form-control" required>
                                </div>
                                @error('ptm8')
                                <span class="text-danger er">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group col-lg-1 col-12 text-center">
                            <textarea class="form-control" wire:model="sol_hemodev8" rows="1"></textarea>

                            @error('sol_hemodev8')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-lg-3 col-12 text-center">
                            <textarea class="form-control" wire:model="obs8" rows="1"></textarea>

                            @error('obs8')
                            <span class="text-danger er">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <button type="button" wire:click.prevent="Update()" class="btn btn-secondary btn-block">GUARDAR</button>
                        </div>

                        <div class="col-lg-3 col-12">
                            <a href="{{ route('treatment.index') }}" class="btn btn-danger btn-block">REGRESAR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function (){


        window.livewire.on('treatment-updated', msg => {
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


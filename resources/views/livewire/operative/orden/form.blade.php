@include('common.modalHead')

<div class="row">
    <input type="hidden" wire:model="patientId" class="form-control uppercase" disabled>
    @if($selected_id < 1)


        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">DNI:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model.lazy="dni" wire:change.prevent="consultDni()" class="form-control uppercase" required>
                </div>
                @error('patientId')
                <span class="text-danger er">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">PRIMER NOMBRE:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="firstname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">OTROS NOMBRES:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="secondname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">APELLIDO PATERNO:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="surname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">APELLIDO MATERNO:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="lastname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>
    @else
        <input type="hidden" wire:model="patientId" class="form-control uppercase" disabled>
        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">DNI:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="dni" wire:focus="dni" wire:init="editDni()" class="form-control uppercase" readonly>
                </div>
                @error('dni')
                <span class="text-danger er">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">PRIMER NOMBRE:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="firstname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">OTROS NOMBRES:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="secondname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">APELLIDO PATERNO:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="surname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>

        <div class="col-xl-3">
            <div class="form-group">
                <label class="control-label">APELLIDO MATERNO:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-edit"></i></div>
                    </div>
                    <input type="text" wire:model="lastname" class="form-control uppercase" readonly>
                </div>
            </div>
        </div>
    @endif

    <div class="col-xl-2">
        <div class="form-group">
            <label>HORAS HD:</label>
            <select wire:model.lazy="hour_hd" class="form-control">
                <option value="3.5" selected>3.5</option>
                <option value="3">3</option>
                <option value="3.25">3.25</option>
                <option value="3.75">3.75</option>
            </select>
        </div>
        @error('hour_hd')
            <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-xl-3">
        <div class="form-group">
            <label>MODULOS</label>
            <select wire:model.lazy="moduleId" class="form-control">
                <option value="Elegir">[Elegir]</option>
                @foreach($modules as $module)
                    <option value="{{ $module->id }}">{{ $module->name }}</option>
                @endforeach
            </select>
        </div>
        @error('moduleId')
        <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-xl-3">
        <div class="form-group">
            <label>TURNOS</label>
            <select wire:model.lazy="sessionId" class="form-control">
                <option value="Elegir">[Elegir]</option>
                @foreach($sessions as $session)
                    <option value="{{ $session->id }}">{{ $session->name }}</option>
                @endforeach
            </select>
        </div>
        @error('sessionId')
        <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-xl-3">
        <div class="form-group">
            <label>PACIENTE COVID:</label>
            <select wire:model.lazy="covid" class="form-control">
                <option value="NO" selected>NO</option>
                <option value="SI">SI</option>
            </select>
        </div>
        @error('covid')
        <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-xl-3">
        <div class="form-group mb-4">
            <label class="control-label">FECHA DE CREACION:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
                <input type="date" wire:model.lazy="created_at" class="form-control" >
            </div>
            @error('created_at')
            <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>

@include('common.modalFooter')

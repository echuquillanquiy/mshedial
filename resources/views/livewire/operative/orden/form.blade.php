@include('common.modalHead')

<div class="row">
    <input type="hidden" wire:model="patientId" class="form-control uppercase" disabled>
    <div class="col-xl-3">
        <div class="form-group">
            <label class="control-label">DNI:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="dni" wire:change.prevent="consultDni()" class="form-control text-uppercase" required>
            </div>
            @error('patientId')
            <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-xl-4">
        <div class="form-group">
            <label class="control-label">NOMBRES Y APELLIDOS:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="name" class="form-control" >
            </div>
            @error('name')
            <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-xl-5">
        <div class="form-group">
            <label class="control-label">NOMBRES Y APELLIDOS:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="lastname" class="form-control" >
            </div>
            @error('lastname')
            <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-xl-4">
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

    <div class="col-xl-4">
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

    <div class="col-xl-4">
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

</div>

@include('common.modalFooter')

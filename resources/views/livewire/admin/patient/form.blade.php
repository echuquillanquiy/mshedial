@include('common.modalHead')

<div class="row">
    <div class="col-xl-3">
        <div class="form-group">
            <label class="control-label">DNI:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="dni" class="form-control" >
            </div>
            @error('dni')
                <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>
    </div>

    <div class="col-xl-4">
        <div class="form-group">
            <label class="control-label">NOMBRES:</label>
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
            <label class="control-label">APELLIDOS:</label>
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

    <div class="col-xl-3">
        <div class="form-group mb-4">
            <label class="control-label">FECHA DE NACIMIENTO:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
                <input type="date" wire:model.lazy="birthday" wire:keydown="calcEdad()" class="form-control" >
            </div>
            @error('birthday')
                <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-xl-2">
        <div class="form-group">
            <label>Sexo:</label>
            <select wire:model.lazy="sex" class="form-control">
                <option value="Elegir">[Elegir]</option>
                <option value="M">MASCULINO</option>
                <option value="F">FEMENINO</option>
            </select>
        </div>
        @error('sex')
            <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-xl-2">
        <div class="form-group mb-4">
            <label class="control-label">EDAD:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-birthday-cake"></i></div>
                </div>
                <input type="text" wire:model.lazy="age" class="form-control text-center" >
            </div>
            @error('age')
            <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-xl-5">
        <div class="form-group">
            <label class="control-label">DIRECCION ACTUAL:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="address" class="form-control" >
            </div>

            @error('address')
            <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>
    </div>

    <div class="col-xl-3">
        <div class="form-group">
            <label class="control-label">N° CELULAR:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="phone" class="form-control" >
            </div>

            @error('phone')
                <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>
    </div>

    <div class="col-xl-4">
        <div class="form-group">
            <label>ESTADO CIVIL:</label>
            <select wire:model.lazy="civil_state" class="form-control">
                <option value="Elegir">[Elegir]</option>
                <option value="SOLTERO">SOLTERO</option>
                <option value="CONVIVIENTE">CONVIVIENTE</option>
                <option value="CASADO">CASADO</option>
                <option value="DIVORCIADO">DIVORCIADO</option>
                <option value="VIUDO">VIUDO</option>
            </select>
        </div>
        @error('civil_state')
        <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-xl-5">
        <div class="form-group">
            <label>GRADO DE INSTRUCCION:</label>
            <select wire:model.lazy="education" class="form-control">
                <option value="Elegir">[Elegir]</option>
                <option value="PRIMARIA COMPLETA">PRIMARIA COMPLETA</option>
                <option value="SECUNDARIA COMPLETA">SECUNDARIA COMPLETA</option>
                <option value="TECNICO COMPLETO">TECNICO COMPLETO</option>
                <option value="UNIVERSITARIO COMPLETO">UNIVERSITARIO COMPLETO</option>
                <option value="ANALFABETO">ANALFABETO</option>
                <option value="PRIMARIA INCOMPLETA">PRIMARIA INCOMPLETA</option>
                <option value="SECUNDARIA INCOMPLETA">SECUNDARIA INCOMPLETA</option>
                <option value="TECNICO INCOMPLETO">TECNICO INCOMPLETO</option>
                <option value="UNIVERSITARIO INCOMPLETO">UNIVERSITARIO INCOMPLETO</option>
            </select>
        </div>
        @error('education')
            <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-xl-4">
        <div class="form-group">
            <label class="control-label">CONDICION:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="condition" class="form-control" >
            </div>

            @error('condition')
                <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>
    </div>

    <div class="col-xl-3">
        <div class="form-group mb-4">
            <label class="control-label">FECHA DE ULTIMO TRABAJO:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
                </div>
                <input type="date" wire:model.lazy="last_work" class="form-control" >
            </div>
            @error('last_work')
            <span class="text-danger er">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-xl-5">
        <div class="form-group">
            <label class="control-label">HOSPITAL DE ORIGEN:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="origin" class="form-control" >
            </div>

            @error('origin')
            <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>
    </div>

    <div class="col-xl-4">
        <div class="form-group">
            <label class="control-label">OCUPACION ACTUAL:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="ocupation" class="form-control" >
            </div>

            @error('ocupation')
            <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>
    </div>

    <div class="col-xl-6">
        <div class="form-group">
            <label class="control-label">CODIGO (AUTOGENERADO):</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-edit"></i></div>
                </div>
                <input type="text" wire:model.lazy="code" class="form-control" >
            </div>

            @error('code')
            <span class="text-danger er">{{ $message }}</span>
            @enderror

        </div>
    </div>

    <div class="col-xl-2">
        <div class="form-group">
            <label>ESTADO:</label>
            <select wire:model.lazy="status" class="form-control">
                <option value="ACTIVE" selected>ACTIVO</option>
                <option value="INACTIVE">INACTIVO</option>
            </select>
        </div>
        @error('status')
        <span class="text-danger er">{{ $message }}</span>
        @enderror
    </div>

</div>

@include('common.modalFooter')

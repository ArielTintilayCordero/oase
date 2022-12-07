{{-- <div class="form-group">
    {!! Form::label('ci_pasaporte', 'CI/Pasaporte *') !!}
    {!! Form::text('ci_pasaporte', null, ['class' => 'form-control', 'placeholder' => 'pasaporte']) !!}
    @error('ci_pasaporte')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div> --}}

<div class="form-group">
    {!! Form::label('nombre', 'Nombres *') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'nombres']) !!}
    @error('nombre')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('apPaterno', 'Apellido Paterno *') !!}
    {!! Form::text('apPaterno', null, ['class' => 'form-control', 'placeholder' => 'apellido paterno']) !!}
    @error('apPaterno')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('apMaterno', 'Apellido Materno *') !!}
    {!! Form::text('apMaterno', null, ['class' => 'form-control', 'placeholder' => 'apellido materno']) !!}
    @error('apMaterno')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('telefono', 'Telefono *') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'telefono']) !!}
    @error('telefono')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('direccion', 'Direccion *') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control', 'placeholder' => 'direccion']) !!}
    @error('direccion')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class=" font-weight-bold">Estado *</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Activo
    </label>
    <label>
        {!! Form::radio('status', 0) !!}
        Desactivado
    </label>
@error('status')
    <small class="text-danger">{{ $message }}</small>
@enderror
</div>

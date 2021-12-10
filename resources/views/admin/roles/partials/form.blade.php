<div class="form-group">
    {!! form::label('name','Nombre:')!!}
    {!! Form::text('name', null,['class'=>'form-control '.($errors->has('name') ? 'is-invalid': '') ,'placeholder' => 'Escriba un Nombre'])!!}

    @error('name')
    <span class="invalid-feedback">
        <strong>{{$message}}</strong>
    </span>
    @enderror
</div>

<strong>Permisos</strong>

@foreach($permissions as $permission)
<div>
    <label>
        {!!Form::checkbox('permissions[]', $permission->id , null,['class'=>'mr-1'])!!}
        {{$permission->name}}
    </label>
</div>

   @endforeach

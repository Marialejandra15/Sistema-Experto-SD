<div>
    <div class="card">
        <div class="card-header">
            <input wire:keydown="limpiarPage" wire:model="search" type="text" class="form-control w-full" placeholder="Escribe un nombre">
        </div>
        @if($users->count())
            <div class="card-body">
                @if(session('info'))
                    <div class="card-header">
                        <div class="alert alert-success">
                            <strong>Éxito!</strong>{{ session('info') }}
                        </div>
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td width="10px">
                                    <a class="btn btn-success" href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $user->paginate() }}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>

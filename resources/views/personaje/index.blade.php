@extends('layouts.app')

@section('template_title')
    Personaje
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personajes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Ataques</th>
										<th>Hp</th>
										<th>Edad</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personajes as $personaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $personaje->nombre }}</td>
											<td>{{ $personaje->ataques }}</td>
											<td>{{ $personaje->hp }}</td>
											<td>{{ $personaje->edad }}</td>

                                            <td>
                                                <form action="{{ route('personajes.destroy',$personaje->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personajes.show',$personaje->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personajes.edit',$personaje->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $personajes->links() !!}
            </div>
        </div>
    </div>
@endsection

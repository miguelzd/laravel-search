<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Laravel Finder</title>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        {{-- buscador --}}
                        <div class="card-body">
                            <nav class="navbar navbar-light bg-light shadow p-3 mb-1 rounded">
                                <strong><a href="/" class="navbar-brand">Buscador de usuarios</a></strong>
                                {{ Form::open(['route' => 'users', 'method' => 'GET', 'class' => 'form-inline' ]) }}
                                    <div>
                                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre']) }}
                                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                                        {{ Form::text('bio', null, ['class' => 'form-control', 'placeholder' => 'Biografía']) }}
                                        <button type="submit" class="btn btn-success">
                                            <span class="glyphicon glyphicon-search">Buscar</span>
                                        </button>
                                    </div>
                                {{ Form::close() }}
                            </nav>
                        </div>
                        {{-- tabla de resultados --}}
                        <div class="card-body">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->bio }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->render() }}
                        </div>                     
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
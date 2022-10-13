<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Labex</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Exámenes de Laboratorio</h2>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Costo</th>
                    <th>Ayuno</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->cost }}</td>
                        @if ($service->id == 1)
                            <td>{{ 'SI' }}</td>
                        @else
                            <td>{{ 'NO' }}</td>
                        @endif
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $services->links() !!}
    </div>
</body>
</html>
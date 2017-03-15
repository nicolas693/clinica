 @extends('layouts.app')

@section('content')
<head>
  {!!Html::style('css/micss.css')!!}
</head>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    Registro Exitoso!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

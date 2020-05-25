<head>
    <script src="https://kit.fontawesome.com/0adf7b258a.js" crossorigin="anonymous"></script>
</head>
<div style="margin:0px 50px 0px 50px;">
    @if($services)
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Paslaugos pavadinimas</th>
                <th>Tekstas</th>
                <th>Simbolis</th>
                <th>Trinti</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $k => $service)
            <tr>
                <td>{{$service->id}}</td>
                <td> {!!
                    Html::link(route('servicesEdit',['service'=>$service->id]),$service->name,['alt'=>$service->name])
                    !!} </td>
                <td>{{$service->text}}</td>
                <td><i class="{{ $service->icon }} fa-2x"></i></td>
                <td>
                    {!! Form::open(['url' =>
                    route('servicesEdit',['service'=>$service->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
                    {{ method_field('DELETE') }}
                    {!! Form::button('Trinti', ['class' => 'btn btn-danger','type'=>'submit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif

    <!-- naujo paslaugos pridejimas -->
    <form method="" action="{{ route('servicesAdd') }}">
        <button type="submit" class="btn btn-success">Naujos paslaugos pridėjimas</button>
    </form>
</div>
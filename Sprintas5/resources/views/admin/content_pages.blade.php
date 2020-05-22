<div style="margin: 0px 50px 0px 50px;">
    @if($pages)

    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Trumpinys DB</th>
                <th>Tekstas</th>
                <th>Sukurta</th>
                <th>Ištrinti</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $k=> $page)

                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{!! Html::link(route('pagesEdit', ['page'=>$page->id]), $page->name, ['alt'=>$page->name]) !!} </td>
                    <td>{{ $page->alias }}</td>
                    <td>{{ $page->text }}</td>
                    <td>{{ $page->created_at }}</td>
                    <td>
                    {!! Form::open(['url'=>route('pagesEdit', ['page'=>$page->id]), 'class'=>'form-horizontal', 'method'=>'post']) !!}
                        {!! Form::hidden('action', 'delete') !!}
                        {!! Form::button('Ištrinti', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                    {!! Form::close() !!}
                    </td>
                    
                </tr>
            @endforeach


        </tbody>
    </table>
    @endif
    <!-- naujo psl pridejimas -->
    <form method="" action="{{ route('pagesAdd') }}">
        <button type="submit" class="btn btn-success">Naujas puslapis</button>
    </form>

</div>

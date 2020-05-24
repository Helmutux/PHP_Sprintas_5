<div style="margin:0px 50px 0px 50px;">    
	@if($portfolios)	
	<table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Vardas</th>
                <th>Filtras</th>
                <th>Paveikslėlis</th>
                <th>Sukurta</th>
                <th>Ištrinti</th>
            </tr>
        </thead>
        <tbody>
		@foreach($portfolios as $k => $portfolio)
            <tr>
                <td>{{$portfolio->id}}</td>
                <td>  {!! Html::link(route('portfoliosEdit',['portfolio'=>$portfolio->id]),$portfolio->name,['alt'=>$portfolio->name]) !!}  </td>
                <td>{{$portfolio->filter}}</td>
				<td>{!! Html::image('img/'.$portfolio->images,'', array('style' => 'width:150px' )) !!}</td>
                <td>{{$portfolio->created_at}}</td>
                <td>	
                
                {!! Form::open(['url' => route('portfoliosEdit',['portfolio'=>$portfolio->id]),'class'=>'form-horizontal','method'=>'POST']) !!}
				    {{ method_field('DELETE') }}
				    {!! Form::button('Trinti', ['class' => 'btn btn-danger','type'=>'submit']) !!}
				{!! Form::close() !!}
				</td>
            </tr>
		@endforeach	
        </tbody>
    </table>
	
	@endif
	<!-- naujo psl pridejimas -->
    <form method="" action="{{ route('portfoliosAdd') }}">
        <button type="submit" class="btn btn-success">Naujas portfolio</button>
    </form>
</div>
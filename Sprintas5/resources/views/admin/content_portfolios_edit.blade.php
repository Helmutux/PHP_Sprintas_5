<div class="wrapper container-fluid">

{!! Form::open(['url' => route('portfoliosEdit',['portfolios'=>$data['id']]),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
	     {!! Form::label('name', 'Pavadinimas:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Įveskite pavadinimą']) !!}
		 </div>
    </div>
    {!! Form::hidden('id', $data['id']) !!}
    <div class="form-group">
	     {!! Form::label('filter', 'Filtras:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('filter', $data['filter'], ['class' => 'form-control','placeholder'=>'Įveskite filtro pavadinimą']) !!}
		 </div>
    </div>
	
	<div class="form-group">
    	{!! Form::label('old_images', 'Paveikslėlis:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('img/'.$data['images'],'',['class'=>'img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_images', $data['images']) !!}
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('images', 'Paveikslėlis:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Pasirinkti paveikslėlį','data-buttonName'=>"btn-primary",'data-placeholder'=>"Failas nepasirinktas"]) !!}
		 </div>
    </div>
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Išsaugoti', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

</div>
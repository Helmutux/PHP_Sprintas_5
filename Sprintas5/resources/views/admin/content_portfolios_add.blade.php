<div class="wrapper container-fluid">

{!! Form::open(['url' => route('portfoliosAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
	     {!! Form::label('name', 'Pavadinimas:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', old('name'), ['class' => 'form-control','placeholder'=>'Įrašykite pavadinimą']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('filter', 'Filtras:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('filter', old('filter'), ['class' => 'form-control','placeholder'=>'Įrašykite filtro pavadinimą']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('images', 'Paveikslėlis:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Pasirinkite paveikslėlį','data-buttonName'=>"btn-primary",'data-placeholder'=>"Failas nepasirinktas"]) !!}
		 </div>
    </div>
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Išsaugoti', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

</div>
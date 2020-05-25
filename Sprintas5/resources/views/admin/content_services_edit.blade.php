<div class="wrapper container-fluid">

{!! Form::open(['url' => route('servicesEdit',['services'=>$data['id']]),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
	     {!! Form::label('name', 'Paslaugos pavadinimas:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Įveskite paslaugos pavadinimą']) !!}
		 </div>
    </div>
    {!! Form::hidden('id', $data['id']) !!}
    
	<div class="form-group">
	     {!! Form::label('icon', 'FontAwesome ikona:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('icon', $data['icon'], ['class' => 'form-control','placeholder'=>'Įveskite FontAwesome ikonos kodą']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('text', 'Paslaugos aprašymas:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Įveskite paslaugos aprašymą']) !!}
		 </div>
    </div>
	
    
      <div class="form-group">
	    <div class="col-xs-offset-2 col-xs-10">
	      {!! Form::button('Išsaugoti', ['class' => 'btn btn-primary','type'=>'submit']) !!}
	    </div>
	  </div>
    
{!! Form::close() !!}

</div>
<div class="wrapper container-fluid">

    {!! Form::open(['url'=>route('pagesAdd'), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Pavadinimas', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Įrašykite puslapio pavadinimą']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('alias', 'Trumpinys DB', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::text('alias', old('alias'), ['class'=>'form-control', 'placeholder'=>'Įrašykite puslapio trumpinį']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('text', 'Tekstas', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::textarea('text', old('text'), ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Įrašykite talpinamą tekstą']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('images', 'Paveikslėlis', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Pasirinkite paveikslėlį', 'data-buttonName'=>"btn-primary", 'data-placeholder'=>"Failas nerastas"]) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-8">
                {!! Form::button('Išsaugoti', ['class'=>'btn btn-primary','type'=>'submit']) !!}
            </div>
        </div>

    {!! Form::close() !!}
    <script>
        CKEDITOR.replace('editor');
    </script>
</div>
<div class="wrapper container-fluid">

    {!! Form::open(['url'=>route('pagesEdit', array('page'=>$data['id'])), 'class'=>'form-horizontal', 'method'=>'post', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::hidden('id', $data['id']) !!}
            {!! Form::label('name', 'Pavadinimas"', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::text('name', $data['name'], ['class'=>'form-control', 'placeholder'=>'Įrašykite puslapio pavadinimą']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('alias', 'Trumpinys DB:', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::text('alias', $data['alias'], ['class'=>'form-control', 'placeholder'=>'Įrašykite puslapio trumpinį']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('text', 'Tekstas:', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-8">
                {!! Form::textarea('text', $data['text'], ['id'=>'editor', 'class'=>'form-control', 'placeholder'=>'Įrašykite talpinamą tekstą']) !!}
            </div>
        </div>
        
        <!-- parodome esame paveiksleli -->
        <div class="form-group">
            {!! Form::label('old_images', 'Esamas paveikslėlis:', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-offset-2 col-xs-10">
                {!! Html::image('img/'.$data['images'], '', ['class'=>'img-responsive', 'width'=>'150px']) !!}
                {!! Form::hidden('old_images', $data['images']) !!}
            </div>
        </div>
        
        <!-- jei norim keisti, apsirasome naujo paveikslelio ikelima -->
        <div class="form-group">
            {!! Form::label('images', 'Paveikslėlis:', ['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-5">
                {!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Pasirinkite paveikslėlį', 'data-buttonName'=>"btn-primary", 'data-placeholder'=>"Failas nerastas"]) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                {!! Form::button('Išsaugoti', ['class'=>'btn btn-primary','type'=>'submit']) !!}
            </div>
        </div>

    {!! Form::close() !!}

    <script>
        CKEDITOR.replace('editor');
    </script>
</div>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sveikas prisijungęs!</div>
                <ul>
                    <li><a href="{{ route('pages')}}">Turinio redagavimo zona</a>
                    </li>
                    <li><a href="{{ route('home') }}" target="_blank">donatas.space</a>

                    puslapis vartotojo akimis</li>
                </ul>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('templates.base')
@section('content')
<div class="text-drwhite text-2xl text-center">Glossary</div>
@foreach($glossary as $section)
    @include('templates.glossary.section', $section)
@endforeach
@endsection
@extends('templates.template')

@section('content')
<h2 class="pb-2 border-bottom">Projetos</h2>
@foreach ($data as $key =>$value )

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="feature col">

        <img src="{{$value->owner->avatar_url}}" class="card-img-top w-50 p-3" alt="...">

    <h2>{{$value->name}}</h2>
    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
    <a href="{{$value->html_url}}" class="icon-link">
      Abrir repositório!
      <svg class="bi" width="1em" height="1em"><use xlink:href="#chevron-right"></use></svg>
    </a>
   </div>
</div>
@endforeach

@endsection

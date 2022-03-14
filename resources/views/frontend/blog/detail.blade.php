@extends('frontend.template.template')
@section('content')


<div class="wrapper row3">
    <main class="hoc container clear">
        <h4>{{ $getPostBlog->title }}</h4>
        <p>{{ $getPostBlog->content }} </p>
    </main>
</div>

@endsection


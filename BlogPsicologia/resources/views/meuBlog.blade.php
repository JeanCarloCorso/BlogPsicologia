@extends('layouts.default')

@section('title', 'Meu Blog')

@section('content-fluid')

<div style="margin-top: 100px; ">
<div class="row g-3 justify-content-center custon-row">
    @include('includes.posts')
</div>

@endsection
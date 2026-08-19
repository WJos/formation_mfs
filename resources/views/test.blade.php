@extends('layouts.admin')

@section('content')
<div>
    <h1>La page Test</h1><br>
    <a href="{{ route('welcome') }}">Aller à l'acceuil</a>
    <a href="{{ route('first') }}">Aller à First</a>
</div>
@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
            <div class="container">
                <passport-clients></passport-clients>
            </div>

             <div class="container">
                <passport-authorized-clients></passport-authorized-clients>
            </div>

             <div class="container">
                <passport-personal-access-tokens></passport-personal-access-tokens>
            </div>
       
    </div>
</div>
@endsection

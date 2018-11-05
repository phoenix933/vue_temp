@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" id="vue-wrapper">
                <div class="card-header">Foo</div>
                    <weather></weather>
                    <router-link to="/">Go to Home</router-link>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

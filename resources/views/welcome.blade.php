@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Homepage</div>

                <div id="vue-wrapper" class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <input id="input" type="text" class="form-control" placeholder="search ...">
                                </div>
                                <div class="col-md-3">
                                    <a href="javascript:;" id="search" class="col-md-12 btn btn-success btn-block">Search</a>
                                </div>
                            </div>
                        </div>
                    </form><br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-primary" href="javascript:;" id="theButton" data-city="Istanbul" v-on:click="city()">Istanbul</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-primary" href="javascript:;" id="theButton" data-city="Berlin" v-on:click="city()">Berlin</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-primary" href="javascript:;" id="theButton" data-city="London" v-on:click="city()">London</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-primary" href="javascript:;" id="theButton" data-city="Helsinki" v-on:click="city()">Helsinki</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-primary" href="javascript:;" id="theButton" data-city="Dublin" v-on:click="city()">Dublin</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-primary" href="javascript:;" id="theButton" data-city="Vancouver" v-on:click="city()">Vancouver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

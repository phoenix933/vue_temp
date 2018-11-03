@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Homepage</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <input id="input" type="text" class="form-control" placeholder="search ...">
                                </div>
                                <a href="javascript:;" id="search" class="col-md-3 btn btn-primary btn-block">Search</a>
                            </div>
                        </div>
                    </form><br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-success" href="javascript:;">Istanbul</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-success" href="javascript:;">Berlin</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-success" href="javascript:;">London</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-success" href="javascript:;">Helsinki</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-success" href="javascript:;">Dublin</a>
                            </div>
                            <div class="col-md-4">
                                <a class="col-md-12 btn btn-success" href="javascript:;">Vancouver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

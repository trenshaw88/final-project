@extends('layouts.app-panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>Search by sender:</p>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group search" id="adv-search">
                                        <input type="text" class="form-control" placeholder="Mobile Number..." />
                                        <div class="input-group-btn">
                                            <div class="btn-group" role="group">

                                                <button type="button" class="btn btn-primary search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>



                    <div class="container-fluid text-center">
                        <div class="panel panel-default">
                        <img class="img" src="{{ asset('img/dollarphone.gif') }}">
                        <img class="img" src="{{ asset('img/tu-pinless.png') }}">
                        </div>
                    </div> 
 
                </div>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<!-- 
                    <p>Search by sender:</p>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group search" id="adv-search">
                                        <input type="text" class="form-control" placeholder="Mobile Number..." />
                                        <div class="input-group-btn">
                                            <div class="btn-group" role="group">

                                                <button type="button" class="btn btn-primary search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
 -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

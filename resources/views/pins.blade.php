@extends('layouts.app-panel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Select a product:</h4>
<!--                         <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="input-group search" id="adv-search">
                                        <input type="text" class="form-control" placeholder="" />


                                        <div class="input-group-btn">
                                            <div class="btn-group" role="group">
                                                <div class="dropdown dropdown-lg">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <form class="form-horizontal" role="form">
                                                          <div class="form-group">
                                                            <label for="product">Product</label>
                                                            <select class="form-control">
                                                                <option value="0" selected>All</option>
                                                                <option value="1">AT&T PIN Incomm </option>
                                                                <option value="2">AT&T PIN PREPAY</option>
                                                                <option value="3">PagePlus PIN</option>
                                                                <option value="4">T-Mobile</option>
                                                            </select>
                                                          </div>
                                  <button type="submit" class="btn btn-primary search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                            </div>
                        </div>

                                                <button type="button" class="btn btn-primary search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div> -->
                        </div>
                    
                    <div class="container-fluid text-center">
                        <div class="panel panel-default">
                            <!-- <div class="item">
                                 <img class="img" src="{{ asset('img/att.png') }}">
                                <div class="wrapper top right bg-info">
                                         <h4>$10.00</h4>
                                </div>
                            </div> -->
<!--                             <div class="item">
 -->                                 <img class="img" src="{{ asset('img/att.png') }}">
                                 <div class="bg-info1">
                                    <p>$10.00</p>
                                </div>
<!--                             </div>
 -->                            <!-- <div class="item"> -->
                                <img class="img" src="{{ asset('img/pageplus.png') }}">
                                <div class="bg-info2">
                                    <p>$9.00-$55.00</p>
                                </div>
                           <!--  </div> -->
                <!--             <div class="item"> -->
                                <img class="img" src="{{ asset('img/tmobile.jpg') }}">
                                <div class="bg-info3">
                                    <p>$55.00</h4>
                                </div>
                          <!--   </div> -->


                        </div>
                    </div> 
 
                </div>


                <div class="panel-body">
                    <div id="app">

                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

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

@extends('layouts.app-panel')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                        <div id="app">
                            <button class="btn" @click="showModal=true">Show</button>
                                <modal v-if="showModal" @close="showModal=false" name="Umesh" ass="ass">
                                    <p>dsfkdskf</p>
                                </modal>
                        </div>

                    </div> -->
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
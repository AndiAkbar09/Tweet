@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control bg-light" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="" id="" class="form-control bg-light" placeholder="Password">
                            </div>
                        </div>
                    </div>
                        <div class="pt-3">
                            <a href="">Forgot Password ?</a>
                        </div>
                        <div class="pt-2 py-2">
                            <button type="submit" class="btn btn-primary">Log In</button>
                        </div>
                 </div>
                <div class="card-header border-0">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('img/twit.jpg')}}" width="70" height="50" class="" alt="" style="margin-top: -40px;">
                    </div>
                    <h4 class="text-muted text-center">
                        She what's happening in <br> the world rigth now
                    </h4>
                    <div class="pt-3">
                            <a href="">Join Twitter Today.</a>
                        </div>
                        <div class="pt-2 py-2">
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

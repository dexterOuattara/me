@extends('layouts.recruter')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">

                <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

            </div>

        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Social Account</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nom</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="name" value="{{ $project->name }} ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Email / Contact Phone* </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="email" value="{{ $project->email }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Github</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="github" value="{{ $project->github }}">
                            <span class="fa fa-github form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Linkedin</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="linkedin" value="{{ $project->linkedin }}">
                            <span class="fa fa-linkedin form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Facebook</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="facebook" value="{{ $project->facebook }}">
                            <span class="fa fa-facebook form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Twitter</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="twitter" value="{{ $project->twitter }}">
                            <span class="fa fa-twitter form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Country </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="country" value="{{ $project->country }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Zip </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="zip" value="{{ $project->zip }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Mobile </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="mobile" value="{{ $project->mobile }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Address </label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <input type="text" class="form-control" name="address" value="{{ $project->address }}">
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>My profile Picture</h2>
                        <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                            <a href="mailto:{{ $project->email }}?Subject=Hello%20again">
                                <i class="fa fa-send"> </i> {{ $project->email }}
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="form-group">
                                <img class="img-circle img-responsive" src="/storage/avatars/{{ $project->avatar }}" />

                            </div>
                        </div>
                        <div class="col-md-12">

                            <h1> Backend skill</h1>
                            @foreach($project->skills as $skill)
                                <li class="btn btn-danger">{{$skill->name}}</li>
                            @endforeach
                        </div>

                        <div class="col-md-12">
                            <h1> Reward</h1>
                            @foreach($project->rewards as $reward)
                                <li class="btn btn-danger">{{$reward->name}}</li>
                            @endforeach
                        </div>

                        <div class="col-md-12">
                            <h1> Open for :</h1>
                            @foreach($project->typecontracts as $typecontract)
                                <li class="btn btn-danger">{{$typecontract->name}}</li>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <!-- /page content -->

@stop
@extends('layouts.recruter')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Create Project <small>CUSTOM YOUR FIRST ASSESSMENT </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <!-- Smart Wizard -->
                            {{--<div id="wizard" class="form_wizard wizard_horizontal">--}}
                                {{--<ul class="wizard_steps">--}}
                                    {{--<li>--}}
                                        {{--<a href="#step-1">--}}
                                            {{--<span class="step_no">1</span>--}}
                                            {{--<span class="step_descr">--}}
                                              {{--Step 1<br />--}}
                                              {{--<small>CHOOSE ASSESSMENT</small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#step-2">--}}
                                            {{--<span class="step_no">2</span>--}}
                                            {{--<span class="step_descr">--}}
                                              {{--Step 2<br />--}}
                                              {{--<small>FRAMEWORK / LANGUAGE</small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#step-3">--}}
                                            {{--<span class="step_no">3</span>--}}
                                            {{--<span class="step_descr">--}}
                                              {{--Step 3<br />--}}
                                              {{--<small>REQUIREMENT PROJECT</small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#step-4">--}}
                                            {{--<span class="step_no">4</span>--}}
                                            {{--<span class="step_descr">--}}
                                              {{--Step 4<br />--}}
                                              {{--<small>CANDIDATE</small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#step-5">--}}
                                            {{--<span class="step_no">5</span>--}}
                                            {{--<span class="step_descr">--}}
                                              {{--Step 5<br />--}}
                                              {{--<small>SEND INVITATION</small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#step-6">--}}
                                            {{--<span class="step_no">6</span>--}}
                                            {{--<span class="step_descr">--}}
                                              {{--Step 6<br />--}}
                                              {{--<small>PAYMENT</small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- End SmartWizard Content -->

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Name project :{{$assessment->name}} </h2>
                            <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                                <button type="button" class="btn btn-danger">Level : {{$assessment->level}}</button>
                                <button type="button" class="btn btn-primary">Type Assessment : {{$assessment->typeassessment->name}}</button>
                                <button type="button" class="btn btn-primary">Time : {{$assessment->timeassessment}}</button>
                                <button type="button" class="btn btn-primary">Price : {{$assessment->price}}</button>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                        <div class="col-me-12">
                            <div>
                                <img class="img-responsive" src="../images2/{{$assessment->image1}}" height="40px" alt="..." />
                                <h1>Description</h1>
                                {{$assessment->description}}
                                <h1>Requirement</h1>
                                {{$assessment->requirement1}}
                            </div>

                        </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="product_gallery">

                                    <a>
                                        <img src="../images2/{{$assessment->image1}}" alt="..." />
                                    </a>
                                    <a>
                                        <img src="../images2/{{$assessment->image1}}" alt="..." />
                                    </a>
                                    <a>
                                        <img src="../images2/{{$assessment->image1}}" alt="..." />
                                    </a>
                                    <a>
                                        <img src="../images2/{{$assessment->image1}}" alt="..." />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Customize Assessment</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                                <form class="form-horizontal form-label-left "method="post" action="{{ route('chooseframelang.form') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="category_id">PROGRAMMING LANGUAGE</label>
                                        <select class="form-control" name="proglanguage">
                                            @foreach($skills->where('tag', 'backend') as $skill)
                                                <option value="{{$skill->name}}">{{$skill->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">LANGUAGE FRAMEWORK</label>
                                        <select class="form-control" name="framelanguage">
                                            @foreach($skills->where('tag', 'framework') as $skill)
                                                <option value="{{$skill->name}}">{{$skill->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">VERSION HTML</label>
                                            <select name="framehtml" class="form-control">
                                                @foreach($skills->where('tag', 'HTML') as $skill)
                                                    <option value="{{$skill->name}}">{{$skill->name}}</option>
                                                @endforeach
                                            </select>
                                            </select>
                                    </div>
                                <div class="form-group">
                                    <label for="category_id">VERSION CSS</label>
                                    <select class="form-control" name="framecss">
                                        @foreach($skills->where('tag', 'frontend') as $skill)
                                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-5 col-sm-5 col-xs-12 text-center" for="dateassessment"> Assessment Date <span class="required">*</span>
                                        </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="date" id="DateAssessment" name="dateassessment" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-5 col-sm-5 col-xs-12 text-center" for="EndAssessment"> Assessment End <span class="required">*</span>
                                        </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="date" id="EndAssessment" name="endassessment" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-5 col-sm-5 col-xs-12 text-center" for="numberapplicant"> Number Candidate <span class="required">*</span>
                                        </label>
                                        <div class="col-md-7 col-sm-7 col-xs-12">
                                            <input type="int" class="form-control" id="numberapplicant" name="numberapplicant" value="" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="assessment_id" name="user_id"
                                               value="{{ Auth::user()->id }}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="timeassessment" name="timeassessment"
                                               value="{{$assessment->timeassessment}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="assessment_id" name="assessment_id"
                                               value="{{$assessment->id}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="description" name="description"
                                               value="{{$assessment->description}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="image1" name="image1"
                                               value="{{$assessment->image1}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="requirement1" name="requirement1"
                                               value="{{$assessment->requirement1}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="level" name="level"
                                               value="{{$assessment->level}}" readonly>
                                    </div>


                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="name" name="name"
                                               value="{{$assessment->name}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="name" name="price"
                                               value="{{$assessment->price}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="typeassessment" name="typeassessment"
                                               value="{{$assessment->typeassessment->name}}" readonly>
                                    </div>


                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Save & Next</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
@stop
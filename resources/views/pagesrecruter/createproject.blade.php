@extends('layouts.recruter')
@section('content')

    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>CUSTOMIZE YOUR FIRST ASSESSMENT</h2>

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
                                              {{--<small>FRAMEWORK / LANGUAGE </small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#step-3">--}}
                                            {{--<span class="step_no">3</span>--}}
                                            {{--<span class="step_descr">--}}
                                              {{--Step 3<br />--}}
                                              {{--<small>Done</small>--}}
                                          {{--</span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            <!-- End SmartWizard Content -->






                            <!-- End SmartWizard Content -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-12 hoverdiv">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Pick your Assesment directly in the Test Labrairy </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>IMAGE</th>
                                    <th>TYPE OF PROJECT</th>
                                    <th>PROJECT NAME</th>
                                    <th>RATING</th>
                                    <th>SEE DETAIL</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($projects)
                                    @foreach($projects as $project)
                                    <tr>
                                    <td><img src="images2/{{ $project->image1 }}" alt="" height="42" width="42"></td>
                                        <td>{{ $project->typeassessment->name }}</td>
                                        <td>{{ $project->name }}</td>
                                    <td> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </td>
                                    <td>
                                        <a href="/chooseframelang/{{ $project->id }}" class="btn btn-primary btn-md"><i class="fa fa-folder"></i> View </a>
                                    </td>
                                </tr>
                                    @endforeach
                                @else
                                    <p class="text-center text-primary">Library not available created Yet!</p>
                                @endif
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
                {{--<div class="col-md-5 col-sm-5 col-xs-12">--}}
                    {{--<div class="x_panel">--}}
                        {{--<div class="x_title">--}}
                            {{--<h2>Import your own assessment</h2>--}}
                            {{--<div class="clearfix"></div>--}}
                        {{--</div>--}}
                        {{--<div class="x_content">--}}
                            {{--<p>Zip all requirement for your assemssment, for exemple PDF and part of code... </p>--}}
                            {{--<div class="input-group">--}}
                                {{--<div class="custom-file">--}}
                                    {{--<input type="file" class="custom-file-input" id="inputGroupFile04">--}}
                                    {{--<label class="custom-file-label" for="inputGroupFile04">Choose PDF file</label>--}}
                                {{--</div>--}}
                                {{--<div class="custom-file">--}}
                                    {{--<input type="file" class="custom-file-input" id="inputGroupFile04">--}}
                                    {{--<label class="custom-file-label" for="inputGroupFile04">Choose Code Zip file</label>--}}
                                {{--</div>--}}
                                {{--<a href="/chooseframelang">--}}
                                    {{--<div class="input-group-append">--}}
                                        {{--<button class="btn btn-outline-secondary" type="button">submit</button>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

            </div>


        </div>
    </div>

@stop
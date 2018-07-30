@extends('layouts.recruter')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Score candidate</h2>
                        <div class="btn-group" role="group" aria-label="Basic example" style="float:right">
                            <button type="button" class="btn btn-danger">Evaluation in Progress</button>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th>Rank</th>
                                {{--<th>Picture</th>--}}
                                <th>Name</th>
                                <th>Score</th>
                                <th>Identity / Authenticity</th>
                                <th>Evaluate Now</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if(Auth::user())
                            @foreach($dashboards as $dashboard)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    {{--<td>--}}
                                        {{--<ul class="list-inline">--}}
                                            {{--<li>--}}
                                                {{--<a href="">--}}
                                                    {{--<img class="img-circle" src="/storage/avatars/{{ Auth::user()->avatar }} " alt="{{ Auth::user()->name }}" >--}}
                                                {{--</a>--}}

                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</td>--}}
                                    <td>
                                        <a href="/contact/{{$dashboard->candidate_id}}" target="_blank">{{$dashboard->name}}</a>
                                    </td>


                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View Project  <br> 09</a>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-code"></i> View Code <br> 07</a>
                                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-folder"></i> Record Video </a>
                                    </td>

                                    <td>
                                        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> Sure </a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Evaluate</button>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                                <p>No Posts created Yet!</p>
                            @endif

                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>@stop
@extends('candidate.layout.candidate')

@section('content')
    <div class="right_col" role="main">
        <div class="">


            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>HOME</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="row">
                                <a href="/candidate/calltoapply">
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            {{--<img src="{{asset('images2/logo/mest.png')}}" alt="image" />--}}
                                        </div>
                                        <div class="caption text-center">
                                            <p>CALL TO APPLY</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="/candidate/pendingproject">
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            {{--<img src="{{asset('images2/logo/meltwater.jpg')}}" alt="image" />--}}
                                        </div>
                                        <div class="caption text-center">
                                            <p>PENDING PROJECT</p>
                                        </div>
                                    </div>
                                </a>
                                {{--<a href="/candidate/meeting">--}}
                                    {{--<div class="col-md-3">--}}
                                        {{--<div class="thumbnail">--}}
                                            {{--<img src="{{asset('images2/logo/andela.jpg')}}" alt="image" />--}}
                                        {{--</div>--}}
                                        {{--<div class="caption text-center">--}}
                                            {{--<p>MEETING</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</a>--}}
                                <a href="/candidate/myresume">
                                    <div class="col-md-3">
                                        <div class="thumbnail">
                                            {{--<img src="{{asset('images2/logo/mtn.png')}}" alt="image" />--}}
                                        </div>
                                        <div class="caption text-center">
                                            <p>MY RESUME</p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

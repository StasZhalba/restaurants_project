@extends('admin.layout')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-md-6 portlets">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">Quick Post</div>
                        {{--<div class="widget-icons pull-right">
                            <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                            <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                        </div>--}}
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">

                        <div class="padd">


                            <div class="form quick-post">
                                <!-- Edit profile form (not working)-->
                                <form class="form-horizontal" method="post" action="{{route('admin.restaurantStore')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    @foreach($restaurant->images as $image)
                                        <div class="col-md-4" style="height: 200px; width: 160px;">
                                            <a class="btn btn-danger btn-sm" href="{{route('admin.restaurantDeleteImg', ['id' => $image->id])}}" title="Delete image">x</a>
                                            <img src="/uploads/{{$image->fileName}}" width="150">
                                        </div>
                                    @endforeach
                                </form>
                            </div>


                        </div>
                        <div class="widget-foot">
                            <!-- Footer goes here -->
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section>
    <!-- project team & activity end -->
    </section>
@endsection
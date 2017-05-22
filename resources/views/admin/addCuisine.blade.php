@extends('admin.layout')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-md-6 portlets">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-left">Cuisine</div>
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
                                <form class="form-horizontal" method="post" action="{{route('admin.cuisineStore')}}">
                                {{ csrf_field() }}
                                <!-- Title -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="cuisine_name">Cuisine name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="cuisine_name" name="cuisine_name" required>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="form-group">
                                        <!-- Buttons -->
                                        <div class="col-lg-offset-2 col-lg-9">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
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
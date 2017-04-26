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
                                <form class="form-horizontal" method="post" action="{{route('admin.addRestaurant')}}">
                                {{ csrf_field() }}
                                <!-- Title -->
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="restaurant_name">Restaurant name</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="restaurant_name">
                                        </div>
                                    </div>
                                    <!-- Cuisine -->
                                    <div class="form-group">
                                        <label for="cuisine_id" class="control-label col-lg-2">Cuisines</label>
                                        <div class="col-lg-10">
                                            <select class="form-control" name="cuisine_id" required>
                                                <option value="">- Choose Cuisines -</option>
                                                @foreach($cuisines as $c)
                                                    <option value="{{ $c->id }}">{{ $c->cuisine_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{--Dishes--}}
                                    <div class="form-group">
                                        <label for="dish_id" class="control-label col-lg-2">Select dishes</label>
                                        <div class="col-lg-10">
                                            <select name="dish_id[]" multiple class="form-control" required>
                                                <option value="" disabled>Choose one or more</option>
                                                @foreach($dishes as $dish)
                                                    <option value="{{ $dish->id }}">{{ $dish->dish_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Address -->
                                    <div class="form-group">
                                        <label for="restaurant_address" class="control-label col-lg-2" for="content">Restaurant address</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="restaurant_address">
                                        </div>
                                    </div>
                                    <!-- Seats -->
                                    <div class="form-group">
                                        <label for="restaurant_seats" class="control-label col-lg-2" for="content">Restaurant seats</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="restaurant_seats">
                                        </div>
                                    </div>
                                    <!-- Owner -->
                                    <div class="form-group">
                                        <label for="restaurant_owner" class="control-label col-lg-2" for="content">Restaurant owner</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" id="restaurant_owner">
                                        </div>
                                    </div>
                                    {{--Images--}}
                                    <div class="form-group">
                                        <label for="image" class="control-label col-lg-2">Choose image</label>
                                        <div class="col-lg-10">
                                            <input type="file" name="image[]" multiple accept="image/*" required>
                                        </div>
                                    </div>
                                    {{--Content--}}
                                    <div class="form-group">
                                        <label class="control-label col-lg-2" for="description">Description</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" id="description"></textarea>
                                        </div>
                                    </div>

                                    <!-- Buttons -->
                                    <div class="form-group">
                                        <!-- Buttons -->
                                        <div class="col-lg-offset-2 col-lg-9">
                                            <button type="submit" class="btn btn-primary">Publish</button>
                                            <button type="submit" class="btn btn-danger">Save Draft</button>
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
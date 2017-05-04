@extends('admin.layout')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Hover Table
                    </header>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Restaurant name</th>
                            <th>Cuisine</th>
                            <th>Author</th>
                            <th>Address</th>
                            <th>Seats</th>
                            <th>Owner</th>
                            <th>Description</th>
                            <th>Rating</th>
                            <th>Updated</th>
                            <th>Views</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($restaurants as $restaurant)
                        <tr>
                            <td>{{$restaurant->restaurant_name}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
                <a class="btn btn-primary" href="{{route('admin.restaurantAdd')}}" title="Bootstrap 3 themes generator">Add restaurant</a>
            </div>
        </section>
        <!-- project team & activity end -->
    </section>
@endsection
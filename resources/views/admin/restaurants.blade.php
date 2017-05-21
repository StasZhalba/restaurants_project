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
                            <th>Rating</th>
                            <th>Updated</th>
                            <th>Views</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($restaurants as $restaurant)
                        <tr>
                            <td>{{$restaurant->restaurant_name}}</td>
                            <td>{{$restaurant->cuisine->cuisine_name}}</td>
                            <td>{{$restaurant->user->name}}</td>
                            <td>{{$restaurant->restaurant_address}}</td>
                            <td>{{$restaurant->rating}}</td>
                            <td>{{$restaurant->updated_at}}</td>
                            <td>{{$restaurant->views}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.restaurantEdit', ['id' => $restaurant->id])}}" >Edit</a>
                                <a class="btn btn-danger btn-sm" href="{{route('admin.restaurantDelete', ['id' => $restaurant->id])}}" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
                <a class="btn btn-success" href="{{route('admin.restaurantAdd')}}" >Add restaurant</a>
            </div>
        </section>
        <!-- project team & activity end -->
    </section>
@endsection
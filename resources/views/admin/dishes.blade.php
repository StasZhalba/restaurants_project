@extends('admin.layout')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        Dishes
                    </header>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Dish name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dishes as $dish)
                        <tr>
                            <td class="col-md-2">{{$dish->dish_name}}</td>
                            <td><img src="/uploads/{{$dish->file_name}}" height="100"></td>
                            <td class="col-md-5">{{$dish->description}}</td>
                            <td>{{$dish->updated_at}}</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="{{route('admin.dishDelete', ['id' => $dish->id])}}" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
                <a class="btn btn-success" href="{{route('admin.dishAdd')}}" >Add dish</a>
            </div>
        </section>
        <!-- project team & activity end -->
    </section>
@endsection
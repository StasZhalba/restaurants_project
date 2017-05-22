@extends('admin.layout')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-sm-8">
                <section class="panel">
                    <header class="panel-heading">
                        Cuisines
                    </header>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Cuisine name</th>
                            <th>Updated</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cuisines as $cuisine)
                        <tr>
                            <td>{{$cuisine->cuisine_name}}</td>
                            <td>{{$cuisine->updated_at}}</td>
                            <td>
                                <a class="btn btn-danger btn-sm" href="{{route('admin.cuisineDelete', ['id' => $cuisine->id])}}" >Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </section>
                <a class="btn btn-success" href="{{route('admin.cuisineAdd')}}" >Add cuisine</a>
            </div>
        </section>
        <!-- project team & activity end -->
    </section>
@endsection
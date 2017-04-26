@extends('admin.layout')

@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="col-sm-6">
                <section class="panel">
                    <header class="panel-heading">
                        Hover Table
                    </header>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Sumon</td>
                            <td>Mosa</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>
                    </table>
                </section>
                <a class="btn btn-primary" href="{{route('admin.restaurantAdd')}}" title="Bootstrap 3 themes generator">Add restaurant</a>
            </div>
        </section>
        <!-- project team & activity end -->
    </section>
@endsection
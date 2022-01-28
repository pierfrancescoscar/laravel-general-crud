@extends('layouts.main')

@section('main-content')
    <section class="container p-3">

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Action</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($jokes as $joke)
                            <tr>
                                <td>{{ $joke->id }}</td>
                                <td>{{ $joke->title }}</td>
                                <td>{{ $joke->description }}</td>
                                <td>
                                    <a class="btn btn-success" href="/">Show</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="/">Edit</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="/">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
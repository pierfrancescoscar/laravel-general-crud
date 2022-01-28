@extends('layouts.main')

@section('main-content')
    <section class="container p-3">

        @if(session('deleted'))
        <div class="alert alert-success">
            <strong>{{ session('deleted') }} successfully deleted</strong>
        </div>
        @endif

        <div class="row">
            <div class="col-12 p-3">
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
                                    <a class="btn btn-success" href="{{route('jokes.show', $joke->id)}}">Show</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('jokes.edit', $joke->id)}}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('jokes.destroy', $joke->id)}}" method="POST">
                                        @csrf 
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" value="delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
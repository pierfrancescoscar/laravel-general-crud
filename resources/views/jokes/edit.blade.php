@extends('layouts.main')

@section('main-content')
    <section class="container p-3 py-5">
        <h3 class="mb-5">Edit: {{ $joke->title }}</h3>

        <div class="row text-center">
            <div class="col-12">
                <form action="{{route('jokes.update', $joke->id)}}" method="POST">
                    @csrf
                    @method('PATCH')

                    {{-- Title --}}
                    <label for="title" class="form-label">Title</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="title" name="title" value="{{$joke->title}}">
                    </div>
                    {{-- Description --}}
                    <label for="description" class="form-label">Description</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="description" name="description" value="{{$joke->description}}">
                    </div>
                    {{-- Thumb --}}
                    <label for="thumb" class="form-label">Thumb</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="thumb" name="thumb" value="{{$joke->thumb}}">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
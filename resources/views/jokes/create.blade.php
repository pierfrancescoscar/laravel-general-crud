@extends('layouts.main')

@section('main-content')
    <section class="container p-3 py-5">
        <h3 class="mb-5">Post a new joke</h3>

        <div class="row text-center">
            <div class="col-12">
                <form action="{{route('jokes.store')}}" method="POST">
                    @csrf
                    {{-- Title --}}
                    <label for="title" class="form-label">Title</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="title" name="title">
                    </div>
                    {{-- Description --}}
                    <label for="description" class="form-label">Description</label>
                    <div class="mb-3">
                        <textarea type="text" class="form-label" id="description" name="description"></textarea>
                    </div>
                    {{-- Thumb --}}
                    <label for="thumb" class="form-label">Thumb</label>
                    <div class="mb-3">
                        <input type="text" class="form-label" id="thumb" name="thumb">
                    </div>
                    {{-- Submit --}}
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Post a new joke</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
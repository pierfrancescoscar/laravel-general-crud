@extends('layouts.main')

@section('main-content')
    <section class="container py-5">
        <h3 class="mb-5">{{$joke->title}}</h3>

        <div class="row">
            {{-- Image --}}
            <div class="col-3">
                <img class="img-fluid" src="{{ $joke->thumb }}" alt="{{$joke->title}}">
            </div>
            {{-- Description --}}
            <div class="col-8">
                <p>{!!$joke->description!!}</p>
            </div>

            <a class="mt-5" href="{{route('jokes.index')}}">Back to archive</a>
        </div>
    </section>
@endsection

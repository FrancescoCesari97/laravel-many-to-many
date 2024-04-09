@extends('layouts.app')

@section('title', 'crea projects')

@section('content')
    <section>
        <div class="container py-4">

            <a class="btn btn-primary py-2" href="{{ route('admin.projects.index') }}">torna alla lista</a>
            <a class="btn btn-primary py-2" href="{{ route('admin.projects.edit', $project) }}">vai alla modifica</a>
            <h1 class=" text-center">{{ $project->title }}</h1>

            <div class="row py-5">

                <div class="col-9 justify-content-start ">
                    <p class="fs-5  ">{{ $project->content }}</p>

                </div>

            </div>
            @foreach ($project->technology as $technology)
                {{ $technology->label }}
            @endforeach()



        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

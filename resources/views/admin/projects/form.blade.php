@extends('layouts.app')

@section('title', (empty($project->id) ? 'Creazione' : 'Modifica') . 'project')

@section('content')
    <div class="container">

        <h2 class=" my-4">
            {{ empty($project->id) ? 'Creazione' : 'Modifica' }} progetto
        </h2>

        <form action="{{ empty($project->id) ? route('admin.projects.store') : route('admin.projects.update', $project) }}"
            class="py-5 row g-5" method="POST">

            @if (!empty($project->id))
                @method('PATCH')
            @endif

            @csrf

            <div class="col-6">
                <label class="form-label" for="title">Titolo</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title"
                    value="{{ old('title') }}" {{-- required --}}>

                {{-- @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror --}}

            </div>

            <div class="col-6 ">
                <label class="form-label" for="type_id">Categoria</label>
                <select class="form-select" name="type_id" id="type_id">
                    <option value="">seleziona una categoria</option>

                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->label }}</option>
                    @endforeach

                </select>
            </div>




            <div class="col-12">
                <label class="form-label" for="content">Contenuto</label>
                <textarea class="form-control" name="content" id="content" rows="5">{{ old('content') }}</textarea>
            </div>


            <div class="col-3">

                <button class="btn btn-success">{{ empty($project->id) ? 'Creazione' : 'Modifica' }} progetto</button>
            </div>

        </form>




    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

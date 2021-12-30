@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf

                        
                        
                        <div class="row mb-3">
                            <label for="subject" class="col-md-4 col-form-label text-md-end">
                                {{ __('Subject') }}
                            </label>

                            <div class="col-md-6">
                                <input id="subject" type="text" 
                                    class="form-control @error('subject') is-invalid @enderror" 
                                    name="subject" value="{{ old('subject') }}" required 
                                    autofocus>

                                @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-3">
                            <label for="publish_date" class="col-md-4 col-form-label text-md-end">
                                {{ __('Publish date') }}
                            </label>

                            <div class="col-md-6">
                                <input id="publish_date" type="date" 
                                    class="form-control @error('publish_date') is-invalid @enderror" 
                                    name="publish_date" value="{{ old('publish_date') }}" required >

                                @error('publish_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">
                                {{ __('Image') }}
                            </label>

                            <div class="col-md-6">
                                <input id="image" type="text" 
                                    class="form-control @error('image') is-invalid @enderror" 
                                    name="image" value="{{ old('image') }}" required >

                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slug" class="col-md-4 col-form-label text-md-end">
                                {{ __('Slug') }}
                            </label>

                            <div class="col-md-6">
                                <input id="slug" type="text" 
                                    class="form-control @error('slug') is-invalid @enderror" 
                                    name="slug" value="{{ old('slug') }}" required >

                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="text" class="col-md-4 col-form-label text-md-end">
                                {{ __('Text') }}
                            </label>

                            <div class="col-md-6">
                                <textarea id="text" type="text" 
                                    class="form-control @error('text') is-invalid @enderror" 
                                    name="text" >{{ old('text') }}</textarea>

                                @error('text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>

                                <a class='btn btn-secondary' href="{{route('post.create')}}">
                                    {{__('New post')}}
                                </a>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
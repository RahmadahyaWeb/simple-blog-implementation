@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ route('posts.update', $post->slug) }}" method="POST">
                                @csrf
                                @method('put')
                                <div class="col-md-12 mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        id="title" name="title" value="{{ old('title', $post->title) }}">
                                    @error('title')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="category_id"
                                        class="form-label @error('title') is-invalid @enderror">Category</label>
                                    <select name="category_id" id="category_id"
                                        class="form-select @error('category_id') is-invalid @enderror">
                                        <option selected disabled>Select category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected(old('category_id') == $category->id || $post->category_id == $category->id)>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="content" class="form-label">Content</label>
                                    <textarea name="content" id="content" rows="8" class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
                                    @error('content')
                                        <p class="text-danger">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

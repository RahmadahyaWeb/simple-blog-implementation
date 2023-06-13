@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Your Posts') }}</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div id="alert" class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row">
                            @if ($posts->count() > 0)
                                @foreach ($posts as $post)
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $post->title }}</h5>
                                                <p class="card-text bg-text-secondary">
                                                    {{ $post->content }}
                                                </p>
                                                <div class="d-flex justify-content-end">
                                                    <a href="{{ route('posts.edit', $post->slug) }}"
                                                        class="btn btn-primary me-2">
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#delete">
                                                        Delete
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text">
                                                    <small class="text-body-secondary">
                                                        {{ $post->updated_at->diffForHumans() }}
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="col">
                                    <div class="alert alert-danger text-center" role="alert">
                                        There is no posts yet!
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure want to delete the post?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    If you delete it, you can't see it anymore!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

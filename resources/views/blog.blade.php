@extends('layouts.frontend')
@section('article')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                    <h3 class="mb-0">Featured post</h3>
                    <div class="mb-1 text-body-secondary">Nov 12</div>
                    <p class="card-text mb">This is a wider card with supporting text below as a natural
                        lead-in to additional content.</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <nav class="blog-pagination mt-4" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled">Newer</a>
    </nav>
@endsection

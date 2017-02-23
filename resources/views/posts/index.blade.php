@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-primary">
                    <div class="panel-heading">All Posts</div>

                    <div class="panel-body">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-md-10">
                                <h3>{{ $post->title }}</h3>
                                <p><em>{{ $post->created_at->diffForHumans() }} -- by : ????????</em></p>

                                <p>{{ $post->body }}</p>
                                <hr/>
                                <p><a href="#">Like()</a> | <a href="#">dislike()</a> | <a href="#">comment() see more...</a></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
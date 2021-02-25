@extends('admin.layout')

@section('content')

    <div class="container">
        @include('common.message')
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">文章列表</h3>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach ($posts as $post)
                                <li>
                                    <a href="{{ route('blog.detail', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                    <em>({{ $post->published_at }})</em>
                                    <p>
                                        {{ str_limit($post->content) }}
                                    </p>
                                </li>
                                <a href="{{ url('admin/post/'.$post->id.'/edit')   }}" class="btn btn-default btn-xs"><i class="fa fa-fw fa-edit"></i> 修改</a>
                            @endforeach

                        </ul>


                        {!! $posts->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

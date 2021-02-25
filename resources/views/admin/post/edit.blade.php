@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-md-offset-2">
                <div class="card">
                    <div class="card-header">文章编辑</div>
                    <div class="card-body">

                        @include('admin.partials.errors')

                        @include('admin.post._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

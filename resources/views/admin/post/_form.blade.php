<form role="form" method="post" action="{{ url('admin/post/'.$post->id ) }}">
    <input type="hidden" name="_method" value="put"/>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">slug</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="slug" value="{{ $post->slug }}"
                   autofocus>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">title</label>
        <div class="col-md-8">
            <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-2 col-form-label text-md-right">content</label>
        <div class="col-md-8">
            <textarea rows="5" class="form-control" cols="20" name="content">
                {{$post->content}}
            </textarea>
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>

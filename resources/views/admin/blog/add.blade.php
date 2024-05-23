<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if (isset($blog))
                <form action="/admin/posts/blog/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/posts/blog" method="POST" enctype="multipart/form-data">
                    
                @endif
                    @csrf

                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control @error ('title') is-invalid @enderror" placeholder="title" value="{{isset($blog) ? $blog->title : old('title')}}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <select name="kategori_id" class="form-control" id="">
                                    <option value="">--KATEGORI--</option>
                                    @foreach ($kategori as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="cover">Cover</label>
                                <input type="file" name="cover" id="cover" class="form-control @error ('cover') is-invalid @enderror " placeholder="cover">
                                @error('cover')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                                @if (isset($blog))
                                    <img src="/{{$blog->cover}}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="text">Body</label>
                                <textarea type="text" id="summernote" name="body" id="body" class="form-control @error ('body') is-invalid @enderror" placeholder="Body">{{isset($blog) ? $blog->name : old('body')}}</textarea>
                                @error('body')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

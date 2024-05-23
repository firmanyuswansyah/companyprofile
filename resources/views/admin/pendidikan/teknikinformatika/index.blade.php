<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
    
                <form action="/admin/pendidikan/teknikinformatika/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
    
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Nama Prodi</label>
                                <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror" placeholder="Nama Organisasi" value="{{isset($teknikinformatika) ? $teknikinformatika->name : old('name')}}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="cover">Gambar</label>
                                <input type="file" name="cover" id="cover" class="form-control @error ('cover') is-invalid @enderror " placeholder="Gambar">
                                @error('cover')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                                
                                @if (isset($teknikinformatika))
                                    <img src="/{{$teknikinformatika->cover}}" width="100%" class="mt-4" alt="">
                                @endif
        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc">Deskripsi</label>
                                <textarea name="desc" id="summernote" class="form-control @error ('desc') is-invalid @enderror" id="" cols="30" rows="10">{{$teknikinformatika->desc}}</textarea>
                                @error('desc')
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

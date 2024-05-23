<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
    
                <form action="/admin/ukm/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
    
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Tentang</label>
                                <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror" placeholder="Tentang apa?" value="{{isset($ukm) ? $ukm->name : old('name')}}">
                                @error('name')
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
                                
                                @if (isset($ukm))
                                    <img src="/{{$ukm->cover}}" width="100%" class="mt-4" alt="">
                                @endif
        
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc">Deskripsi</label>
                                <textarea name="desc" class="form-control @error ('desc') is-invalid @enderror" id="summernote" cols="30" rows="10">{{$ukm->desc}}</textarea>
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

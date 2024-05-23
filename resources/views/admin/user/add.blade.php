<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset($user))
                <form action="/admin/user/{{$user->id}}" method="POST">
                    @method('PUT')
                @else
                <form action="/admin/user" method="POST">
                    
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim" class="form-control @error ('nim') is-invalid @enderror" placeholder="NIM" value="{{isset($user) ? $user->nim : old('nim')}}">
                        @error('nim')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror" placeholder="Nama" value="{{isset($user) ? $user->name : old('name')}}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" placeholder="Email" value="{{isset($user) ? $user->email : old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Jurusan">
                            <option value="" disabled selected>Pilih Jurusan</option>
                            <option value="Teknik Informatika S1" {{ isset($user) && $user->jurusan == 'Teknik Informatika S1' ? 'selected' : '' }}>Teknik Informatika S1</option>
                            <option value="Sistem Informasi S1" {{ isset($user) && $user->jurusan == 'Sistem Informasi S1' ? 'selected' : '' }}>Sistem Informasi S1</option>
                        </select>
                        @error('jurusan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                                                                         
                    
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" name="semester" id="semester" class="form-control @error ('semester') is-invalid @enderror" placeholder="Semester" value="{{isset($user) ? $user->semester : old('semester')}}">
                        @error('semester')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error ('password') is-invalid @enderror " placeholder="*******">
                        @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="re-password">Konfirmasi Password</label>
                        <input type="password" name="re_password" id="re_password" class="form-control @error ('re_password') is-invalid @enderror" placeholder="*******">
                        @error('re_password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/user/create" class="btn btn-primary mb-3"><i class="fas fa-plus">Tambah</i></a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>NIM</td>
                        <td>Jurusan</td>
                        <td>Semester</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>

                    @foreach ($user as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->nim}}</td>
                        <td>{{$item->jurusan}}</td>
                        <td>{{$item->semester}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/admin/user/{{$item->id}}/edit" class="btn btn-success mx-2"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/admin/user/{{$item->id}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>
                                </form>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>
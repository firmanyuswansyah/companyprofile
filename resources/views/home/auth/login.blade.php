<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/img/professor.png" width="100%" alt="">
        </div>
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">

                    <div class="text-center"><strong><H4>LOGIN</H4></strong></div>
                    <p class="text-center">Masukkan akun anda</p>

                    @if (session()->has('loginError'))
                    <div class="alert alert-danger">{{session('loginError')}}</div>
                    @endif

                    <form action="/login/do" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for=""><b>Email</b></label>
                            <input type="text" name="email" class="form-control" placeholder="Masukan Email">
                        </div>

                        <div class="form-group">
                            <label for=""><b>Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="*******">
                        </div>

                        <button class="btn btn-success mt-4 px-5">Login <i class="fas fa-sign-in-alt"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
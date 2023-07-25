@include('partials.header')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <hr>
                    @if(session('error'))
                    <div class="alert alert-danger">
                        <b>Opps!</b> {{session('error')}}
                    </div>
                    @endif
                    <form action="{{ route('actionlogin') }}" method="post">
                        @csrf
                        <input name="email" type="email" placeholder="Email" />
                        <input  name="password" type="password" placeholder="Password" />
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <hr>
                    @if(session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                    @endif
                    <form action="{{route('actionregister')}}" method="post">
                        @csrf
                        <input name="nama" type="text" placeholder="Nama *" required/>
                        <input name="email"type="email" placeholder="Email *" required/>
                        <input name="password" type="password" placeholder="Password *" required/>
                        <input name="alamat" type="text" placeholder="Alamat"/>
                        <input name="no_telp" type="text" placeholder="No Handphone *" required/>
                        <select name="level" required>
                            <option>-- Register Sebagai --</option>
                            <option value="0">Penyewa</option>
                            <option value="1">Pemberi Sewa</option>
                        </select>
                        <button type="submit" class="btn btn-default" style="margin-top: 10px;">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
@include('partials.footer')
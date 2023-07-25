@include('partials.header')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="signup-form"><!--sign up form-->
                    <h2>Profile User Pemberi Sewa</h2>
                    <hr>
                    @if(session('messagesuccess'))
                    <div class="alert alert-success">
                        {{session('messagesuccess')}}
                    </div>
                    @elseif (session('messageerror'))
                    <div class="alert alert-error">
                        {{session('messageerror')}}
                    </div>
                    @endif
                    <form action="{{ route('updateprofile') }}" method="post">
                        @csrf

                        <input name="nama" type="text" placeholder="Nama *" value="{{ $nama }}" required />
                        <input name="email" type="email" placeholder="Email *" value="{{ $email }}" required />
                        <input name="password" type="password" placeholder="Password *" value="{{ $password }}" required readonly />
                        <input name="alamat" type="text" placeholder="Alamat" value="{{ $alamat }}" />
                        <input name="no_telp" type="text" placeholder="No Handphone *" required value="{{ $no_telp }}" />
                        <select name="level" disabled required>
                            <option>-- Register Sebagai --</option>
                            <option value="0" {{ $level==0?"selected":"" }}>Penyewa</option>
                            <option value="1" {{ $level==1?"selected":"" }}>Pemberi Sewa</option>
                        </select>
                        <button type="submit" class="btn btn-default pull-right" style="margin-top: 10px;">Update</button>
                    </form>
                </div><!--/sign up form-->
            </div>
            <div class="col-sm-6 clearfix">
                <div class="bill-to">
                    <p>Input Kendaraan</p>
                    <hr>
                    @if(session('messagemobilsuccess'))
                    <div class="alert alert-success">
                        {{session('messagemobilsuccess')}}
                    </div>
                    @elseif (session('messagemobilerror'))
                    <div class="alert alert-error">
                        {{session('messagemobilerror')}}
                    </div>
                    @endif
                    <div class="signup-form">
                        <form action="{{route('insertmobil')}}" method="post">
                            @csrf
                            <input name="nama"  type="text" placeholder="Nama Mobil">
                            <input name="merk"  type="text" placeholder="Merk*">
                            <input name="kategori"  type="text" placeholder="Kategori">
                            <input name="jumlah"  type="number" placeholder="Jumlah">
                            <input name="hargasewa"  type="number" placeholder="Harga Sewa">
							<textarea name="deskripsi"  rows="8"></textarea>
                            <button type="submit" class="btn btn-warning" style="margin-top: 10px;">Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section><!--/form-->
@include('partials.footer')
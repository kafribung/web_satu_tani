<x-main>
    @slot('cssTambahan')
    <link rel="stylesheet" href="{{ asset('assets/css/bantupengguna.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pesanan.css') }}">
    @endslot
    <!--====== Dashboard ======-->
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="dash">
                <div class="container">
                    <div class="row">
                        @include('client.dashboard._sidebar-dashboard')
                        {{-- <div class="col-lg-9 col-md-12">
                            <div
                                class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <div class="dash__address-header">
                                        <h1 class="dash__h1">Address Book</h1>
                                        <div>

                                            <span class="dash__link dash__link--black u-s-m-r-8">

                                                <a href="dash-address-make-default.html">Make default shipping
                                                    address</a></span>

                                            <span class="dash__link dash__link--black">

                                                <a href="dash-address-make-default.html">Make default shipping
                                                    address</a></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius u-s-m-b-30">
                                <div class="dash__table-2-wrap gl-scroll">
                                    <table class="dash__table-2">
                                        <thead>
                                            <tr>
                                                <th>Action</th>
                                                <th>Nama Lengkap</th>
                                                <th>Alamat</th>
                                                <th>Kode Pos</th>
                                                <th>No. Hp</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>

                                                    <a class="address-book-edit btn--e-transparent-platinum-b-2"
                                                        href="dash-address-edit.html">Edit</a></td>
                                                <td>John Doe</td>
                                                <td>4247 Ashford Drive Virginia VA-20006 USA</td>
                                                <td>Virginia VA-20006 USA</td>
                                                <td>(+0) 900901904</td>
                                                <td>
                                                    <div class="gl-text">Default Shipping Address</div>
                                                    <div class="gl-text">Default Billing Address</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <a class="address-book-edit btn--e-transparent-platinum-b-2"
                                                        href="dash-address-edit.html">Edit</a></td>
                                                <td>Doe John</td>
                                                <td>1484 Abner Road</td>
                                                <td>Eau Claire WI - Wisconsin</td>
                                                <td>(+0) 7154419563</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div>

                                <a class="dash__custom-link btn--e-brand-b-2" href="dash-address-add.html"><i
                                        class="fas fa-plus u-s-m-r-8"></i>

                                    <span>Tambah Alamat</span></a></div>
                        </div> --}}

                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    @if (session('message'))
                                    <p class="alert alert-danger">{{ session('message') }}</p>
                                    @endif

                                    <h1 class="dash__h1 u-s-m-b-14">Edit Profile</h1>
                                    <span class="dash__text u-s-m-b-30">Sepertinya Anda belum memperbarui profil Anda</span>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form class="dash-edit-p" action="{{ route('profil.edit') }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="reg-lname">NAMA LENGKAP</label>
                                                        <input name="name" value="{{ old('name') ?? $user->name }}" class="input-text input-text--primary-style" type="text"
                                                            id="reg-lname" placeholder="Nama Lengkap">
                                                        @error('name')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="reg-email">E-MAIL</label>
                                                        <input name="email" value="{{ old('email') ?? $user->email }}" class="input-text input-text--primary-style" type="text"
                                                            id="reg-email" placeholder="Contoh: mail@satutani.com">
                                                        @error('email')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
                                                        <span class="gl-label" for="reg-birthday">TANGGAL LAHIR</span>
                                                        <input name="date_birth" value="{{ old('date_birth')?? $user->date_birth }}" max="2008-04-30" class="input-text input-text--primary-style" type="date"
                                                            id="reg-birthday">
                                                        @error('date_birth')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="gender">JENIS KELAMIN</label>
                                                        <select name="gender"
                                                            class="select-box select-box--primary-style u-w-100"
                                                            id="gender">
                                                            <option value="">Pilih</option>
                                                            <option {{ $user->gender == 'pria' ? 'selected' : ''}} value="pria">Laki-laki</option>
                                                            <option {{ $user->gender == 'wanita' ? 'selected' : '' }} value="wanita">Perempuan</option>
                                                        </select>
                                                        @error('gender')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="no_hp">NOMOR TELPON</label>
                                                        <input name="no_hp" value="{{ old('no_hp') ?? $user->no_hp }}" class="input-text input-text--primary-style" type="number"
                                                            id="no_hp" placeholder="Nama Lengkap">
                                                        @error('no_hp')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="address">ALAMAT</label>
                                                        <textarea class="input-text input-text--primary-style" name="address" id="address">{{ old('address') ?? $user->address }}</textarea>
                                                        @error('address')
                                                        <p class="alert alert-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <button class="btn btn--e-brand-b-2" type="submit">SIMPAN</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Dashboard ======-->
</x-main>

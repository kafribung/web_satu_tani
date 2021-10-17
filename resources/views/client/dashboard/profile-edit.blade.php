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
                        <div class="col-lg-9 col-md-12">
                            <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                <div class="dash__pad-2">
                                    @if (session('message'))
                                    <p style="color: #28A745">{{ session('message') }}</p>
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
                                                        <p style="color: #bb2124">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="reg-email">E-MAIL</label>
                                                        <input name="email" value="{{ old('email') ?? $user->email }}" class="input-text input-text--primary-style" type="text"
                                                            id="reg-email" placeholder="Contoh: mail@satutani.com">
                                                        @error('email')
                                                        <p style="color: #bb2124">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
                                                        <span class="gl-label" for="reg-birthday">TANGGAL LAHIR</span>
                                                        <input name="date_birth" value="{{ old('date_birth')?? $user->date_birth }}" max="2008-04-30" class="input-text input-text--primary-style" type="date"
                                                            id="reg-birthday">
                                                        @error('date_birth')
                                                        <p style="color: #bb2124">{{ $message }}</p>
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
                                                        <p style="color: #bb2124">{{ $message }}</p>
                                                        @enderror
                                                    </div>

                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="no_hp">NOMOR TELPON</label>
                                                        <input name="no_hp" value="{{ old('no_hp') ?? $user->no_hp }}" class="input-text input-text--primary-style" type="number"
                                                            id="no_hp" placeholder="Nama Lengkap">
                                                        @error('no_hp')
                                                        <p style="color: #bb2124">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="gl-inline">
                                                    <div class="u-s-m-b-30">
                                                        <label class="gl-label" for="address">ALAMAT</label>
                                                        <textarea class="input-text input-text--primary-style" name="address" id="address">{{ old('address') ?? $user->address }}</textarea>
                                                        @error('address')
                                                        <p style="color: #bb2124">{{ $message }}</p>
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

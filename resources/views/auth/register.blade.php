<x-main>
    <!--====== Register ======-->
    <div class="u-s-p-b-60">
        <div class="section__content">
            <div class="container">
                <div class="row row--center">
                    <div class="col-lg-6 col-md-8 u-s-m-b-30">
                        <div class="l-f-o">
                            <div class="l-f-o__pad-box u-s-m-b-60">
                                <div class="section__intro u-s-m-b-60">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section__text-wrap">
                                                    <h1 class="section__heading u-c-secondary">PENDAFTARAN</h1>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="l-f-o__form">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-lname">NAMA LENGKAP *</label>
                                            <input name="name" value="{{ old('name') }}" class="input-text input-text--primary-style" type="text"
                                                id="reg-lname" placeholder="Nama Lengkap">
                                            @error('name')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="u-s-m-b-30">
                                            <span class="gl-label" for="reg-birthday">TANGGAL LAHIR *</span>
                                            <input name="date_birth" value="{{ old('date_birth') }}" max="2008-04-30" class="input-text input-text--primary-style" type="date"
                                                id="reg-birthday">
                                            @error('date_birth')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="gender">JENIS KELAMIN *</label>
                                            <select name="gender"
                                                class="select-box select-box--primary-style u-w-100"
                                                id="gender">
                                                <option value="">Pilih</option>
                                                <option {{ old('date_birth') == 'pria' ? 'selected' : ''}} value="pria">Laki-laki</option>
                                                <option {{ old('date_birth') == 'wanita' ? 'selected' : '' }} value="wanita">Perempuan</option>
                                            </select>
                                            @error('gender')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-email">E-MAIL *</label>
                                            <input name="email" value="{{ old('email') }}" class="input-text input-text--primary-style" type="text"
                                                id="reg-email" placeholder="Contoh: mail@satutani.com">
                                            @error('gender')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="reg-password">KATA SANDI *</label>
                                            <input name="password" class="input-text input-text--primary-style" type="password"
                                                id="reg-password" placeholder="Masukkan Kata Sandi">
                                            @error('password')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="u-s-m-b-30">
                                            <label class="gl-label" for="password_confirmation">KATA SANDI *</label>
                                            <input name="password_confirmation" class="input-text input-text--primary-style" type="password"
                                                id="password_confirmation" placeholder="Konfirmasi Kata Sandi">
                                            @error('password_confirmation')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror

                                            <br><br>
                                            <span>Klik</span>
                                            <a href="{{ route('login') }}" style="color:#01AA4F;">masuk</a>
                                            <span>jika anda sudah memiliki akun</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-xl-3 col-lg-2 col-md-2 col-sm-2 u-s-m-b-30">
                                                <button class="btn btn--e-brand-b-2"
                                                    type="submit">Lanjutkan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Register ======-->
</x-main>

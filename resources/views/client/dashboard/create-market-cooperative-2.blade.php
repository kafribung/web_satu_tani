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
                            <div
                                class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                <div class="dash__pad-2">
                                    <div class="manage-o">
                                        <div class="manage-o__timeline">
                                            <div class="timeline-row">
                                                <div class="col-lg-12 u-s-m-b-30">
                                                    <div class="bisnis-tani">
                                                        <img src="{{ asset('assets/images/akunbisnis/bisnis2.png') }}" alt="bisnis">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div
                                        class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <form class="dash__pad-2" action="{{ route('buat-toko.petani.lengkapi-info') }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <p style="padding: 30px 60px;">
                                                Pastikan kamu mengisi data dengan
                                                benar yah! Tenang aja, kami akan jaga kerahasiaan data-data kamu
                                                kok
                                            </p>

                                            <div class=" mb-3" style="margin: 0px 50px;">
                                                <input type="text" class="form-control"
                                                    id="formGroupExampleInput2" value="{{ $user->name }}" placeholder="Nama Lengkap">
                                            </div>

                                            <div class="row mb-3" style="margin: 0px 35px;">
                                                <div class="col-sm">
                                                    <input type="date" value="{{ $user->date_birth }}" class="form-control"
                                                        placeholder="Tanggal" aria-label="State">
                                                </div>
                                            </div>

                                            <div class="row mb-3" style="margin: 0px 35px;">
                                                <div class="col-sm">
                                                    <div class="form-floating">
                                                        <select class="form-control" id="floatingSelectGrid"
                                                            placeholder="Jenis Kelamin">
                                                            <option selected>Jenis Kelamin</option>
                                                            <option {{ $user->gender == 'pria' ? 'selected' : '' }} value="pria">Laki-Laki</option>
                                                            <option {{ $user->gender == 'wanita' ? 'selected' : '' }} value="wanita">Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3" style="margin: 0px 50px;">
                                                <textarea  id="formGroupExampleInput2" class="form-control" >{{ $user->address }}</textarea>
                                            </div>

                                            <div class="mb-3" style="margin: 0px 50px;">
                                                <input type="text" class="form-control"
                                                    id="formGroupExampleInput2"  value="{{ $user->no_hp }}" placeholder="Nomor Telpon">
                                            </div>

                                            <div class="mb-3" style="margin: 0px 50px;">
                                                <input type="text" class="form-control"
                                                    id="formGroupExampleInput2" value="{{ $user->email }}" placeholder="Email">
                                            </div>

                                            <div class="row mb-3" style="margin: 0px 35px;">
                                                <div class="col-sm-4">
                                                    <div class="form-floating">
                                                        <select name="bank" class="form-control" id="floatingSelectGrid">
                                                            <option selected>Pilih Bank</option>
                                                            <option {{ old('BRI') == 'BRI' ? 'selected' : '' }} value="BRI">BRI</option>
                                                            <option {{ old('BNI') == 'BNI' ? 'selected' : '' }} value="BNI">BNI</option>
                                                            <option {{ old('Mandiri') == 'Mandiri' ? 'selected' : '' }} value="Mandiri">Mandiri</option>
                                                            <option {{ old('BCA') == 'BCA' ? 'selected' : '' }} value="BCA">BCA</option>
                                                        </select>
                                                        @error('bank')
                                                        <p style="color: #bb2124">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-sm">
                                                    <input type="text" name="rekening_name" value="{{ old('rekening_name') }}" class="form-control"
                                                        placeholder="Nama Rekening" aria-label="State">
                                                    @error('rekening_name')
                                                    <p style="color: #bb2124">{{ $message }}</p>
                                                    @enderror
                                                </div>

                                                <div class="col-sm">
                                                    <input type="number" name="rekening_number" value="{{ old('rekening_number') }}" class="form-control"
                                                        placeholder="Nomor Rekening" aria-label="State">
                                                    @error('rekening_number')
                                                    <p style="color: #bb2124">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <button class="btn2 btn-primary" type="submit">Lanjutkan</button>
                                            <a class="btn1 btn-primary" href="{{ route('dashboard') }}">Batal</a>
                                        </form>
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

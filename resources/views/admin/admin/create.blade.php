{{-- Modal tambah --}}

<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Tambah Admin Satu Tani
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <form action="{{ route('admin.admin.store') }}" method="POST" novalidate>
                                    @csrf
                                    <label for="name">Nama</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name" value="{{ old('name') }}" id="name"
                                                class="form-control" required autofocus
                                                placeholder="Masukan nama lengkap">
                                            @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>

                                    <label for="email">Email</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" required
                                                placeholder="Masukan email">
                                            @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>

                                    <label for="date_birth">Tanggal Lahir</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="date" name="date_birth" value="{{ old('date_birth') }}" id="date_birth" class="form-control"
                                                required>
                                            @error('date_birth')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>

                                    <label for="gender">Jenis Kelamin</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="gender" id="gender" class="form-control" required>
                                                <option {{ old('gender') == 'pria' ? 'selected' : '' }}" value="pria">Laki-laki</option>
                                                <option {{ old('gender') == 'wanita' ? 'selected' : '' }} value="wanita">Perempuan</option>
                                            </select>
                                            @error('gender')
                                            <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>

                                    </div>

                                    <label for="password">Kata Sandi</label>
                                    <div class="form-group" style="margin-bottom: 10px">
                                        <div class="form-line">
                                            <input type="password" name="password" id="password" class="form-control"
                                                required>
                                        </div>
                                        @error('password')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror

                                    </div>

                                    <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" class="form-control" required>
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect header-dropdown m-r--5">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

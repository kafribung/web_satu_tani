<label for="name">Nama</label>
<div class="form-group">
    <div class="form-line">
        <input type="text" name="name" value="{{ old('name') ?? $admin->name  }}" id="name" class="form-control"
            required autofocus placeholder="Masukan nama lengkap">
        @error('name')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

</div>

<label for="email">Email</label>
<div class="form-group">
    <div class="form-line">
        <input type="email" name="email" value="{{ old('email') ?? $admin->email }}" id="email" class="form-control"
            required placeholder="Masukan email">
        @error('email')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

</div>

<label for="date_birth">Tanggal Lahir</label>
<div class="form-group">
    <div class="form-line">
        <input type="date" name="date_birth" value="{{ old('date_birth') ?? $admin->date_birth }}" id="date_birth"
            class="form-control" required>
        @error('date_birth')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

</div>

<label for="gender">Jenis Kelamin</label>
<div class="form-group">
    <div class="form-line">
        <select name="gender" id="gender" class="form-control" required>
            <option {{ old('gender') == 'pria' || $admin->gender == 'pria' ? 'selected' : '' }}" value="pria">Laki-laki
            </option>
            <option {{ old('gender') == 'wanita' || $admin->gender == 'wanita' ? 'selected' : '' }} value="wanita">
                Perempuan</option>
        </select>
        @error('gender')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

</div>

<label for="password" style="margin-top: 10px ">Kata Sandi</label>
<div class="form-group" style="margin-bottom: 10px">
    <div class="form-line">
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    @error('password')
    <p class="text-danger">{{ $message }}</p>
    @enderror

</div>

<label for="password_confirmation">Konfirmasi Kata Sandi</label>
<div class="form-group">
    <div class="form-line">
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
    </div>

</div>
<button type="submit" class="btn {{ !empty($admin) ? 'btn-warning' : 'btn-primary' }}  waves-effect header-dropdown m-r--5">Simpan</button>

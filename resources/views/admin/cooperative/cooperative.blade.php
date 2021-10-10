<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="margin-bottom: 10px">
                            Koperasi Satu Tani
                        </h2>

                        @if (session('message'))
                        <div class="alert alert-success" style="margin-top: 10px">
                            <strong>Well done!</strong> {{ session('message') }} .
                        </div>
                        @endif
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAMA</th>
                                    <th>EMAIL</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>NOMOR HP</th>
                                    <th>ALAMAT</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($coperatives as $coperative)
                                <tr>
                                    <th scope="row">{{ (($coperatives->currentPage() - 1 ) * $coperatives->perPage() ) + $loop->iteration }}</th>
                                    <td>{{ $coperative->name }}</td>
                                    <td>{{ $coperative->email }}</td>
                                    <td>{{ date('l, d-m-Y', strtotime($coperative->date_birth) )  }}</td>
                                    <td>{{ ($coperative->gender == 'pria' ? 'Laki - laki' : 'Prempuan') }}</td>
                                    <td>{{ $coperative->no_hp }}</td>
                                    <td>{{ $coperative->address }}</td>
                                    <td><span class="badge {{ $coperative->validation == 1 ? 'bg-cyan' : 'bg-red' }} ">{{ $coperative->validation == 1 ? 'Aktif' : 'Tidak Aktif' }}</span></td>
                                    <td>
                                        <form style="display: inline"  action="{{ route('admin.petani.update', $coperative) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Data admin {{ $coperative->name }} akan diaktifkan')" class="btn btn-dark waves-effect">
                                                <i class="material-icons">verified_user</i>
                                            </button>
                                        </form>
                                        <form style="display: inline"  action="{{ route('admin.admin.destroy', $coperative) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Data admin {{ $coperative->name }} akan dihapus secara permanent')" class="btn btn-danger waves-effect">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="20">Data tidak ditemukan</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <p class="footer">
                            {{ $coperatives->links() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

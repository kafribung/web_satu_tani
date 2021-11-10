<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="margin-bottom: 10px">
                            Petani Satu Tani
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
                                @forelse ($farmers as $farmer)
                                <tr>
                                    <th scope="row">{{ (($farmers->currentPage() - 1 ) * $farmers->perPage() ) + $loop->iteration }}</th>
                                    <td>{{ $farmer->name }}</td>
                                    <td>{{ $farmer->email }}</td>
                                    <td>{{ date('l, d-m-Y', strtotime($farmer->date_birth) )  }}</td>
                                    <td>{{ ($farmer->gender == 'pria' ? 'Laki - laki' : 'Prempuan') }}</td>
                                    <td>{{ $farmer->no_hp }}</td>
                                    <td>{{ $farmer->address }}</td>
                                    <td><span class="badge {{ $farmer->validation == 1 ? 'bg-cyan' : 'bg-red' }} ">{{ $farmer->validation == 1 ? 'Aktif' : 'Tidak Aktif' }}</span></td>
                                    <td>
                                        <form style="display: inline"  action="{{ route('admin.petani.destroy', $farmer->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Data petani {{ $farmer->name }} akan dihapus secara permanent')" class="btn btn-danger waves-effect">
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
                            {{ $farmers->links() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

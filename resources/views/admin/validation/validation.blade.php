<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="margin-bottom: 10px">
                            Validasi Permintaan Untuk Menjadi Penjual
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
                                    <th>PEMILIK</th>
                                    <th>KATEGORI</th>
                                    <th>BERKAS</th>
                                    <th>NO REKENING</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($validations as $validation)
                                <tr>
                                    <th scope="row">{{ (($validations->currentPage() - 1 ) * $validations->perPage() ) + $loop->iteration }}</th>
                                    <td>{{ $validation->user->name }}</td>
                                    <td>{{ $validation->name }}</td>
                                    <td>{{ $validation->img }}</td>
                                    <td>{{ $validation->bank }} / {{ $validation->rekening_number }} </td>
                                    <td>
                                        <form style="display: inline"  action="{{ route('admin.admin.destroy', $admin) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Data admin {{ $admin->name }} akan dihapus secara permanent')" class="btn btn-danger waves-effect">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="6">Data tidak ditemukan</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <p class="footer">
                            {{ $validations->links() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

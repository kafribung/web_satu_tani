<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="margin-bottom: 10px">
                            User Satu Tani
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
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr>
                                    <th scope="row">{{ (($users->currentPage() - 1 ) * $users->perPage() ) + $loop->iteration }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ date('l, d-m-Y', strtotime($user->date_birth) )  }}</td>
                                    <td>{{ ($user->gender == 'pria' ? 'Laki - laki' : 'Prempuan') }}</td>
                                    <td>{{ $user->no_hp }}</td>
                                    <td>{{ $user->address }}</td>
                                    <td>
                                        <form style="display: inline"  action="{{ route('admin.user.delete', $user) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" onclick="return confirm('Data user {{ $user->name }} akan dihapus secara permanent')" class="btn btn-danger waves-effect">
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
                            {{ $users->links() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="margin-bottom: 10px">
                            Admin Satu Tani
                        </h2>
                        <a href="{{ route('admin.admin.create') }}" class="btn btn-success waves-effect mt-2">
                            <i class="material-icons">add</i>
                            <span>Tambah</span>
                        </a>

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
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($admins as $admin)
                                <tr>
                                    <th scope="row">{{ (($admins->currentPage() - 1 ) * $admins->perPage() ) + $loop->iteration }}</th>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ date('l, d-m-Y', strtotime($admin->date_birth) )  }}</td>
                                    <td>{{ ($admin->gender == 'pria' ? 'Laki - laki' : 'Prempuan') }}</td>
                                    <td>
                                        <a href="{{ route('admin.admin.edit', $admin) }}"  class="btn btn-warning waves-effect">
                                            <i class="material-icons">edit</i>
                                        </a>

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
                            {{ $admins->links() }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

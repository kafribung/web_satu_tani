<x-master>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Berisi informasi data admin</h2>
        </div>
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Admin Satu Tani
                        </h2>
                        <button type="button" class="btn btn-success waves-effect mt-2">
                            <i class="material-icons">add</i>
                            <span>Tambah</span>
                        </button>
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
                                    <th scope="row"></th>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ date('l, d-m-Y', strtotime($admin->date_birth) )  }}</td>
                                    <td>{{ ($admin->gender == 'pria' ? 'Laki - laki' : 'Prempuan') }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning waves-effect">
                                            <i class="material-icons">edit</i>
                                        </button>

                                        <button type="button" class="btn btn-danger waves-effect">
                                            <i class="material-icons">delete</i>
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <th colspan="6">Data tidak ditemukan</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

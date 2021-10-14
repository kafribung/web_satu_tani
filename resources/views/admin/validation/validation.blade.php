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
                                    <th>INFO REKENING</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($validations as $validation)
                                <tr>
                                    <th scope="row">{{ (($validations->currentPage() - 1 ) * $validations->perPage() ) + $loop->iteration }}</th>
                                    <td>
                                        <a href="" data-toggle="modal" data-target="#defaultModal">{{ $validation->user->name }}</a>
                                    </td>
                                    <td>{{ $validation->name }}</td>
                                    <td>
                                        <a target="_blank" href="{{ $validation->takeImg }}">
                                            <img src="{{ $validation->takeImg }}" class="img-responsive thumbnail" width="100px" alt="Gambar gagal diload">
                                        </a>
                                    </td>
                                    <td>{{ $validation->bank }} / {{ $validation->rekening_name }} / {{ $validation->rekening_number }} </td>
                                    <td>
                                        <form style="display: inline"  action="{{ route('admin.validasi.update', $validation->user) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <button type="submit" class="btn btn-success waves-effect">
                                                <i class="material-icons">check</i>
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

    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
</x-master>

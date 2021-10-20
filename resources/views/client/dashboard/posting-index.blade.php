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
                            <div class="bgcard">
                                @if (session('message'))
                                    <p style="color: #28A745">{{ session('message') }}</p>
                                @endif
                                <div class="dash__table-wrap gl-scroll">
                                    <table class="dash__table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                <th>Tanggal Panen</th>
                                                <th>Diskon</th>
                                                <th>Deskripsi</th>
                                                <th>Gambar Utama</th>
                                                <th>Gambar 1</th>
                                                <th>Gambar 2</th>
                                                <th>Gambar 3</th>
                                                <th>Gambar 4</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($products as $product)
                                            <tr>
                                                <td>{{ (($products->currentPage() - 1 ) * $products->perPage() ) + $loop->iteration }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{  date('d-m-y', strtotime($product->harvest_time)) }}</td>
                                                <td>{{ $product->discount }}</td>
                                                <td>{{ Str::limit($product->description, 20, '...') }}</td>
                                                <td>
                                                    <a href="{{ $product->take_img($product->img_1) }}" class="dash__table-img-wrap">
                                                        <img class="u-img-fluid" src="{{ $product->take_img($product->img_1) }}" alt="Gambar Error">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ $product->take_img($product->img_2) }}" class="dash__table-img-wrap">
                                                        <img class="u-img-fluid" src="{{ $product->take_img($product->img_2) }}" alt="Gambar Error">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ $product->take_img($product->img_3) }}" class="dash__table-img-wrap">
                                                        <img class="u-img-fluid" src="{{ $product->take_img($product->img_3) }}" alt="Gambar Error">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ $product->take_img($product->img_4) }}" target="_blank" class="dash__table-img-wrap">
                                                        <img class="u-img-fluid" src="{{ $product->take_img($product->img_4) }}" alt="Gambar Error">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ $product->take_img($product->img_5) }}" class="dash__table-img-wrap">
                                                        <img class="u-img-fluid" src="{{ $product->take_img($product->img_5) }}" alt="Gambar Error">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('posting.edit', $product) }}" class="btn" style="color: #FFC107">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <button class="btn" style="color: #DC3545">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            @empty
                                            <tr>
                                                <td colspan="20">Data tidak ditemukan</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                {{ $products->links() }}
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

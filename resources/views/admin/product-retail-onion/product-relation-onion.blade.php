<x-master>
    <div class="container-fluid">
        <div class="block-header">
            <h2>Bawang Eceran</h2>
        </div>
        <!-- Basic Example -->
        <div class="row clearfix">
            @foreach ($bawangPetanis as $bawangPetani)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        @php
                        $discount = number_format((($bawangPetani->price * $bawangPetani->discount) / 100))
                        @endphp
                        <h2>
                            {{ $bawangPetani->name }}
                            <small>Rp.{{ $harga = number_format($bawangPetani->price - $discount) }}</small>
                            <small>Diskon: {{ $bawangPetani->discount }} %</small>
                            @if ($bawangPetani->discount != 0 || $bawangPetani->discount != null)
                                <small >Harga awal: Rp. {{ number_format($bawangPetani->price, 2) }}</small>
                            @endif
                        </h2>

                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <img class="img-responsive thumbnail" src="{{ $bawangPetani->take_img($bawangPetani->img_1) }}">
                        <p>{{ Str::limit($bawangPetani->description, 20) }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-master>

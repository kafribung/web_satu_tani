{{-- Modal tambah --}}

<x-master>
    <div class="container-fluid">
        <!-- Hover Rows -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Edit Admin Satu Tani
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <form action="{{ route('admin.admin.update', $admin) }}" method="POST" novalidate>
                                    @csrf
                                    @method('PATCH')
                                    @include('admin.admin.form', ['admin' => $admin])
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Rows -->
    </div>
</x-master>

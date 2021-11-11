<x-master>
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">account_box</i>
                    </div>
                    <div class="content">
                        <div class="text">ADMIN</div>
                        <div class="number count-to" data-from="0" data-to="{{ $adminCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">contacts</i>
                    </div>
                    <div class="content">
                        <div class="text">USERS</div>
                        <div class="number count-to" data-from="0" data-to="{{ $userCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">group</i>
                    </div>
                    <div class="content">
                        <div class="text">PETANI</div>
                        <div class="number count-to" data-from="0" data-to="{{ $farmerCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">group</i>
                    </div>
                    <div class="content">
                        <div class="text">KOPERASI</div>
                        <div class="number count-to" data-from="0" data-to="{{ $coopertiveCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-lime hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">reorder</i>
                    </div>
                    <div class="content">
                        <div class="text">BAWANG ECERAN</div>
                        <div class="number count-to" data-from="0" data-to="{{ $bawangPetaniCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-brown hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">reorder</i>
                    </div>
                    <div class="content">
                        <div class="text">BAWANG KOPERASI</div>
                        <div class="number count-to" data-from="0" data-to="{{ $bawangKoperasiCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue-grey hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">filter_1</i>
                    </div>
                    <div class="content">
                        <div class="text">MENUNGGU PEMBAYARAN</div>
                        <div class="number count-to" data-from="0" data-to="{{ $waitCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-deep-purple hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">filter_2</i>
                    </div>
                    <div class="content">
                        <div class="text">SEDANG DIPROSES</div>
                        <div class="number count-to" data-from="0" data-to="{{ $prosesCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-deep-orange hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">filter_3</i>
                    </div>
                    <div class="content">
                        <div class="text">SEDANG DIKIRIM</div>
                        <div class="number count-to" data-from="0" data-to="{{ $sendCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-dark hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">filter_4</i>
                    </div>
                    <div class="content">
                        <div class="text">SELESAI</div>
                        <div class="number count-to" data-from="0" data-to="{{ $finishCount }}" data-speed="1000"
                            data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-12">
                <div class="card">
                    <div class="body bg-teal text-center">
                        <h4>Bismillah, selamat datang {{ auth()->user()->name }}</h4>
                        <h5>Semangat dan jangan pantang menyerah</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>CPU USAGE (%)</h2>
                            </div>
                            <div class="col-xs-12 col-sm-6 align-right">
                                <div class="switch panel-switch-btn">
                                    <span class="m-r-10 font-12">REAL TIME</span>
                                    <label>OFF<input type="checkbox" id="realtime" checked><span
                                            class="lever switch-col-cyan"></span>ON</label>
                                </div>
                            </div>
                        </div>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-master>


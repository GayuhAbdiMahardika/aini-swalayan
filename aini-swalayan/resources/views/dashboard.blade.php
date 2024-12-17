@extends('admin')

@section('content')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Aini Swalayan Website</h3>
                            <div class="nk-block-des text-soft">
                                <p>Selamat Datang <b>{{ Auth::user()->name }}</b>, di Website Aini Swalayan</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li class="nk-block-tools-opt"><a href="{{ route('laporan.pembelian') }}" class="btn btn-secondary"><em class="icon ni ni-reports"></em><span>Laporan Pembelian</span></a></li>
                                        <li class="nk-block-tools-opt"><a href="{{ route('laporan.penjualan') }}" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Laporan Penjualan</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-7 col-xxl-6">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-title-group pb-3 g-2">
                                        <div class="card-title card-title-sm">
                                            <h6 class="title">Statistik Penjualan Perhari</h6>
                                            <p>Penjualan Perhari Dalam Kurun Waktu 1 Bulan</p>
                                        </div>
                                        <div class="card-tools shrink-0 d-none d-sm-block">
                                            <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                <li class="nav-item"><a href="#" class="nav-link active">1 Bulan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="analytic-ov">
                                        <div class="analytic-ov-ck">
                                            <canvas class="analytics-line-large" id="analyticOvData"></canvas>
                                        </div>
                                        <div class="chart-label-group ml-5">
                                            <div class="chart-label">01 Jan, 2020</div>
                                            <div class="chart-label d-none d-sm-block">15 Jan, 2020</div>
                                            <div class="chart-label">30 Jan, 2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-7 col-xxl-6">
                            <div class="card card-bordered h-100">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title card-title-sm">
                                            <h6 class="title">Statistik 10 Barang Terlaris</h6>
                                        </div>
                                        <div class="card-tools shrink-0 d-none d-sm-block">
                                            <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                <li class="nav-item"><a href="#" class="nav-link active">1 Bulan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="traffic-channel">
                                        <div class="traffic-channel-doughnut-ck">
                                            <canvas class="analytics-doughnut" id="TrafficChannelDoughnutData"></canvas>
                                        </div>
                                        <div class="traffic-channel-group g-2">
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#9cabff"></span><span>Organic Search</span></div>
                                                <div class="amount">4,305 <small>58.63%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#b8acff"></span><span>Social Media</span></div>
                                                <div class="amount">859 <small>23.94%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#ffa9ce"></span><span>Referrals</span></div>
                                                <div class="amount">482 <small>12.94%</small></div>
                                            </div>
                                            <div class="traffic-channel-data">
                                                <div class="title"><span class="dot dot-lg sq" data-bg="#f9db7b"></span><span>Others</span></div>
                                                <div class="amount">138 <small>4.49%</small></div>
                                            </div>
                                        </div><!-- .traffic-channel-group -->
                                    </div><!-- .traffic-channel -->
                                </div>
                            </div><!-- .card -->
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection

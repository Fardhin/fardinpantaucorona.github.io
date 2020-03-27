<?php
include 'global_header.php';
include 'global_menu.php'

?>

<div class="my-3 my-md-5">
    <div class="container app-content">
        <div class="jumbotron" style="background: white;">
            <h1 class="text-center">
                PANTAU <a style=" font-family: 'IBM Plex Sans' , sans-serif; color: #f82649;">CORONA</a>
            </h1>
            <?php
            date_default_timezone_set('Asia/Makassar');
            $bulan = array(
                '01' => 'Januari',
                '02' => 'Februari',
                '03' => 'Maret',
                '04' => 'April',
                '05' => 'Mei',
                '06' => 'Juni',
                '07' => 'Juli',
                '08' => 'Agustus',
                '09' => 'September',
                '10' => 'Oktober',
                '11' => 'November',
                '12' => 'Desember',
            );
            ?>
            <p class="lead m-0 text-center">Live Data Di Indonesia</p>
            <p class="lead m-0 text-center">Sumber data : Kementerian Kesehatan & JHU. Update terakhir : <?php echo date('d') . ' ' . ($bulan[date('m')]) . ' ' . date('Y') ?> <?= date("H:i:s") ?> WIT</p>
        </div>

        <div class="alert alert-icon alert-primary" role="alert">
            <i class="fe fe-bell mr-2" aria-hidden="true"></i> Lindungi Diri Anda Dari Corona, Dengan Rajin Mencuci Tangan.
        </div>
        <?php
        $data = file_get_contents('https://api.kawalcorona.com/indonesia');
        $indonesia = json_decode($data, true);
        foreach ($indonesia as $data) : ?>
            <div class="row row-cards">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100" style="
    background: #5057ad!important;
    border-radius: 10px;
    color: #fff;
    font-family: 'IBM Plex Sans', sans-serif;
" ;>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Live Data</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">INDONESIA</div>
                                </div>
                                <div class="col-auto">
                                    <img src="https://kawalcorona.com/uploads/indonesia-PZq.png" width="50" height="50">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100" style="
    background: #f82649!important;
    border-radius: 10px;
    color: #fff;
    font-family: 'IBM Plex Sans', sans-serif;
" ;>
                        <div class=" card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Positif Corona</div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800"><?= $indonesia['0']['positif'] ?></div>
                                    <div class="bagus"><strong>
                                            <font size="2px" weight="bold">Orang</font>
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <img src="https://kawalcorona.com/uploads/sad-u6e.png" width="50" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100" style="
    background: #d43f8d!important;
    border-radius: 10px;
    color: #fff;
    font-family: 'IBM Plex Sans', sans-serif;
" ;>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Meninggal</div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800"><?= $indonesia['0']['meninggal']; ?></div>
                                    <div class="bagus"><strong>
                                            <font size="2px" weight="bold">Orang</font>
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <img src="https://corona.bagusok.xyz/img/nangis.png" width="50" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card h-100" style="
    background: #09ad95!important;
    border-radius: 10px;
    color: #fff;
    font-family: 'IBM Plex Sans', sans-serif;
" ;>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">Sembuh</div>
                                    <div class="h1 mb-0 font-weight-bold text-gray-800"><?= $indonesia['0']['sembuh']; ?></div>
                                    <div class="bagus"><strong>
                                            <font size="2px" weight="bold">Orang</font>
                                        </strong>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <img src="https://corona.bagusok.xyz/img/happy.png" width="50" height="50">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="card-title"><strong>Kasus Coronavirus di Indonesia Berdasarkan Provinsi</strong></h3>
                        </div>
                        <?php
                        $data = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
                        $provinsi = json_decode($data, true);
                        ?>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1">NO.</th>
                                        <th>PROVINSI</th>
                                        <th>POSITIF</th>
                                        <th>SEMBUH</th>
                                        <th>MENINGGAL</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($provinsi as $data) : ?>
                                        <tr>
                                            <td><?= $nomor; ?></td>
                                            <td><?= $data['attributes']['Provinsi']; ?></td>
                                            <td><?= $data['attributes']['Kasus_Posi']; ?></td>
                                            <td><?= $data['attributes']['Kasus_Semb']; ?></td>
                                            <td><?= $data['attributes']['Kasus_Meni']; ?></td>
                                        </tr>

                                    <?php
                                        $nomor++;
                                    endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
    </div>
</div>
</div>
<?php include 'global_footer.php';

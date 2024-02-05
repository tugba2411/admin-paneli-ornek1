<?php
$sayfa="Content 1";
include("inc/ahead.php");
$sorgu = $baglanti->prepare("select * from content1");
$sorgu->execute();
$sonuc= $sorgu->fetch();
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?=$sayfa?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active"><?=$sayfa?></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>

                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="">
                                    <thead>
                                        <tr>
                                            <th>Başlık 1</th>
                                            <th>Başlık 2</th>
                                            <th>Başlık 3</th>
                                            <th>Başlık 4</th>
                                            <th>Açıklama 1</th>
                                            <th>Açıklama 2</th>
                                            <th>Buton</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?=$sonuc["baslik1"]?></td>
                                            <td><?=$sonuc["baslik2"]?></td>
                                            <td><?=$sonuc["baslik3"]?></td>
                                            <td><?=$sonuc["baslik4"]?></td>
                                            <td><?=$sonuc["aciklama1"]?></td>
                                            <td><?=$sonuc["aciklama2"]?></td>
                                            <td><?=$sonuc["buton"]?></td>
                                            <td class="text-center"><a href="content1Güncelle.php?id=<?=$sonuc["id"]?>">
                                                    <span class="fa fa-edit fa-2x"></span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
<?php
include("inc/afooter.php");
?>
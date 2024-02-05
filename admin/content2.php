<?php
$sayfa="Content 2";
include("inc/ahead.php");
$sorgu = $baglanti->prepare("select * from content2");
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
                                            <th>Resim 1</th>
                                            <th>Resim 2</th>
                                            <th>Resim 3</th>
                                            <th>Başlık</th>
                                            <th>Açıklama</th>
                                            <th>Alt Açıklama 1</th>
                                            <th>Alt Açıklama 2</th>
                                            <th>Alt Açıklama 3</th>
                                            <th>Buton</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?=$sonuc["resim1"]?></td>
                                            <td><?=$sonuc["resim2"]?></td>
                                            <td><?=$sonuc["resim3"]?></td>
                                            <td><?=$sonuc["baslik"]?></td>
                                            <td><?=$sonuc["aciklama"]?></td>
                                            <td><?=$sonuc["alt_aciklama1"]?></td>
                                            <td><?=$sonuc["alt_aciklama2"]?></td>
                                            <td><?=$sonuc["alt_aciklama3"]?></td>
                                            <td><?=$sonuc["buton"]?></td>
                                            <td class="text-center"><a href="content2Güncelle.php?id=<?=$sonuc["id"]?>">
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
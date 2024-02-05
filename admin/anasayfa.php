<?php
$sayfa="Anasayfa";
include("inc/ahead.php");
$sorgu = $baglanti->prepare("select * from anasayfa");
$sorgu->execute();
$sonuc= $sorgu->fetch();
?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Anasayfa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                            <li class="breadcrumb-item active">Anasayfa</li>
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
                                            <th>Başlık 1</th>
                                            <th>Buton 1</th>
                                            <th>Buton 1</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?=$sonuc["baslik1"]?></td>
                                            <td><?=$sonuc["baslik2"]?></td>
                                            <td><?=$sonuc["buton1"]?></td>
                                            <td><?=$sonuc["buton2"]?></td>
                                            <td class="text-center"><a href="anasayfaGüncelle.php?id=<?=$sonuc["id"]?>">
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
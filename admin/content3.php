<?php
$sayfa="Content 3";
include("inc/ahead.php");
$sorgu = $baglanti->prepare("select * from content3");
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
                                            <th>İsim 1</th>
                                            <th>Meslek 1</th>
                                            <th>Resim 1</th>
                                            <th>Açıklama 1</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sorgu = $baglanti->prepare("select * from content3");
                                        $sorgu->execute();
                                        while($sonuc= $sorgu->fetch()){
                                        ?>
                                        <tr>
                                            <td><?=$sonuc["isim"]?></td>
                                            <td><?=$sonuc["meslek"]?></td>
                                            <td><img style="width: 120px; height: 170px;" src="../img/<?=$sonuc["resim"]?>" alt=""></td>
                                            <td><?=$sonuc["aciklama"]?></td>
                                            <td class="text-center"><a href="content3Güncelle.php?id=<?=$sonuc["id"]?>">
                                                    <span class="fa fa-edit fa-2x"></span>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
<?php
include("inc/afooter.php");
?>
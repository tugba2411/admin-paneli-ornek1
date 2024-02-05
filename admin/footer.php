<?php
$sayfa="Footer";
include("inc/ahead.php");

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
                                            <th>Resim</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sorgu = $baglanti->prepare("select * from footer");
                                        $sorgu->execute();
                                        while($sonuc= $sorgu->fetch()){
                                        ?>
                                        <tr>
                                            <td><img style="width: 180px; height: 150px;" src="../img/<?=$sonuc["resim"]?>" alt=""></td>
                                            <td class="text-center"><a href="footerGüncelle.php?id=<?=$sonuc["id"]?>">
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
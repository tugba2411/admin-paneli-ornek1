<?php
$sayfa="Anasayfa Güncelle";
include("inc/ahead.php");
include("../inc/vt.php");
$sorgu = $baglanti->prepare("select * from anasayfa where id=:id");
$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sonuc= $sorgu->fetch();

if($_POST){ //veri güncelleme
    $güncelleSorgu=$baglanti->prepare("Update anasayfa set baslik1=:baslik1, baslik2=:baslik2, buton1=:buton1, buton2=:buton2 where id=:id");
    $güncelle = $güncelleSorgu->execute([
        'baslik1' => $_POST["baslik1"],
        'baslik2' => $_POST["baslik2"],
        'buton1' => $_POST["buton1"],
        'buton2' => $_POST["buton2"],
        'id' => (int) $_GET["id"]
    ]);

    if($güncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Başarılı', text:'Güncelleme Başarılı',icon:'success',confirmButtonText:'Kapat'}).then((value) => {
            if (value.isConfirmed) {
                window.location.href = 'anasayfa.php';
            }
        });
         </script>";
        
    }
}
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
                                <form action="" method="post" >
                                    <div class="form-group">
                                        <label for="">Başlık 1</label>
                                        <input type="text" name="baslik1" required class="form-control" value="<?=$sonuc["baslik1"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Başlık 2</label>
                                        <input type="text" name="baslik2" required class="form-control" value="<?=$sonuc["baslik2"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Buton 1</label>
                                        <input type="text" name="buton1" required class="form-control" value="<?=$sonuc["buton1"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Buton 2</label>
                                        <input type="text" name="buton2" required class="form-control" value="<?=$sonuc["buton2"]?>">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Güncelle" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                
<?php
include("inc/afooter.php");
?>
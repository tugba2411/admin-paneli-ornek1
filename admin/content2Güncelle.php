<?php
$sayfa="Content 2 Güncelle";
include("inc/ahead.php");
include("../inc/vt.php");
$sorgu = $baglanti->prepare("select * from content2 where id=:id");
$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sonuc= $sorgu->fetch();

if($_POST){ //veri güncelleme
    $güncelleSorgu=$baglanti->prepare("Update content2 set resim1=:resim1, resim2=:resim2, resim3=:resim3, baslik=:baslik, aciklama=:aciklama, alt_aciklama1=:alt_aciklama1, alt_aciklama2=:alt_aciklama2, alt_aciklama3=:alt_aciklama3, buton=:buton where id=:id");
    $güncelle = $güncelleSorgu->execute([
        'resim1' => $_POST["resim1"],
        'resim2' => $_POST["resim2"],
        'resim3' => $_POST["resim3"],
        'baslik' => $_POST["baslik"],
        'aciklama' => $_POST["aciklama"],
        'alt_aciklama1' => $_POST["alt_aciklama1"],
        'alt_aciklama2' => $_POST["alt_aciklama2"],
        'alt_aciklama3' => $_POST["alt_aciklama3"],
        'buton' => $_POST["buton"],
        'id' => (int) $_GET["id"]
    ]);

    if($güncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Başarılı', text:'Güncelleme Başarılı',icon:'success',confirmButtonText:'Kapat'}).then((value) => {
            if (value.isConfirmed) {
                window.location.href = 'content2.php';
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
                                        <label for="">Resim 1</label>
                                        <input type="text" name="resim1" required class="form-control" value="<?=$sonuc["resim1"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Resim 2</label>
                                        <input type="text" name="resim2" required class="form-control" value="<?=$sonuc["resim2"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Resim 3</label>
                                        <input type="text" name="resim3" required class="form-control" value="<?=$sonuc["resim3"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Başlık</label>
                                        <input type="text" name="baslik" required class="form-control" value="<?=$sonuc["baslik"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Açıklama</label>
                                        <input type="text" name="aciklama" required class="form-control" value="<?=$sonuc["aciklama"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alt Açıklama 1</label>
                                        <input type="text" name="alt_aciklama1" required class="form-control" value="<?=$sonuc["alt_aciklama1"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alt Açıklama 2</label>
                                        <input type="text" name="alt_aciklama2" required class="form-control" value="<?=$sonuc["alt_aciklama2"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Alt Açıklama 3</label>
                                        <input type="text" name="alt_aciklama3" required class="form-control" value="<?=$sonuc["alt_aciklama3"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Buton</label>
                                        <input type="text" name="buton" required class="form-control" value="<?=$sonuc["buton"]?>">
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
<?php
$sayfa="Content 3 Güncelle";
include("inc/ahead.php");
include("../inc/vt.php");
$sorgu = $baglanti->prepare("select * from content3 where id=:id");
$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sonuc= $sorgu->fetch();

if($_POST){ //veri güncelleme
    $güncelleSorgu=$baglanti->prepare("Update content3 set isim=:isim, meslek=:meslek, resim=:resim, aciklama=:aciklama where id=:id");
    $güncelle = $güncelleSorgu->execute([
        'isim' => $_POST["isim"],
        'meslek' => $_POST["meslek"],
        'resim' => $_POST["resim"],
        'aciklama' => $_POST["aciklama"],
        'id' => (int) $_GET["id"]
    ]);

    if($güncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Başarılı', text:'Güncelleme Başarılı',icon:'success',confirmButtonText:'Kapat'}).then((value) => {
            if (value.isConfirmed) {
                window.location.href = 'content3.php';
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
                                        <label for="">İsim</label>
                                        <input type="text" name="isim" required class="form-control" value="<?=$sonuc["isim"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Meslek</label>
                                        <input type="text" name="meslek" required class="form-control" value="<?=$sonuc["meslek"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Resim</label>
                                        <input type="text" name="resim" required class="form-control" value="<?=$sonuc["resim"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Açıklama</label>
                                        <input type="text" name="aciklama" required class="form-control" value="<?=$sonuc["aciklama"]?>">
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
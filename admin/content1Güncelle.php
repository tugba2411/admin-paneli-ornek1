<?php
$sayfa="Content 1 Güncelle";
include("inc/ahead.php");
include("../inc/vt.php");
$sorgu = $baglanti->prepare("select * from content1 where id=:id");
$sorgu->execute(['id'=>(int)$_GET["id"]]);
$sonuc= $sorgu->fetch();

if($_POST){ //veri güncelleme
    $güncelleSorgu=$baglanti->prepare("Update content1 set baslik1=:baslik1, baslik2=:baslik2, baslik3=:baslik3, baslik4=:baslik4, aciklama1=:aciklama1, aciklama2=:aciklama2, buton=:buton where id=:id");
    $güncelle = $güncelleSorgu->execute([
        'baslik1' => $_POST["baslik1"],
        'baslik2' => $_POST["baslik2"],
        'baslik3' => $_POST["baslik3"],
        'baslik4' => $_POST["baslik4"],
        'aciklama1' => $_POST["aciklama1"],
        'aciklama2' => $_POST["aciklama2"],
        'buton' => $_POST["buton"],
        'id' => (int) $_GET["id"]
    ]);

    if($güncelle){
        echo '<script type="text/javascript" src="../js/sweetalert2.all.min.js"> </script>';
        echo "<script> Swal.fire({title:'Başarılı', text:'Güncelleme Başarılı',icon:'success',confirmButtonText:'Kapat'}).then((value) => {
            if (value.isConfirmed) {
                window.location.href = 'content1.php';
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
                                        <label for="">Başlık 3</label>
                                        <input type="text" name="baslik3" required class="form-control" value="<?=$sonuc["baslik3"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Başlık 4</label>
                                        <input type="text" name="baslik4" required class="form-control" value="<?=$sonuc["baslik4"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Açıklama 1</label>
                                        <input type="text" name="aciklama1" required class="form-control" value="<?=$sonuc["aciklama1"]?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Açıklama 2</label>
                                        <input type="text" name="aciklama2" required class="form-control" value="<?=$sonuc["aciklama2"]?>">
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
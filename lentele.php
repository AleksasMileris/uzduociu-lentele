<?php $eilutes = $_GET['radio'] ;
$paslepti = $_GET['level'];

?>;
<?php include "head.php" ?>

<div class="container mt-5 d-flex flex-column align-items-center">
    <h1 class="mb-5">Iveskite trūkstamus skaičius</h1>
    <table class="">
        <?php for($i = 1;$i <=  $eilutes  ; $i++){?>
        <tr>
            <?php for($y=1; $y <= $eilutes;$y++){ ?>
            <td class="design <?= ($i==1 || $y==1)?'multi':'' ?>">
                <?=((rand(1,100) < $paslepti && rand(1,100) != ($i==1 || $y==1) )? ($y*$i) :(($i==1 || $y==1)?"":'<input class=" onWrite">') )?>
            <?=($i==1 || $y==1)? ($y*$i):'' ?>

            </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    <a class="mt-5 text-decoration-none fs-3 text-info" href="index.php" >Grįžti į pagrindinį puslapi</a>
</div>

<?php include "head.php" ?>
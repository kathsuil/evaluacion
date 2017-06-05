<?php include('header.php');?>
<?php
$json= file_get_contents('nada.json');
$datos = json_decode($json,true);
$todos = count ($datos);
 ?>

 <?php
 $csv = array_map("str_getcsv", file('proyectos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
               ?>
                       <?php for($a = 0; $a < $total = count($csv); $a++){?>

    <div class="container">
             <!-- aqui empiezan los articulos -->
 <div class="col-md-6 portfolio-item">
                 <div class="row">
                    <div class="col-md-12 portfolio-item">
                 <img src="<?php echo $csv[$a]["image"];?>" class="img-responsive">
                <h3>
                    <?php echo($csv[$a]["titulo"])?>
                </h3>
                <p><?php echo $csv[$a]['texto'];?></p>
                <a class="btn btn-default read-more" href="<?php echo $csv[$a]['vinculo'];?>">Ir a la página<span class="glyphicon glyphicon-chevron-right"></span></a>
      <hr>
      </div>

</div>
</div>
 <?php };?>
<?php include('footer.php');?>

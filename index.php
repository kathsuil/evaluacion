<?php include('header.php');?>
<?php
$json= file_get_contents('nada.json');
$datos = json_decode($json,true);
$todos = count ($datos);
 ?>
 <?php
 $csv = array_map("str_getcsv", file('articles.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
               ?>
               <?php for($a = 0; $a < $total = count($csv); $a++){?>
               <!-- aqui empiezan los articulos -->
<div class="container">
  <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
 <!-- titulo -->
  <h2><small><?php echo($csv[$a]["prev"])?></small> </h2>
      <h1 class="page-header">
          <a href="single.php?url=<?php print($a)?>">
                      <?php echo($csv[$a]["titulo"])?>
          </a>
        </h1>
  <h5>Palabras clave: <small><?php echo $csv[$a]['tags'];?></small></h5>
<!-- imagen -->
                      <a href="single.php?url=<?php print($a)?>">
                          <img src="<?php echo $csv[$a]["images"];?>" class="img-responsive">
                      </a>
<!-- bajada -->
                <p><?php echo $csv[$a]['resumen'];?></p>
                <a class="btn btn-default read-more" href="#">Leer más <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>
        </div>


 <?php };?>
<?php include('footer.php');?>

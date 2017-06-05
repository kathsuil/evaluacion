<?php include('header.php');?>
<?php
$json= file_get_contents('biblio.json');
$datos = json_decode($json,true);
$todos = count ($datos);
 ?>
    <!-- Main Content -->
<div class="container">
<div class="row">
<!--<pre><?php print_r($datos);?></pre> -->
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
  <h1 class="page-header">
Bibliografía
    </h1>
<?php for($n = 0; $n < $todos; $n++){?>
  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <p><?php echo($datos[$n]["autor"]);?> (<?php echo($datos[$n]["year"]);?>). <?php echo($datos[$n]["title"]);?>. <?php echo($datos[$n]["city"]);?>:<?php echo($datos[$n]["ed"]);?></p>
  </div>
</div>
<?php }; ?>


            </div>
        </div>
    </div>

<hr>


    <?php include('footer.php');?>

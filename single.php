<?php include("header.php");?>
<?php
 $csv = array_map("str_getcsv", file('articles.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
$la_url = $_GET['url'];
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
              <h2><small><?php echo($csv[$la_url]["prev"])?></small> </h2>
                <h1><?php echo($csv[$la_url]["titulo"])?></h1>
                <h5>Palabras clave: <small><?php echo $csv[$la_url]['tags'];?> </h5>
                <p><?php echo $csv[$la_url]['resumen'];?></p>
                <img src="<?php echo $csv[$la_url]["images"];?>" class="img-responsive">
                <hr>
                <article>
                  <?php echo($csv[$la_url]["texto"])?>
                </article>
                <p>Referencia: <?php echo $csv[$la_url]['apa'];?> </p>
                <h6>Link: <a href="<?php echo $csv[$la_url]['vinculo'];?>"><?php echo $csv[$la_url]['vinculo'];?></a></h6>
            </div>
        </div>
    </div>
</div>
</header>


    <!-- Post Content -->


    <hr>

<?php include("footer.php");?>

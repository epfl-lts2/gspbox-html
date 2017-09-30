<?php 
$path_include='../include/';
include($path_include."header.php");
print_header("Notes for The Graph Signal Processing Toolbox","Graph, wavelet, filerbanks, preprint, articles");
?>

<body>

  <div class="container">
    
    <!-- nav header -->
    <div class="masthead">
      <?php topmenu("Notes"); ?>
    </div>

    <!-- main page -->
    <div class="row-fluid">

      <div class="span12">
          
        <br/>
        <?php include("description.php"); ?>

        <!-- Table with entries -->
        <?php include("by_number.php"); ?>
      </div><!--</span12>-->

    </div><!--</row-fluid>-->

    <!-- footer -->
    <?php include($path_include."footer.php"); ?>

  </div><!--</container>-->

</div>
</body>
</html>

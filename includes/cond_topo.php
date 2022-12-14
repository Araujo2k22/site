<?php
if(isset($_SESSION['login'])){      
    include 'includes/topo.php';
    echo '<div class="card-body text-right" id="icon1">';
    echo '<a href="includes/topo_user.php"><i class="bi bi-person"></i></a>';
    echo '</div>';      
  }
  else
  {
    include 'includes/topo_user.php';
  }
?>
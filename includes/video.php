<?php
              require_once 'funcoes.php';
              require_once '../core/conexao_mysql.php';
              require_once '../core/sql.php';
              require_once '../core/mysql.php';
              foreach($_GET as $indice => $dado){
                    $$indice = limparDados($dado);
                }           

              $criterio = [];
              if(!empty($busca)){
                    $criterio[] = ['nome', 'like', "%{$busca}%"];
              }
              $videos = buscar(
                  'video',
                    ['*']
                );
            ?>   
            <?php
              $video_dir = "../upload/videos/";
              foreach($videos as $video):
            ?>
            <video width="320" height="240" controls>
              <source src="<?php echo $video_dir.$video['filePath'] ?>" type="video/mp4">
              Your browser does not support the video tag.
            </video>
            <?php endforeach; ?>  
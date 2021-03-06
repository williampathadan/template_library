<?php
    $page_name = basename($_SERVER['PHP_SELF']);
    $useragent=$_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (isset($title)? $title : 'Footers') ?></title>
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"-->
    <link rel="stylesheet" href="../_files/css/bootstrap.css">
    <link rel="stylesheet" href="../_files/css/bttn.min.css">
    <?php 
    echo (isset($header_include)?$header_include:'');
    ?>
    <link rel="stylesheet" href="../_files/css/jumbotron.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu|Source+Sans+Pro:300,400,600|Roboto:500|Roboto+Slab|Montserrat:400,700|Lobster" rel="stylesheet">
    
  </head>
  <body>
      <div class="browser_detect"><a href="../index.php" style="display: inline-flex; align-items:center; font-weight: bold; text-decoration: none;"><i class="material-icons" style="margin-right: 10px;">arrow_back</i> Back To Main page</a></div>
  <?php
      if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
        ?>
        <!--div class="browser_detect">Mobile browser</div-->
        <?php
    } else {
        ?>
        <!--div class="browser_detect">Desktop browser</div-->
        <?php
    }
?>
  
      
     <div class="container">
        <div class="row">
            <div class="col-12">
                 <div class="footer_collection_body text-center d-flex flex-column justify-content-center align-items-center">

                    <h1>Jumbotron</h1>

                    <div class="header_collection_list d-flex flex-wrap">
                        <a class="<?php echo ($page_name == 'index.php'?'active': ''); ?>"  href="index.php">Default</a>
                        <a class="<?php echo ($page_name == 'jumbotron-2.php'?'active': ''); ?>" href="jumbotron-2.php">Jumbotron 2</a>
                        <a class="<?php echo ($page_name == 'jumbotron-3.php'?'active': ''); ?>" href="jumbotron-3.php">Jumbotron 3</a>
                        <a class="<?php echo ($page_name == 'jumbotron-4.php'?'active': ''); ?>" href="jumbotron-4.php">Jumbotron 4</a>
                        <a class="<?php echo ($page_name == 'jumbotron-5.php'?'active': ''); ?>" href="jumbotron-5.php">Jumbotron 5</a>
                        <a class="<?php echo ($page_name == 'jumbotron-6.php'?'active': ''); ?>" href="jumbotron-6.php">Jumbotron 6</a>
                        <a class="<?php echo ($page_name == 'jumbotron-7.php'?'active': ''); ?>" href="jumbotron-7.php">Jumbotron 7</a>
                        <a class="<?php echo ($page_name == 'jumbotron-8.php'?'active': ''); ?>" href="jumbotron-8.php">Jumbotron 8</a>
                 
                    </div>

                    <img src="../_files/images/demo-arrow.png" alt="arrow" height="120" style="transform: rotate(180deg);">

                </div>
                
                </div><!-- End of col-12 -->
         </div> <!-- End of Row -->
    </div> <!-- End of Container -->

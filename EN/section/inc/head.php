<?php
  if (isset($_GET['color'])) 
  {
    $color = $_GET['color'];
    require '../../admin/lib/colors.php';
    $_color = new Colors();
    $color = $_color->get_color('colore',$color);
    $color_code =  $color[0]['code'];
    $color_name =  $color[0]['colore'];
    switch ($color_name) {
      case 'Black':
        $border = 'border_black.png';
        $style  = 'nicdark_style_black.css';
        break;
      case 'Blue':
        $border = 'border_blue.png';
        $style  = 'nicdark_style_blue.css';
        break;
      case 'Pink':
        $border = 'border_pink.png';
        $style  = 'nicdark_style_pink.css';
        break;
      case 'Yellow':
        $border = 'border_yellow.png';
        $style  = 'nicdark_style_yellow.css';
        break;
      case 'Silver':
        $border = 'border_white.png';
        $style  = 'nicdark_style_white.css';
        break;
      case 'Plum':
        $border = 'border_violet.png';
        $style  = 'nicdark_style_plum.css';
        break;
      case 'Turquoise':
        $border = 'border_terq.png';
        $style  = 'nicdark_style_terq.css';
        break;
      case 'Maroon':
        $border = 'border_reddark.png';
        $style  = 'nicdark_style_darkred.css';
        break;
      case 'Red':
        $border = 'border_red.png';
        $style  = 'nicdark_style_red.css';
        break;
      case 'Dark Orange':
        $border = 'border_darkorange.png';
        $style  = 'nicdark_style_darkorange.css';
        break;
      case 'Green':
        $border = 'border.png';
        $style  = 'nicdark_style.css';
        break;
      case 'Dark Green':
        $border = 'border_greendark.png';
        $style  = 'nicdark_style.css';
        break;
      case 'Brown':
        $border = 'border_brown.png';
        $style  = 'nicdark_style_brown.css';
        break;
      case 'Orange':
        $border = 'border_orange.png';
        $style  = 'nicdark_style_orange.css';
        break;
      
      
    }
  }
  
   
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
 
    <meta charset="utf-8">  

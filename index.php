<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>GRAUZONEN</title>
      <link rel="icon" type="image/png" href="grauzonenplakatpng.png">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

  </head>
    
    <style type="text/css">

      #weiss{
            color: white;            
        }        
    
    </style>
  
  <body background="glitchzwei.jpg"> 
        <img src="grauzonenplakat-page-001.jpg" class="img-responsive" alt="Responsives Bild" width="100%">       
      
            <div class="container">
        <!-- Example row of columns -->
        <div class="row" >
              
          <div class="col-md-12" style="margin-bottom: 20px; margin-top: 20px;">              
              <div style="background-color:rgba(0, 0, 0, 0.75);">
            <h2 id="weiss">GRAUZONE</h2>
            <p id="weiss">Schwarz oder weiß, gut oder schlecht, rechts oder links, alternativ oder konservativ, fortschrittlich oder stillstehend,
            Diesel oder Elektro, reich oder arm, normal oder durchgedreht, kommerzialisiert oder ignoriert. Fehlt da nicht was dazwischen?<br> <br>
            Während sich die Politik immer mehr in zwei Extreme bewegt und Differenzierungen einem Twitter-Stil weichen,
            stellt sich die Frage nach dem öffentlichen Raum: Wie können wir ihn gestalten, der doch von Werbeflächen,
            Autoprodukten und Investorenbauten dominiert wird? Was darf der Einzelne im öffentlichen Raum? <br> <br>
            München, eine Stadt, die sich durch ihre Schönheit und Sicherheit profiliert: Fehler werden versteckt,
            alltägliche Missgeschicke und Makel verpönt. Der Besitz von Obdachlosen wird aus dem Stadtbild entfernt
            und gleichzeitig der Leerstand von Gebäuden gesetzlich zugelassen. Der Abriss der letzten kreativen Freiflächen
            trägt zur Homogenisierung der zunehmenden einfältigen Stadtkultur bei, in der sich soziale Gruppen durch
            ihr Schwarz-Weiß Denken abgrenzen und reproduzieren. Das klingt jetzt alles ganz schön grau und trist?
            Dann sei dabei und mach die Stadt ein Stückchen aufregender!<br> <br>
            Unser Ziel ist es den öffentlichen Raum neu zu verhandeln, ein Stück weit zurückzuerobern und Themen anzusprechen,
            die ohne dich untergehen. Der Sticker in deiner Hand kann dein Weg zur Selbstermächtigung sein.
              </p>           
            </div>
          </div>       

          <div class="col-md-12">
              <div style="background-color:rgba(0, 0, 0, 0.75);">
            <h2 id="weiss">Anleitung</h2>
            <p id="weiss">Lade dir den Sticker runter und los gehts! Markiere deine Grauzone und lass die Andern daran teilhaben,
              indem du ein Foto und/oder Kommentar dazu teilst.
              <br>
                (Bilder kann man <a href="https://www.grauzonen.org/uploadPage">hier</a> hochladen.) </p>
                  <br>
                 <a class="btn btn-primary" href="grauzonenDownload.jpg" download="grauzonenDownload.jpg">Download Sticker JPG</a>
              </div>
          </div>
        </div>   
			<!-- FOTO SLIDER -->             
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin-bottom: 20px;margin-top: 20px; height: 500px; background-color: rgba(0, 0, 0, 0.75);">
                <div class="carousel-inner"  style="max-height: 500px;">                  
                  <!-- ERSTES FOTO -->
        <div class="carousel-item active" style="max-height: 500px;">
          <img class="d-block w-100" src="uploads/uploads00000sticker01.jpeg" alt="First slide" style="max-height: 500px; object-fit: contain;">
        </div>        
            <!-- ALLE ANDEREN FOTOS -->
        <?php
        $dir = "/kunden/homepages/30/d767783288/htdocs/htdocs/uploads";          
          $fotos = scandir($dir);      
        for($i = 4; $i < sizeof($fotos);  $i++){         
          echo "<div class='carousel-item' style='max-height: 500px;'>
          <img class='d-block w-100' src='uploads/$fotos[$i]' alt='Slide $i' style='max-height: 500px; object-fit: contain;'>
        </div>";
        }        
        ?>         
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
              
              <p style="background-color:rgba(0, 0, 0, 0.0);">
                impressum<br>
                kollektiv grauzonen<br>
                email: grauzonen.org@gmail.com</p>
              
              
                </div> <!-- /container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
include_once('connectbdd.php');
include_once('header.php');
?>
<main>
    <!-- Presentation -->
    <div class="container  FDNoirClair">
        <div class="row no-gutters ">
            <!-- 1 eme Tableau -->
            <div class="col-sm-12 col-xl-6 FDNoirClair ">
                <?php
                $query = "SELECT * FROM equipes inner join calendrier on calendrier.Id_Equipes = equipes.Id_Equipes ORDER BY Id_Rencontres DESC LIMIT 3 ; ";
                $req = $bdd->query($query);
                while ($row = $req->fetch()) {
                    ?>
                    <table border=2>
                        <thead>
                            <tr>
                                <th>
                                    <h2><?php echo 'Match du ' . $row['Date_calendrier']; ?></h2>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo 'HBCK' . $row['Nom_Equipes']; ?></td>
                                <td>
                                    <h2>VS</h2>
                                </td>
                                <td><?php echo $row['Equipe_Adverse']; ?></td>
                                <td><?php echo $row['Horaire']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php
            }
            $req->closeCursor();
            ?>
            </div>
        </div>
    </div>

    <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/hbck2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/hbck5.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/hbck3.jpg" style="width:100%">
  <div class="text">photo de Maurice Kloetzlen</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 3</div>
  <img src="images/hbck4.jpg" style="width:100%">
  <div class="text">photo de Maurice Kloetzlen</div>
</div>


</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span> 
<span class="dot" onclick="currentSlide(2)"></span> 
<span class="dot" onclick="currentSlide(3)"></span> 
<span class="dot" onclick="currentSlide(4)"></span> 
</div>








<div class="container">
<div class="row">
  <div class="col-sm-12 col-xl-6">
    <div class="resultat">
      <div class="match"><b>Dernier Match 07/04/2019</b>
      </div><!--fin match -->
    </div><!--fin resultat -->
  </div><!--fin col --><br><br>
      <div class="equipe1">
        <div class="col-sm-12 col-xl-6">
          <span class="equ"><b>HBC KINGERSHEIM</b></span> <br><br> 
        </div>
        <div class="col-md-5 col-sm-5">
          <a class="logoh"href="https://www.facebook.com/henri.kingersheim" target="_blank" style="background-image:url(images/logohbck1.png);">
          <img src="images/logohbck1.png" width="70" height="90" alt=""></a><br><br>
        </div><!--fin col -->
      </div><!--fin equipe1 -->
        <div class="equipe2">
          <div class="col-sm-12 col-xl-6">
          <span class="equi"><b>Handball Montigny Lès Metz</b></span> <br><br>
          </div><!--fin col -->
          <div class="col-md-5 col-sm-5">
          <a class="adversaire"href="https://www.facebook.com/pages/category/Amateur-Sports-Team/Handball-Montigny-L%C3%A8s-Metz-110731959529369/" target="_blank" style="background-image:url(images/ehbm.jpg);">
          <img src="images/ehbm.jpg" width="70" height="90" alt=""></a> 
        </div><!--fin col -->
      </div><!--fin equipe2 -->
      <div class="col-sm-12 col-xl-6">
          <span class="vs"><b>VS</b></span>
      </div><!--fin col -->    
      <div class="col-md-5 col-sm-5">
          <span class="point1"><b>27</b></span>
      </div><!--fin col -->
      <div class="col-md-5 col-sm-5">
          <span class="point2"><b>27</b></span><br>
      </div><!--fin col -->


  </div>
</div>
</div>
















<!-- calendrier-->
<div class="container-calendrier">
<div class="row">
  <div class="col-md-5 col-sm-5">
      <?php
      
      require('date.php');
      $date = new Date();
      $year = date('y');
      $events = $date->getEvents($year);
      $dates = $date->getAll($year);
      ?>
      <div class="periods">
        <div class="year"></div>
          <div class="months">
           <!-- les mois -->

            <?php foreach ($date->months as $id=>$m){?>
              <a class="mois"onclick="hideMe(this.id)" id="<?php echo $id+1; ?>"><b><?php echo utf8_encode (substr(utf8_decode($m),0,3));?></b></a>
            <?php }//fin foreach ?>
          </div><!--fin div months -->
       <!-- les jours -->
        <div class="clear"></div>
        <?php //$dates = current($dates);
        
        $dates = current($dates);
        
      ?>
        <?php foreach ($dates as $m=>$days){?>
          <div class="month relative"id="month <?php echo $m;?>" >
            <table class="table table-bordered">
              <thead>
                <tr>
                  <?php foreach ($date->days as $d){?>
                  <th><?php echo substr($d,0,3);?></th>
                  <?php }//fin foreach ?>
                </tr>
              </thead>
              <tbody>
                <tr>
                <?php $end = end($days);
                 foreach($days as $d=>$w){ 
                      $time = strtotime('$year-$m-$d'); 
                          if($d == 1){
                              $espace = $w-1;
                              if($espace != 0){?>
                          
                  <td colspan="<?php echo $w-1;?>"></td>
                     
                 <?php }//fin if
               }// fin if?>
                 
                  <td <?php if($time == strtotime(date('y-m-d'))){?> class="today"><?php } // fin if ?></td>
                  <!-- jours de la semaine -->
                    <div class="relative">
                    <div class="day"><?php echo "$d";?></div>
                     </div><!-- fin div relative-->
                     </div>
                    <!--les évenements -->
                     <ul class="events">
                      <?php 
                      //if(isset ($events['date_de_match'])) { 
                      
                       foreach ($events as $e) {
                        ?>
                          <?php 
                         // print_r($e->date_de_match);
                          $m = sprintf("%02d", $m);
                          $d = sprintf("%02d", $d);
                          $c = ("20".$year."-".$m."-".$d);//->format('Y-m-d');
                          if($e->date_de_match == $c){
                            ?><li onmouseover="seeMee('<?php echo $e->date_de_match; ?>','<?php echo $e->titre; ?>','<?php echo $e->heure; ?>')"></li><?php
                          }// fin if
                          
                         //print_r("20".$year."-".$m."-".$d);
                         
                         //print_r($m) ;?>

                       <?php  
                              } // fin foreach
                       ?>    
                     </ul> 
                    </td>
                  <?php if($w ==7){?>
                  </tr><tr>
              <?php }// fin if 
              }// fin foreach
               if ($end != 7){?>
                <td colspan="<?php echo 7-$end;?>"></td>
                  <?php
                } // fin if
                ?>
                </tr>
              </tbody>
            </table>
          </div><!-- fin div month relative -->
        <?php } // fin foreach ?>
      </div><!--fin div periods  -->
  </div><!--fin col-->
  <br>
  <div class="col-md-5 col-sm-5">
     <div class="messages">
       <p id="msg1"style="color: rgba(0, 0, 0, 0.0)"><b></b></p>
       <p id="msg2"style="color: rgba(0, 0, 0, 0.0)"><b></b></p>
       <p id="msg3"style="color: rgba(0, 0, 0, 0.0)"><b></b></p>
     </div>
    <img class="handballeuse" src="images/handballeuse.png"style="width:50%">
  </div>
</div><!--fin row -->
</div><!--fin container -->
<script type="text/javascript">
//script slider
var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none"; 
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1} 
slides[slideIndex-1].style.display = "block"; 
setTimeout(showSlides, 5000); // Change image every 5 seconds
}
//script calendrier
function seeMee(date,titre, heure){
console.log(date + titre + heure);
  let one = document.getElementById("msg1");
  let two = document.getElementById("msg2");
  let tree = document.getElementById("msg3");
  one.innerHTML = date;
  two.innerHTML = titre;
  tree.innerHTML = heure;
  one.style.color = "rgb(254, 173, 57,1)";
  two.style.color = "rgb(254, 173, 57,1)";
  tree.style.color = "rgb(254, 173, 57,1)";
}
function sertARien() {

  console.log('je sert a rien');
}

function hideMe(myDiv){
for (var i = 1; i < 13; i++) {
  var m = document.getElementById("month "+i);
  console.log("month "+i);
  m.style.display = "none";
}
document.getElementById("month "+myDiv).style.display = "block";
}

jQuery(function($){
$('.month').hide();
$('.month:first').show();
$('.months a:first').addClass('active');
  var current = 1;
$('.months a:').click(function(){
    var month = $(this).attr('id') .replace('linkMonth','');
    if (month != current) {
      $('month'+current).slideUp();
      $('month'+month).slideDown();
      $('.months a:').removeClass('active');
     // $('.months a#linkMonth'+month).addClass('active');
      current = month;
    }//fin if
    return false;
  });//fin click function
});//fin function($)
</script>

<?php 
class Date{
	var $days = array('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche');
	var $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre');


	//recupere les evenements
	function getEvents($year){
		global $bdd;
		$req = $bdd->query('SELECT `id`, `titre`, `date_de_match`, `heure` FROM `matchs` WHERE YEAR(`date_de_match`)='.'20'.$year);
		
		$r = array();
		while ($d = $req->fetch(PDO::FETCH_OBJ)){
			/*$r[strtotime($d->date_de_match)][$d->id] = $d->titre;*/
			array_push($r, $d);
		}//fin while
		return $r;
	}

	function getAll($year){
		$r = array();
		/*$date = strtotime($year.'-01-01');
		while(date('y',$date)<= $year){
			// ce que je veux le jour de la semaine
		$y = date('y',$date);
		$m = date('n',$date);
		$d = date('j',$date);
		$w = str_replace('0','7',date('w',$date));
		$r[$y][$m][$d] = $w;
		$date =strtotime(date('y-m-d',$date).'+ 1 DAY');
		}*/

		$date = new DateTime($year.'-01-01');

		while($date->format('y')<= $year){
			// ce que je veux le jour de la semaine
			$y = $date->format('y');
			$m = $date->format('n');
			$d = $date->format('j');
			$w = str_replace('0','7',$date->format('w'));
			$r[$y][$m][$d] = $w;
			//ajoute une periode de 1 jour 
			$date->add(new DateInterval('P1D'));
		}


		return $r;
	}
}
 ?>



</main>
<?php
include('end_page.php');
?>
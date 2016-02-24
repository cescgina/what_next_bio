<?php

require_once 'dbconfig.php';

$main_themes = array("biomed","biochem","bioinfo","biotech", "bioenv", "biomicro", "biogen");
if(isset($_POST['preferences']))
{
  foreach ($main_themes as $value) {
    if ($_POST[$value]){
      $value = trim($_POST[$value]);
    }else{
      continue;
    }
  }
  $position = trim($_POST['position']);
  $location = trim($_POST['location']);
}

include('header.php');
?>
</div>
 <div id="page-wrap">
   <div id="form-container">
     <p id="form-title">Preferences</p>
     <form method="post" name="preferences" action="dontknowyet.php">
       <label>Research interests: </label>
   <ul>
     <label for="biomed">Biomedicine</label> <input type="checkbox" name="biomed" id="biomed" value="biomed">
     <label for="biochem">Biochemistry</label> <input type="checkbox" name="biochem" id="biochem" value="biochem">
     <label for="bioinfo">Bioinformatics</label> <input type="checkbox" name="bioinfo" id="bioinfo" value="bioinfo">
     <label for="biotech">Biotechnology</label> <input type="checkbox" name="biotech" id="biotech" value="biotech">
     <label for="biotech">Environmental biology</label> <input type="checkbox" name="bioenv" id="bioenv" value="bioenv">
     <label for="biomicro">Microbiology</label> <input type="checkbox" name="biomicro" id="biomicro" value="biomicro">
     <label for="biogen">Genetics</label> <input type="checkbox" name="biogen" id="biogen" value="biogen">
   </ul>
   <br /><br />
       <label >Position:</label> <br />
       <input type="radio" checked="checked" name="position" value="Phd">Phd <br /><br />
       <input type="radio"  name="position" value="Posdoc">Posdoc <br /><br />
       <input type="radio"  name="position" value="Other">Other <br /><br />
      <br />
       <label>Location of interest:
       <input type="radio" checked="checked" name="location" value="inside">I want to expand frontiers and study outside. <br /><br />
       <input type="radio"  name="location" value="outside">I prefer to stay here, my country is awesome. <br /><br />
       <input type="radio"  name="location" value="both">Everything it's ok with me <br /><br />
       </label><br /><br />

       <input type="submit" name="preferences" value="Submit preferences">
     </form>
   </div>
 </div>

<?php include('footer.php');?>

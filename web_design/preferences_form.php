<?php

require_once 'dbconfig.php';

include('header.php');
?>
<style>

tr.spaceUnder > td
{
  padding-bottom: 1em;
}

div label input {
   margin-right:100px;
}
body {
    font-family:sans-serif;
}


#ck-button {
  -moz-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  -webkit-box-shadow:inset 0px 1px 0px 0px #fce2c1;
  box-shadow:inset 0px 1px 0px 0px #fce2c1;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffc477), color-stop(1, #fb9e25));
  background:-moz-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-webkit-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-o-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:-ms-linear-gradient(top, #ffc477 5%, #fb9e25 100%);
  background:linear-gradient(to bottom, #ffc477 5%, #fb9e25 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffc477', endColorstr='#fb9e25',GradientType=0);
  background-color:#ffc477;
  -moz-border-radius:6px;
  -webkit-border-radius:6px;
  border-radius:6px;
  border:1px solid #eeb44f;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 24px;
  text-decoration:none;
  text-shadow:0px 1px 0px #cc9f52;
}

#ck-button label {
    float:left;
    width:10.0em;
}

#ck-button label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button label input {
    position:absolute;
    top:20px;
}

#ck-buttom: input:hover + span {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25;
}

#ck-button input:checked + span {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25
}
#ck-button input:checked:hover + span {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fb9e25), color-stop(1, #ffc477));
  background:-moz-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-webkit-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-o-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:-ms-linear-gradient(top, #fb9e25 5%, #ffc477 100%);
  background:linear-gradient(to bottom, #fb9e25 5%, #ffc477 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fb9e25', endColorstr='#ffc477',GradientType=0);
  background-color:#fb9e25;
}
.ck-buttom:active {
  position:relative;
  top:1px;
}

</style>
</div>
 <div id="page-wrap">
   <div id="form-container">
     <p id="form-title">Preferences</p>
     <form method="post" name="preferences" action="query.php">
       <table>
           <tr class="spaceUnder">
             <td align="left">Research interests:</td>
             <td align="center">
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Biomedicine</span>
                 </label>
               </div>
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Biomedicine</span>
                 </label>
               </div>
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Biochemistry</span>
                 </label>
               </div>
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Bioinformatics</span>
                 </label>
               </div>
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Biotechnology</span>
                 </label>
               </div>
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Enviromental</span>
                 </label>
               </div>
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Microbiology</span>
                 </label>
               </div>
               <div id="ck-button">
                 <label>
                   <input type="checkbox" name="tag" value="biomed"><span>Genetics</span>
                 </label>
               </div>
               <label for="biomed">Biomedicine</label> <input type="checkbox" name="tag[]" id="biomed" value="Biomedicine">
               <label for="biochem">Biochemistry</label> <input type="checkbox" name="tag[]" id="biochem" value="Biochemistry">
               <label for="bioinfo">Bioinformatics</label> <input type="checkbox" name="tag[]" id="bioinfo" value="Bioinformatics">
               <label for="biotech">Biotechnology</label> <input type="checkbox" name="tag[]" id="biotech" value="Biotechnology">
               <label for="biotech">Environmental</label> <input type="checkbox" name="tag[]" id="bioenv" value="Environmental">
                 <label for="biomicro">Microbiology</label> <input type="checkbox" name="tag[]" id="biomicro" value="Microbiology">
               <label for="biogen">Genetics</label> <input type="checkbox" name="tag[]" id="biogen" value="Genetics">
             </td>
           </tr>
           <tr class="spaceUnder">
             <td align="left">Position:</td>
             <td colspan="3" align = "center">
               <input type="radio" checked="checked" name="position" value="PHD">Phd
               <input type="radio"  name="position" value="postdoc">Postdoc
               <input type="radio"  name="position" value="other">Other
             </td>

           </tr>
           <tr class="spaceUnder">
             <td align="left">Location:</td>
             <td align="center">
               <select name="country">
                   <option selected="selected"  value="Spain">Spain</option>
                   <option value="Italia">Italia</option>
                   <option value="Germany">Germany</option>
                   <option value="France">France</option>
               </select>
             </td>
           </tr>
           <tr class="spaceUnder">
             <td align="left">Want to work outside?:</td>
             <td align="center">
               <input type="radio" checked="checked" name="location" value="outside">I want to expand frontiers and study outside. <br /><br />
               <input type="radio"  name="location" value="inside">I prefer to stay here, my country is awesome. <br /><br />
               <input type="radio"  name="location" value="both">Everything it's ok with me <br /><br />
             </td>

           </tr>


         </table>

       <input type="submit" name="preferences" value="Submit preferences">
     </form>
   </div>
 </div>

<?php include('footer.php');?>

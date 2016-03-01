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
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
}

#ck-button label {
    float:left;
    width:4.0em;
}

#ck-button label span {
    text-align:center;
    padding:3px 0px;
    display:block;
    border-radius:4px;
}

#ck-button label input {
    position:absolute;
    top:-20px;
}

#ck-button input:hover + span {
    background-color:#efE0E0;
}

#ck-button input:checked + span {
    background-color:#911;
    color:#fff;
}

#ck-button input:checked:hover + span {
    background-color:#c11;
    color:#fff;
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

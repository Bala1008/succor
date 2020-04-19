<!DOCTYPE html>
<html>
    <head>
<title>Scholarship form</title>
    </head>
  
<style>
    form{
        background: grey;
        color: aqua;
        font-style: italic;
        cursor: pointer;
        font-size: 20px;
    }
    
        
        
        
    }
    </style>
<body background="pink">
    <hr/>
<h1 align= "center"><u><b>SCHOLARSHIP FORM</b></u></h1><hr/>    
    <center><fieldset>
<hr\>        
<p>ENTER THE FOLLOWING DETAILS</p>          
<hr\>        
<form name="scholarship form" action="page2.php" method="post">
<br>
<br>
NAME: <input type="text" name="name" value="">  
<br>
<br>
<br>    
FATHER'S NAME: <input type="text" name="fathername" value="">    
<br>
<br>
<br>    
MOTHER'S NAME: <input type="text" name="mothername" value="">      
<br>
<br>
<br>    
MOBILE NUMBER: <input type="text" name="mob" value="">      
<br>
<br>
<br>    
QUALIFICATION:<select name="qualification">
<option value="SSLC">SSLC</option>
<option value="CBSE">CBSE</option>
<option value="ICSE">ICSE</option>
<option value="MATRIC">MATRIC</option>     
</select>    
<br>
<br>
<br>    
MARKS PERCENTAGE:<input type="text" name="marks" value="">
<br>
<br>
<br>    
TYPE OF SCHOLARSHIP:<input type="radio" name="scholar" value="govt">Government
<input type="radio" name="scholar" value="pvt">Private     <br><br><br>
TYPES OF DISABILITIES:<br><br><input type="checkbox" name="area[]"  value="physical">Physical Disability<br><br>
    <input type="checkbox" name="area[]" value="intellectual">Intellectual Disability<br><br>
    <input type="checkbox" name="area[]" value="psychiatric">Psychiatric Disability<br><br>
    <input type="checkbox" name="area[]" value="visual impairments">Visual Impairments<br><br>
    <input type="checkbox" name="area[]" value="hearing impairments">Hearing Impairments<br><br>
    <input type="checkbox" name="area[]" value="neuro">Neurological Disorder<br><br>
    <p>EXPERIENCE OF SUFFERING:</p><textarea name="suffer" cols="30" rows="10" placeholder="enter the experience of suffering"></textarea><br><br>
<input type="submit" name="SUBMIT" value="`SUBMIT">        
</form>
</fieldset>
</center>

    
</body>
</html>    
    
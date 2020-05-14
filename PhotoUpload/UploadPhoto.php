<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
      <body>
    <div align="center">
        <h3>Upload Your Photo</h3>   
        
    </div>
          <form action="upload_controller.php" method="post">
  <div class="form-group" style='margin-left: 5%; margin-right: 5%'>
    <h5 for="namephoto">Name your photo</h5>
    <input type="text" class="form-control" id="photoname" value="Name" aria-describedby="nameofphoto" placeholder="Enter photo name">
    
  </div>
        <div class="form-group" style='margin: 5%'>     
    <h5 for="photodescription">Please write your description below</h5>
    <textarea class="form-control" id="photodescription" rows="10" value="Description" placeholder="Start typing here"></textarea>
  </div>
  
   <div class="form-group" style='margin-left: 25%; margin-right:25%'>
      <h5 for="uploadImage">Upload an image</h5>
      <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
      <input type="file" name="PhotoLink" id="fileToUpload" style='width: 100%' ;>
      <small id="titlehelp" class="form-text text-muted">Please upload a .jpg file</small>
    </div>
        
 <h5 align="center">Click here to post your photo</h5>
 <div style='margin-left: 25%; margin-right: 25%; margin-bottom: 5%; margin-top: 2%' align="center">
  <button type="submit" class="btn btn-primary" name="action" value="uploadphoto">Post your photo</button>
  </div>
</form>
    
    
        
        
    </body>    
        
 </html>
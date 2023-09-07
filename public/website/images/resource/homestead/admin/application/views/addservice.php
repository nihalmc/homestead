<div class="row container" style="">
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
  <h2>Services </h2>  <h3>Add Service </h3>
<form id="form1"  style="margin-top:20px;" action="<?php echo base_url(); ?>addservice/add" method="post" enctype="multipart/form-data"  onSubmit="return FrmSub()">
   
              <div class="row from-group">
                  <label class="col-md-2">
                      Enter Title
                      </label>
                      <div class="col-md-4">
                          <input type="text" name = "txttitle" class="form-control"/>
                          </div>
                          

                  </div>    
                   <div class="row from-group">
                  <label class="col-md-2">
                     Text
                      </label>
                      <div class="col-md-10">
                         	<textarea name="txtDescription"></textarea>
                          </div>
                          

                  </div>    
                   <div class="row from-group">
                  <label class="col-md-2">
                     Logo
                      </label>
                      <div class="col-md-4">

                        <input type="file" name="filelogo" class="form-control" />

                        



                          </div>
                          

                  </div>  
                 
                    <div class="row from-group">
                  <label class="col-md-2">
                     Show in home page
                      </label>
                      <div class="col-md-4">
                          <input type="checkbox" name="chkHomepage" id="chkHomepage" class="form-control"/>
                          <input type="hidden" name="hiddenshowhomepage" id="hiddenshowhomepage">
                          </div>                       
                  </div>
                  <div class="row form-group">
                      <div class="col-md-2"> </div>
                      <div class="col-md-2"> 
                          <button type="submit" class="btn btn-primary"> Save </button>
                      </div>
                      </div>  
  </form>
 <script>
    	CKEDITOR.replace( 'txtDescription' );
      </script>
              </div><! --/row -->


              <script type="text/javascript">
function FrmSub(){
if(document.getElementById('chkHomepage').checked  == true){	
    document.getElementById('hiddenshowhomepage').value = "1";
		
}
else
{
        document.getElementById('hiddenshowhomepage').value = "0";	
	

}
	

	
}
</script>
<div class="row container" style="">
<h2>Gallery </h2>  <h3>Add Gallery </h3>
<form id="form1" style="margin-top:20px;" method="post" action ="addgallery/add" enctype="multipart/form-data"  onSubmit="return FrmSub()" >
    <div class="row form-group">

        <div class="col-md-2">
            Title
            </div>
            <div class="col-md-5">
<input type="text" name="txttitle" class="form-control"/>

                </div>
        </div>
        <div class="row form-group">

        <div class="col-md-2">
            Image
            </div>
            <div class="col-md-5">
<input type="file" name="fimeimage" class = "form-control" />

                </div>
        </div>
        <div class="row form-group">

        <div class="col-md-2">
            Show in home page
            </div>
            <div class="col-md-5">
 <input type="checkbox" id="chkHomepage" name="chkHomepage" class="form-control"/>
 <input type="hidden" name="hiddenshowhomepage" id="hiddenshowhomepage">
                </div>
        </div>
        <div class="row form-group">

        <div class="col-md-2">
        
            </div>
            <div class="col-md-5">

<button type="submit" class="btn btn-primary">Submit </button>
                </div>
        </div>
</form>
<script>
function FrmSub(){
if(document.getElementById('chkHomepage').checked  == true){	
    document.getElementById('hiddenshowhomepage').value = "1";
    alert()
		
}
else
{
        document.getElementById('hiddenshowhomepage').value = "0";	
	

}
	

	
}
</script>
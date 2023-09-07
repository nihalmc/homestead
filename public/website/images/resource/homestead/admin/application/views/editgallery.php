<div class="row container" style="">
<h2>Gallery </h2>  <h3>Edit Gallery </h3>
<form id="form1" style="margin-top:20px;" method="post" action ="update" enctype="multipart/form-data"  onSubmit="return FrmSub()" >
<input type="hidden" name = "hiddenid" value = <?php echo $gallery["id"]; ?> >
    <div class="row form-group">

        <div class="col-md-2">
            Title
            </div>
            <div class="col-md-5">
<input type="text" name="txttitle" value= "<?php echo $gallery["title"]; ?>" class="form-control"/>

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
 <input type="checkbox" <?php if( $gallery['show_in_home_page'] =="1") {echo "checked =  true";} ?> name="chkHomepage" id="chkHomepage" class="form-control"/>
 <input type="hidden" name="hiddenshowhomepage" id="hiddenshowhomepage">
                </div>
        </div>
        <div class="row form-group">

        <div class="col-md-2">
        
            </div>
            <div class="col-md-5">

<button type="submit" class="btn btn-primary">Submit </button></form>
   <a  class="btn btn-danger" onclick = "deletegallery(<?php echo $gallery['id']?>);" >   Delete</a>
                </div>
        </div>

<script>
function FrmSub(){
if(document.getElementById('chkHomepage').checked  == true){	
    document.getElementById('hiddenshowhomepage').value = "1";
		
}
else
{
        document.getElementById('hiddenshowhomepage').value = "0";	
	

}
}
function deletegallery(id)

{

  window.location= '<?php echo base_url();?>addgallery/delete?id='+id;
}
	

	

</script>
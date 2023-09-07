
<div class="row container" style="margin-top:20px;">
  <h3> Gallery Images </h3>

<h4>Add Gallery Images </h4>
<form id="form1" style="margin-top:20px;" method="post" action ="addgalleryimage/add" enctype="multipart/form-data"  onSubmit="return FrmSub()" >
<div class="row form-group">
        <div class="col-md-2">
        Select Gallery
        </div>

            <div class="col-md-4">
            
            <select class="form-control" name="SelectGallery" onchange ="getGalleryImageList();" id="selectgalery">
                <option value="0"> -- Select -- </opiotn>
                <?php
                
                    foreach ($gallery as $gal){?>
                <option value="<?php echo $gal->id?>"> <?php echo $gal->title ?> </option>

                <?php } ?> 
                </select>

    </div>
</div>
<div class="row form-group">
 <div class="col-md-2">
      title
        </div>
        <div class="col-md-4">
            <input type="text" name="txttitle" class="form-control"/>

            </div>
</div>

<div class="row form-group">
 <div class="col-md-2">
        upload image
        </div>
        <div class="col-md-4">
            <input type="file" name="fimeimage" class="form-control"/>

            </div>
</div>

<div class="row form-group">
    <div class="col-md-2">
    </div>

    <div class="col-md-2">
    <button type="submit" class="btn btn-primary"> Save </button>
    </div>
</div>
</form>
<script>
function FrmSub(){

		


	
}
</script>

</div>
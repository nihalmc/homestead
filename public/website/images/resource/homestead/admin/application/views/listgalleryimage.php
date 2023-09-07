
<div class="row container" style="margin-top:20px;">
  <h3> Gallery Images </h3>

<h4>List Gallery Images </h4>
<div class="row">
<div class="col-md-2">
Select Gallery
  </div>
</div>
<div class="col-md-2">
 
  <select class="form-control" onchange ="getGalleryImageList();" id="selectgalery">
    <option value="0"> -- Select -- </opiotn>
     <?php
     
		foreach ($gallery as $gal){?>
    <option value="<?php echo $gal->id?>"> <?php echo $gal->title ?> </option>

      <?php } ?> 
     </select>

  </div>
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
        <tr>
            <th>id</th>
            <th>Gallery_id</th>
            <th>title</th>
            
            <th>Image</th>
            <th>Edit </th>
            
                                 
            </tr>
        </thead>
        
        <tbody id="tbodyGalleryImage">
      
		
            
            </tbody>
            
            </table> 
    <script> 
function getGalleryImageList()
{
 debugger;
  var e = document.getElementById("selectgalery");
  var GalleryId = e.options[e.selectedIndex].value;
  console.log(GalleryId)
  if(GalleryId!=0)
  {

    $.ajax({
                type: "POST",
              //  dataType: "", 
                url: "<?php echo base_url(); ?>listgalleryimage/getgalleryImages", 
                data: 'gallery_id='+GalleryId,
                success: function(data)
					      {        
						        debugger;										
						        console.log(data);
                    html= "";	
                    for(i=0;i<data.length;i++)
                    {

                      html+= "<tr> <td>"+data[i].id+" </td> <td>"+data[i].gallery_id+" </td> <td>"+data[i].title+" </td> <td><img src= '<?php echo base_url()?>/uploads/gallery/"+data[i].image+"' height='100px' width ='100px' /></td> </td> <td><a href='<?php echo base_url()?>addgalleryimage/edit?id="+data[i].id+"'> EDIT </a></td> </tr>"
                    }
                    document.getElementById('tbodyGalleryImage').innerHTML = html;

                },
                error: function(data)
                {
                  document.getElementById('tbodyGalleryImage').innerHTML = "";
                }
    });		
  }
  else
  {
    document.getElementById('tbodyGalleryImage').innerHTML = "";

  }

}

    </script>
    </div>

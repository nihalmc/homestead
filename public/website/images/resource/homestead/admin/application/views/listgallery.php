<h3> Gallery </h3>

<h4>List Gallery </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>
            <th>id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Show in home page</th>
                <th>Edit</th>
               
                                 
            </tr>
        </thead>
        
        <tbody>
        <?php
		foreach ($gallery as $gal){?>
             <tr>
               <td><?php echo $gal->id?></td>

                  <td><img src= "<?php echo base_url()."/uploads/gallery/".$gal->image;?>" height="100px" width ="100px"/></td>
                <td><?php echo $gal->title;?></td>
                <td><?php echo $gal->title;?></td>
              <th> <a href='<?php echo base_url()."/addgallery/edit?id=".$gal->id ?>' > Edit </th>
                     
               
            </tr>
            
            
          <?php } ?> 
            
            </tbody>
            
            </table> 

    </div>
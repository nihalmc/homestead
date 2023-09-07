<h3> Services </h3>

<h4>List Services </h4>
<div class="row" style="margin-top:20px;">
  <table id="mlist" class="table table-bordered table-striped table-condensed" cellspacing="0" width="100%">
<thead>
            <tr>
            <th>id</th>
                <th>title</th>
                <th>Text</th>
              
                <th>Logo</th>
                <th> </th>
                                 
            </tr>
        </thead>
        
        <tbody>
        <?php
		foreach ($services as $serv){?>
             <tr>
               <td><?php echo $serv->id?></td>
                <td><?php echo $serv->title;?></td>
                <td><?php echo $serv->text;?></td>
            
                  <td><img src= "<?php echo base_url()."/uploads/logo/".$serv->logo;?>" height="100px" width ="100px" "/></td>
                  <th> <a href='<?php echo base_url()."/addservice/edit?id=".$serv->id ?>' > Edit </th>
                     
               
            </tr>
            
            
          <?php } ?> 
            
            </tbody>
            
            </table> 

    </div>
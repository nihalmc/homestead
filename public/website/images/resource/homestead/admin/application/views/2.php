    </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2017 - offer yatheem
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

     <!-- js placed at the end of the document so the pages load faster -->
   
   
    <script src="<?php echo extr();?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo extr();?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo extr();?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo extr();?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo extr();?>js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo extr();?>js/common-scripts.js"></script>
    
   
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--script for this page-->
    <script src="<?php echo extr();?>js/sparkline-chart.js"></script>    
	<script src="<?php echo extr();?>js/zabuto_calendar.js"></script>	
	
	
	
	<script type="application/javascript">
        $(document).ready(function () {


            


            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
    <?php if($this->session->flashdata("msg") != "")
	{
		echo "<script type='text/javascript'>alert('".$this->session->flashdata("msg")."')</script>";
   
		$this->session->set_flashdata("msg","");
		
	}
    ?>
  

  </body>
</html>

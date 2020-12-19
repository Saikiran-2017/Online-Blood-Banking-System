<footer>
  <div class=" container-fluid">
    <div class="row">
      <div class="col-sm-12" >
	  <p class='text-center'>Copyright &copy; All Rights Reserved</p>
	<p class='text-center'>Developed & Maintained by <a href="https://www.instagram.com/s_a_zz_9104/?hl=en" target="_blank"><b> SAI KIRAN</b></a></p>
		
      </div><!-- col-sm-6 -->
    </div><!-- row -->
  </div><!-- content container -->
</footer>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
	$(function() {

	$(".DATES").datepicker({ 

dateFormat: "yy-mm-dd",
changeMonth: true,
changeYear: true,
yearRange: '1900:' + new Date().getFullYear()
 }).val();
	});
</script>

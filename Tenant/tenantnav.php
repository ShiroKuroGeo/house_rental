<br><br><br><br>
<style>
	.collapse a{
		text-indent:10px;
	}

</style>

<nav id="sidebar" class='mx-lt-5' style="background-color:#BFCCB5;" >
		
	<div class="sidebar-list">
			<a href="tenant.php?page=thome" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span>Dashboard</a>
			<a href="tenant.php?page=tpayments" class="nav-item nav-categories"><span class='icon-field'><i class="fa fa-th-list "></i></span> Unit's Type</a>
			<a href="tenant.php?page=tUnits" class="nav-item nav-houses"><span class='icon-field'><i class="fa fa-tachometer-alt "></i></span>Unit's</a>
			<a href="tenant.php?page=Ttenants" class="nav-item nav-tenants"><span class='icon-field'><i class="fa fa-th-list "></i></span>Tenants</a>

	</div>

</nav>
<script>
	$('.nav_collapse').click(function(){
		console.log($(this).attr('href'))
		$($(this).attr('href')).collapse()
	})
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>

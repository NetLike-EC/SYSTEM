<?php include('../../init.php');
loginN();
$mSel='mSisVerBC';
$rowMod=detMod('VBARCODE');
include(RAIZf.'_head.php'); ?>
<body class="fixed-top">
<?php include(RAIZf.'_fra_top.php'); ?>
<div class="page-container row-fluid">
	<?php include(RAIZm.'mod_sidebar/index.php'); ?>
	<div class="page-content">
		<?php include(RAIZm.'mod_portlet/index.php'); ?>
		<?php include('_c-unificarProd.php'); ?>
	</div>
</div>
</body>
</html>
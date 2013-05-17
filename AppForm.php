<?php 
use LibDB as FN;
require_once('functions.php');
FN\session_auth();
FN\HtmlHeader("Data Entry");
FN\IncludeCSS();
FN\IncludeCSS("css/Button.css");
FN\jQueryInclude();
?>
<script type="text/javascript">
$(function() {
	$( ".datepick" ).datepicker({
								dateFormat: 'yy-mm-dd',
								showOtherMonths: true,
								selectOtherMonths: true,
								showButtonPanel: true,
								changeMonth: true,
							    changeYear: true,
								showAnim: "slideDown"
								});
});
</script>
</head>
<body>
	<div class="TopPanel">
		<div class="LeftPanelSide"></div>
		<div class="RightPanelSide"></div>
		<h1>
			<?php echo AppTitle;?>
		</h1>
	</div>
	<div class="Header"></div>
	<?php 
	require_once("topmenu.php");
	?>
	<div class="content">
		<div class="form">
			<form action="<?php echo FN\GetVal($_SERVER,'PHP_SELF'); ?>" method="post">
				<div style="text-align: center;"><h2>Form No. III</h2>
					<h3>(Register)</h3>
				</div>
				<span>West Bengal Form No. 139</span><br /><br/><br/>
				<h3>License Details</h3>
				<div class="FieldGroup">License No:<input type="text"/></div>
				<div class="FieldGroup">Issued On:<input class="datepick" type="text"/></div>
				<div class="FieldGroup">Expiry:<input class="datepick" type="text"/></div>
				<div class="FieldGroup">Inspection:<input type="text"/></div>
				<div class="FieldGroup">Purpose:<select name="Purpose">
						<option>-- Select --</option>
						<option>Protection</option>
						<option>Sports</option>
						<option>Institution</option>
					</select></div>
				<div class="FieldGroup">Police Station:<select name="PS">
						<option>-- Select --</option>
						<option>ANANDAPUR</option>
						<option>BELDA</option>
						<option>CHANDRAKONA</option>
						<option>DANTAN</option>
						<option>DASPUR</option>
						<option>DEBRA</option>
						<option>GARHBETA</option>
						<option>GHATAL</option>
						<option>GOALTORE</option>
						<option>KESHIARY</option>
						<option>KESHPUR</option>
						<option>KHARAGPUR(T)</option>
						<option>KHARAGPURL(L)</option>
						<option>LALGARH</option>
						<option>MOHANPUR</option>
						<option>NARAYANGARH</option>
						<option>PINGLA</option>
						<option>SABANG</option>
						<option>SALBONI</option>
					</select></div>
				<div class="FieldGroup">Valid within:<select name="ValidWithin">
						<option>-- Select --</option>
						<option>State</option>
						<option>District</option>
						<option>India</option>
					</select></div>
				<br/><br/><br/>
				<h3>Licensee Details</h3>
				<div class="FieldGroup">Name:<input type="text"/></div>
				<div class="FieldGroup">Present Address:<input type="text"/></div>
				<div class="FieldGroup">Permanent Address:<input type="text"/></div>
				<div class="FieldGroup">Status:<input type="text"/></div>
				<div class="FieldGroup">Remarks:<input type="text"/></div>
				<br /><br/><br/>
				<h3>Arms Details</h3>
				<div class="FieldGroup">Serial No:<input type="text"/></div>
				<div class="FieldGroup">Category:<input type="text"/></div>
				<div class="FieldGroup">Manufacturer:<input type="text"/></div>
				<div class="FieldGroup">Weight:<input type="text"/></div>
				<br /><br/><br/>
				<h3>Ammunition Details</h3>
				<div class="FieldGroup">Category:<input type="text"/></div>
				<div class="FieldGroup">Manufacturer:<input type="text"/></div>
				<div class="FieldGroup">Weight:<input type="text"/></div>
				<div class="FieldGroup">Quantity:<input type="text"/></div>
				<div style="clear:both;"></div>
				<input class="button black" type="submit" value="Update" /> 
				<input class="button black" type="submit" value="Save" /> 
			</form>
		</div>
	</div>
	<div class="pageinfo">
		<?php FN\pageinfo(); ?>
	</div>
	<div class="footer">
		<?php FN\footerinfo();?>
	</div>
</body>
</html>

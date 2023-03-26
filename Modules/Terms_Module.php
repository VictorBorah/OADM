The following states the terms and conditions of use of the <b><?php echo $clgName;?></b>,&nbsp;<?php echo $addLine1;?>,&nbsp; <?php echo $addLine2;?>&nbsp;
as hosted at <a href="https://<?php echo $webRoot;?>" target="_blank" title="Official Admission Portal">https://<?php echo $webRoot;?></a>&nbsp;:
<br>
<br>

<ol type="1">
	<?php
	$getTerms = "SELECT id,termsText,active FROM tbl_terms  WHERE active= '1' ";
	foreach ($connAdmApp->query($getTerms) as $dataRow)
		{
		?>
		<li><?php echo $dataRow['termsText'];?></li>
		<?php
		
		}		
	?>
	
	
</ol>
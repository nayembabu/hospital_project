<html>
    <head>
    
<base href="<?php echo base_url();?>">
<!-- 
<script type="text/javascript"> 
    document.open();
    document.write();
    document.close();
    window.focus();
    window.print();
    window.close();
</script>
 -->

		<style type="text/css">

		    @media print {
				@page {
					margin: 0;
				}				
		        body { margin: 0.5cm; }
		    }
		    .sys_logo_image {
		    	float: left;
		    	margin: 30px 20px 0 0;
		    }
		    .sys_name {
		    	font-size: 37px;
		    }
		    .address {
		    	margin: -30 0 0 100px;
		    	font-size: 18px;
		    }

    

            .header, .header-space,
            .footer, .footer-space {
              height: 100px;
            }
            .header {
              position: fixed;
              top: 0;
              left: 25%;
            }
            .footer {
              position: fixed;
              bottom: 0;
            }


        </style>
    </head>
    <body>


<table>
    <thead>
        <tr>
            <td>
                <div class="header-space">&nbsp;</div>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="content"><br><br><br><br><br><br><br><br>

					<table style="margin-left: 80px;" border="1px">
						<tr>
							<th>Department</th>
							<th>Test Name</th>
							<th>Amount (Tk)</th>
						</tr>
					<?php foreach ($labtest_forprint as $test_prints) {
						$test_taka[] = $test_prints->rate; ?>
						<tr>
							<td><?php echo $test_prints->diag_dept_name; ?></td>
							<td width="400px"><?php echo $test_prints->inv_name; ?></td>
							<td align="right"><?php echo $test_prints->rate; ?></td>
						</tr>
					<?php } ?>
						<tr>
							<td colspan="2" align="right">Sub Total</td>
							<td align="right"><?php echo array_sum($test_taka); ?></td>
						</tr>
						<tr>
							<td colspan="2" align="right">Discount</td>
							<td align="right"><?php echo $patient_info->ttl_dscnt_tk; ?></td>
						</tr>
						<tr>
							<td colspan="2" align="right">Receive</td>
							<td align="right" style="font-weight: bold; font-size: 18px;"><?php echo $patient_info->rcv_tak; ?></td>
						</tr>
					<?php if ($patient_info->ttl_due != 0) { ?>
						<tr>
							<td colspan="2" align="right">DUE</td>
							<td align="right"><?php echo $patient_info->ttl_due; ?></td>
						</tr>
					<?php } ?>
					</table>


					<div style="transform: rotate(320deg); position: absolute; margin: -60px 0 0 150px; font-weight: bold; color: black; font-size: 35px;">		
						<?php if ($patient_info->ttl_due == '0') {
							echo "PAID";
						}else echo "DUE ".$patient_info->ttl_due."/="; ?>
					</div><br>

					<table style="margin-left: 80px; width: 88.5%;" border="1px">
						<tr>
							<th>Receive Time</th>
							<th>Deliver Time</th>
						</tr>
						<tr>
							<td><?php echo date('d-M-y h:m A', $patient_info->this_tim); ?></td>
							<td><?php echo date('d-M-y', strtotime('+1 day',$patient_info->this_tim)); ?> 07:00 PM</td>
						</tr>
					</table><br><br><br><br>


					<div>Office Copy</div>

<?php
 foreach ($department as $dept) {
	foreach ($labtest_forprint as $labtest) {
		if ($labtest->dep_id == $dept->diag_dept_idii) { ?>
			<table border="1px">
				<tr>
					<td>Patient ID</td>
					<td>Department</td>
					<td>Investigation Name</td>
					<td align="right">Amount</td>
				</tr>
				<tr>
					<td><?php echo $patient_info->lab_rgstr_iidd; ?></td>
					<td><?php echo $dept->diag_dept_name; ?></td>
					<td><?php echo $labtest->inv_name; ?></td>
					<td><?php echo $labtest->rate; ?></td>
				</tr>
			</table>
		<?php }
	}
} ?>













                </div>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>
                <div class="footer-space">&nbsp;</div>
            </td>
        </tr>
    </tfoot>
</table>
    <div class="header">

			<img width="70px" height="70px" class="sys_logo_image" src="<?php echo $this->db->get('settings')->row()->logo; ?>">

			<h2 class="sys_name"><?php echo $this->db->get('settings')->row()->system_vendor;  ?></h2>
			<p class="address"><?php echo $this->db->get('settings')->row()->address;  ?>
			<br><?php echo $this->db->get('settings')->row()->phone;  ?> </p><br>
	<center style="border: 2px solid black; width: 150px; font-size: 20px; font-weight: bold; border-radius: 50px; margin-left: 200px; ">
		Patient Memo
	</center><br>
	<table style="float: left;">
		<tr>
			<td>ID No </td>
			<td>: <?php echo $patient_info->lab_rgstr_iidd; ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td>: <?php echo strtoupper($patient_info->labpnname); ?></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>: <?php if ($patient_info->gndr == 'm') {
					echo "Male";
				}elseif ($patient_info->gndr == 'f') {
					echo 'Female'; 
				} ?>,  <span>Age: <?php echo $patient_info->labpn_age; ?></span>
			</td>
		</tr>
	<?php if (!empty($patient_info->ptnmbl)) { ?>
		<tr>
			<td>Mobile No</td>
			<td>: <?php echo $patient_info->ptnmbl; ?></td>
		</tr>
	<?php } ?>
	</table>

	<div style="float: left;">
		<center style="margin-left: 30px;">
		Refd. By : <b><?php echo strtoupper($patient_info->dr_name); ?></b><br>	<?php echo $patient_info->profile; ?></center>
	</div>

    </div>
<div class="footer"><hr></div>
















    </body>
</html>



















<div class="row w-100">
	<form name="profileForm" id="profileForm" class="row w-100">
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-8 col-lg-6 ">
				<label for="receiptNumber" style="float:left">Receipt Number	</label>&nbsp;<input type="text"  class="form-control formItem rcptNoTB" style="float:right" readonly id="receiptNumber" name="receiptNumber"  value="<?php echo $receiptNo;?>" aria-describedby="addon1">						
			</div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;First Name</div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-user"></span></span>
						  <input type="text"  class="form-control formItem" id="first_name" name="first_name"  placeholder="First Name" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding">Middle Name</div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-user"></span></span>
						  <input type="text"  class="form-control formItem" id="mid_name" name="mid_name"  placeholder="Middle Name" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;Last Name</div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-user"></span></span>
						  <input type="text"  class="form-control formItem" id="last_name" name="last_name"  placeholder="Last Name" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
		
		
		
		
		
		
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;Father Name </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-user"></span></span>
						  <input type="text"  class="form-control formItem" id="fat_name" name="fat_name"  placeholder="Father Name" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;Mother Name </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-user"></span></span>
						  <input type="text"  class="form-control formItem" id="mot_name" name="mot_name"  placeholder="Mother Name" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;Mobile Number </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-phone-handset"></span></span>
						  <input type="number"  class="form-control formItem" id="mob_no" name="mob_no"  placeholder="Mobile Number" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
		
		
		
		
		
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding">Email </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-envelope"></span></span>
						  <input type="email"  class="form-control formItem" id="std_email" name="std_email"  placeholder="Email" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-select"></span>&nbsp;<span style="color:red"><b>*</b></span>&nbsp;Gender </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<select class="frmDropDown" name="stdGender" id="stdGender">
							<option value="M" selected >Male</option>
							<option value="F">Female</option>
							<option value="O">Others</option>
						</select>
					</div>
				</div>	
			</div>
			
			
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-tag"></span>&nbsp;<span style="color:red"><b>*</b></span>Course </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<select class="frmDropDown">
							<option value="1" selected>Arts</option>
							<option value="3">Commerce</option>
						</select>
					</div>
				</div>	
			</div>
			
			
			
			
			<div class="clearfix"></div>
		</div>
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">			
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-tag"></span>&nbsp;<span style="color:red"><b>*</b></span>&nbsp;Caste </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<select class="frmDropDown" name="stdCaste" id="stdCaste">
							<option value="1" checked>GEN</option>
							<option value="2">OBC</option>
							<option value="3">MOBC</option>
							<option value="4">SC</option>
							<option value="5">ST Plains</option>
							<option value="6">ST Hills</option>
						</select>
					</div>
				</div>	
			</div>
			
					
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-tag"></span>&nbsp;<span style="color:red"><b>*</b></span>&nbsp;Religion </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<select class="frmDropDown">
							<option value="1" checked>Hindu</option>
							<option value="2">Muslim</option>
							<option value="3">Christian</option>
							<option value="4">Buddhist</option>
							<option value="5">Jain</option>
							<option value="6">Parsi</option>
							<option value="7">Others</option>
						</select>
					</div>
				</div>	
			</div>				
			
			
				<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;DOB </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<div class="input-group" style="position:relative;">
						  <span class="input-group-addon" id="addon1"><span class="lnr lnr-calendar-full"></span></span>
						  <input type="text"  class="form-control formItem appDatePicker"  id="std_dob" name="std_dob"  placeholder="" aria-describedby="addon1">
						</div>
					</div>
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>Permanent Address </div></div>
				<div class="row no-margin no-padding" style="margin-top:5px;">
					<div class="col-xs-12 no-margin no-padding">
						<textarea name="stdPermAdd" id="stdPermAdd"  class="form-control" style="height:180px;resize:none;"></textarea>
					</div>
				</div>	
			</div>					
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;Present Address&nbsp;&nbsp;<input type="checkbox" id="eqExyK" name="eqExyK"  ?>&nbsp; Same as Permanent Address</div></div>
				<div class="row no-margin no-padding" style="margin-top:5px;">
					<div class="col-xs-12 no-margin no-padding">
						<textarea name="stdResiAdd" id="stdResiAdd" class="form-control" style="height:180px;resize:none;"></textarea>
					</div>
					<div></div><span></span>
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
		
		
		
		
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">
		<div class="col-xs-12"><hr class="style-two"></div>
		<div class="col-xs-12"><b>Documents to upload</b></div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12"><span style="color:red"><b>*</b></span>&nbsp;Student Photo</div>
			<div class="col-xs-12 col-md-5 col-lg-4" style="margin-top:5px;">
				<input id="passportPhotoFile" name="passportPhotoFile" type="file" class="appFile file_Input_1">
			</div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12"><span style="color:red"><b>*</b></span>&nbsp;Age Proof</div>
			<div class="col-xs-12 col-md-5 col-lg-4" style="margin-top:5px;">
				<input id="birthCertFile" name="birthCertFile" type="file" class="appFile file_Input_2">
			</div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12">Caste Certificate</div>
			<div class="col-xs-12 col-md-5 col-lg-4" style="margin-top:5px;">
				<input id="casteCertFile" name="casteCertFile" type="file" class="appFile file_Input_3">
			</div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12">Academic Document</div>
			<div class="col-xs-12 col-md-5 col-lg-4" style="margin-top:5px;">
				<input id="academicDoc" name="academicDoc" type="file" class="appFile file_Input_4">
			</div>
		</div>
		
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 ">
				<div id="captchaDiv" class="g-recaptcha" style="margin:0 auto;"></div>
				<input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
			</div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 " style="margin-top:10px;">
				<label class="col-xs-12 no-padding">Agreement</label>
				<div class="col-xs-12 no-padding">					
					<label for="Agree_BX">
						<input type="checkbox" id="Agree_BX" name="Agree_BX">&nbsp;&nbsp; <b>I agree to the <a href="#">Terms &amp; Conditions</a></b>
					</label>  	
				</div>	
				<div></div><span></span>	
			</div>
		</div>
		
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12"><hr class="style-two"></div>
			<div class="col-xs-12">
				<div class="row w-100 no-margin no-padding frmRow2"><b>Kindly Note:</b></div>
				<div class="row w-100 no-margin no-padding frmRow2">Fields marked with a &nbsp;<span style="color:red"><b>*</b></span>&nbsp; are mandatory</div>
				<div class="row w-100 no-margin no-padding frmRow2">Due to Covid-19 Pandemic and Govt. of Assam decisions, currently Marksheet and Pass Certificate uploads are exempted.</div>
				<div class="row w-100 no-margin no-padding frmRow2">You can provide your Admit Card/Registration Card for Academic Document. if you do not have it, you can skip it.</div>
				<div class="row w-100 no-margin no-padding frmRow2">In the event of failing in the HSLC examination, the entire amount will be refunded  after deducting the payment gateway commission and processing fee of ₹ 300/-.</div>
				<div class="row w-100 no-margin no-padding frmRow2"></div>
			</div>
		</div>
		
		
		
		
		
		
	
	</form>
</div>
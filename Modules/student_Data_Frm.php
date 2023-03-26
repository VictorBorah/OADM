<div class="row w-100">
	<form name="profileForm" id="profileForm" class="row w-100">
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-6 col-lg-6 ">
				<label for="receiptNumber">Application Number:</label>&nbsp;<input type="text"  class="form-control formItem rcptNoTB"  readonly id="receiptNumber" name="receiptNumber"  value="<?php echo $receiptNo;?>" aria-describedby="addon1">						
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 ">
				<label for="payableAmt">Amount:</label>&nbsp;<input type="text"  class="form-control formItem feeAmtTB"   readonly id="payableAmt" name="payableAmt"  value="<?php echo $admnFeeAmount;?>" style="background:#ffcfbf;color:#b30000;letter-spacing:1px;font-size:16px;font-weight:bold;" aria-describedby="addon1">						
			</div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow" style="margin-top:10px;">
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;<label for="first_name">First Name</label></div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><label for="mid_name">Middle Name</label></div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;<label for="last_name">Last Name</label></div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;<label for="fat_name">Father Name</label> </div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;<label for="mot_name">Mother Name</label> </div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;<label for="mob_no">Mobile Number</label> <img src="img/loaders/spinner.gif" id="mobileLoader" width="32" height="32" style="display:none;" /> </div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><label for="std_email">Email</label> </div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-select"></span>&nbsp;<span style="color:red"><b>*</b></span>&nbsp;<label for="stdGender">Gender</label> </div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-tag"></span>&nbsp;<span style="color:red"><b>*</b></span><label for="stdCourse">Course</label> </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<select class="frmDropDown" name="stdCourse" id="stdCourse">
							<option value="1" selected>First Yr-Arts</option>
							<option value="3">First Yr-Commerce</option>
							<option value="4">Second Yr-Arts</option>
							<option value="5">Second Yr-Commerce</option>
						</select>
					</div>
				</div>	
			</div>
			
			
			
			
			<div class="clearfix"></div>
		</div>
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">			
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-tag"></span>&nbsp;<span style="color:red"><b>*</b></span>&nbsp;<label for="stdCaste">Caste</label> </div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span class="lnr lnr-tag"></span>&nbsp;<span style="color:red"><b>*</b></span>&nbsp;<label for="stdReligion">Religion</label> </div></div>
				<div class="row no-margin no-padding">
					<div class="col-xs-12 no-margin no-padding">
						<select class="frmDropDown" name="stdReligion" id="stdReligion">
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;<label for="std_dob">DOB</label> </div></div>
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
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span><label for="stdPermAdd">Permanent Address</label> </div></div>
				<div class="row no-margin no-padding" style="margin-top:5px;">
					<div class="col-xs-12 no-margin no-padding">
						<textarea name="stdPermAdd" id="stdPermAdd"  class="form-control" style="height:180px;resize:none;"></textarea>
					</div>
				</div>	
			</div>					
			
			<div class="col-xs-12 col-md-4 ">
				<div class="row no-margin no-padding"><div class="col-xs-12 no-margin no-padding"><span style="color:red"><b>*</b></span>&nbsp;<label for="stdResiAdd">Present Address</label>&nbsp;&nbsp;<label for="eqExyK"><input type="checkbox" id="eqExyK" name="eqExyK"  ?>&nbsp; Same as Permanent Address</label></div></div>
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
		
		<div class="row w-100 no-margin no-padding frmRow" >
			<div class="col-xs-12 col-md-6" style="border-bottom:dotted 1px #000;padding:10px;background:#eee;">
				<div class="col-xs-12 col-md-8 no-margin no-padding" >
					<div class="col-xs-12"><span style="color:red"><b>*</b></span>&nbsp;<label for="passportPhotoFile">Student Photo</label></div>
					<div class="col-xs-12" style="margin-top:5px;">
						<input id="passportPhotoFile" name="passportPhotoFile" type="file" class="appFile file_Input_1" onchange="previewFile_1()" accept="image/*">
					</div>
					<span></span>
				</div>
				<div class="col-xs-12 col-md-4 no-margin no-padding"><img id="imgPreview1" width="100" height="100" src="img/No_File.jpg" style="border:1px solid #dedede" /></div>
			</div>
		</div>
		
		
		
		
		
		
		<div class="row w-100 no-margin no-padding frmRow" >
			<div class="col-xs-12 col-md-6" style="border-bottom:dotted 1px #000;padding:10px;background:#eee;">
				<div class="col-xs-12 col-md-8 no-margin no-padding" >
					<div class="col-xs-12"><span style="color:red"><b>*</b></span>&nbsp;<label for="birthCertFile">Age Proof</label></div>
					<div class="col-xs-12" style="margin-top:5px;">
						<input id="birthCertFile" name="birthCertFile" type="file" class="appFile file_Input_2" onchange="previewFile_2()" accept="image/*">
					</div>					
				</div>
				<div class="col-xs-12 col-md-4 no-margin no-padding"><img id="imgPreview2" width="100" height="100" src="img/No_File.jpg" style="border:1px solid #dedede" /></div>
			</div>
		</div>
		
		
			
		
		<div class="row w-100 no-margin no-padding frmRow" >
			<div class="col-xs-12 col-md-6" style="border-bottom:dotted 1px #000;padding:10px;background:#eee;">
				<div class="col-xs-12 col-md-8 no-margin no-padding" >
					<div class="col-xs-12"><label for="casteCertFile">Caste Certificate</label></div>
					<div class="col-xs-12" style="margin-top:5px;">
						<input id="casteCertFile" name="casteCertFile" type="file" class="appFile file_Input_3" onchange="previewFile_3()" accept="image/*">
					</div>					
				</div>
				<div class="col-xs-12 col-md-4 no-margin no-padding"><img id="imgPreview3" width="100" height="100" src="img/No_File.jpg" style="border:1px solid #dedede" /></div>
			</div>
		</div>
		
		
		
		<div class="row w-100 no-margin no-padding frmRow" >
			<div class="col-xs-12 col-md-6" style="border-bottom:dotted 1px #000;padding:10px;background:#eee;">
				<div class="col-xs-12 col-md-8 no-margin no-padding" >
					<div class="col-xs-12"><label for="academicDoc">Academic Document</label></div>
					<div class="col-xs-12" style="margin-top:5px;">
						<input id="academicDoc" name="academicDoc" type="file" class="appFile file_Input_4" onchange="previewFile_4()" accept="image/*">
					</div>
				</div>
				<div class="col-xs-12 col-md-4 no-margin no-padding"><img id="imgPreview4" width="100" height="100" src="img/No_File.jpg" style="border:1px solid #dedede" /></div>
			</div>
		</div>
		
		
		
		
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 ">
				<div id="captchaDiv" class="g-recaptcha" style="margin:0 auto;"></div>
				<input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha" accept="image/*">
			</div>
		</div>
		
		<div class="row w-100 no-margin no-padding frmRow">
			<div class="col-xs-12 col-md-4 " style="margin-top:10px;">
				<label class="col-xs-12 no-padding"><label for="Agree_BX">Agreement</label></label>
				<div class="col-xs-12 no-padding">					
					<label for="Agree_BX">
						<label for="Agree_BX"><input type="checkbox" id="Agree_BX" name="Agree_BX">&nbsp;&nbsp; <b>I agree to the <a href="#">Terms &amp; Conditions</a></b></label>
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
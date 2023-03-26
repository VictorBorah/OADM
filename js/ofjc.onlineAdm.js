$(document).ready(function(){

var transact = false;	
var userMobile_Ok = false;	
var yesterday = new Date((new Date()).valueOf()-1000*60*60*24);
var currentDate = new Date();	

/*
$(":file").filestyle({
	'btnClass' : 'btn-info',
	'input' : true,
	'badge' : true,
	'placeholder': 'Choose file...',
	'onChange': function () {}
	
});
*/



//$("#passportPhotoFile").on('change',function() {
 



	
	
	
	
	
	
$("#wizard").steps({
	transitionEffect: "slideLeft",
	saveState: false,
	enableFinishButton: false,
	onStepChanging: function (event, currentIndex, newIndex){
		 {
			 if(transact)
			 {
				 //is on a LIVE Transaction, prevent any diverts
				 return false;
			 }
			 else
			 {
				 if(currentIndex==0)
				 {
					if($("#profileForm").valid()) 
					{
						if($('#Agree_BX').is(':checked'))
						{							
							if(userMobile_Ok)
								{
									return true;
									//$("#wizard").steps("setStep", 1);
								}
								else  return false;	
						}
						else  
						{
							showFailureMsg("You must agree to the terms");
							var errors;
							var $validator = $("#profileForm").validate();

							errors = { Agree_BX: "You must agree to the terms" };
							$validator.showErrors(errors);
							return false;
						}
					}	
					else  return false;
				 }
				else return true;				 
			 }				 
		 }
	},
	onStepChanged:function (event, currentIndex, newIndex)
	{
		 if(currentIndex == 1)
		 {
			$('#appBx').waitMe({effect : 'ios'});
			var form = $('#profileForm')[0];
			var frm_Data = new FormData(form);	
			
			$.ajax({
				type: "POST",
				url: "Controllers/payWindow",
				data: frm_Data,
				processData: false,
				contentType: false,
				cache: false,
				timeout: 600000,
				success: function (data) {

					//console.log("Return from Pay Window Loader =>"+data);
					$('#appBx').waitMe('hide');
					$("#paymentsBx").html(data)
				},
				error: function (e) {
					$('#appBx').waitMe('hide');						
				}
			});
				
			$("a[href$='next']").hide();
				 
		 }
		 else 
		 {
			 $("a[href$='next']").show();
			 $("a[href$='previous']").show();
		 }
	}
});
	
	
	
$.fn.steps.setStep = function (step)
{
  var currentIndex = $(this).steps('getCurrentIndex');
  for(var i = 0; i < Math.abs(step - currentIndex); i++){
    if(step > currentIndex) {
      $(this).steps('next');
    }
    else{
      $(this).steps('previous');
    }
  } 
};	
		
	

	
$('.appDatePicker').pickadate({
	selectMonths: true, 
	selectYears: 30, 
	max:currentDate,
	today: 'Today',
	clear: 'Clear',
	close: 'Pick',
	closeOnSelect: true,
	format: 'dd/mm/yyyy',
	formatSubmit: 'dd/mm/yyyy',		
	onClose: function() {  
	
		/*
		$("#bookingReqFrm").LoadingOverlay("show",{
			image : "images/loaders/loader2.gif"
			
		});
		*/
		
	}
});
	
	
	
	
var $inputPicker = $('.appDatePicker').pickadate();
var dtPicker = $inputPicker.pickadate('picker')
  
validator_SetDefaults();
add_Validator_Methods();



var jvalidate = $("#profileForm").validate({
		ignore: [],
		rules:
		{                           
			first_name: {required: true },								
			last_name: {required: true },								
			fat_name: {required: true },								
			mot_name: {required: true },								
			mob_no: {required: true },								
			std_dob: {required: true },								
			stdPermAdd: {required: true },								
			stdResiAdd: {required: true },		
			passportPhotoFile: {required: true },		
			birthCertFile: {required: true },
			hiddenRecaptcha: 
			{
				required: function()
				{
				 if(grecaptcha.getResponse() == '')
					 {
						return true;
					  }
					  else
						  {
							return false;
						  }
				}
			}			
		},
		messages:
		{	
			first_name:{required:"First name missing"},					
			last_name:{required:"Last name missing"},					
			fat_name:{required:"Father name missing"},					
			mot_name:{required:"Mother name missing"},					
			mob_no:{required:"Mobile Number missing"},					
			std_dob:{required:"Date of Birth missing"},					
			stdPermAdd:{required:"Permanent address missing"},					
			stdResiAdd:{required:"Present address missing"},					
			hiddenRecaptcha:{required:"Security Check Not Completed"},				
			passportPhotoFile:{required:"Profile photo missing"},				
			birthCertFile:{required:"Age proof missing"}				
							
		}
		
		
	}); 






$("#pickDateBtn").click(function(event){
  
   if ( dtPicker.get( 'open' ) )
	   {
			dtPicker.close()
		}
	else
		{
		dtPicker.open()
		}
	event.stopPropagation();
});
	
	
$("#stdCourse").change(function(event){
  
 $('#appBx').waitMe({effect : 'ios'});  
   
  $.ajax({
		type: "POST",
		url: "Controllers/loadAdmFee",
		data: {pk:$("#stdCourse").val()},		
		cache: false,
		timeout: 600000,
		success: function (response) {

			//console.log("Return from Admn Fee Load =>"+response);
			$('#appBx').waitMe('hide');
			$("#payableAmt").val(response)
			showInfoMsg("Payable Admission been has been updated to "+response);
			//showAlert("Payable Admission been has been updated to "+response);
		},
		error: function (e) {		
			$('#appBx').waitMe('hide');								
				
		}
	});
});
		
		
				
	
	
/* START NOTIFICATION ANIMATION-VICTOR */
var mojsOpenExample = function (promise) {
    var n = this
    var Timeline = new mojs.Timeline()
    var body = new mojs.Html({
      el: n.barDom,
      x: {500: 0, delay: 0, duration: 500, easing: 'elastic.out'},
      isForce3d: true,
      onComplete: function () {
        promise(function(resolve) {
          resolve()
        })
      }
    })

    var parent = new mojs.Shape({
      parent: n.barDom,
      width: 200,
      height: n.barDom.getBoundingClientRect().height,
      radius: 0,
      x: {[150]: -150},
      duration: 1.2 * 500,
      isShowStart: true
    })

    n.barDom.style['overflow'] = 'visible'
    parent.el.style['overflow'] = 'hidden'

    var burst = new mojs.Burst({
      parent: parent.el,
      count: 10,
      top: n.barDom.getBoundingClientRect().height + 75,
      degree: 90,
      radius: 75,
      angle: {[-90]: 40},
      children: {
        fill: '#EBD761',
        delay: 'stagger(500, -50)',
        radius: 'rand(8, 25)',
        direction: -1,
        isSwirl: true
      }
    })

    const fadeBurst = new mojs.Burst({
      parent: parent.el,
      count: 2,
      degree: 0,
      angle: 75,
      radius: {0: 100},
      top: '90%',
      children: {
        fill: '#EBD761',
        pathScale: [.65, 1],
        radius: 'rand(12, 15)',
        direction: [-1, 1],
        delay: .8 * 500,
        isSwirl: true
      }
    })

    Timeline.add(body, burst, fadeBurst, parent)
    Timeline.play()
  }

  var mojsCloseExample = function (promise) {
    var n = this
    new mojs.Html({
      el: n.barDom,
      x: {0: 500, delay: 0, duration: 250, easing: 'cubic.out'},
      opacity: {1: 0, delay: 0, duration: 250},
      isForce3d: true,
      onComplete: function () {
        promise(function(resolve) {
          resolve()
        })
      }
    }).play()
  }

  var bouncejsOpenExample = function () {
    var n = this
    new Bounce()
      .translate({
        from: {x: 450, y: 0},
        to: {x: 0, y: 0},
        easing: 'bounce',
        duration: 1000,
        bounces: 4,
        stiffness: 3
      })
      .scale({
        from: {x: 1.2, y: 1},
        to: {x: 1, y: 1},
        easing: 'bounce',
        duration: 1000,
        delay: 100,
        bounces: 4,
        stiffness: 1
      })
      .scale({
        from: {x: 1, y: 1.2},
        to: {x: 1, y: 1},
        easing: 'bounce',
        duration: 1000,
        delay: 100,
        bounces: 6,
        stiffness: 1
      })
      .applyTo(n.barDom, {
        onComplete: function () {
          n.resume()
        }
      })
  }

  var bouncejsCloseExample = function () {
    var n = this
    new Bounce()
      .translate({
        from: {x: 0, y: 0},
        to: {x: 450, y: 0},
        easing: 'bounce',
        duration: 500,
        bounces: 4,
        stiffness: 1
      })
      .applyTo(n.barDom, {
        onComplete: function () {
          n.barDom.parentNode.removeChild(n.barDom)
        }
      })
  }

  var velocityShowExample = function () {
    var n = this

    Velocity(n.barDom, {
      left: 450,
      scaleY: 2
    }, {
      duration: 0
    })
    Velocity(n.barDom, {
      left: 0,
      scaleY: 1
    }, {
      easing: [8, 8]
    })
  }

  var velocityCloseExample = function () {
    var n = this

    Velocity(n.barDom, {
      left: '+=-50'
    }, {
      easing: [8, 8, 2],
      duration: 350
    })
    Velocity(n.barDom, {
      left: 450,
      scaleY: .2,
      height: 0,
      margin: 0
    }, {
      easing: [8, 8],
      complete: function () {
        n.barDom.parentNode.removeChild(n.barDom)
      }
    })
  }
/* END NOTIFICATION ANIMATION-VICTOR */	
	
	



$('#eqExyK').click(function (e) {	
	
	if($('#eqExyK').is(':checked')) 
	{
		var pAdd = $.trim($("#stdPermAdd").val());
		if(pAdd!="") $("#stdResiAdd").val(pAdd);
			
	}
	else
	{
		$("#stdResiAdd").val("");
	}
	
	

});

	




function validator_SetDefaults()
{
	$.validator.setDefaults({
			highlight: function(element,errorClass, validClass) {
				$(element).closest('.form-group').addClass('has-error');				
			},
			unhighlight: function(element,errorClass, validClass) {
				$(element).closest('.form-group').removeClass('has-error');
			},
			errorElement: 'span',
			errorClass: 'err-block',
			errorPlacement: function(error, element) {
				if(element.parent('.input-group').length) {
					error.insertAfter(element.parent());
				} 
				else 
				{
				if ( element.attr("type") == "checkbox"  )
				   {
					   var message="You must accept the Terms";
						error.insertAfter( element.parent().parent().next("div") );
				   }
				   else
				   {
					    if ( element.attr("type") == "file"  )
					   {
						  //error.insertAfter( element.parent().next("div") );
						  error.insertAfter(element);
					   }
					   else error.insertAfter(element);
				   }
				  
				}
			}
		});
}
 
/******************************************************
			ADD VALIDATOR METHODS
/*****************************************************/

function add_Validator_Methods()
{
	/*
	jQuery.validator.addMethod("validate_email", function(value, element) {
    return this.optional(element) || /^([a-z0-9][-a-z0-9_\+\.]*[a-z0-9])@([a-z0-9][-a-z0-9\.]*[a-z0-9]\.(ru|arpa|root|aero|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|ee|eg|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)|([0-9]{1,3}\.{3}[0-9]{1,3}))$/.test($.trim(value));
	}, "Please enter a valid email address");
	*/
	
	jQuery.validator.addMethod("validate_email", function(value, element) {
    return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test($.trim(value));
	}, "Please enter a valid email address");

	
	
	

	
	jQuery.validator.addMethod("validate_phone", function(value, element) {
		if($('#custMobile').length)
			var phn=$('#custMobile').val();
		
		
		
		//console.log("Unmasked Mobile Number = "+phn);
		if(phn.length == 10) return true;
		else return false;
		
	}, "Please enter 10 Digit Mobile Number");	
}
 



/******************************************************
			APP FUNCTIONS
/*****************************************************/
function check_Mobile()
{
	return $.ajax({ 
			url: "Controllers/validate_Mobile",
			type:"POST",
			data: {k:$("#mob_no").val()},
			success: 
				function(data)
				{
					console.log("Mob. Number Validation Return: "+data);
					
					if(data==0) userMobile_Ok = true;
					else 
					{
						var validator = $( "#profileForm" ).validate();
						validator.showErrors({
								  "mob_no": "This Mobile number is already in use!"
								});
						
						userMobile_Ok = false;
					}
					
				}
		});
}
	 
	 
	 
$("#mob_no").blur(function(){
	
	$('#mobileLoader').show();
	check_Mobile().done(function()
		{
			$('#mobileLoader').hide();
			if(userMobile_Ok)
			{				
				return true;
			}
			else
			{
				showFailureMsg("Mob No. "+$("#mob_no").val()+" is already in use !");
				console.log("Mobile No.: "+$("#mob_no").val()+" is NOT okay !");
				var errors;
				var $validator = $("#profileForm").validate();
				
				errors = { mob_no: "Mobile number already registered" };
				$validator.showErrors(errors);
				return false;
			}		
			

		});	
	
});
	

	
	


function showSuccesMsg(k)
{
	new Noty({
       type: 'success',
       layout: 'topCenter',
       text: k,
	   sounds: { sources: ['sounds/success.mp3'], volume: 1, conditions: ['docVisible', 'docHidden'] },
       timeout: 1500,
       modal: true,
       closeWith: ['click'],
       animation: {
         //open: 'noty_effects_open',
         //close: 'noty_effects_close'
		 
		  open: mojsOpenExample,
          close: mojsCloseExample
       }
     }).show();
}

function showFailureMsg(k)
{
	new Noty({
       type: 'error',
       layout: 'topCenter',
       text: k,
	   sounds: { sources: ['sounds/fail.mp3'], volume: 1, conditions: ['docVisible', 'docHidden'] },
       timeout: 1500,
       modal: true,
       closeWith: ['click'],
       animation: {
         open: mojsOpenExample,
         close: mojsCloseExample
       }
     }).show();
}



function showInfoMsg(k)
{
	new Noty({
       type: 'info',
       layout: 'topCenter',
       text: k,
	   sounds: { sources: ['sounds/fail.mp3'], volume: 1, conditions: ['docVisible', 'docHidden'] },
       timeout: 1500,
       modal: true,
       closeWith: ['click'],
       animation: {
         //open: 'noty_effects_open',
         //close: 'noty_effects_close'
		 
		  open: mojsOpenExample,
          close: mojsCloseExample
       }
     }).show();
}



function showAlert(k)
{
	 bootbox.alert({
					message: k,
					size: 'small',
					backdrop: true
				});
}

	
	

	
	
	
	
	

});	
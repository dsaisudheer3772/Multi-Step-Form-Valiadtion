<html><head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <title>Registrationform</title>
                                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
                                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                                
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCwcW2G2ns0sLQoB-lXoDaK3V3IzybMPAw&libraries=places"></script>

								<script type="text/javascript">
								  function initialize() {
									var input = document.getElementById('pb');
									new google.maps.places.Autocomplete(input);
								  }

								  google.maps.event.addDomListener(window, 'load', initialize);

								</script>
								<style>* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

p {
    color: grey
}

#heading {
    text-transform: uppercase;
    color: #673AB7;
    font-weight: normal
}

#msform {
    text-align: center;
    position: relative;
    margin-top: 20px
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0.5rem;
    box-sizing: border-box;
    width: 100%;
    margin: 0;
    padding-bottom: 20px;
    position: relative
}

.form-card {
    text-align: left
}

#msform fieldset:not(:first-of-type) {
    display: none
}
#msform select,
#msform input,
#msform textarea {
    padding: 8px 15px 8px 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 25px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    background-color: #ECEFF1;
    font-size: 16px;
    letter-spacing: 1px
}

#msform input:focus,
#msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #673AB7;
    outline-width: 0
}

#msform .action-button {
    width: 100px;
    background: #673AB7;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 0px 10px 5px;
    float: right
}

#msform .action-button:hover,
#msform .action-button:focus {
    background-color: #311B92
}

#msform .action-button-previous {
    width: 100px;
    background: #616161;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 0px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px 10px 0px;
    float: right
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
    background-color: #000000
}

.card {
    z-index: 0;
    border: none;
    position: relative
}

.fs-title {
    font-size: 25px;
    color: #673AB7;
    margin-bottom: 15px;
    font-weight: normal;
    text-align: left
}

.purple-text {
    color: #673AB7;
    font-weight: normal
}

.steps {
    font-size: 25px;
    color: gray;
    margin-bottom: 10px;
    font-weight: normal;
    text-align: right
}

.fieldlabels {
    color: gray;
    text-align: left
}

#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    color: lightgrey
}

#progressbar .active {
    color: #673AB7
}

#progressbar li {
    list-style-type: none;
    font-size: 15px;
    width: 20%;
    float: left;
    position: relative;
    font-weight: 400
}

#progressbar #account:before {
    font-family: FontAwesome;
    content: "\f13e"
}

#progressbar #personal:before {
    font-family: FontAwesome;
    content: "\f007"
}

#progressbar #payment:before {
    font-family: FontAwesome;
    content: "\f2ba"
}
#progressbar #relation:before {
    font-family: FontAwesome;
    content: "\f0c0"
}

#progressbar #confirm:before {
    font-family: FontAwesome;
    content: "\f00c"
}

#progressbar li:before {
    width: 50px;
    height: 50px;
    line-height: 45px;
    display: block;
    font-size: 20px;
    color: #ffffff;
    background: lightgray;
    border-radius: 50%;
    margin: 0 auto 10px auto;
    padding: 2px
}

#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: lightgray;
    position: absolute;
    left: 0;
    top: 25px;
    z-index: -1
}

#progressbar li.active:before,
#progressbar li.active:after {
    background: #673AB7
}

.progress {
    height: 20px
}

.progress-bar {
    background-color: #673AB7
}

.fit-image {
    width: 100%;
    object-fit: cover
}
#msform table input, #msform table textarea
{
    margin-bottom: 5px;
    margin-top: 5px;
    margin-right:5px;
}
#msform table th
{
    padding-right:10px;
    padding-bottom:10px;
}

select
{
    width:100%;
}

</style>
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
                                
                            </head>
                            <body oncontextmenu="return false" class="snippet-body">
                            <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-8 col-xl-6 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Sign Up Your User Account</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform">
                    <!-- progressbar -->
					<ul id="progressbar">
                        <li class="active" id="account"><strong>Personal Details</strong></li>
                        <li id="personal"><strong>Educational Details</strong></li>
                        <li id="payment"><strong>Address for Communication</strong></li>
                        <li id="relation"><strong>Relational Details</strong></li>
                        <li id="confirm"><strong>Relational Details</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card" id="Account_Details_Tab">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Details</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 5</h2>
                                </div>
                            </div> 
                             <label class="fieldlabels">First Name: *</label>
                             <span id="error_first_name" class="text-danger"></span>
							 <input type="text" id="first_name" name="first_name" placeholder="First Name" min="10" max="100" required>
							 
                             <label class="fieldlabels">Father Name: *</label>
                             <span id="error_father_name" class="text-danger"></span>
							 <input type="text" id="father_name" name="father_name" placeholder="Father Name" required>
							 
							
							 <label class="fieldlabels">Family Name: *</label>
							 <span id="error_family_name" class="text-danger"></span>
							 <select id="family_name" name="family_name" placeholder="Family Name" required>
									  <option value="">Select</option>
									  <option value="Xasanley">Xasanley</option>
									  <option value="Gabod">Gabod</option>
									  <option value="Abdi">Abdi</option>
							 </select>
							 
							 
							 <label class="fieldlabels">Mother Name: *</label>
                             <span id="error_mother_name" class="text-danger"></span>
							 <input type="text" id="mother_name" name="mother_name" placeholder="Mother Name" required>
                             
							 <label class="fieldlabels">Marrital Status: *</label>
                        	 <span id="error_marrital_status" class="text-danger"></span>
						     <select id="marrital_status" name="marrital_status" placeholder="Marrital status" required>
									  <option value="">Select</option>
									  <option value="Single">Single</option>
									  <option value="Married">Married</option>
							 </select>
							
							 <label class="fieldlabels">Date of Birth: *</label>
                             <span id="error_db" class="text-danger"></span>
							 <input type="date" id="db" name="db" placeholder="Date of Birth" required>
                            
							 <label class="fieldlabels">Place of Birth: *</label>
                             <span id="error_pb" class="text-danger"></span>
							 <input type="text" id="pb" name="pb" placeholder="Place of Birth" required>
                            
							 <label class="fieldlabels">Sex: *</label>
							 <span id="error_sex" class="text-danger"></span>
								<select name="sex" id="sex" placeholder="Sex" required>
									  <option value="">Select</option>
									  <option value="Male">Male</option>
									  <option value="Female">Female</option>
								</select>
                            
							 <label class="fieldlabels">Yearly Income: *</label>
							 <span id="error_estimateincome" class="text-danger"></span>							
							 <select id="estimateincome" name="estimateincome" placeholder="Estimate Income" required>
									  <option value="">Select</option>
									  <option value="$0-$10000">$0-$10000</option>
									  <option value="$10,000-$20,000">$10,000-$20,000</option>
									  <option value="$20,000-$30,000">$20,000-$30,000</option>
									  <option value="$30,000-$40,000">$30,000-$40,000</option>
									  <option value="$40,000-$50,000">$40,000-$50,000</option>
									  <option value="$50,000-$60,000">$50,000-$60,000</option>
									  <option value="$60,000-$70,000">$60,000-$70,000</option>
									  <option value="$70,000-$80,000">$70,000-$80,000</option>
									  <option value="$80,000-$90,000">$80,000-$90,000</option>
									  <option value="$90,000-$100,000">$90,000-$100,000</option>
									  <option value="More than $100,000">More than $100,000</option>
							 </select>
							
							 <label class="fieldlabels">Fingerprint: *</label>
                             <span id="error_fingerprint" class="text-danger"></span>
							 <input type="file" id="fingerprint" name="fingerprint" placeholder="Fingerprint" style="border:none; background-color:#fff;margin-left:-15px ">
                             
							 <label class="fieldlabels">Photo : *</label>
                             <span id="error_photo" class="text-danger"></span>
							 <input type="file" accept="image/png, image/jpeg" id="photo" placeholder="Photo" style="border:none; background-color:#fff;margin-left:-15px ">
                             
                        </div>
                             <input type="button" name="next" class="next action-button" id="personalDetailsSave" value="Next">
                    </fieldset>
                    <fieldset>
                        <div class="form-card" id="Educational_Details">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Educational Details:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 5</h2>
                                </div>
                            </div> 
                            <table id="dataTable">
                                <tr>
                                    <th>Qualification</th>
                                    <th>Institue Name</th>
                                    <th>Year of Passing </th>
									<th style="display:flex;">
										  <button type="button" style="float:right; margin-left:10px; background-color:#673AB7;border:2px solid #673AB7;" value="Add Another Contact" onclick="addRow('dataTable')"  class="btn btn-primary" >
											<i class="fa fa-plus-circle" aria-hidden="true"></i>
										  </button>
									</th>
                                </tr>
                                <tr>
                                    <td>
										<span id="error_education" class="text-danger"></span>
										<select id="education" name="education[]" placeholder="Qualification" style="margin-top:25px;" required='true'>
											<option value="">Select</option>
											<option value="Post Graduate">Post Graduate</option>
											<option value="Graduate">Graduate</option>
											<option value="XII Grade">XII Grade</option>
											<option value="X Grade">X Grade</option>
											<option value="Any Other Qualification">Any Other Qualification</option>
										</select>
									</td>
                                    <td>
										<span id="error_insname" class="text-danger"></span>
										<input type="text" id="insname" name="insname[]" placeholder="Institue Name" required='true'>
									</td>
                                    <td>
										<span id="error_yearofpassing" class="text-danger"></span>
										<input type="text" id="yearofpassing" name="yearofpassing[]" placeholder="Year of Passing" required='true'>
                                    </td>
									<td></td>
                                </tr>
                            </table>
                        </div> 
						<input type="button" name="next" class="next action-button" id="educationalDetailsSave" value="Next"> <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Address for Communication:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 5</h2>
                                </div>
                            </div> 

                            <label class="fieldlabels">Address Line1: *</label>
                            <input type="text" name="add1" placeholder="Address Line1">
                            <label class="fieldlabels">Address Line2: *</label>
                            <input type="text" name="add2" placeholder="Address Line2">
                            <label class="fieldlabels">City: *</label>
                            <input type="text" name="city" placeholder="City">
                            <label class="fieldlabels">State: *</label>
                            <input type="text" name="state" placeholder="State">
                            <label class="fieldlabels">Postcode: *</label>
                            <input type="text" name="postcode" placeholder="postcode">
                            <label class="fieldlabels">Country: *</label>
                            <input type="text" name="country" placeholder="country"> 
                            <label class="fieldlabels">Email: *</label>
                            <input type="text" name="email" placeholder="Email">  
                            <label class="fieldlabels">Phone: *</label>
                            <input type="text" name="phone" placeholder="Phone">  
                        </div> <input type="button" name="next" class="next action-button" onclick="addressDetailsSave(); return false;" value="Submit"> <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset>

                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Family Details:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 5</h2>
                                </div>
                            </div> 

                            <label class="fieldlabels">No of Wifes: *</label>
                            <select class="form-control"><option>---Select Option---</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                            </select>
                            <label class="fieldlabels">Wife Name: *</label>
                            <input type="text" name="wfname" placeholder="Wife Name">
                            <label class="fieldlabels">Phone: *</label>
                            <input type="text" name="wphone" placeholder="Phone">
                            <label class="fieldlabels">Address: *</label>
                            <input type="text" name="wadd" placeholder="Address">
                            <label class="fieldlabels">First Marriage: *</label>
                            <input type="text" name="fmarriage" placeholder="First marriage">
                            <label class="fieldlabels">End Marriage: *</label>
                            <input type="text" name="endmarriage" placeholder="End Marriage">    
                        </div> <input type="button" name="next" class="next action-button" onclick="familyDetailsSave(); return false;" value="Submit"> <input type="button" name="previous" class="previous action-button-previous" value="Previous">
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 5 - 5</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
 
 $('#personalDetailsSave').click(function(){
  
	var first_name = '';
	var father_name = '';
	//var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var family_name = '';
	var mother_name = '';
	var marrital_status = '';
	var db = '';
	var pb = '';
	var sex = '';
	var place_of_birth = '';
	var estimateincome = '';
	var fingerprint = '';
	var photo = '';
 
	if($.trim($('#first_name').val()).length == 0){
		error_first_name = 'First Name is required';
		$('#error_first_name').text(error_first_name);
		$('#first_name').addClass('has-error');
	}else{
		error_first_name = '';
		
		$('#error_first_name').text(error_first_name);
		$('#first_name').removeClass('has-error');
	}
	if($.trim($('#father_name').val()).length == 0){
		error_father_name = 'Father Name is required';
		$('#error_father_name').text(error_father_name);
		$('#father_name').addClass('has-error');
	}else{
		error_father_name = '';
		
		$('#error_father_name').text(error_father_name);
		$('#father_name').removeClass('has-error');
	}
	if($.trim($('#family_name').val()).length == 0){
		error_family_name = 'Family Name is required';
		$('#error_family_name').text(error_family_name);
		$('#family_name').addClass('has-error');
	}else{
		error_family_name = '';
		
		$('#error_family_name').text(error_family_name);
		$('#family_name').removeClass('has-error');
	}
	if($.trim($('#mother_name').val()).length == 0){
		error_mother_name = 'Mother Name is required';
		$('#error_mother_name').text(error_mother_name);
		$('#mother_name').addClass('has-error');
	}else{
		error_mother_name = '';
		
		$('#error_mother_name').text(error_mother_name);
		$('#mother_name').removeClass('has-error');
	}
	if($.trim($('#marrital_status').val()).length == 0){
		error_marrital_status = 'Married Status is required';
		$('#error_marrital_status').text(error_marrital_status);
		$('#marrital_status').addClass('has-error');
	}else{
		error_marrital_status = '';
		
		$('#error_marrital_status').text(error_marrital_status);
		$('#marrital_status').removeClass('has-error');
	}
	if($.trim($('#db').val()).length == 0){
		error_db = 'Date Of Birth is required';
		$('#error_db').text(error_db);
		$('#db').addClass('has-error');
	}else{
		error_db = '';
		
		$('#error_db').text(error_db);
		$('#db').removeClass('has-error');
	}
 
 	if($.trim($('#pb').val()).length == 0){
		error_pb = 'Place Of Birth is required';
		$('#error_pb').text(error_pb);
		$('#pb').addClass('has-error');
	}else{
		error_pb = '';
		
		$('#error_pb').text(error_pb);
		$('#pb').removeClass('has-error');
	}
	if($.trim($('#sex').val()).length == 0){
		error_sex = 'Gender is required';
		$('#error_sex').text(error_sex);
		$('#sex').addClass('has-error');
	}else{
		error_sex = '';
		
		$('#error_sex').text(error_sex);
		$('#sex').removeClass('has-error');
	}
	if($.trim($('#estimateincome').val()).length == 0){
		error_estimateincome = 'Income is required';
		$('#error_estimateincome').text(error_estimateincome);
		$('#estimateincome').addClass('has-error');
	}else{
		error_estimateincome = '';
		
		$('#error_estimateincome').text(error_estimateincome);
		$('#estimateincome').removeClass('has-error');
	}
	if($.trim($('#fingerprint').val()).length == 0){
		error_fingerprint = 'Finger-Print is required';
		$('#error_fingerprint').text(error_fingerprint);
		$('#fingerprint').addClass('has-error');
	}else{
		error_fingerprint = '';
		
		$('#error_fingerprint').text(error_fingerprint);
		$('#fingerprint').removeClass('has-error');
	}
	
	
   
  
	if((error_first_name != '')||(error_father_name != '')||(error_family_name != '')||(error_mother_name != '')||(error_marrital_status != '')||(error_db != '')||(error_pb != '')||(error_fingerprint != '')||(error_estimateincome != '')||(error_sex != '')){
		console.log(error_first_name, error_father_name, error_family_name, error_mother_name, error_marrital_status,error_db,error_pb, error_photo,error_fingerprint, error_sex);
		alert("Please Select Fields");
		return false;
		
	}
	if((error_first_name == '')||(error_father_name == '')||(error_family_name == '')||(error_mother_name == '')||(error_marrital_status == '')||(error_db == '')||(error_pb == '')||(error_fingerprint == '')||(error_estimateincome == '')||(error_sex == '')){
		alert("Checking");

		var current_fs, next_fs, previous_fs; //fieldsets
		var opacity;
		var current = 1;
		var steps = $("fieldset").length;

		setProgressBar(current);

		$(".next").click(function(){

			current_fs = $(this).parent();
			next_fs = $(this).parent().next();

			//Add Class Active
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

			//show the next fieldset
			next_fs.show();
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;

					current_fs.css({
					'display': 'none',
					'position': 'relative'
					});
				next_fs.css({'opacity': opacity});
				},
				duration: 500
			});
			setProgressBar(++current);
		});

		$(".previous").click(function(){

			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();

			//Remove class active
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

			//show the previous fieldset
			previous_fs.show();

			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step: function(now) {
				// for making fielset appear animation
				opacity = 1 - now;

					current_fs.css({
					'display': 'none',
					'position': 'relative'
					});
					previous_fs.css({'opacity': opacity});
				},
				duration: 500
			});
			setProgressBar(--current);
		});

		function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
		.css("width",percent+"%")
		}

		$(".submit").click(function(){
		return false;
		});
	}
 });
 });
 $(document).ready(function(){
	$('#educationalDetailsSave').click(function(){
	  
		var education = '';
		var insname = '';
		//var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var yearofpassing = '';
		
		if($.trim($('#education').val()).length == 0){
			error_education = 'Qualification is required';
			$('#error_education').text(error_education);
			$('#education').addClass('has-error');
		}else{
			error_education = '';
			
			$('#error_education').text(error_education);
			$('#education').removeClass('has-error');
		}
		if($.trim($('#insname').val()).length == 0){
			error_insname = 'Institue Name is required';
			$('#error_insname').text(error_insname);
			$('#insname').addClass('has-error');
		}else{
			error_insname = '';
			
			$('#error_insname').text(error_insname);
			$('#insname').removeClass('has-error');
		}
		if($.trim($('#yearofpassing').val()).length == 0){
			error_yearofpassing = 'Year Passing is required';
			$('#error_yearofpassing').text(error_yearofpassing);
			$('#yearofpassing').addClass('has-error');
		}else{
			error_yearofpassing = '';
			
			$('#error_yearofpassing').text(error_yearofpassing);
			$('#yearofpassing').removeClass('has-error');
		}
		
		if((error_yearofpassing != '')||(error_insname != '')||(error_education != '')){
			alert("Not Equal");
			return false;
			
		}
		else{
			alert("Equal");

			var current_fs, next_fs, previous_fs; //fieldsets
			var opacity;
			var current = 1;
			var steps = $("fieldset").length;

			setProgressBar(current);

			$(".next").click(function(){

				current_fs = $(this).parent();
				next_fs = $(this).parent().next();

				//Add Class Active
				$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

				//show the next fieldset
				next_fs.show();
				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now) {
					// for making fielset appear animation
					opacity = 1 - now;

						current_fs.css({
						'display': 'none',
						'position': 'relative'
						});
					next_fs.css({'opacity': opacity});
					},
					duration: 500
				});
				setProgressBar(++current);
			});

			$(".previous").click(function(){

				current_fs = $(this).parent();
				previous_fs = $(this).parent().prev();

				//Remove class active
				$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

				//show the previous fieldset
				previous_fs.show();

				//hide the current fieldset with style
				current_fs.animate({opacity: 0}, {
					step: function(now) {
					// for making fielset appear animation
					opacity = 1 - now;

						current_fs.css({
						'display': 'none',
						'position': 'relative'
						});
						previous_fs.css({'opacity': opacity});
					},
					duration: 500
				});
				setProgressBar(--current);
			});

			function setProgressBar(curStep){
			var percent = parseFloat(100 / steps) * curStep;
			percent = percent.toFixed();
			$(".progress-bar")
			.css("width",percent+"%")
			}

			$(".submit").click(function(){
			return false;
			});
		}
	}); 
 });	
	
function addRow(tableID) {

	var table = document.getElementById(tableID);

	var rowCount = table.rows.length;
//alert(rowCount)
	var row = table.insertRow(rowCount);
	var array = ["Post Graduate","Graduate","XII Grade","X Grade","Any Other Qualification"];
	var cell2 = row.insertCell(0);
	var element1 = document.createElement("select");
	element1.id = "education";
	element1.name = "education[]";
	element1.placeholder = "Qualification";
	element1.required = "true";
	element1.style = "margin-top:25px;";
	/*element1.appendChild(element1);
	for (var i = 0; i < array.length; i++) {
		var option = document.createElement("option");
		option.value = array[i];
		option.text = array[i];
		element1.appendChild(option);
	}*/
	var options_str = "";

	array.forEach( function(array) {
		options_str += '<option value="' + array + '">' + array + '</option>';
	});

	element1.innerHTML = options_str;

	cell2.appendChild(element1);

	var cell3 = row.insertCell(1);   
	var element2 = document.createElement("input");
	element2.type = "text";
	element2.name = "insname[]";
	element2.placeholder = "Institue Name";
	element2.id="insname";
	element2.required = "true";
	cell3.appendChild(element2);

	var cell4 = row.insertCell(2);
	var element3 = document.createElement("input");
	element3.type = "text";
	element3.name = "yearofpassing[]";
	element3.placeholder = "Year of Passing";
	element3.id="yearofpassing";
	element2.required = "true";
	cell4.appendChild(element3);

}

	
</script>
<script type="text/javascript">
								  function initialize() {
									var input = document.getElementById('pb');
									new google.maps.places.Autocomplete(input);
								  }

								  google.maps.event.addDomListener(window, 'load', initialize);

								</script>
</body>
</html>
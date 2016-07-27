<?php include 'header.php'; ?>

<link href="/ji_style/ta/application/student/stu_app_applydetail.css" type="text/css" rel="stylesheet"/>
<script src="/ji_js/ta/application/student/stu_app_applydetail.js"></script>

<style>
	#form h5, h3 {
		text-align: center;
	}
</style>

<div class="container">
	<div class="panel panel-default" id="form">
		<div class="panel-heading">Teaching Assistant Application Form</div>
		<div class="panel-body">
			<div class="form-autosave">
				<h4>Form will be autosaved</h4>
			</div>
			<div class="form-list form-basic row">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-6">
							<div class="row">
								<h5 class="col-sm-6">*CHINESE NAME</h5>
								<div class="col-sm-6">
									<input class="form-control" name="" type="text" title="name_ch">
								</div>
							</div>
							<div class="row">
								<h5 class="col-sm-6">*ENGLISH NAME</h5>
								<div class="col-sm-6">
									<input class="form-control" name="english-name" type="text" title="name_en">
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="row">
								<h5 class="col-sm-5">*BIRTH DATE</h5>
								<div class="col-sm-7">
									<input class="form-control" name="" type="text" title="birth-date">
								</div>
							</div>
							<div class="row">
								<h5 class="col-sm-5">*SEX</h5>
								<div class="row col-sm-7">
									<div class="col-md-6">
										<input type="radio" name="sex" value="male" title="list">Male
									</div>
									<div class="col-md-6">
										<input type="radio" name="sex" value="female" title="list">Female
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<h5 class="col-sm-3">*PHONE</h5>
						<div class="col-sm-9">
							<input class="form-control" name="phone" type="text" title="">
						</div>
					</div>
					<div class="row">
						<h5 class="col-sm-3">*EMAIL</h5>
						<div class="col-sm-9">
							<input class="form-control" name="email" type="text" title="">
						</div>
					</div>
					<div class="row">
						<h5 class="col-sm-3">*SKYPE ACCOUNT</h5>
						<div class="col-sm-9">
							<input class="form-control" name="skype" type="text" title="">
						</div>
					</div>
					<div class="row">
						<h5 class="col-sm-3">ADDRESS</h5>
						<div class="col-sm-9">
							<input class="form-control" name="address" type="text" title="">
						</div>
					</div>
					<div class="row">
						<h5 class="col-sm-8">*I agree to allow the course instructor access to my Honor Code
							Record.</h5>
						<div class="row col-sm-4">
							<div class="col-md-6">
								<input type="radio" name="honorcode-access" value="yes" title="">Yes
							</div>
							<div class="col-md-6">
								<input type="radio" name="honorcode-access" value="no" title="">No
							</div>
						</div>
					</div>
				
				
				</div>
				<div class="col-sm-3">
					*PHOTO
				</div>
			</div>
			
			<h5>The items with red star* are required to complete or accept.</h5>
			
			
			<div class="form-list form-education">
				<h3>EDUCATION</h3>
				
				<div class="row">
					<h5 class="col-sm-3">*STUD. ID</h5>
					<div class="col-sm-9">
						<input class="form-control" type="text" title="">
					</div>
				</div>
				<div class="row">
					<h5 class="col-sm-3">*CLASS ID</h5>
					<div class="col-sm-9">
						<input class="form-control" type="text" title="">
					</div>
				</div>
				<div class="row">
					<h5 class="col-sm-3">*Honor Code Violation Record</h5>
					<div class="row col-sm-9">
						<div class="col-md-6">
							<input type="radio" name="honorcode-violate" value="yes" title="">Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="honorcode-violate" value="no" title="">No
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-1 text-center">
						<button class="btn btn-primary btn-add">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						</button>
					</div>
					<h5 class="col-sm-2">Educational Level</h5>
					<h5 class="col-sm-2">School</h5>
					<h5 class="col-sm-2">Period</h5>
					<h5 class="col-sm-2">Institute</h5>
					<h5 class="col-sm-2">Major</h5>
				</div>
				<div class="form-info">
				</div>
			</div><!-- <div class="form-education"> -->
			
			<div class="form-list form-ta-experience">
				<h3>TA EXPERIENCES</h3>
				
				<div class="row">
					<h5 class="col-sm-3">*Basic TA Certificate</h5>
					<div class="row col-sm-9">
						<div class="col-md-6">
							<input type="radio" name="basic-ta-certificate" value="yes" title="">Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="basic-ta-certificate" value="no" title="">No
						</div>
					</div>
				</div>
				<div class="row">
					<h5 class="col-sm-3">*Advanced TA Certificate</h5>
					<div class="row col-sm-9">
						<div class="col-md-6">
							<input type="radio" name="advanced-ta-certificate" value="yes" title="">Yes
						</div>
						<div class="col-md-6">
							<input type="radio" name="advanced-ta-certificate" value="no" title="">No
						</div>
					</div>
				</div>
				<div class="row">
					<h5 class="col-sm-2 col-sm-offset-1">Course Code</h5>
					<h5 class="col-sm-4">Course Name</h5>
					<h5 class="col-sm-2">Period</h5>
					<h5 class="col-sm-3">Instructor</h5>
				</div>
				<div class="form-info">
				</div>
				
				<h4>Major Job Responsibilities: </h4>
				<textarea name="job-responsibility" rows="10" style="resize:none; width:100%"></textarea>
			
			</div>
			
			<div class="form-list form-work-experience">
				<h3>OTHER WORK EXPERIENCES</h3>
				<div class="row">
					<div class="col-sm-1 text-center">
						<button class="btn btn-primary btn-add">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						</button>
					</div>
				</div>
				<div class="form-info">
				</div>
			</div>
			
			<div class="form-list form-research">
				<h3>RESEARCH ACHIEVEMENTS</h3>
				<textarea name="research" rows="10" style="resize:none; width:100%"></textarea>
			</div>
			
			<div class="form-list form-language">
				<h3>LANGUAGE LEVEL</h3>
				<div class="row">
					<div class="col-sm-1 text-center">
						<button class="btn btn-primary btn-add">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						</button>
					</div>
					<h5 class="col-sm-2">Language Type</h5>
					<h5 class="col-sm-2">Listening</h5>
					<h5 class="col-sm-2">Speaking</h5>
					<h5 class="col-sm-2">Reading</h5>
					<h5 class="col-sm-2">Writing</h5>
				</div>
				<div class="form-info">
				</div>
			</div>
			
			<div class="form-list form-computer">
				<h3>COMPUTER SKILL</h3>
				<textarea name="computer" rows="10" style="resize:none; width:100%"></textarea>
			</div>
			
			<div class="form-list form-award">
				<h3>CERTIFICATE / AWARD / TRAINING</h3>
				<textarea name="award" rows="10" style="resize:none; width:100%"></textarea>
			</div>
			
			<div class="form-list form-reference">
				<h3>REFERENCES ( at least one reference )</h3>
				<div class="row">
					<div class="col-sm-1 text-center">
						<button class="btn btn-primary btn-add">
							<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
						</button>
					</div>
					<h5 class="col-sm-1">Name</h5>
					<h5 class="col-sm-2">Institution</h5>
					<h5 class="col-sm-2">Position</h5>
					<h5 class="col-sm-2">Phone</h5>
					<h5 class="col-sm-3">Email</h5>
				</div>
				<div class="form-info">
				</div>
			</div>
		
		</div>
	
	</div>

</div>


<button id="form-submit" class="btn btn-primary">Submit</button>

<script src="//cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="/ji_js/ta/application/app_form.js"></script>
<script type="text/javascript">
	$(document).ready(function ()
	{
		var form = $('#form').AppForm();
		form.reform('515370910207');
		form.autosave('515370910207', 10000);
		
		$("#form-submit").click(function ()
		{
			$.ajax
			 ({
				 type: 'POST',
				 url: '/ta/application/student/apply/submit',
				 data: {json: JSON.stringify(form.serialize())},
				 dataType: 'text',
				 success: function (data)
				 {
					 alert(data);
				 },
				 error: function ()
				 {
					 alert('fail!');
				 }
			 });
		});
	});
</script>


<div class="apply">
	<form action="/ta/application/Student/saveinfo<?php echo "?courseid=$courseid"; ?>" method="post"
	      enctype="multipart/form-data">
		<?php foreach ($list as $item): ?>
			<fieldset class="text-container">
				<legend>Personal Information</legend>
				<ul id="personal-information">
					<li>Name: <input class="readonly" name="name" value="<?= $item->name ?>" style="font-size:18px;"
					                 size="12" readonly></li>
					<li>Course ID: <input class="readonly" name="courseid" value="<?php echo ucfirst($courseid); ?>"
					                      style="font-size:18px;" size="5" readonly></li>
					<li>Student ID: <input class="readonly" name="studentid" value="<?= $item->student_id ?>"
					                       style="font-size:18px;" size="12" readonly></li>
					<li>Faculty: <input class="readonly" name="faculty" value="<?= $item->faculty ?>"
					                    style="font-size:18px;" size="15" readonly></li>
					<li id="gender">
						Gender:
						<input type="radio" name="sex" value="male" checked="checked">Male
						<input type="radio" name="sex" value="female">Female
					</li>
					<li>
						Grade:
						<select name="Grade" style="font-size:18px;">
							<option value="freshman" selected>Freshman</option>
							<option value="sophomore">Sophomore</option>
							<option value="junior">Junior</option>
							<option value="senior">Senior</option>
							<option value="graduate">Graduate</option>
						</select>
					</li>
					<li class="last">Email: <input id="email" name="email" style="font-size:18px;" size="20"
					                               value="<?php echo set_value('email'); ?>"></li>
				</ul>
			</fieldset>
			
			<fieldset class="text-container-2">
				<legend>Self-Introduction</legend>
				<textarea id="introduction" class="text" name="introduction"
				          rows="15"><?php echo set_value('introduction'); ?></textarea>
			</fieldset>
			
			<fieldset class="text-container-2">
				<legend>Comment</legend>
				<textarea id="comment" class="text" name="comment"
				          rows="8"><?php echo set_value('comment'); ?></textarea>
			</fieldset>
		<?php endforeach; ?>
		<input type="file" name="upfile" size="20"/>
		<input id="submit" type="button" align="center" value="Submit" class="submit reprocess">
		<div id="bg"></div>
		<div class="box" id="reprocess-box">
			<p>Are you sure to submit this application?</p>
			<table width="80%" align="center">
				<td width="40%"><input name="submit" type="submit" align="center" value="Yes" class="submit"></td>
				<td width="40%"><input type="button" align="center" value="No" class="submit no"></td>
			</table>
		</div>
	</form>
</div>
</body>
</html>
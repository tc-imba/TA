<?php include 'common_header.php'; ?>
<?php include 'student_header.php'; ?>
	
	<script type="text/javascript">
		$(document).ready(function ()
		                  {
			                  var course_list = JSON.parse('<?php echo json_encode($course_list);?>');
			
			                  $(".course-select").click(function (e)
			                                            {
				                                            var BSID = $(e.target).attr('_id');
				                                            $("#course-text").html($(e.target).html());
				                                            $("#course-text").attr('_id', BSID);
				                                            $("#ta-button").attr('style', 'display:block');
				                                            $("#ta-text").html('TA');
				                                            $("#ta-text").attr('_id', 0);
				                                            for (var index in course_list)
				                                            {
					                                            if (course_list[index].BSID == BSID)
					                                            {
						                                            for (var ta_index in course_list[index].ta_list)
						                                            {
							                                            var html = [
								                                            '<li><a class="ta-select" _id="',
								                                            course_list[index].ta_list[ta_index].USER_ID,
								                                            '" href="javascript:void(0);">',
								                                            course_list[index].ta_list[ta_index].name_en,
								                                            '</a></li>'
							                                            ].join('');
							                                            $("#ta-menu").append(html);
						                                            }
						                                            break;
					                                            }
				                                            }
				                                            $(".ta-select").click(function (e)
				                                                                  {
					                                                                  var USER_ID = $(e.target)
							                                                                  .attr('_id');
					                                                                  $("#ta-text")
							                                                                  .html($(e.target).html());
					                                                                  $("#ta-text")
							                                                                  .attr('_id', USER_ID);
				                                                                  });
			                                            });
			
			                  $("#submit-button").click(function (e)
			                                            {
				                                            $.ajax
				                                             ({
					                                              type: 'POST',
					                                              url: '/ta/evaluation/student/feedback/submit/',
					                                              data: {
						                                              BSID: $("#course-text").attr('_id'),
						                                              ta_id: $("#ta-text").attr('_id'),
						                                              title: $("#input-title").val(),
						                                              content: $("#input-content").val(),
						                                              anonymous: $("#input-anonymous").prop('checked')
					                                              },
					                                              dataType: 'text',
					                                              success: function (data)
					                                              {
						                                              if (Math.ceil(data) > 0)
						                                              {
							                                              window.location.href = '/ta/evaluation/student/feedback/check/' + data;
						                                              }
						                                              else
						                                              {
							                                              alert(data);
						                                              }
						
					                                              },
					                                              error: function ()
					                                              {
						                                              alert('fail!');
					                                              }
				                                              });
				
			                                            });
		                  });
	</script>
	
	<!-- The main page content is here -->
	<div class='body'>
		<div class="maincontent">
			<div class="announcement">
				<h2><a class="navig" href="/ta/evaluation/student/feedback/view">View</a> > Add new feedback</h2>
				
				<div class="btn-group">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
					        aria-haspopup="true" aria-expanded="false"><span id="course-text" _id="0">Course</span><span
								class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<?php foreach ($course_list as $course): ?>
							<li><a class="course-select" _id="<?php echo $course->BSID; ?>"
							       href="javascript:void(0);"><?php echo $course->KCDM . ' ' . $course->KCZWMC; ?></a>
							</li>
						<?php endforeach ?>
					</ul>
				</div>
				
				<div id="ta-button" class="btn-group" style="display:none">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
					        aria-haspopup="true" aria-expanded="false"><span id="ta-text" _id="0">TA</span><span
								class="caret"></span>
					</button>
					<ul id="ta-menu" class="dropdown-menu">
						<!-- Generated by JQuery -->
					</ul>
				</div>
				
				<input id="input-title" type="text" class="form-control" placeholder="Title" aria-describedby="title">
				
				<textarea id="input-content" rows="15" style="resize:none;width:100%"></textarea>
				
				<input id="input-anonymous" type="checkbox"><span>Anonymous</span>
				
				<br>
				
				<button id="submit-button" class="btn btn-primary">Submit</button>
			
			</div>
		</div>
	</div>

<?php include 'common_footer.php'; ?>
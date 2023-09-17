@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-announcement-page">
	<div class="content-header">
	</div>
	<section class="content contents-leave-page">
		<div class="col-lg-12 bottom-margin">
			<div class="main-text-head slava-primary-bg">
				<h4 class="main-text-name text-white">Jobs</h4>
				@if(session()->has('message')) <h2 class="alert-success">{{session()->get('message')}}</h2> @endif
			</div>
		</div>
		<div class="col-md-12">
			<div class="card card-primary card-bg-timeline">
				<div class="card-body table-responsive p-0">
					<table style="border: 1px solid #D6D6D6;" class="table table-hover text-nowrap table-bordered table-extra">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Job</th>
								<th class="text-center">Country</th>
								<th class="text-center">Reporting To</th>
                                <th class="text-center">Department </th>
								<th class="text-center">Job Type </th>
								<th class="text-center">Location  </th>
								<th class="text-center">Date Issued </th>
								<th class="text-center">Role Description </th>
								<th class="text-center">Responsibilities </th>
								<th class="text-center">Skills/ Knowledge </th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
						@foreach($jobs as $job)
							<tr>
								<td align="center">
									<span class="text-secondary">{{$job->id}}</span>
								</td>
								<td align="center">
                                <span class="text-secondary">{{$job->job}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$job->GetCountry->country}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$job->reporting_to}}</span>
								</td>

                                <td align="center">
									<span class="text-secondary">{{$job->department}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$job->job_type}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$job->location}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$job->date_issued}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{!!$job->description!!}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{!!$job->responsibilities!!}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{!!$job->skills!!}</span>
								</td>
							
								<td style="padding: 8px !important;">
									<a href="{{route('editjob',$job->id)}}" class="btn btn-sm slava-primary-bg text-white btn-block" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
										Edit
									</a>
									<a onclick="Deletejob('{{$job->id}}')" class="btn btn-sm  text-white btn-block btn btn-danger" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
										Delete
									</a>
								</td>
							</tr>
                            @endforeach
						</tbody>
					</table>
					</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<a href="{{route('newjob')}}" class="add-btn-leave" title="Create-Leave-Application">
			<img src="./images/add-item.png" alt="">
		</a>
</div>
</div>
</section>
</div>
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" onclick="Close()" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
		
      </div>
      <div class="modal-body">
	  <h3 class="modal-title" id="exampleModalLabel">Are You Sure You Want To Delete..??</h3>
        <input type="hidden" name="job_id" id="job_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="Close()">Close</button>
        <button type="button" class="btn btn-danger" onclick="Savejob()">Delete</button>
      </div>
    </div>
  </div>
</div>

<script>

	function Deletejob(val)

	{
		$('#deletemodal').modal('show');
		$('#job_id').val(val);
	}

	function Close()
	{
		$('#deletemodal').modal('hide');
	}

	function Savejob()
	{
		var job_id= $('#job_id').val();

		$.post("/delete-job",{job_id:job_id,_token: "{{ csrf_token() }}"},function(result){
          
		window.location.href=window.location.href;
		  // alert(html(result));
	  });
	  
	}
</script>
  @include('admin.layouts.footer')
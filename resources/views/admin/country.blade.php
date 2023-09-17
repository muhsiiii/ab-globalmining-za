@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-announcement-page">
	<div class="content-header">
	</div>
	<section class="content contents-leave-page">
		<div class="col-lg-12 bottom-margin">
			<div class="main-text-head slava-primary-bg">
				<h4 class="main-text-name text-white">Country</h4>
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
								<th class="text-center">Country</th>
								<th class="text-center">Address</th>
								<th class="text-center">Tel</th>
								<th class="text-center">Fax</th>
                                <th class="text-center">Status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
				@foreach($countries as $country)
							<tr>
								<td align="center">
									<span class="text-secondary">{{$country->id}}</span>
								</td>
								<td align="center">
                                <span class="text-secondary">{{$country->country}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$country->address}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$country->tel}}</span>
								</td>
                                <td align="center">
									<span class="text-secondary">{{$country->fax}}</span>
								</td>
                                <td align="center">
                                 @if($country->status==1)
								<span class="text-secondary">active</span>
								@else
								<span class="text-secondary">disabled</span>
								@endif
								</td>
							
								<td style="padding: 8px !important;">
									<a href="{{route('editcountry',$country->id)}}" class="btn btn-sm slava-primary-bg text-white btn-block" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
										Edit
									</a>
									<a onclick="Deletecountry('{{$country->id}}')" class="btn btn-sm  text-white btn-block btn btn-danger" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
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
		<a href="{{route('country')}}" class="add-btn-leave" title="Create-Leave-Application">
			<img src="./images/add-item.png" alt="">
		</a>
</div>
</div>
</section>
</div>


<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" onclick="Close()" aria-label="Close">
		<span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
	  <h3 class="modal-title" id="exampleModalLabel">Are You Sure You Want To Delete..?? <br> it will also delete All jobs In This Country</h3>
        <input type="hidden" name="country_id" id="country_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="Close()">Close</button>
        <button type="button" class="btn btn-danger" onclick="Savecountry()">Delete</button>
      </div>
    </div>
  </div>
</div>
<script>
	function Deletecountry(val)
	{
		$('#deletemodal').modal('show');
		$('#country_id').val(val);
	}

	function Close()
	{
		$('#deletemodal').modal('hide');
	}

	function Savecountry()
	{
		var country_id= $('#country_id').val();

		$.post("/delete-country",{country_id:country_id,_token: "{{ csrf_token() }}"},function(result){
          
		window.location.href=window.location.href;
		  // alert(html(result));
	  });
		
	}

	
</script>
@include('admin.layouts.footer')
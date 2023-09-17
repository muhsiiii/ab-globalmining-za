@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-announcement-page">
	<div class="content-header">
	</div>
	<section class="content contents-leave-page">

		<div class="col-lg-12 bottom-margin">
			<div class="main-text-head slava-primary-bg">
				<h4 class="main-text-name text-white">Contact Us</h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card card-primary card-bg-timeline">
				<div class="card-body table-responsive p-0">
					<table style="border: 1px solid #D6D6D6;" class="table table-hover text-nowrap table-bordered table-extra">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Name</th>
								<th class="text-center">Email</th>
                                <th class="text-center">Phone Number</th>
								<th class="text-center">Company Name</th>
                                <th class="text-center">Designation</th>
                                <th class="text-center">Company Address</th>
                                <th class="text-center">Message</th>
							</tr>
						</thead>
						<tbody>
							@foreach($contacts as $contact)
							<tr>
								<td align="center">
									<span class="text-secondary">{{$contact->id}}</span> 
								</td>
                                <td align="center">
								<span class="text-secondary">{{$contact->name}}</span> 
								</td>
                                <td align="center">
									<span class="text-secondary">{{$contact->email}}</span> 
								</td>
                                <td align="center">
									<span class="text-secondary">{{$contact->phone}}</span> 
								</td>
                                <td align="center">
									<span class="text-secondary">{{$contact->company_name}}</span> 
								</td>
								<td align="center">
									<span class="text-secondary">{{$contact->designation}}</span> 
								</td>
								<td align="center">
									<span class="text-secondary">{{$contact->copmany_address}}</span> 
								</td>
								<td align="center">
									<span class="text-secondary">{{$contact->message}}</span> 
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
</div>
</div>
</section>
</div>
@include('admin.layouts.footer')

@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-announcement-page">
	<div class="content-header">
	</div>
	<section class="content contents-leave-page">
		<div class="col-lg-12 bottom-margin">
			<div class="main-text-head slava-primary-bg">
				<h4 class="main-text-name text-white">Our Teams</h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card card-primary card-bg-timeline">
				<div class="card-body table-responsive p-0">
					@if(session()->has('message')) <h2 class="alert-success">{{session()->get('message')}}</h2> @endif
					<table style="border: 1px solid #D6D6D6;" class="table table-hover text-nowrap table-bordered table-extra">
						<thead>
							<tr>	
								<th class="text-center">Logo</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($logos as $logo)
							<tr>
								<td align="center">
									<img src="{{asset('/logos/'.$logo->logos)}}" alt="" width="150px" height="100px">
								</td>
								<td style="padding: 8px !important;">
									<a href="{{route('logoedit',$logo->id)}}" class="btn btn-sm slava-primary-bg text-white btn-block" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
										Edit
									</a>
									<a href="{{route('logodestroy',$logo->id)}}" class="btn btn-sm  text-white btn-block btn btn-danger" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
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
		<a href="{{route('logoform')}}" class="add-btn-leave" title="Create-Leave-Application">
			<img src="./images/add-item.png" alt="">
		</a>
</div>
</div>
</section>
</div>
@include('admin.layouts.footer')
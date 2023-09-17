@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-announcement-page">
	<div class="content-header">
	</div>
	<section class="content contents-leave-page">
		<div class="col-lg-12 bottom-margin">
			<div class="main-text-head slava-primary-bg">
				<h4 class="main-text-name text-white">Latest News</h4>
			</div>
		</div>
		<div class="col-md-12">
			<div class="card card-primary card-bg-timeline">
				<div class="card-body table-responsive p-0">
					<table style="border: 1px solid #D6D6D6;" class="table table-hover text-nowrap table-bordered table-extra">
						<thead>
							<tr>
								<th class="text-center">ID</th>
								<th class="text-center">Image</th>
								<th class="text-center">Title</th>
								<th class="text-center">Description</th>
								<th class="text-center">URL</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($datas as $data)
							<tr>
								<td align="center">
									<span class="text-secondary">{{$data->id}}</span>
								</td>
								<td align="center">
									<img src="{{asset('/latest_news/'.$data->image)}}" alt="" width="150px" height="100px">
								</td>
								<td align="center">
									<span class="text-secondary">{{$data->title}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$data->description}}</span>
								</td>
								<td align="center">
									<span class="text-secondary">{{$data->url}}</span>
								</td>
								<td style="padding: 8px !important;">
									<a href="{{route('latestnews.edit',$data->id)}}" class="btn btn-sm slava-primary-bg text-white btn-block" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
										Edit
									</a>
									<a href="{{route('latestnews.delete',$data->id)}}" class="btn btn-sm  text-white btn-block btn btn-danger" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;width: 100%;">
										Delete
									</a>
								</td>
								@endforeach
							</tr>
						</tbody>
					</table>
					</td>
					</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<a href="{{route('latestnews.form')}}" class="add-btn-leave" title="Create-Leave-Application">
			<img src="./images/add-item.png" alt="">
		</a>
</div>
</div>
</section>
</div>
@include('admin.layouts.footer')
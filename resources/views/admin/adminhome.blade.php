@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-announcement-page">
	<div class="content-header">
	</div>
	<section class="content contents-leave-page">
		<div class="col-lg-12 bottom-margin">
			<div class="main-text-head slava-primary-bg">
				<h4 class="main-text-name text-white">Video Upload</h4>
			</div>
		</div>
		@if($video)
		<div class="col-md-12">
			<div class="card card-primary card-bg-timeline">
				<div class="card-body table-responsive p-0">
					<table style="border: 1px solid #D6D6D6;" class="table table-hover text-nowrap table-bordered table-extra">
						<thead>
							<tr>
								<th class="text-center">Video</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td align="center">
									<span class="text-secondary">

										<video loop="" controls="" muted width="400px" height="200px" autoplay>
											<source src="{{asset('videos')}}/{{$video->video}}" type="video/mp4">
										</video>
									</span>
								</td>
								<td align="center">
									<table class="table-borderless">
										<tbody>
											<tr>
												<td style="padding: 0px !important;">
													<a href="{{route('video.update.form',$video->id)}}" class="btn btn-sm slava-primary-bg text-white btn-block" target="_self" title="Edit Franchise" style="color: white; font-size:15px; font-weight: 600;margin-left:10px;width: 100%;">
														Update
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
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
		@else
		<a href="{{route('video.form')}}" class="add-btn-leave" title="Create-Leave-Application">
			<img src="./images/add-item.png" alt="">
		</a>
		@endif
</div>
</div>
</section>
</div>
@include('admin.layouts.footer')
</body>

</html>
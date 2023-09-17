@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper  pm-add-client">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark leave-main-heading bottom-margin mt-2">Add Ourteams</h2>
                </div>
            </div>
            <div class="col-12">
                <div style="box-shadow: none !important;" class="card card-primary application-leave">
                    <form style="box-shadow: 0px 0px 16px -3px rgba(0, 0, 0, 0.25);border-radius: 15px !important;" method="POST" action="{{route('ourteams.update')}}" role="form" id="addForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 form-group">
                                    <label for="tel">Choose image :</label>
                                    <div style="display: flex;" class="main-frm">
                                        <div style="border: 1px solid #ced4da;border-radius: 0.25rem;" class="input-group browse-btn">
                                            <span style="display: table;margin-left: auto;padding: 2px 4px 2px 3px;" class="input-group-btn">
                                                <label style="margin-bottom: 0px;font-weight: 400;padding: 3px 7px;border-radius: 7px;" class="btn slava-primary-bg btn-file text-white" for="multiple_input_group">
                                                    <div class="input required">
                                                        <input id="multiple_input_group" name="image" type="file">
                                                    </div> Browse
                                                </label>

                                            </span>
                                        </div>
                                        <button style="margin-left: 10px;" type="button" class="btn btn-secondary btn-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Image in Aspect Ratio of 1:1 Required, ie Resolution 800px * 800px">
                                            <i class="fa fa-info" aria-hidden="true"></i>
                                        </button>
                                    </div><br>
                                    <img src="{{asset('/our_teams/'.$team->image)}}" alt="" width="250px" height="250px">
                                    @error('image') <p class="alert-danger">{{$message}}</p> @enderror
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Name :</label>
                                        <input type="text" class="form-control" id="password" name="name" placeholder="Enter Name" value="{{$team->name}}">
                                        @error('name') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="password">Job Position :</label>
                                        <input type="text" class="form-control" id="password" name="position" placeholder="Enter Job Position" value="{{$team->position}}">
                                        <input type="hidden" name="id" value="{{$team->id}}">
                                        @error('position') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">url Required.</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Education :</label>
                                        <input type="text" class="form-control" id="password" name="education" value="{{$team->education}}">
                                        @error('education') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">LinkedIn Url :</label>
                                        <input type="text" class="form-control" id="password" name="url" placeholder="Enter Linkedin Url" value="{{$team->url}}">
                                        @error('url') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">url Required.</div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Description :</label>
                                        <textarea class="form-control" id="address" name="description" placeholder="Enter Description..." rows="5" >{{$team->description}}</textarea>
                                        @error('description') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Description Required.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 mt-2">
                                <div class="col-sm-6  col-6">
                                    <a href="{{route('ourteams')}}" style="padding: 7px 35px;border-radius: 8px;" class="btn slava-secendory-bg text-white text-right">Back</a>
                                </div>
                                <div class="col-sm-6  col-6">
                                    <button type="submit" id="addBtn" class="btn slava-primary-bg btn-block text-white save-btn-employee"> Save </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
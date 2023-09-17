@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper  pm-add-client">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark leave-main-heading bottom-margin mt-2">Add Logos</h2>
                </div>
            </div>
            <div class="col-12">
                <div style="box-shadow: none !important;" class="card card-primary application-leave">
                    <form style="box-shadow: 0px 0px 16px -3px rgba(0, 0, 0, 0.25);border-radius: 15px !important;" method="POST" action="{{route('logoupdate')}}" role="form" id="addForm" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3 col-lg-3 form-group">
                                    <label for="tel">Choose logo :</label>
                                    <div style="display: flex;" class="main-frm">
                                        <div style="border: 1px solid #ced4da;border-radius: 0.25rem;" class="input-group browse-btn">
                                            <span style="display: table;margin-left: auto;padding: 2px 4px 2px 3px;" class="input-group-btn">
                                                <label style="margin-bottom: 0px;font-weight: 400;padding: 3px 7px;border-radius: 7px;" class="btn slava-primary-bg btn-file text-white" for="multiple_input_group">
                                                    <div class="input required">
                                                        <input id="multiple_input_group" name="logo" type="file">
                                                        <input type="hidden" name="id" value="{{$logo->id}}">
                                                    </div> Browse
                                                </label>
                                            </span>
                                        </div>
                                        <button style="margin-left: 10px;" type="button" class="btn btn-secondary btn-tooltip float-left" data-toggle="tooltip" data-placement="top" title="Image in Dimension of min width:200px,max width:300px and min height:100px,max height:200px">
                                            <i class="fa fa-info" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <img src="{{asset('/logos/'.$logo->logos)}}" alt="" width="250px" height="250px">
                                    @error('logo') <p class="alert-danger">{{$message}}</p> @enderror
                                </div>
                            </div>
                            <div class="row mb-4 mt-2">
                                <div class="col-sm-6  col-6">
                                    <a href="{{route('logotable')}}" style="padding: 7px 35px;border-radius: 8px;" class="btn slava-secendory-bg text-white text-right">Back</a>
                                </div>
                                <div class="col-sm-6  col-6">
                                    <button type="submit" id="addBtn" class="btn slava-primary-bg btn-block text-white save-btn-employee"> Update </button>
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
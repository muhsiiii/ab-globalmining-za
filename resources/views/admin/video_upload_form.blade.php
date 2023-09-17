@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-editprofile-page">
    <section class="content">
        <div class="container-fluid m-2">
            <form action="{{route('videoupload')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-lg-4 form-group">
                        <label for="tel">Choose Video</label>
                        <div style="border: 1px solid #ced4da;border-radius: 0.25rem;" class="input-group browse-btn">
                            <span style="display: table;margin-left: auto;padding: 2px 4px 2px 3px;" class="input-group-btn">
                                <label style="margin-bottom: 0px;font-weight: 400;padding: 3px 7px;border-radius: 7px;" class="btn slava-primary-bg btn-file text-white" for="multiple_input_group">
                                    <div class="input required">
                                        <input id="multiple_input_group" name="video" type="file">
                                    </div> Browse
                                </label>
                            </span>
                        </div>
                        @error('video') <p class="alert-danger">{{$message}}</p> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6  col-6">
                        <a href="{{route('admin.home')}}" style="padding: 7px 35px;border-radius: 12px;" class="btn slava-secendory-bg text-white text-right">Back</a>
                    </div>
                    <div class="col-sm-6  col-6">
                        <button type="submit" class="btn slava-primary-bg text-white save-btn-profile">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@include('admin.layouts.footer')
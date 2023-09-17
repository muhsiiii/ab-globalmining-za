@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper  pm-add-client">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark leave-main-heading bottom-margin mt-2">Add New Country & Location</h2>
                    @if(session()->has('message')) <h2 class="alert-success">{{session()->get('message')}}</h2> @endif
                </div>
            </div>
            <div class="col-12">
                <div style="box-shadow: none !important;" class="card card-primary application-leave">
                    <form style="box-shadow: 0px 0px 16px -3px rgba(0, 0, 0, 0.25);border-radius: 15px !important;" method="POST" action="{{route('newcountry')}}" role="form" id="addForm">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-lg-6">
                                        <label for="password">country :</label>
                                        <input type="text" class="form-control" id="password" name="new_country" placeholder="Enter Country Name">
                                        @error('new_country') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Map Url :</label>
                                        <input type="text" class="form-control" id="password" name="url" placeholder="Enter Map Url">
                                        @error('url') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="address">Address :</label>
                                        <textarea class="form-control" id="address" name="address" placeholder="Enter Address..."></textarea>
                                        @error('address') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Description Required.</div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Tel :</label>
                                        <input type="tel" class="form-control" id="password" name="tel" placeholder="Enter Telephone Number">
                                        @error('tel') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Fax :</label>
                                        <input type="tel" class="form-control" id="password" name="fax" placeholder="Enter Fax Number">
                                        @error('fax') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                

                            </div>
                        </div>
                        <div class="row mb-4 mt-2">
                                <div class="col-sm-6  col-6 ">
                                    <a href="{{route('getcountry')}}" style="padding: 7px 35px;border-radius: 8px;" class="btn slava-secendory-bg text-white text-right ml-4">Back</a>
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

@include('admin.layouts.footer')
@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper  pm-add-client">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark leave-main-heading bottom-margin mt-2">Edit Job</h2>
                    @if(session()->has('message')) <h2 class="alert-success">{{session()->get('message')}}</h2> @endif
                </div>
            </div>
            <div class="col-12">
                <div style="box-shadow: none !important;" class="card card-primary application-leave">
                <form action="{{route('newcountry')}}" method="post">
                    @csrf
              
                </form>
                    <form style="box-shadow: 0px 0px 16px -3px rgba(0, 0, 0, 0.25);border-radius: 15px !important;" method="POST" action="{{route('updatejob')}}" role="form" id="addForm">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Job Title :</label>
                                        <input type="text" class="form-control" id="password" name="job_title" value="{{$job->job}}">
                                        <input type="hidden" name="id" value="{{$job->id}}">
                                        @error('job_title') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="password">Choose Country :</label>

                                    <select style="width: 100%;padding: 8px;border: 1px solid #ced4da;border-radius:6px;" name="country">
                                    
                                        <option selected disabled>Choose country</option>
                                      @foreach($countries as $country)
                                        <option value="{{$country->id}}" @if ($country->id==$job->country) selected @endif>{{$country->country}}</option>
                                        @endforeach
                                       
                                    </select>
                                    @error('country') <p class="alert-danger">{{$message}}</p> @enderror
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Reporting To :</label>
                                        <input type="text" class="form-control" id="reporting_to" name="report" value="{{$job->reporting_to}}">
                                        @error('report') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Department :</label>
                                        <input type="text" class="form-control" id="password" name="department" value="{{$job->department}}">
                                        @error('department') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Job Type :</label>
                                        <input type="text" class="form-control" id="password" name="job_type" value="{{$job->job_type}}">
                                        @error('department') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Location :</label>
                                        <input type="text" class="form-control" id="password" name="location" value="{{$job->location}}">
                                        @error('location') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Date Issued :</label>
                                        <input type="date" class="form-control" id="password" name="dateissue" value="{{$job->date_issued}}">
                                        @error('dateissue') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Role Description :</label>
                                        <textarea class="form-control ckeditor" id="address" name="role" rows="5" cols="5">{{$job->description}}</textarea>
                                        @error('description') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Description Required.</div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">Responsibilities :</label>
                                        <textarea class="form-control ckeditor" id="responsibilty" rows="5" cols="5" name="responsibility">{{$job->responsibilities}}</textarea>
                                        @error('responsibility') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">Skills/ Knowledge :</label>
                                        <textarea class="form-control ckeditor" id="responsibilty" rows="5" cols="5" name="skill">{{$job->skills}}</textarea>
                                        @error('skill') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>
                              
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">Qualification/ Experience :</label>
                                        <textarea class="form-control ckeditor" id="responsibilty" rows="5" cols="5" name="experience" >{{$job->qualifications}}</textarea>
                                        @error('experience') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mb-4 mt-2">
                                <div class="col-sm-6  col-6">
                                    <a href="{{route('jobs')}}" style="padding: 7px 35px;border-radius: 8px;" class="btn slava-secendory-bg text-white text-right">Back</a>
                                </div>
                                <div class="col-sm-6  col-6">
                                    <button type="submit" id="addBtn" class="btn slava-primary-bg btn-block text-white save-btn-employee">Update </button>
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
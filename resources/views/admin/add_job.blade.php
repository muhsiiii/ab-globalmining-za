@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper  pm-add-client">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row m-2">
                <div class="col-sm-6">
                    <h2 class="m-0 text-dark leave-main-heading bottom-margin mt-2">Add New Job</h2>
                    @if(session()->has('message')) <h2 class="alert-success">{{session()->get('message')}}</h2> @endif
                </div>
            </div>
            <div class="col-12">
                <div style="box-shadow: none !important;" class="card card-primary application-leave">
                    <!-- <form action="{{route('newcountry')}}" method="post">
                        @csrf

                    </form> -->
                    <form style="box-shadow: 0px 0px 16px -3px rgba(0, 0, 0, 0.25);border-radius: 15px !important;" role="form" id="addForm" action="{{route('newjobsave')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Job Title :</label>
                                        <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Enter Job Title">
                                        @error('job_title') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="password">Choose Country :</label>

                                    <select style="width: 100%;padding: 8px;border: 1px solid #ced4da;border-radius:6px;" name="country" id="country">

                                        <option selected disabled>Select country</option>
                                        @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country}}</option>
                                        @endforeach
                                    </select>
                                    @error('country') <p class="alert-danger">{{$message}}</p> @enderror
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Reporting To :</label>
                                        <input type="text" class="form-control" id="reporting_to" name="report" placeholder="reporting to ...">
                                        @error('report') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Department :</label>
                                        <input type="text" class="form-control" id="password" name="department" placeholder="department ...">
                                        @error('department') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Job Type :</label>
                                        <input type="text" class="form-control" id="password" name="job_type" placeholder="job type ...">
                                        @error('department') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Location :</label>
                                        <input type="text" class="form-control" id="password" name="location" placeholder="location ...">
                                        @error('location') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Date Issued :</label>
                                        <input type="date" class="form-control" id="password" name="dateissue" placeholder="Enter Job Title">
                                        @error('dateissue') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">Role Description :</label>
                                        <textarea class="form-control ckeditor" id="responsibilty" rows="5" cols="5" name="role" placeholder="Enter Description..."></textarea>
                                        @error('role') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">Responsibilities :</label>
                                        <textarea class="form-control ckeditor" id="responsibilty" rows="5" cols="5" name="responsibility" placeholder="Enter Description..."></textarea>
                                        @error('responsibility') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">Skills/ Knowledge :</label>
                                        <textarea class="form-control ckeditor" id="responsibilty" rows="5" cols="5" name="skill" placeholder="Enter Description..."></textarea>
                                        @error('skill') <p class="alert-danger">{{$message}}</p> @enderror
                                        <div class="invalid-feedback">Title Required.</div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="password">Qualification/ Experience :</label>
                                        <textarea class="form-control ckeditor" id="responsibilty" rows="5" cols="5" name="experience" placeholder="Enter Description..."></textarea>
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
                                    <button type="submit" id="addBtn" class="btn slava-primary-bg btn-block text-white save-btn-employee" > Save </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script>
    function Addjob() {
        
        var job = $('input#job_title').val();
        if(job=='')
        {
            alert("hhhh");
            $('#job').css('border','1px solid red')
            return false;
        }
        else
        var country = $('#country option:selected').val();

        var editorData = CKEDITOR.instances.responsibilty.getData();

        data = new FormData();
        data.append('job', job);
        data.append('country', country);
        data.append('responsibility', editorData);
        data.append('_token', "{{ csrf_token() }}");

        $.ajax({

            type: "POST",
            url: "/job-save",
            data: data,
            dataType: "json",
            contentType: false,
            //cache: false,
            processData: false,

            success: function(data) {
                if (data['success']) {

                    // window.location.href=window.location.href;
                    alert("success");

                } else {
                    alert("failed");
                }

            }




        })
    }
</script> -->
@include('admin.layouts.footer')
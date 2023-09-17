@include('admin.layouts.header')
@include('admin.layouts.nav')
<div class="content-wrapper contents-announcement-page">
    <div class="content-header">
    </div>
    <section class="content contents-leave-page">

        <div class="col-lg-12 bottom-margin">
            <div class="main-text-head slava-primary-bg">
                <h4 class="main-text-name text-white">Career</h4>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card card-primary card-bg-timeline">
                <div class="card-body table-responsive p-0">
                    <table style="border: 1px solid #D6D6D6;" class="table table-hover text-nowrap table-bordered table-extra">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">First Name</th>
                                <th class="text-center">Last Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Phone</th>
                                <th class="text-center">Job</th>
                                <th class="text-center">File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($careers as $career)
                            <tr>
                                <td align="center">
                                    <span class="text-secondary">{{$career->id}}</span>
                                </td>
                                <td align="center">
                                    <span class="text-secondary">{{$career->firstname}}</span>
                                </td>
                                <td align="center">
                                    <span class="text-secondary">{{$career->lastname}}</span>
                                </td>
                                <td align="center">
                                    <span class="text-secondary">{{$career->email}}</span>
                                </td>
                                <td align="center">
                                    <span class="text-secondary">{{$career->phone}}</span>
                                </td>
                                <td align="center">
                                    <span class="text-secondary">{{$career->Getjob->job}}</span>
                                </td>

                                <td align="center">
                                    <span class="text-secondary">
                                        <button class="btn btn-success btn btn-sm"><a href="{{route('pdf',encrypt($career->id))}}" class="text-light">Download Resume</a></button>
                                    </span>
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

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
                    @if (session()->has('message'))
                        <h2 class="alert-success">{{ session()->get('message') }}</h2>
                    @endif
                    <table style="border: 1px solid #D6D6D6;"
                        class="table table-hover text-nowrap table-bordered table-extra">
                        <thead>
                            <tr>
                                <th class="text-center">SL.NO</th>
                                <th class="text-center">TYPE</th>
                                <th class="text-center">COUNT</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($legacies as $legacy)
                                <tr>
                                    <td align="center">
                                        <span class="text-secondary">{{ $loop->iteration }}</span>
                                    </td>
                                    <td align="center">
                                        <span class="text-secondary">{{ $legacy->type }}</span>
                                    </td>
                                    <td align="center">
                                        <span class="text-secondary">{{ $legacy->content }}</span>
                                    </td>

                                    <td style="padding: 8px !important;">
                                        <a onclick="ModalShow('{{ $legacy->id }}','{{ $legacy->content }}')"
                                            class="btn btn-sm slava-primary-bg text-white btn-block"
                                            style="color: white; font-size:15px; font-weight: 600;width: 100%;">
                                            Update
                                        </a>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>


                    <div class="modal fade" id="legacy-modal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="password">count :</label>
                                            <input type="text" class="form-control" id="count" name="name"
                                                placeholder="enter count">
                                            @error('name')
                                                <p class="alert-danger">{{ $message }}</p>
                                            @enderror
                                            <div class="invalid-feedback">Title Required.</div>
                                            <input type="hidden" id="lid">
                                            <input type="hidden" id="content1">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" onclick="countUpdate()">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>



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
<script>
    function ModalShow(lid,content) {
        $('#legacy-modal').modal('show');
        $('#lid').val(lid);
        $('#count').val(content);
        // alert(val);

    }

    function countUpdate() {

        var lid =$('#lid').val();
        var count = $('#count').val();
        // count = $('#lid').val();
        // alert(count);

        data = new FormData();

        data.append('lid', lid);
        data.append('count', count);

        data.append('_token', '{{ csrf_token() }}');

        $.ajax({
            type: "POST",
            url: "/legacy-update",
            data: data,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(data) {
                if (data['success']) {
                    toastr.options.onHidden = function() {
                            $('#legacy-modal').modal('hide');
                            window.location.href = window.location.href;
                    };
                    toastr.success('updated', '', {
                        timeOut: 1000,

                    });
                } else {
                    toastr.error('Something Went Wrong');
                }
            }
        });


    }
</script>
@include('admin.layouts.footer')

<x-app-layout>
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Site Settings</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Site Settings</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        @if (session('success'))
                            <x-alert message="{{ session('success') }}" type="success" title="Success!" />

                        @endif
                        @if (session('error'))
                            <x-alert message="{{ session('error') }}" type="danger" title="Error!" />

                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Logo</h5>


                                <div class="card-header-right">
                                    <i class="icofont icofont-spinner-alt-5"></i>
                                </div>

                            </div>
                            <div class="card-block">
                                <h5 class="sub-title">Select Image</h5>
                                <form method="POST" action="{{ route('admin.site-setting.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Dark Logo</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo" class="form-control">
                                                @error('logo')
                                                    <div class="alert alert-danger my-1 border-0">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <label class="col-sm-2 col-form-label mt-4">Light Logo</label>
                                            <div class="col-sm-10 mt-4">
                                                <input type="file" name="logo_light" class="form-control">
                                                @error('logo_light')
                                                    <div class="alert alert-danger my-1 border-0">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="row mt-4">
                                                <div class="col-6">
                                                    <img src="{{ asset('uploads/logo/' . $settings->logo) }}"
                                                        alt="{{ $settings->logo }}" width="80%"
                                                        style="object-fit: cover" class="image-fluid" />
                                                </div>
                                                <div class="col-6">
                                                    <img src="{{ asset('uploads/logo/' . $settings->logo_light) }}"
                                                        alt="{{ $settings->logo_light }}" width="80%"
                                                        style="object-fit: cover" class="image-fluid" />
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary ">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>



                        <div class="card">
                            <div class="card-header">
                                <h5>Add Favicon & Loader</h5>


                                <div class="card-header-right">
                                    <i class="icofont icofont-spinner-alt-5"></i>
                                </div>

                            </div>
                            <div class="card-block">
                                <h5 class="sub-title">Select Image</h5>
                                <form method="POST" action="{{ route('admin.site-setting.favicon') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Favicon Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="favicon" class="form-control">
                                                @error('favicon')
                                                    <div class="alert alert-danger my-1 border-0">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <label class="col-sm-2 col-form-label mt-4">Loader Image</label>
                                            <div class="col-sm-10 mt-4">
                                                <input type="file" name="loader" class="form-control">
                                                @error('loader')
                                                    <div class="alert alert-danger my-1 border-0">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-xs-12 mt-4 ml-5">
                                                <img src="{{ asset('uploads/logo/' . $settings->favicon) }}"
                                                    alt="{{ $settings->favicon }}" width="100%"
                                                    style="object-fit: cover" class="image-fluid" />
                                            </div>
                                            <div class="col-xs-12 mt-4 ml-5">
                                                <img src="{{ asset('uploads/logo/' . $settings->logo_loader) }}"
                                                    alt="{{ $settings->logo_loader }}" width="100%"
                                                    style="object-fit: cover" class="image-fluid" />
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary ">Submit</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>

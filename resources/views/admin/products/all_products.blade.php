<x-app-layout>

    @push('css')
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('pages/data-table/css/buttons.dataTables.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    @endpush

    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>All Products</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">All Products</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->

            @if(session('success'))
                <x-alert message="{{ session('success') }}" type="success" title="Success!"/>
            @endif

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>All Products</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table  table-bordered nowrap dataTable"
                                        role="grid" aria-describedby="simpletable_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $product->name }}</td>
                                                    <td>{{ $product->price }}</td>

                                                    <td>

                                                        <div class="btn-group btn-group-sm">
                                                            <a href="{{ route('admin.products.view', $product->slug) }}"
                                                                type="button" class="btn btn-primary m-1"><i
                                                                    class="feather icon-eye"></i>View</a>
                                                            <a href="{{ route('admin.products.edit', Crypt::encrypt($product->id)) }}" type="button" class="btn btn-secondary m-1"><i
                                                                    class="feather icon-edit"></i>Edit</a>

                                                            <form method="post"  class="btn" action="{{ route('admin.products.destroy', Crypt::encrypt($product->id)) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger p-0 px-2 py-1"><i class="feather icon-trash"></i>Delete</button>
                                                            </form>

                                                        </div>

                                                    </td>

                                                </tr>
                                            @endforeach

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')

        <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('pages/data-table/js/data-table-custom.js') }}"></script>
    @endpush

</x-app-layout>

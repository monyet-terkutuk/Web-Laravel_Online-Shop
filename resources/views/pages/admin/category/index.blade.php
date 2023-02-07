@extends('layouts.admin')
@section('title', 'Category')
@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Category Page</h2>
        <p class="dashboard-subtitle">List of Categories</p>
      </div>
      <div class="dashboard-content">
       <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">+ Create New</a>
                    <div class="table-responsive">
                        <div class="table-hover scroll-horizontal-vertical w-100" id="crudTable">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>icon</td>
                                    <td>Slug</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </div>
        <!-- recent transactions -->
       
      </div>
    </div>
  </div>
  
@endsection

@push('addon-script')
    <script>
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: {!! url()->current() !!},
            },
            columns: [
                { data: 'id', name: 'id'},
                { data: 'name', name: 'name'},
                { data: 'icon', name: 'icon'},
                { data: 'slug', name: 'slug'},
                { 
                    data: 'action', 
                    name: 'action',
                    orderable: false,
                    searcable: false,
                    width: '15%'
                },
            ]
        })
    </script>
    <script>
        $(document).ready( function () {
    $('#crudTable').DataTable();
} );
    </script>
@endpush
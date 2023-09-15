
@extends('layouts.app')

@section('content')

<style>
    .Active{
        color: green;
        font-weight: 900;
    }
    .Inactive{
        color: red;
        font-weight: 900;
    }
</style>

 <!-- BEGIN: Content-->
<!-- BEGIN: Content-->
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Employees</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Employees</a>
                                    </li>
                                    <li class="breadcrumb-item active">List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                                            {{$error}}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
            @endif


                <!-- Ajax Sourced Server-side -->
                <section id="ajax-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                {{-- <div class="card-header border-bottom"> --}}
                                    <div class="row " style="padding-top: 6px">
                                        <div class="col-md-9">
                                            {{-- <h4 class="card-title">List</h4> --}}
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2">
                                            <a href="{{route('employees.create')}}" class=" btn btn-primary btn-gradient round  ">Add Product</a>
                                        </div>
                                    </div>
                                    
                                {{-- </div> --}}
                                <div class="card-datatable">
                                    <table class="datatables-ajax table table-responsive datatable_data">

                                        
                                        <thead>
                                            <tr>
                                                <th>Sr.no</th>
                                                <th>Name</th>
                                                <th>remark</th>
                                                <th>Salary</th>
                                                <th>per day salary</th>
                                                <th>duty hour</th>
                                                <th>transportation cost</th>
                                                <th>status</th>
                                                <th>Created Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php  $i=1; @endphp
                                            @foreach($employees as $key => $val)
                                            <tr>
                                                <th scope="row">{{ $i }}</th>
                                                <td><strong>{{ $val->first_name }} {{ $val->last_name }}</strong></td>
                                                <td>{{ $val->remark }}</td>
                                                <td>{{ $val->monthly_salary }}</td>
                                                <td>{{ $val->per_day_salary }}</td>
                                                <td>{{ $val->duty_hour }}</td>
                                                <td>{{ $val->transportation_cost }}</td>
                                                <td><div class="form-check form-check-success form-switch">
                                                        <input class="form-check-input checked_chackbox" id="systemNotification" type="checkbox" name="is_default" onclick="ChangeStatusActive({{ $val->id }})" @if ($val->status == 1)
                                                            @checked(true) 
                                                        @endif   @if ($val->is_default == 1)
                                                            @disabled(true)
                                                        @endif  value="1" >
                                                    </div>
                                                </td>
                                                <td>{{ date('d-M-y H:i:s',strtotime($val->created_at)) }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{route('employees.edit',$val->id)}}">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#danger_ke{{ $val->id }}">
                                                                <i data-feather="trash" class="me-50"></i>
                                                                <span>Delete</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <div class="modal fade modal-danger text-start" id="danger_ke{{ $val->id }}" tabindex="-1" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="myModalLabel120">Delete Employee</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Are you sure you want to delete !
                                                                    </div>
                                                                    <form action="{{route('employees.destroy',$val->id)}}" method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-danger" @if ($val->is_default == 1) @disabled(true) @endif>Delete</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php $i++; @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @include('_pagination', ['data' => $employees])
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!--/ Ajax Sourced Server-side -->

                

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <!-- END: Content-->

    <script>
        function ChangeStatusActive (id){
            $.ajax({
                url: "{{ route('employees.change_status') }}",
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: "{{ csrf_token() }}",id:id
                },
                success: function(response){
                    console.log(response[0]);
                    if(response[0] == 1){
                        Swal.fire({
                            title: 'Success!',
                            text: response[1],
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    }else{
                        Swal.fire({
                            title: 'Success!',
                            text: response[1],
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            });
        }
    </script>

@endsection
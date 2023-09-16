


@extends('layouts.app')

@section('content')

<style>
    .error{
        color:red;
    }
    /* input {
        text-transform: uppercase;
    } */
</style>

 <!-- BEGIN: Content-->
 <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Product</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('admin')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">Products</a>
                                    </li>
                                    <li class="breadcrumb-item active">Create
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

                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    {{-- <h4 class="card-title">Create</h4> --}}
                                </div>
                                <div class="card-body">
                                    <form class="form" action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Production Date <span class="error">*</span></label>
                                                    <input type="date" id="first-name-column" required name="production_date" class="form-control" placeholder="Production Date" oninput="" value="{{ old('production_date', date('Y-m-d')) }}" />
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Employee  <span class="error">*</span></label>
                                                    <select name="employee_id" id="employee"  required class="select2 form-select">
                                                        <option value="">Select Employee</option>
                                                        @foreach ($employees as $item)
                                                            <option  department_id="" value="{{ $item->id }}" {{ (old('employee_id') == $item->id) ? 'selected' : '' }}>{{ $item->first_name }} {{ $item->last_name }}</option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            

                                            <div class="col-md-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Department  <span class="error">*</span></label>
                                                    <select name="department_id" required id="department" class="select2 form-select">
                                                        <option value="">Select Department</option>
                                                        @foreach ($departments as $item)
                                                            <option value="{{ $item->id }}" {{ (old('department_id') == $item->id) ? 'selected' : '' }}>{{ $item->name }}</option>    
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Punch in Time <span class="error">*</span></label>
                                                    <input type="time" name="punch_in" required id="" class="form-control" value="{{ old('punch_in') }}">
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Punch out Time  <span class="error">*</span></label>
                                                    <input type="time" name="punch_out" id="" required class="form-control" value="{{ old('punch_out') }}">
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Select Salary calculation type<span class="error">*</span></label>
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <input type="radio"  name="salary_calculation" value="hourly" {{ (old('salary_calculation') == 'hourly') ? 'checked' : '' }} > <span>Hourly</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="radio"  name="salary_calculation" value="production" {{ (old('salary_calculation') == 'production') ? 'checked' : '' }}  {{ (empty(old('salary_calculation')) ? 'checked' : '') }}> <span>Production</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Day Shift/Night Shift<span class="error">*</span></label>
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <input type="radio"  name="work_shift" value="day" {{ (old('work_shift') == 'day') ? 'checked' : '' }} {{ (empty(old('work_shift')) ? 'checked' : '') }} > <span>Day Shift</span>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="radio" name="work_shift" value="night" {{ (old('work_shift') == 'night') ? 'checked' : '' }} > <span>Night Shift</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-12 mb-1">
                                                
                                            </div>

                                            <div class="col-md-12 col-12 mb-1">
                                                <button>Add Product</button>
                                            </div>

                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-name-column">Description <span class="error">*</span></label>
                                                    <textarea name="desc"  class="form-control" cols="3" rows="3" placeholder="Description">{{ old('desc') }}</textarea>
                                                </div>
                                            </div>

                                           

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
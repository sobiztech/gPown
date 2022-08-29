@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Loans</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Loans</li>
            </ol>
        </div>
    </div>

    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <a class="btn btn-blue" href="{{ route('loan.create') }}">
                        <span class="btn-icon-wrapper pr-2"> </span>
                        Create
                    </a>
                </div>
                
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th class="wd-10p border-bottom-0">No</th>
                                    <th class="wd-15p border-bottom-0">Date</th>
                                    <th class="wd-15p border-bottom-0">Code</th>
                                    <th class="wd-15p border-bottom-0">Name</th>
                                    <th class="wd-15p border-bottom-0">Loan Type</th>
                                    <th class="wd-20p border-bottom-0">Period</th>
                                    <th class="wd-10p border-bottom-0">Interest</th>
                                    <th class="wd-10p border-bottom-0">Amount</th>
                                    <th class="wd-15p border-bottom-0">description</th>
                                    <th class="wd-10p border-bottom-0">User</th>
                                    <th class="wd-10p border-bottom-0"></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($loans as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->date }}</td>
                                        <td>{{ $row->customer_number }}</td>
                                        <td>{{ $row->customer_first_name }} {{ $row->customer_sur_name }}</td>
                                        <td>{{ $row->loan_type_name }}</td>
                                        <td>{{ $row->period }}</td>
                                        <td>{{ $row->interest }}</td>
                                        <td>{{ $row->amount }}</td>
                                        <td>{{ $row->description }}</td>
                                        <td>{{ $row->employee_number }}</td>
                                        <td>
                                            <a class="btn btn-blue edit" title="Edit" 
                                            data-id="{{ $row->id }}"
                                            data-customer_number="{{ $row->customer_number }}" 
                                            data-period="{{ $row->period }}" 
                                            data-interest="{{ $row->interest }}" 
                                            data-amount="{{ $row->amount }}" 
                                            data-description="{{ $row->description }}" 
                                            data-customer_id="{{ $row->customer_id }}" 
                                            data-loan_type_id="{{ $row->loan_type_id }}"  
                                            data-user_id="{{ $row->user_id }}" >
                                                <i style="color:rgb(226, 210, 210);cursor: pointer" class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

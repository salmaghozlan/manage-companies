@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Employee Details</div>

                    <div class="panel-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $employee->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $employee->email }}</td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>{{ $employee->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Company</td>
                                    <td>{{ $employee->company->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $company->name }}</div>

                <div class="card-body">
                    <p><strong>Name:</strong> {{ $company->name }}</p>
                    <p><strong>Email:</strong> {{ $company->email }}</p>
                    @if($company->logo)
                        <p><img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }} logo"></p>
                    @endif
                    <p><strong>Website:</strong> <a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></p>
                    <hr>
                    <h5>Employees:</h5>
                    @if(count($company->employees) > 0)
                        <ul>
                            @foreach($company->employees as $employee)
                                <li><a href="{{ route('employees.show', $employee) }}">{{ $employee->first_name }} {{ $employee->last_name }}</a></li>
                            @endforeach
                        </ul>
                    @else
                        <p>No employees found for this company.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

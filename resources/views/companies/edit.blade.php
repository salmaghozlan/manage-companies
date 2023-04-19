@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit {{ $company->name }}</h1>
        <form method="POST" action="{{ route('companies.update', $company->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $company->email }}">
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control-file" accept="image/*">
                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }} Logo" height="50">
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" class="form-control" value="{{ $company->website }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

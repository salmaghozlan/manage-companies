@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a new company</h1>
        <form method="POST" action="{{ route('companies.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" name="logo" id="logo" class="form-control-file" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="url" name="website" id="website" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

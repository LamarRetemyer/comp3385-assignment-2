@extends('layouts.app')

@section('content')
    <h1>Feedback Form</h1>
    <form action="/feedback/send" method="post">
        @csrf
        <div>
            <label for="full_name">Full Name: (Required)</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>
        <div>
            <label for="email">Email: (Required)</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="comments">Comments: (Required) </label>
            <textarea id="comments" name="comments" rows="4" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@section('styles')
    <link href="public/css/feedback.css" rel="stylesheet">
@endsection

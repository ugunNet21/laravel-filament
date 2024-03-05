@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Backup</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('backup.create') }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Buat Backup Sekarang</button>
    </form>
</div>
@endsection

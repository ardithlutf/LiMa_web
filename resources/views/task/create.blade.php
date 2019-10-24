@extends('layouts.app')

@section('content')

<div class="container">
    <h4>Task Baru</h4>
    <form action="{{ route('task.store') }}" method="post">

        {{csrf_field()}}
        <div class="form-group {{ $errors->has('sprint_id') ? 'has-error' : '' }}">
            <label for="sprint_id" class="control-label">Sprint ID</label>
            <input type="text" class="form-control" name="sprint_id" placeholder="Nama Task">
            @if ($errors->has('sprint_id'))
            <span class="help-block">{{ $errors->first('sprint_id') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('nama_task') ? 'has-error' : '' }}">
            <label for="nama_task" class="control-label">Nama Task</label>
            <input type="text" class="form-control" name="nama_task" placeholder="Nama Task">
            @if ($errors->has('nama_task'))
            <span class="help-block">{{ $errors->first('nama_task') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('kesulitan_id') ? 'has-error' : '' }}">
            <label for="kesulitan_id" class="control-label">Kesulitan ID</label>
            <input type="text" class="form-control" name="kesulitan_id" placeholder="Nama Task">
            @if ($errors->has('kesulitan_id'))
            <span class="help-block">{{ $errors->first('kesulitan_id') }}</span>
            @endif
        </div>

        <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="status" class="control-label">Status</label>
                <input type="text" class="form-control" name="status" placeholder="Status">
                @if ($errors->has('status'))
                <span class="help-block">{{ $errors->first('status') }}</span>
                @endif
            </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('task.index') }}" class="btn btn-default">Kembali</a>
        </div>
    </form>
    @endsection
</div>
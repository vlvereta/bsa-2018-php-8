@extends('layouts.layout')

@section('title', 'Add currency')

@section('content')

    <div class="container">
        <h2>Adding new currency to the market</h2>
        <form action="{{ route('currencies') }}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Currency name:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @if ($errors->has('title'))
                    <span class="help-block">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="short_name">Short name:</label>
                <input type="text" class="form-control" id="short_name" name="short_name" value="{{ old('short_name') }}">
                @if ($errors->has('short_name'))
                    <span class="help-block">{{ $errors->first('short_name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="logo_url">Logo URL:</label>
                <input type="text" class="form-control" id="logo_url" name="logo_url" value="{{ old('logo_url') }}">
                @if ($errors->has('logo_url'))
                    <span class="help-block">{{ $errors->first('logo_url') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                @if ($errors->has('price'))
                    <span class="help-block">{{ $errors->first('price') }}</span>
                @endif
            </div>

            <button type="submit">Save</button>
        </form>
    </div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('addChild') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="fname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('fname') }}</label>

                                <div class="col-md-6">
                                    <input id="fname" type="text"
                                        class="form-control @error('fname') is-invalid @enderror" name="fname"
                                        value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="mname"
                                    class="col-md-4 col-form-label text-md-end">{{ __('mname') }}</label>

                                <div class="col-md-6">
                                    <input id="mname" type="text"
                                        class="form-control @error('mname') is-invalid @enderror" name="mname"
                                        value="{{ old('mname') }}" required autocomplete="mname" autofocus>

                                    @error('mname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bornplace"
                                    class="col-md-4 col-form-label text-md-end">{{ __('bornplace') }}</label>

                                <div class="col-md-6">
                                    <input id="bornplace" type="text"
                                        class="form-control @error('bornplace') is-invalid @enderror" name="bornplace"
                                        value="{{ old('bornplace') }}" required autocomplete="bornplace" autofocus>

                                    @error('bornplace')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gener"
                                    class="col-md-4 col-form-label text-md-end">{{ __('gener') }}</label>

                                <div class="col-md-6">
                                    <input id="gener" type="text"
                                        class="form-control @error('gener') is-invalid @enderror" name="gener"
                                        value="{{ old('gener') }}" required autocomplete="gener" autofocus>

                                    @error('gener')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="tex-center row mb-3">
                                <label for="birthday"
                                    class="col-md-4 col-form-label text-md-end">{{ __('BirthDay') }}</label>

                                <div class="col-md-6">
                                    <input id="birthday" type="date" name="birthday">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('ADD') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

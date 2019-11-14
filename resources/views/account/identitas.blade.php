@extends('layouts.main')

@section('sidebar')
    
    @if (Auth::user()->action_id == 2)
        @include('layouts._sidebar._guru')
    @endif

@endsection

@section('content')
<div class="container-fluid">
    @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show row align-items-center" role="alert">
            <strong>Message : </strong> <span class="ml-2">{{ session()->get('message') }}</span>
            <button type="button" class="close mt-2 pt-3" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon">
                        <div class="card-icon bg-primary">
                            PENGATURAN IDENTITAS ANDA
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('account.identitas.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $user->nama ?? '') }}" required autocomplete="off" placeholder="@if(empty($user->nama)){{'anda belum memasukan data' }} @endif">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email ?? '') }}" autocomplete="off" placeholder="@if(empty($user->email)){{'anda belum memasukan data' }} @endif">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="no_telp" class="col-md-4 col-form-label text-md-right">No Telephone*</label>
                                    <div class="col-md-6">
                                        <input type="text" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" value="{{ old('no_telp', $user->no_telp ?? '') }}" autocomplete="off" placeholder="@if(empty($user->no_telp)){{'anda belum memasukan data' }} @endif">
                                        @error('no_telp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4 text-right">
                                        <button class="btn btn-warning">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
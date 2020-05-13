
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Olá {{ Auth::user()->name }}. Em que estás a pensar?</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif



                    <form method="POST" action="publications">
                        @csrf                       

                        <textarea class="form-control" id="message" required name="message" rows="4" cols="50" style="resize: none"> </textarea>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Publicar') }}
                                </button>
                                </form>

                                <a class="btn btn-primary" href="{{ url('list') }}">{{ __('Posts') }}</a>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
    @endsection



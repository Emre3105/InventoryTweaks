@extends('layouts.layoutCategorie')

@section('aOutil')
  <a href="{{ route('outilRetirer') }}">
@endsection

@section('aAccessoire')
  <a href="{{ route('accessoireRetirer') }}">
@endsection

@section('aSac')
  <a href="{{ route('sacRetirer') }}">
@endsection

@section('aAutre')
  <a href="{{ route('autreRetirer') }}">
@endsection
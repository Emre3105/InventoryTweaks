@extends('layouts.layoutCategorie')

@section('aOutil')
  <a href="{{ route('outilRetirer') }}" style="text-decoration: none">
@endsection

@section('aAccessoire')
  <a href="{{ route('accessoireRetirer') }}" style="text-decoration: none">
@endsection

@section('aSac')
  <a href="{{ route('sacRetirer') }}" style="text-decoration: none">
@endsection

@section('aAutre')
  <a href="{{ route('autreRetirer') }}" style="text-decoration: none">
@endsection
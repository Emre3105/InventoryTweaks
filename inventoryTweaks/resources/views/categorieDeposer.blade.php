@extends('layouts.layoutCategorie')

@section('aOutil')
  <a href="{{ route('outilDeposer') }}">
@endsection

@section('aAccessoire')
  <a href="{{ route('accessoireDeposer') }}">
@endsection

@section('aSac')
  <a href="{{ route('sacDeposer') }}">
@endsection

@section('aAutre')
  <a href="{{ route('autreDeposer') }}">
@endsection
@extends('layouts.layoutCategorie')

@section('aOutil')
  <a href="{{ route('outilDeposer') }}" style="text-decoration: none">
@endsection

@section('aAccessoire')
  <a href="{{ route('accessoireDeposer') }}" style="text-decoration: none">
@endsection

@section('aSac')
  <a href="{{ route('sacDeposer') }}" style="text-decoration: none">
@endsection

@section('aAutre')
  <a href="{{ route('autreDeposer') }}" style="text-decoration: none">
@endsection

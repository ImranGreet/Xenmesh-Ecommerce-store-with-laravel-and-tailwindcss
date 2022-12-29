@extends('layouts.super_admin')

@section('superadmin_content')
  <x-authentication.admins_authentication :unAuthor="$unAuthorised"/>
@endsection

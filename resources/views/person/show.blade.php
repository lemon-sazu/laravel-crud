@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Person Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $person->name }}</h5>
        <p class="card-text">Address : {{ $person->address }}</p>
        <p class="card-text">Phone : {{ $person->mobile }}</p>
  </div>

    </hr>

  </div>
</div>

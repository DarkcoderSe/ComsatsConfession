@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Roles Assigment
      </div>
      <div class="card-body">
        <form action="{{route('assign_permissions')}}" method="post">
          @csrf
          @foreach($permissions as $p)
          {{$p->display_name}} <input type="checkbox" name="permissions[]" value="{{$p->id}}">
          @endforeach
          <input type="hidden" name="role_id" value="{{$role_id}}">
          <input type="submit" class="btn btn-success" name="submit">
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

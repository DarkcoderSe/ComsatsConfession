@extends('layouts.app')

@section('content')

<div class="container">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        Roles
      </div>
      <div class="card-body">
        <ul>
          <li><a href="{{URL::to('/admin/posts/edit')}}">Edit</a> </li>
          <li><a href="{{URL::to('/admin/posts/delete')}}">delete</a> </li>
          <li><a href="{{URL::to('/admin/posts/create')}}">create</a> </li>

        </ul>
        <br>
        <form action="{{route('add.role')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Name</label>
              <input type="text" class="form-control" name="role_name">
            </div>
            <div class="form-group col-md-6">
              <label>Display Name</label>
              <input type="text" class="form-control" name="display_name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Description</label>
              <textarea name="description" class="form-control"></textarea>
            </div>
          </div>
          <button type="submit" name="button" class="btn btn-success">Create</button>

        </form>
        <br>
        <table class="table table-default">
          <thead>
            <tr>
              <th>Role name</th>
              <th>Display name</th>
              <th>Description</th>
              <th>link</th>
            </tr>
          </thead>
          <tbody>
            @foreach($roles as $role)
            <tr>
              <td>{{$role->name}}</td>
              <td>{{$role->display_name}}</td>
              <td>{{$role->description}}</td>
              <td><a href="{{URL::to('/admin/role/permissions', $role->id)}}">assign</a> </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        Permissions
      </div>
      <div class="card-body">
        <form action="{{route('add.permission')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Name</label>
              <input type="text" class="form-control" name="permission_name">
            </div>
            <div class="form-group col-md-6">
              <label>Display Name</label>
              <input type="text" class="form-control" name="display_name">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label>Description</label>
              <textarea name="description" class="form-control"></textarea>
            </div>
          </div>
          <button type="submit" name="button" class="btn btn-success">Create</button>

        </form>
        <br>
        <table class="table table-default">
          <thead>
            <tr>
              <th>Permission name</th>
              <th>Display name</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            @foreach($permissions as $p)
            <tr>
              <td>{{$p->name}}</td>
              <td>{{$p->display_name}}</td>
              <td>{{$p->description}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        Users
      </div>
      <div class="card-body">
        <form action="{{route('add.user')}}" method="post">
          @csrf
          <div class="form-row">
            <div class="form-group col-md-4">
              <label>Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group col-md-4">
              <label>email</label>
              <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group col-md-4">
              <label>Password</label>
              <input type="text" class="form-control" name="pass">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <select class="custom-select" name="role_id">
                @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->display_name}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <button type="submit" name="button" class="btn btn-success">Create</button>

        </form>
        <br>
        <table class="table table-default">
          <thead>
            <tr>
              <th>name</th>
              <th>email</th>

              <th>role</th>
              <th>permissions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $p)
            <tr>
              <td>{{$p->name}}</td>
              <td>{{$p->email}}</td>

              <td></td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection

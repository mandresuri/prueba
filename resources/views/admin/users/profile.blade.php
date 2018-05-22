@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Edit profile</div>

                <div class="panel-body">
                    <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="name">New Password</label>
                                <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="name">Upload Avatar</label>
                                <input type="file" name="avatar" class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="name">About</label>
                                <textarea name="about" id="about" cols="5" rows="5" class="form-control">{{ $user->profile->about }}</textarea>
                        </div>
                        <div class="form-group">
                              <div class="text-center">
                                    <button class="btn btn-success" type="submit">
                                          Update profile
                                    </button>
                              </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
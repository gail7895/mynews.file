@extends('layouts.profile')
@section('title','プロフィール')
@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))="row">
          <div class="headline col-md-10 mx-auto">
              <div class="row">
                  <div class="col-md-6">
                      <div class="caption mx-auto">
                          <thead>
                              <tr>
                                  <th width="10%>ID</th>
                                  <th width="10%">名前</th>
                                  <th width="10%">性別</th>
                                  <th width="30%">趣味</th>
                                  <th width="30%">自己紹介</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($posts as $profile)
                              <tr>
                                  <th>{{ $profile->id }}</th>
                                  <td>{{ $\Str::limit($profile->name, 10) }}</td>
                                  <td>{{ $\Str::limit($profile->body, 10 }}</td>
                                  <td>{{ $\Str::limit($profile->hobby, 50) }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                  </div>
            </div>
       </div>
    @endsection>
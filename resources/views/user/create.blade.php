@extends('layouts.backend')
@section('content')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2 text-center" style="color:#4169E1; text-align: center;">
                Liste des administrateurs
            </h1>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content-wrapper">

    <!-- Full Table -->
    <div class="content-header">

        <div class="block-content">

            <div class="table-responsive">
                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="row" style="width: 100% ">
                <table id="" class="table table-bordered table-hover" >
                    <thead style="color:black">
                        <tr>

                            <th>Name</th>
                             <th style="width: 30%;">Admin</th>
                            <th style="width: 30%;">Email</th>
                            
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                    </thead>
                    @foreach($user as $users)
                    <tbody>
                        <tr >

                            <td >
                                {{ $users->name }}
                            </td>
                             <td >
                                {{ $users->is_admin }}
                            </td>
                            <td >
                            {{ $users->email }}
                            </td>
                            
                            <td class="text-center">
                                <a href="{{ route('edit.user',$users->id) }}" class="btn btn-primary" data-bs-toggle="modal" >
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg>
                    </a>

                     <form action="{{route('update.user',$users->id) }} " method="post">
                              @csrf
                              @method('DELETE')
                              
                              <button type="submit" class="btn btn-danger" onclick="if(!confirm('Voulez-vous vraiment le supprimer ?')) return false; "><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></button>
                            </form>
                            </td>

                        </tr>
                    </tbody>
                    @endforeach
                    </div>
                </table>
            </div>
        </div>
    </div>
    <!-- END Full Table -->
    @endsection

@extends('admin.index')
@section('content')
@hasrole('superadmin|manager')
       @if($receptionist)
            <fieldset>
                <legend style="background-color: gray">receptionist Info </legend>
                <img src="{{Storage::url('/uploads/'.$receptionist->avatar)}}" alt="Post-Image" height="300px" width="300px">
                <p>Name : {{ $receptionist->name }}</p>
                <p>Email:{{ $receptionist->email }}</p>
                <p>National Id:{{ $receptionist->national_id }}</p>        
                
               <hr> 
            </fieldset>
            
       @endif
       @else   
       <h1 style="color:red">Your are not have permission</h1>
    @endhasrole
    
@endsection

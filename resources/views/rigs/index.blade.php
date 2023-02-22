@extends('layout')

@section('content')

@forelse ($rigs as $rig)
<div>
    {{ $rig->id }}
    <br>
    {{ $rig->rig_name }}
    <br>
    {{ $rig->rig_serial }}
    <br>
    {{ $rig->rig_type }}
    <br>
    {{ $rig->created_at->format('d-m-Y') }}
</div>

@empty
    
@endforelse

@endsection
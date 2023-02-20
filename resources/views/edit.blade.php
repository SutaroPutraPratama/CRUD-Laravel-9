@extends('coba')
@section('body')
<form action="/update/{{$daftar['id']}}" method="POST">
    @csrf
    <label for="">nama</label>
    <input type="text" name="nama">
    <label for="">nama ayah</label>
    <input type="text" name="nama_ayah">
    <label for="">nama ibu</label>
    <input type="text" name="nama_ibu">
    <button type="submit">submit</button>
    </form>
@endsection
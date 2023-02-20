@extends('coba')
@section('body')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nama Ayah</th>
        <th scope="col">Nama Ibu</th>
        <th scope="col">Action</th>
      </tr>
      @php
        $no = 1;  
      @endphp
    </thead>
    <tbody>
        @foreach ($daftars as $df)
        <tr>
          <th scope="row">{{$no++}}</th>
          <td>{{$df['nama']}}</td>
          <td>{{$df['nama_ayah']}}</td>
          <td>{{$df['nama_ibu']}}</td>
          <td>
            <a href="/edit/{{$df['id']}}" style="align-items: center " class="btn btn-success">Edit</a> 
            <form action="/destroy/{{$df['id']}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" style="" class="btn btn-success">Hapus</button>
            </form>
          </td>
        </tr>    
        @endforeach
    </tbody>
  </table>
@endsection
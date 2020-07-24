@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-md-11">
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary btn-large">submit</button>
                </div>
            </div>
        </form>
        <table class="table mt-5">
            <thead class="thead-dark">
                <tr>
                <th scope="col">no</th>
                <th scope="col">nama</th>
                <th scope="col">jenis</th>
                <th scope="col">berat</th>
                <th scope="col">harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $id = 1 ?>
                @foreach($barang as $br)
                    <tr>
                        <th scope="row">{{$id++}}</th>
                        <td>{{$br->nama_barang}}</td>
                        <td>{{$br->jenis}}</td>
                        <td>{{$br->berat}}</td>
                        <td>{{$br->harga}}</td>
                    </tr>
                @endforeach
                <tr>
            </tbody>
        </table>
    </div>

@endsection
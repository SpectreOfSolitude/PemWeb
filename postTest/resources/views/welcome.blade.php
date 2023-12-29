@extends('layouts.app')

@section('content')
   <h1> DOTA 2 HERO PICKER </h1> 
   <p>Aturkan hero yang ingin ditambahkan</p>
   <form action="{{ route('crud.create') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nama Hero</label>
            <input type="text" class="form-control" id="title" name="hero_name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Attribute Hero</label>
            <input class="form-control" id="description" name="hero_attribute" rows="3" required></input>
        </div>
        <button type="submit" class="btn btn-primary">Tambah Hero</button>
    </form>
    <table class="table mt-3">
        <h1>HERO YANG SUDAH TERDAFTAR</h1>
        <thead>
            <tr>
                <th>Nama Hero</th>
                <th>Attribute</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $datum)
                <tr>
                    <td>{{ $datum->hero_name }}</td>
                    <td>{{ $datum->hero_attribute }}</td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <form action="" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
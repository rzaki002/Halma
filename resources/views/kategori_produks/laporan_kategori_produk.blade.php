@extends('auth.admin.app')
@section('content')

  <form action="" method="POST">
    @csrf
    <input type="date" name="tanggal_mulai" required>
    <input type="date" name="tanggal_selesai" required>

    <button type="submit"> Cetak laporan</button>
  </form>

@endsection

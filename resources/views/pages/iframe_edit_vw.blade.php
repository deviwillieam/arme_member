@extends('../layout/' . $layout)
    
   @section('subhead')
       <title>Tambah Data</title>
   @endsection
    
@section('subcontent')


<div class="container">
  <h2 class="text-center">Student Management | Add</h2>
  <br>


  <form action="{{route('tambah_iframe')}}" method="post">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">iFrame Daftar Pemilih</label>
    <input type="text" class="form-control" placeholder="code" name="daftar_pemilih">
    <label>iFrame Penerima Bantuan</label>
    <input type="text" class="form-control" placeholder="code" name="penerima_bantuaan">
    <label>iFrame Maklumat Pribadi</label>
    <input type="text" class="form-control" placeholder="code" name="maklumat_pribadi">
    <label>iFrame Pusat Daerah</label>
    <input type="text" class="form-control" placeholder="code" name="pusat_daerah"><br><br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>
@foreach ($users as $user)
<!-- <td>{{ $user->daftar_pemilih }}</td> -->
@endforeach


<iframe title="KAJIAN_KECENDERUNGAN_SELANGOR_AMANAH_SHAH_ALAM - KAJIAN" width="600" height="373.5" src="{{ $user->daftar_pemilih }}" frameborder="0" allowFullScreen="true"></iframe>
@endsection
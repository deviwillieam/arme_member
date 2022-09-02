@extends('../layout/' . $layout)
    
   @section('subhead')
       <title>Tambah Data</title>
   @endsection
    
   @section('subcontent')
   <!-- 
   9  <style>.embed-container {
  10 position: relative;
  11 padding-bottom: 70.75%;
  12 height: 0;
  13 overflow: hidden;
  14 }
  15 .embed-container iframe {
  16 position: absolute;
  17 top:0;
  18 left: 0;
  19 width: 100%;
  20 height: 100%;
  21 }</style>
  22 
  23 <script>
  24    setTimeout(function () {
  25    var iframe = document.getElementById('yourIFrameId');
  26    var url = iframe.src;
  27    iframe.src = url;
  28 }, 60 * 1000);
  29 </script>
  30  <div class="embed-container">
  31 <iframe src="https://app.powerbi.com/view?r=eyJrIjoiM2M1NmMyOTQtOGE1ZS00MjE4LWEwNzUtN2MyZWE4NWFiZjcwIiwidCI6IjBlMGRiMmFkLWM0MTYtNDdjNy04OGVjLWNlYWM0ZWU3Njc2NyIsImMiOjEwfQ%3D%3D" frameborder="0" allowfullscreen="" webkitallowfullscreen="true" mozallowfullscreen="true" oallowfullscreen="true" msallowfullscreen="true"></iframe>
  32 </div> -->

  <!-- The text field -->
  <script>
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("form link telah di copy");
}
    </script>

<style>
  .d-none{
    display: none;
  }
  .d-none2{
    display: none;
  }
</style>

<script>
  function checkAnswer(x){
    console.log(x.value);{
      if (x.value=="Tidak Menyokong")
      document.getElementById('code').classList.remove('d-none');
      else{
      document.getElementById('code').classList.add('d-none');
      }
      if (x.value=="Menyokong Parti Bersatu")
      document.getElementById('code2').classList.remove('d-none2');
      else{
      document.getElementById('code2').classList.add('d-none2');
      }
     
    }
  }
</script>


  <marquee direction="right" 
          behavior="alternate" 
        style="border:Red 1px SOLID">
       ⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚<b> Data will be update automatically on <i>12:00 PM</i>, If data not update please click refresh in Power BI Dashboard </b>⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚
   </marquee>

   <input type="text" value="https://forms.gle/RW8aDKkRHhJTE97b8" id="myInput">

<!-- The button used to copy the text -->
<button id="btn-login" class="btn btn-danger py-3 "  onclick="myFunction()">Copy form link</button>

    <br>
    <br>
    <!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdfRG3KN1TwwhHthBei7PAX5DgLIg9nHUXuXOyio5T8YPt0sw/viewform?embedded=true" width="100%" height="1818" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
  

      
      <div class="container" style="
    padding-left: 250px;
    padding-right: 250px;
">
    <div class="row">
        <div class="col-md-4 col-md-offset-6">
        <!-- BEGIN: Balloon Block Editor -->
        <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Form</h2>
                </div>
                <div id="input" class="p-5">
                                    
                                        <div>
                                            <label for="regular-form-1" class="form-label">Nama Penuh</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div><br>
                                        <div>
                                            <label for="regular-form-1" class="form-label">No Kad Pengenalan</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div><br>
                                        <div>
                                            <label for="regular-form-1" class="form-label">No Handphone</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div><br>
                                        <div>
                                            <label for="regular-form-1" class="form-label">Alamat</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div><br>
                                        <div>
                                            <label for="regular-form-1" class="form-label">DUN</label>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                              <option>A</option>
                                              <option>B</option>
                                              <option>C</option>
                                              <option>D</option>
                                              <option>E</option>
                                              <option>F</option>
                                            </select>
                                        </div><br>
                                        <div>
                                            <label for="regular-form-1" class="form-label">Pusat Daerah Mengundi</label>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                              <option>PDM1 </option>
                                              <option>PDM2 </option>
                                              <option>PDM3 </option>
                                            </select>
                                        </div><br>
                                        <div>
                                            <label for="regular-form-1" class="form-label">Culaan</label>
                                            <select class="form-select mt-2 sm:mr-2" aria-label="Default select example">
                                              <option>Candidate A </option>
                                              <option>Candidate B</option>
                                              <option>Candidate C</option>
                                              <option>Candidate D</option>
                                              <option>Tidak Tahu</option>
                                            </select>
                                        </div><br>
                                        <div>
                                            <label for="regular-form-1" class="form-label">Sokongan</label>
                                            <select id="sokongan" class="form-select mt-2 sm:mr-2" aria-label="Default select example" onchange="checkAnswer(this)">
                                              <option value="">Pilih</option>
                                              <option value="Menyokong Parti Bersatu">Menyokong Parti Bersatu</option>
                                              <option value="Tidak Menyokong">Tidak Menyokong</option>
                                            </select>
                                        </div><br>
                                        <div id="code" class="d-none">
                                            <label for="regular-form-1" class="form-label">Alasan tidak menyokong Parti Bersatu</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div><br>
                                        <div id="code2" class="d-none2">
                                            <label for="regular-form-1" class="form-label">Harapan untuk kemajuan bangsa dan negara melaui Parti Bersatu</label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
                                        </div><br>
                                        <button class="btn btn-primary mt-5">Submit</button>
                                    
                                
        <!-- END: Balloon Block Editor -->
    </div>
    </div>
                                    
                                
  
  
  
  
      @endsection
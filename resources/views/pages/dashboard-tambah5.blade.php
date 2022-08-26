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
  alert("Copied the text: " + copyText.value);
}
    </script>
<input type="text" value="https://forms.gle/RW8aDKkRHhJTE97b8" id="myInput">

<!-- The button used to copy the text -->
<button id="btn-login" class="btn btn-danger py-3 "  onclick="myFunction()">Copy form link</button>


  <marquee direction="right" 
          behavior="alternate" 
        style="border:Red 1px SOLID">
       ⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚<b> Data will be update automatically on <i>12:00 PM</i>, If data not update please click refresh in Power BI Dashboard </b>⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚
   </marquee>
     <br>
         <br>
         <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdfRG3KN1TwwhHthBei7PAX5DgLIg9nHUXuXOyio5T8YPt0sw/viewform?embedded=true" width="100%" height="1818" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
  @endsection
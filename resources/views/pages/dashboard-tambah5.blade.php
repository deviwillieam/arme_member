@extends('../layout/' . $layout)
   2 
   3 @section('subhead')
   4     <title>Tambah Data</title>
   5 @endsection
   6 
   7 @section('subcontent')
   8 <!-- 
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
<input type="text" value="https://docs.google.com/forms/d/e/1FAIpQLSdfRG3KN1TwwhHthBei7PAX5DgLIg9nHUXuXOyio5T8YPt0sw/viewform?embedded=true" id="myInput">

<!-- The button used to copy the text -->
<button onclick="myFunction()">Copy form link</button>


  33 <marquee direction="right" 
  34         behavior="alternate" 
  35         style="border:Red 1px SOLID">
  36         ⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚<b> Data will be update automatically on <i>12:00 PM</i>, If data not update please click refresh in Power BI Dashboard </b>⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚
  37     </marquee>
  38 
  39     <br>
  40     <br>
  41 <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdfRG3KN1TwwhHthBei7PAX5DgLIg9nHUXuXOyio5T8YPt0sw/viewform?embedded=true" width="100%" height="1818" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
  42 
  43 
  44 @endsection
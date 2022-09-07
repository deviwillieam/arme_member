<!-- The text field -->
<script>
  function myFunction2() {
    /* Get the text field */
    var copyText = document.getElementById("myInput2");

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
  .d-none {
    display: none;
  }

  .d-none2 {
    display: none;
  }
</style>






<marquee direction="right" behavior="alternate" style="border:Red 1px SOLID">
  ⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚<b> Data will be update automatically on <i>12:00 PM</i>, If data not update please click refresh in Power BI Dashboard </b>⋆·˚ ༘ *ೃ⁀➷✧.*ੈ✩‧₊˚˚
</marquee>

<input type="text" value="https://docs.google.com/forms/d/e/1FAIpQLSew95ByooknrRaCwVD5IUDJIhLwSJpSUUx8acciPqAGAGK0WQ/viewform" id="myInput2">

<!-- The button used to copy the text -->
<button id="btn-login" class="btn btn-danger py-3 " onclick="myFunction2()">Copy form link</button>
<button id="btn-login" class="btn btn-danger py-3 " onclick=" window.open('https://docs.google.com/spreadsheets/d/1pwykjmaEBEKK_wDvNNIKQWxw7kxx1bNde3e0P0bSu80/edit?usp=sharing', '_blank'); return false;">Lihat Raw Data</button>

<br></br>
<br></br>
<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSew95ByooknrRaCwVD5IUDJIhLwSJpSUUx8acciPqAGAGK0WQ/viewform?embedded=true" width="100%" height="1818" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>


</script>
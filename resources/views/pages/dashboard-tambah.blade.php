@extends('../layout/' . $layout)

@section('subhead')
    <title>Willieam</title>
@endsection

@section('subcontent')
<!-- <div class="field field-name-body field-type-text-with-summary field-label-hidden">
      <div class="field-items">
         <div class="field-item even" property="content:encoded"><iframe src="https://app.powerbi.com/view?r=eyJrIjoiYTU5ZGFjNDAtNmIwNS00ZmRkLTg0NTYtYTJhMzRkOWM4MWFlIiwidCI6IjBlMGRiMmFkLWM0MTYtNDdjNy04OGVjLWNlYWM0ZWU3Njc2NyIsImMiOjEwfQ%3D%3D&pageName=ReportSectionb94a61918628c16bb808" frameborder="0" allowfullscreen="true" width="100%" height="890"></iframe></div>
      </div>
   </div>
   </div>
 -->
 <style>.embed-container {
position: relative;
padding-bottom: 70.75%;
height: 0;
overflow: hidden;
}
.embed-container iframe {
position: absolute;
top:0;
left: 0;
width: 100%;
height: 100%;
}</style>

<script>
   setTimeout(function () {
   var iframe = document.getElementById('yourIFrameId');
   var url = iframe.src;
   iframe.src = url;
}, 60 * 1000);
</script>
 <div class="embed-container">
<iframe src="https://app.powerbi.com/view?r=eyJrIjoiY2MyYmZiMDItYmE1Yi00ZmIxLThmMGUtNDIyYmJjNjE0Y2Y1IiwidCI6IjBlMGRiMmFkLWM0MTYtNDdjNy04OGVjLWNlYWM0ZWU3Njc2NyIsImMiOjEwfQ%3D%3D&pageName=ReportSection" frameborder="0" allowfullscreen="" webkitallowfullscreen="true" mozallowfullscreen="true" oallowfullscreen="true" msallowfullscreen="true"></iframe>
</div>
<!-- <div class="embed-container">
<iframe src="https://app.powerbi.com/MobileRedirect.html?reportObjectId=4b5435da-c227-4ce3-8c89-1197fa91e060&action=OpenReport&reportPage=ReportSection&bookmarkGuid=c1e2545e-b031-4229-9e56-17aeae718cca&Context=share-report&ctid=0e0db2ad-c416-47c7-88ec-ceac4ee76767&pbi_source=mobile_ios" frameborder="0" allowfullscreen="" webkitallowfullscreen="true" mozallowfullscreen="true" oallowfullscreen="true" msallowfullscreen="true"></iframe>
</div>
<iframe src="https://app.powerbi.com/MobileRedirect.html?reportObjectId=4b5435da-c227-4ce3-8c89-1197fa91e060&action=OpenReport&reportPage=ReportSection&bookmarkGuid=c1e2545e-b031-4229-9e56-17aeae718cca&Context=share-report&ctid=0e0db2ad-c416-47c7-88ec-ceac4ee76767&pbi_source=mobile_ios"> </iframe> -->

@endsection

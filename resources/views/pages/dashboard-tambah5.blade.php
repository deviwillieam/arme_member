@extends('../layout/' . $layout)
    
   @section('subhead')
       <title>Tambah Data</title>
   @endsection
    
@section('subcontent')

                                    
<ul class="nav nav-boxed-tabs" role="tablist">
                                            <li id="example-3-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2 active"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-3"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-3"
                                                    aria-selected="true"
                                                >
                                                    Form Data Pengundi
                                                </button>
                                            </li>
                                            <li id="example-4-tab" class="nav-item flex-1" role="presentation">
                                                <button
                                                    class="nav-link w-full py-2"
                                                    data-tw-toggle="pill"
                                                    data-tw-target="#example-tab-4"
                                                    type="button"
                                                    role="tab"
                                                    aria-controls="example-tab-4"
                                                    aria-selected="false"
                                                >
                                                    Form Bantuan
                                                </button>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-5">
                                            <div id="example-tab-3" class="tab-pane leading-relaxed active" role="tabpanel" aria-labelledby="example-3-tab">
                                            @include('pages.dashboard_form_pengundi')
                                           </div>
                                            <div id="example-tab-4" class="tab-pane leading-relaxed" role="tabpanel" aria-labelledby="example-4-tab">
                                            Page2  
                                          </div>
                                        </div>
                                    
                                
  
  @endsection
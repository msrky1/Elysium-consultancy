<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title">Genel Bakış</h1>

                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            <h3 class="mb-3">Hoş Geldiniz

                            </h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">

                                    <div>Elysium Danışmanlık</div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">
                                    <a class="btn app-btn-primary" href="/"><svg width="1em" height="1em"
                                            viewBox="0 0 16 16" class="bi bi-file-earmark-arrow-down mr-2"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">


                                        </svg>Web Sitesini Ziyaret Et</a>
                                </div>
                                <!--//col-->
                            </div>
                            <!--//row-->
                            <button type="button" class="btn-close" data-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        <!--//app-card-body-->

                    </div>
                    <!--//inner-->
                </div>
                <!--//app-card-->

                <div class="row g-4 mb-4">
                    
                    <!--//col-->

                    <div class="col-6 col-lg-3">
                        
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    
                    <!--//col-->
                    
                    <!--//col-->
                </div>
                <!--//row-->
   
  

                <div class="row g-4 mb-4">
                    @foreach ($visit as $item)
                  
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                      <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                          <h4 class="stats-type mb-1">{{$item->name}} </h4>
                          <div>{{$item->views}}  Görüntüleme</div>
                       
                         
                        </div>
                        <!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                      </div>
                      <!--//app-card-->
                    </div>
                    <!--//col-->
                          
                    @endforeach

                    
                    <!--//col-->
                  </div>
                

                <div class="row g-4 mb-4">
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                <path fill-rule="evenodd"
                                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Duyurular</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Buradan Duyurulara Ulaşabilirsiniz</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{route('admin.whatdo')}}">Yeni DUyuru Oluştur</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                <path fill-rule="evenodd"
                                                    d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Uygulamalar</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Henüz Uygulamanız Bulunmamaktadır.</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="#">Yeni</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-code-square"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                <path fill-rule="evenodd"
                                                    d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Haberler</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Haberlere Ulaşın</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{route('admin.blog')}}">Yeni</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-4">
                        <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                            <div class="app-card-header p-3 border-bottom-0">
                                <div class="row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div class="app-icon-holder">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tools"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" />
                                            </svg>
                                        </div>
                                        <!--//icon-holder-->

                                    </div>
                                    <!--//col-->
                                    <div class="col-auto">
                                        <h4 class="app-card-title">Ayarlar</h4>
                                    </div>
                                    <!--//col-->
                                </div>
                                <!--//row-->
                            </div>
                            <!--//app-card-header-->
                            <div class="app-card-body px-4">

                                <div class="intro">Web Sayfanızdaki Genel Ayarları Buradan Yapabilirsiniz</div>
                            </div>
                            <!--//app-card-body-->
                            <div class="app-card-footer p-4 mt-auto">
                                <a class="btn app-btn-secondary" href="{{ route('admin.setting') }}">Ayarlar</a>
                            </div>
                            <!--//app-card-footer-->
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    
                </div>
                <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
</main>

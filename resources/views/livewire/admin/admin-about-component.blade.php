<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Hakkımızda</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Hakkımızda</h3>
                        <div class="section-intro">Hakkımızda Bölümünü Buradan Düzenleyebilirsiniz<a href="{{ route('admin.help') }}"><br>
                                Daha
                                Fazla Öğren</a></div>
                    </div>
                 
                    <div class="col-12 col-md-8">
                        @foreach ($abouts as $e) <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <form class="settings-form">
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Başlık 1</label>
                              
                               
                                            <div>
                                                <label> {{ $e->title }}</label>

                                            </div>
                                         
                                            <div class="mb-3">
                                                <label for="setting-input-3" class="form-label">İçerik</label>:
                                                <br>
                                                <label> {!! $e->description !!}</label>
                                            </div>
                                            
                                        
                                      <a href="{{ route('admin.about.edit', ['about_id' => $e->id ]) }}"><input type="button" class="btn app-btn-primary" value="Düzenle"></a> 
                            
                                        
                                        </form>
                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                        @endforeach
                    </div>
                 
                </div>
            
                <!--//row-->


                <hr class="my-4">
               
                <!--//row-->
            
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
</main>

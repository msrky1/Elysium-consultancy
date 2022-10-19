<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Kullanıcı Ekle</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Kullanıcı Ekle</h3>
                        <div class="section-intro">Kullanıcı eklemek için Boş Alanı Dolduurun<a href="{{ route('admin.help') }}"><br>
                                Daha
                                Fazla Öğren</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                        href="{{ route('admin.user') }}"> Kullanıcıları Görüntüle</a>
                                </div>
                            @endif
                            <div class="app-card-body">
                                <form wire:submit.prevent="updateUser()">
                                    @csrf
                                    <div class="mb-3">
                                     
                                  
                                        <label for="setting-input-2" class="form-label">Kullanıcı Adı </label>:
                                        <input type="text" name="name" class="form-control" wire:model ="name"
                                            required>
                                     

                                    </div>
                                    <div class="mb-3">
                                     
                                  
                                        <label for="setting-input-2" class="form-label">Kullanıcı Email </label>:
                                        <input type="text" name="email" class="form-control" wire:model ="email"   required>
                                     

                                    </div>
                                    <div class="mb-3">
                                     
                                  
                                        <label for="setting-input-2" class="form-label">Kullanıcı Şifresi </label>:
                                        <input type="password" name="password" class="form-control" wire:model ="password"   required>
                                     

                                    </div>
                                
                         
                                   

                                    <button class="btn app-btn-primary" type="submit">
                                       Kullanıcı Düzenle
                                    </button>
                                </form>


                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>


                <!--//row-->


                <hr class="my-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Web Sitesi Plan</h3>
                        <div class="section-intro">Web Sitesi Pro <a href="{{ route('admin.help') }}">Web Sitesi Pro
                                Panel</a></div>
                        <div class="section-intro">Geliştirici Mahmut Sarıkaya
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">

                            <div class="app-card-body">
                                <div class="mb-2"><strong>Web Sitesi</strong> Pro</div>
                                <div class="mb-2"><strong>Statüsü:</strong> <span
                                        class="badge bg-success">Aktif</span></div>
                                <div class="mb-2"><strong>Bitiş:</strong> 2030-09-24</div>
                                <div class="mb-4"><strong>Faturalar:</strong> <a href="#">Görüntüle</a></div>
                                <div class="row justify-content-between">
                                    <div class="col-auto">
                                        <a class="btn app-btn-primary" href="#">Full Sürüm --version 1.00</a>
                                    </div>

                                </div>

                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>
                <!--//row-->
               
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
</main>

<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Ayarlar</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Genel</h3>
                        <div class="section-intro">Web Sitesi Genel Ayarlar<a href="{{ route('admin.help') }}"><br> Daha
                                Fazla Öğren</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if (Session::has('message'))
                            <div class="alert alert-success">
                                <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                    href="{{ route('admin.setting') }}"> Ayarlara Dön</a>
                            </div>
              

                            @endif
                            <div class="app-card-body">
                                <form wire:submit.prevent = "updateSetting()" >
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Firma Adı <span
                                                class="ml-2" data-container="body" data-toggle="popover"
                                                data-trigger="hover" data-placement="top"
                                                data-content="Web Sitesi Adını Değiştirirken Dikkatli Olun. Değişimlerinizin SEO'ya etkisi olacaktır."><svg
                                                    width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-info-circle" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                                    <circle cx="8" cy="4.5" r="1" />
                                                </svg></span></label>

                                          


        
           @csrf
                
                                    <input type="text" name="name" class="form-control" 
                                                wire:model = "name" required>
                                                <div> @error('name'){{ $message }}@enderror </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">İletişim </label>:
                                        <input type="text" name="contact" class="form-control" id="setting-input-2" 
                                            wire:model="contact" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Mail Adresi</label>:
                                        <input type="email" name="email" class="form-control" id="setting-input-3"
                                            wire:model="email" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">WhatsApp Numarası</label>:
                                        <input type="number" name="whatsapp" class="form-control" id="setting-input-3"
                                            wire:model="whatsapp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Adres</label>
                                        <input type="address" name="address" class="form-control" id="setting-input-3"
                                            wire:model="address" >
                                    </div>
                                    <div class="mb-3">
                                       
                                        <input type="file" name="image" wire:model="newimage" />
                                    </div>
									<div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Logo</label><br>
                                        @if ($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120">

                           
                                            
                                        @else

                                        <img src="{{asset('storage/image')}}/{{$image}}" width="120">   

                             
                                    @endif
                                    
									</div>


                                    <button class="btn btn-success"  type="submit">
                                        Güncelle
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
                <hr class="my-4">

                <hr class="my-4">

                <hr class="my-4">
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
</main>

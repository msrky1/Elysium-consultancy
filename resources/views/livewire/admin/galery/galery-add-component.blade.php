<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="position-relative mb-3">
                    <div class="row g-3 justify-content-between">
                        <div class="col-auto">
                            <h1 class="app-page-title mb-0">Galeri</h1>
                        </div>

                    </div>
                </div>




                <div class="app-card app-card-notification shadow-sm mb-4">
                    <div class="app-card-header px-4 py-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-12 col-lg-auto text-center text-lg-left">
                                <img class="profile-image"
                                    src="{{asset('admin')}}/assets/images/user.png" alt="">
                            </div>
                            <!--//col-->
                            <div class="col-12 col-lg-auto text-center text-lg-left">
                                <div class="notification-type mb-2"><span class="badge bg-success">Galeri</span></div>
                                <h4 class="notification-title mb-1">Kendine Özgün Galerini Oluştur</h4>


                                <form wire:submit.prevent="save">
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Galeri Seçiniz</label>:
                                        <select class="form-select" aria-label="Default select example"
                                            wire:model="image_id" required >
                                            <option selected>Galeri</option>
                                            @foreach ($image as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                  

                                    <input type="file" wire:model="images" required multiple>

                                    @error('images.*')
                                        <span class="error">{{ $message }}</span>
                                    @enderror <br><br>

                            
                                    <button class="btn app-btn-primary" type="submit">Görselleri Kaydet</button> <br> <br>
                                  
        
                                </form>
                            </div>
                          
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                        href="{{ route('admin.galery') }}"> Galeriyi Görüntüle</a>
                                </div>
                            @endif

                         
                            <div wire:loading wire:target="images">Yükleniyor <img src="{{asset('admin/assets')}}/loading.gif" width="100" ></div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//app-card-header-->

                    <!--//app-card-body-->

                    <!--//app-card-footer-->
                </div>
                <!--//app-card-->



                <!-- Gallery -->

                <!-- Gallery -->

                <div class="text-center mt-4"><a class="btn app-btn-secondary" href="#">Web Sitesinde Görüntüle</a>
                </div>

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->
</main>

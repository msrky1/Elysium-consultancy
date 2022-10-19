<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Galeri Oluştur </h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Galeri Ekle</h3>
                        <div class="section-intro">Galeri eklemek için Boş Alanı Dolduurun<a href="{{ route('admin.help') }}"><br>
                                Daha
                                Fazla Öğren</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                        href="{{ route('admin.galery') }}"> Galeri Görüntüle</a>
                                </div>
                            @endif
                            <div class="app-card-body">
                                <form wire:submit.prevent="updateCategory()">
                                    <div class="mb-3">
                                     
                                        @csrf
                                        <label for="setting-input-2" class="form-label">Başlık </label>:
                                        <input type="text" name="name" class="form-control" wire:model="name"
                                            required>
                                        <div> @error('title')
                                                {{ $message }}
                                            @enderror </div>

                                    </div>
                                    <div class="mb-3">
                                     
                                     
                                        <label for="setting-input-2" class="form-label"> Uzantı </label>:
                                        <input type="text"  class="form-control" wire:model="slug"  wire:keyup="generateSlug"
                                            required>
                                        <div> @error('title')
                                                {{ $message }}  
                                            @enderror </div>

                                    </div>
                                    <div class="mb-3">
                                        <input type="file" name="image" wire:model="newimage" />
                                    </div>
                                    <div class="mb-3">

                                        @if ($newimage)
                                            <img src="{{ $newimage->temporaryUrl() }}" width="250">
                                        @else
                                            <img src="{{ asset('storage/galery/kapak') }}/{{ $image }}" width="250">
                                        @endif
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Kategoriler</label>:
                                        <select class="form-select" aria-label="Default select example"
                                            wire:model="category_id">
                                          
                                            @foreach ($category as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                   

                                    <button class="btn app-btn-primary" type="submit">
                                        Kaydet
                                    </button>
                                </form>


                            </div>
                            <!--//app-card-body-->

                        </div>
                        <!--//app-card-->
                    </div>
                </div>


                <!--//row-->

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
                                            <img class="profile-image" src="{{asset('admin')}}/assets/images/user.png" alt="">
                                        </div>
                                        <!--//col-->
                                        <div class="col-12 col-lg-auto text-center text-lg-left">
                                            <div class="notification-type mb-2"><span class="badge bg-success">Galeri</span></div>
                                            <h4 class="notification-title mb-1">Galerini Oluştur</h4>
            
            
            
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
            
                                <!--//app-card-body-->
                                <div class="app-card-footer px-4 py-3">
                                    <a class="action-link" href="{{ route('admin.galery.add') }}">Galeriye Ekle<svg width="1em"
                                            height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ml-2" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg></a>
                                </div>
                                <!--//app-card-footer-->
            
                            </div>
                            <!--//app-card-->
            
            
            
                            <!-- Gallery -->
                          <div class="row">
            
                                @foreach ($galery->getImage ?? [] as $item)
                                    <div class="col-lg-4 ">
            
                                        <div class="col-lg-3 col-md-4 col-xl-6 thumb">
                                            <a href="{{ asset('storage/galery') }}/{{ $item->image }}" class="fancybox"
                                                rel="ligthbox">
                                                <img src="{{ asset('storage/galery') }}/{{ $item->image }}"
                                                    class="zoom img-fluid " alt="">
            
                                            </a>
                                            <a href="#" wire:click.prevent="deleteGalery({{ $item->id }})"> <span
                                                    class="badge bg-danger">Sil </span> </a>
            
                                        </div>
                                    </div>
                                @endforeach
            
            
            
            
                            </div>
                            <!-- Gallery -->
            
                            <div class="text-center mt-4"><a class="btn app-btn-secondary" href="/galeri">Web Sitesinde Görüntüle</a>
                            </div>
            
                        </div>
                        <!--//container-fluid-->
                    </div>
                    <!--//app-content-->
            </main>
            <script>
                $(document).ready(function() {
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });
            
                    $(".zoom").hover(function() {
            
                        $(this).addClass('transition');
                    }, function() {
            
                        $(this).removeClass('transition');
                    });
                });
            </script>
            <style>
            
               
            img.zoom {
              
                border-radius:5px;
                object-fit:cover;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                -ms-transition: all .3s ease-in-out;
            }
                    
             
            .transition {
                -webkit-transform: scale(1.2); 
                -moz-transform: scale(1.2);
                -o-transform: scale(1.2);
                transform: scale(1.2);
            }
                .modal-header {
               
                 border-bottom: none;
            }
                .modal-title {
                    color:#000;
                }
                .modal-footer{
                  display:none;  
                }
            
            
            
                img.zoom:hover {
            
            width: 1000px;
            
            border-radius: 30px;
            transition: 10000ms;
            transform: rotate(360 , 30 , 30 );
            }
            
            
            
                </style>
            


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
        
   

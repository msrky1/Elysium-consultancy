<main>

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Galeri Kategorisi</h1>
                    </div>

                </div>
                <!--//row-->


                <div class="col-auto">
                    <a class="btn app-btn-primary" href="{{ route('admin.galery.cagetory.add') }}">

                      Yeni Kategori Ekle
                    </a>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        <strong>{{ Session::get('message') }}</strong>
                    </div>
                @endif
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Kategori Adı</th>
                                                <th class="cell">Uzantısı</th>
                                                <th class="cell">İşlemler</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $b)
                                                <tr>
                                                    <td class="cell">{{ $b->name }}</td>
                                                   

                                                
                                             
                                                    <td class="cell">{{ $b->slug }}</td>
                                                
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="{{ route('admin.galery.cagetory.edit', ['category_id' => $b->id]) }}">Düzenle

                                                        </a>
                                                     {{--    <a href="#" class="btn-sm app-btn-success"
                                                            wire:click.prevent="deleteBlog({{ $b->id }})">
                                                            Sil </a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->

                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->


                    </div>
                    <!--//tab-pane-->




                </div>
                <!--//tab-pane-->
            </div>
            <!--//tab-content-->



        </div>
        <!--//container-fluid-->
    </div>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                     
                    </div>

                </div>
                <!--//row-->


                <div class="col-auto">
                    <a class="btn app-btn-primary" href="{{ route('admin.galery.image.add') }}">

                      Yeni Galeri Oluştur
                    </a>
                </div>
                @if (Session::has('message'))
                    <div class="alert alert-success">
                        <strong>{{ Session::get('message-2') }}</strong>
                    </div>
                @endif
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Galeri Adı</th>
                                                <th class="cell">Uzantısı</th>
                                                <th class="cell">Kapak</th>
                                                <th class="cell">Kategori</th>
                                                <th class="cell">İşlemler</th>

                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($image as $b)
                                                <tr>
                                                    <td class="cell">{{ $b->name }}</td>
                                                   

                                                
                                             
                                                    <td class="cell">{{ $b->slug }}</td>
                                                    <td class="cell"><img width="40px"
                                                        src="{{ asset('storage/galery/kapak') }}/{{ $b->image }}"
                                                        alt="{{ $b->title }}"></td>
                                                        <td class="cell">{{ $b->getGalery->name }}</td>
                                                
                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="{{ route('admin.galery.image.edit', ['blog_id' => $b->id]) }}">Düzenle

                                                        </a>
                                                        
                                                 <a href="#" class="btn-sm app-btn-success"
                                                            wire:click.prevent="deleteImage({{ $b->id }})">
                                                            Sil </a> 
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                {{$image->links()}}
                                <!--//table-responsive-->

                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->


                    </div>
                    <!--//tab-pane-->




                </div>
                <!--//tab-pane-->
            </div>
            <!--//tab-content-->



        </div>
        <!--//container-fluid-->
    </div>

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
                                <h4 class="notification-title mb-1">Kendine Özgün Galerini Oluştur</h4>



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
                {{-- <div class="row">

                    @foreach ($galery as $item)
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




                </div> --}}
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
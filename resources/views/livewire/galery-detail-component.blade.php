<main>



    <!-- Page Header section start here -->
    <div class="pageheader-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pageheader-content text-center">
                        <h2>Mesa Vip Galeri</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Galeri</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header section ending here -->


    <!-- blog section start here -->

    <!-- course section start here -->


    <div class="course-section style-3 padding-tb">
       
        <div class="container">
            <div class="section-header">
                <h2 class="title">{{ $galery->name }}</h2>

                
            </div>
            <div class="section-wrapper">
                
                    <div class="content">
                        @foreach ($galery->getImage ?? [] as $item)
                            <a class="elem" href="{{ asset('storage/galery') }}/{{ $item->image }}" title="{{ $galery->name }}"
                                data-lcl-txt="Mesa Vip Koleji" data-lcl-author="Admin"
                                data-lcl-thumb="{{ asset('storage/galery') }}/{{ $item->image }}">
                                <span style="background-image: url({{ asset('storage/galery') }}/{{ $item->image }});"></span>
                            </a>
                        @endforeach
            
                        <br /><br />
                    </div>
            
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- blog section ending here -->


    <!-- blog section ending here -->

</main>

<section class="breadcrumb-area bread-bg bread-overlay overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between">
                    <div class="section-heading">
                        <h2 class="sec__title text-white font-size-40 mb-0">Galeri </h2>
                    </div>
                    <ul class="list-items bread-list">
                        <li><a href="/">Anasayfa</a></li>
                        <li>Galeri</li>
                        
                    </ul>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="bread-svg">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="50px" viewBox="0 0 1200 150" preserveAspectRatio="none">
            <g><path fill-opacity="0.2" d="M0,150 C600,100 1000,50 1200,-1.13686838e-13 C1200,6.8027294 1200,56.8027294 1200,150 L0,150 Z"></path></g><g class="pix-waiting animated" data-anim-type="fade-in-up" data-anim-delay="300"><path fill="rgba(255,255,255,0.8)" d="M0,150 C600,120 1000,80 1200,30 C1200,36.8027294 1200,76.8027294 1200,150 L0,150 Z"></path></g><path fill="#fff" d="M0,150 C600,136.666667 1000,106.666667 1200,60 C1200,74 1200,104 1200,150 L0,150 Z"></path><defs></defs>
        </svg>
    </div><!-- end bread-svg -->
</section><!-- end breadcrumb-area -->

<!-- Login Section Section Starts Here -->
{{-- <div class="login-section padding-tb section-bg">
    <div class="container">
        <div class="account-wrapper">
            <h3 class="title">Elysium Danıimanlık Kullanıcı Girişi</h3>
            <form action="{{ route('login') }}" method="POST" class="account-form">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email Adresiniz?" :value="old('email')" requrired autofocus>
                </div>
                <div class="form-group">
                    <input type="password"name="password" placeholder="Password" required autocomplete="current-password" >
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between flex-wrap pt-sm-2">
                        <div class="checkgroup">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Hatırla</label>
                        </div>
                       
                    </div>
                </div>
                <div class="form-group text-center">
                    <button class="d-block lab-btn"><span>Giriş</span></button>
                </div>
            </form>
            
        </div>
    </div>
</div> --}}
<div class="col-lg-8">
    <div class="block-card">
      
        <div class="block-card-body">
            <form method="post" action="{{route('login')}}" enctype="multipart/form-data" class="form-box row">
                @csrf
                
                <div class="col-lg-6">
                    <div class="input-box">
                        <label class="label-text">Mail Adresiniz</label>
                        <div class="form-group">
                            <span class="la la-envelope-o form-icon"></span>
                            <input class="form-control form-control-styled" type="email" name="email" :value="old('email')" requrired autofocus placeholder="Email" required>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
                
                <div class="col-lg-6">
                    <div class="input-box">
                        <label class="label-text">Şifre</label>
                        <div class="form-group">
                            <span class="la la-password-o form-icon"></span>
                            <input class="form-control form-control-styled" type="password" name="password" placeholder="Şifre" required autocomplete="current-password">
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
                <div class="col-lg-12">
                    <div class="btn-box">
                        <button type="submit" class="theme-btn gradient-btn border-0">Giriş<i class="la la-arrow-right ml-1"></i></button>
                    </div>
                </div><!-- end col-lg-12 -->
            </form>
        </div><!-- end block-card-body -->
    </div><!-- end block-card -->
</div><!-- end col-lg-8 -->
<!-- Login Section Section Ends Here -->
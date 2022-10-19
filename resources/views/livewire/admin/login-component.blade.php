<div class="pageheader-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageheader-content text-center">
                    <h2>Giriş Sayfası</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Anasayfa</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giriş</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header section ending here -->

<!-- Login Section Section Starts Here -->
<div class="login-section padding-tb section-bg">
    <div class="container">
        <div class="account-wrapper">
            <h3 class="title">Mesa Vip Koleji</h3>
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
</div>
<!-- Login Section Section Ends Here -->
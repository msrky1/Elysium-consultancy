<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Video Ekle </h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Video Ekle</h3>
                        <div class="section-intro">Video eklemek için Boş Alanı Dolduurun<a href="{{ route('admin.help') }}"><br>
                                Daha
                                Fazla Öğren</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                        href="{{ route('admin.video') }}"> Video Görüntüle</a>
                                </div>
                            @endif
                            <div class="app-card-body">
                                <form wire:submit.prevent="categoryAdd()">
                                    <div class="mb-3">
                                     
                                        @csrf
                                        <label for="setting-input-2" class="form-label">Başlık </label>:
                                        <input type="text" name="title" class="form-control" wire:model="title"
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
                                    <div class="mb-3" wire:ignore>
                                        <label for="setting-input-2" class="form-label">İçerik </label>:
                                        <textarea wire:model='url' id="description"></textarea>

                                    </div>

                                  
                                    
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label"> Kapak </label>: <br>

                                        <input type="file" name="image" wire:model="image" required /><br>

                                        @if ($image)
                                            <img src="{{ $image->temporaryUrl() }}" width="120">
                                        @endif

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
                <script>
                    jQuery(document).ready(function() {

                        $('#description').summernote({
                            height: 350, // set editor height
                            minHeight: null, // set minimum height of editor
                            maxHeight: null, // set maximum height of editor
                            focus: false,

                            callbacks: {
                                onChange: function(contents, $editable) {
                                    @this.set('url', contents);
                                }
                            }
                            // set focus to editable area after initializing summernote

                        });


                    });

                    window.edit = function() {
                            $(".click2edit").summernote()
                        },
                        window.save = function() {
                            $(".click2edit").summernote('destroy');
                        }
                </script>

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

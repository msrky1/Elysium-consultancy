<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <h1 class="app-page-title">Sınıf Düzenle</h1>
                <hr class="mb-4">
                <div class="row g-4 settings-section">
                    <div class="col-12 col-md-4">
                        <h3 class="section-title">Sınıf Düzenle</h3>
                        <div class="section-intro">Sınıf eklemek için formu eksiksiz doldurun<a
                                href="{{ route('admin.help') }}"><br>
                                Daha
                                Fazla Öğren</a></div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="app-card app-card-settings shadow-sm p-4">
                            @if (Session::has('message'))
                                <div class="alert alert-success">
                                    <strong>{{ Session::get('message') }}</strong> <a style="color: red"
                                        href="{{ route('admin.class') }}"> Sınıfları Görüntüle</a>
                                </div>
                            @endif
                            <div class="app-card-body">
                                <form wire:submit.prevent="updateClass()">
                                    @csrf <div class="mb-3">


                                        <label for="setting-input-2" class="form-label">Sınıf Numarası </label>:
                                        <input type="text" name="classroom" class="form-control"
                                            wire:model="classroom" required>
                                        <div> 

                                    </div>
                                    <div class="mb-3">

                                        <label for="setting-input-2" class="form-label">Sınıf Numarası </label>:
                                        <input type="text"  name="classroom_id" class="form-control" wire:model="classroom_id"
                                            required>
                                        <div> 
                                              

                                    </div> <br>

                                    <button class="btn app-btn-primary" type="submit">
                                        Güncelle
                                    </button>
                                </form>

                                <div class="tab-content" id="orders-table-tab-content">
                                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                                            <div class="app-card-body">
                                                <div class="table-responsive">
                                                    <table class="table app-table-hover mb-0 text-left">
                                                        <thead>
                                                            <tr>
                                                                <th class="cell">Sınav Saati</th>
                                                           
                                                                <th class="cell"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($classtime as $item)
                                                            <tr>
                                                            
                                                                  
                                                          
                                                                <td class="cell">{{$item->hour}}</td>
                                                        
                                                                <td class="cell"><span class="truncate"><button class="btn btn-danger" style="color:white" wire:click.prevent="deletTime({{ $item->id }})"> Kaldır</span></td>
                                                            </tr>
                                                            @endforeach
                                                            
                                                         
                        
                                                        </tbody>
                                                    </table>
                                                </div><!--//table-responsive-->
                                               
                                            </div><!--//app-card-body-->		
                                        </div><!--//app-card-->
                                      
                                <br> 
                                <br> 
                                <br> 
                                <br> 

                                <form wire:submit.prevent="addClass()">
                                    @csrf
                                    
                                    <div class="mb-3">


                                        <label for="setting-input-2" class="form-label">Sınıf Saatleri </label>:
                                       <select wire:model="hour">
                                         <option selected> Bir Saat Seçin </option>                           
                                         <option> 10:00 </option>                           
                                         <option> 13:00 </option>                           
                                         <option> 14:00 </option>                           
                                         <option> 16:00 </option>                           
                                       
                                     
                                    
                                       </select> <br>
                                       <input width="1" type="text" wire:model = "classroom_id" required/> Sınıf
                                    </div>
                                

                                    <button class="btn app-btn-primary" type="submit">
                                        Ekle
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
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('description', editor.getData());
            })
        })
        .catch(error => {
            console.error(error);
        });
</script>

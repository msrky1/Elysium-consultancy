<main>

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Başvurular</h1>
                    </div>

                </div>
                <!--//row-->


                <div class="col-auto">
                    <a class="btn app-btn-primary" href="/">
                        Yeni Başvuru Ekle
                    </a>
                    @foreach ($lock as $item)
                        
                  @if ($item->lock == "Açık")
                   
                    <a class="btn app-btn-primary" wire:click.prevent="tableReset" href="#">
                        Tüm Başvuruları Sıfırla
                    </a>

                    @endif
                    @endforeach
                    {{-- <select wire:cllick.prent="updated">

                
                            <option>Açık</option>
                            <option>Kapalı</option>
                       
           
                    </select> --}}
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
                                                <th class="cell">id</th>
                                                <th class="cell">Adı Soyadı</th>
                                                <th class="cell">Email Adresi</th>
                                                <th class="cell">TC Kimlik Numarası</th>
                                                <th class="cell">Giriş Saati</th>
                                                <th class="cell">Aksiyonlar</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($app as $s)
                                                <tr>
                                                    <td class="cell">#{{ $s->id }}</td>


                                                    <td class="cell"><span
                                                            class="truncate">{{ $s->name }}</span></td>
                                                    <td class="cell">{{ $s->email }}</td>
                                                    <td class="cell">{{ $s->tc }}</td>
                                                    <td class="cell" style="background-color: green; color:white">{{ $s->hour }}</td>

                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="{{ route('admin.slider.edit', ['slider_id' => $s->id]) }}">
                                                            Düzenle
                                                        </a>

                                                        <form action="{{ route('add.basvuru.onay') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" value="{{ $s->name }}"
                                                                name="name">
                                                            <input type="hidden" value="{{ $s->email }}"
                                                                name="email">
                                                            <input type="hidden" value="{{ $s->tc }}" name="tc">
                                                            <input type="hidden" value="{{ $s->hour }}" name="hour">
                                                            <input type="hidden" value="{{ $s->id }}" name="id">


                                                            <a href="#" class="btn-sm app-btn-danger"> <button
                                                                    type="submit"
                                                                    style="border-radius: 50px; padding:5px; margin:10px">
                                                                    Onayla </button></a>
                                                    </td>
                                                </tr>
                                                </form>
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


                    <!--//tab-pane-->



                    <!--//tab-pane-->
                </div>
                <!--//tab-content-->



            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->

</main>

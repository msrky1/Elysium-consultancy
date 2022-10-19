<main>

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Eğitim Sistemi Yönetimi</h1>
                    </div>

                </div>
                <!--//row-->


                <div class="col-auto">
                    <a class="btn app-btn-primary" href="{{ route('admin.system.add') }}">

                        Eğtim Sistemine Yeni Ekle
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
                                                <th class="cell">id</th>
                                                <th class="cell">Resim</th>
                                                <th class="cell">Başlık</th>
                                                <th class="cell">İçerik</th>


                                                <th class="cell">Tarih</th>
                                                <th class="cell">Aksiyonlar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($system as $b)
                                                <tr>
                                                    <td class="cell">#{{ $b->id }}</td>
                                                    <td class="cell"><img width="150px"
                                                            src="{{ asset('storage/system') }}/{{ $b->image }}"
                                                            alt="{{ $b->title }}"></td>

                                                    <td class="cell"><span   class="truncate">{{ $b->title }}</span></td>
                                                    <td class="cell">{!! $b->description = Str::limit($b->description, 250) !!}
                                                   
                                                     
                                                    </td>
                                                    

                                                    <td class="cell">{{ $b->created_at }}</td>

                                                    <td class="cell"><a class="btn-sm app-btn-secondary"
                                                            href="{{ route('admin.system.edit', ['blog_id' => $b->id]) }}">Düzenle

                                                        </a>
                                                        <a href="#" class="btn-sm app-btn-success"
                                                            wire:click.prevent="deleteBlog({{ $b->id }})">
                                                            Sil </a>
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
    <!--//app-content-->

</main>

<main>

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Gelen İş Başvuruları Yönetimi</h1>
                    </div>

                </div>
                <!--//row-->


                
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
                                                <th class="cell">İsim Soyisim</th>
                                                <th class="cell">Email Adresi</th>
                                                <th class="cell">Telefon Numarası</th>
                                                <th class="cell">Alanı</th>
                                                <th class="cell">Branşı</th>
                                                <th class="cell">Mesajı</th>
                                                <th class="cell">Cv'si</th>
                                                <th class="cell">Tarih</th>
                                                <th class="cell">Aksiyonlar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($human as $b)
                                                <tr>
                                                    <td class="cell">#{{ $b->id }}</td>
                                               

                                                    <td class="cell"><span   class="truncate">{{ $b->name }}</span></td>
                                                    {{-- <td class="cell">{!! $b->description = Str::limit($b->description, 250) !!} --}}
                                                   
                                                     
                                                    </td>
                                                    <td class="cell"><a href="mailto:{{ $b->email }}">  {{ $b->email }} </a></td>
                                                    <td class="cell">{{ $b->number }}</td>
                                                    <td class="cell">{{ $b->area }}</td>
                                                    <td class="cell">{{ $b->branch }}</td>      
                                                    <td class="cell">{{ $b->description }}</td>      
                                                    <td class="cell"><a href="{{asset('storage\cv')}}\{{$b->cv}}"> CV </a></td>
                                                    <td class="cell">{{ $b->created_at }}</td>

                                                    <td class="cell">  
                                                        <a href="#" class="btn-sm app-btn-success"
                                                            wire:click.prevent="deleteBlog({{ $b->id }})">
                                                            Sil </a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                  
                                </div>
                                {{ $human->links() }}   
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

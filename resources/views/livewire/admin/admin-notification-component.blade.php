<main>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                <div class="position-relative mb-3">
                    <div class="row g-3 justify-content-between">
                        <div class="col-auto">
                            <h1 class="app-page-title mb-0">Bildirimler</h1>
                        </div>
                        @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message') }}</strong>
                        </div>
                    @endif
                        <!--     <div class="col-auto">
                            <div class="page-utilities">
                                <select class="form-select form-select-sm w-auto">
                                    <option selected value="option-1">All</option>
                                    <option value="option-2">News</option>
                                    <option value="option-3">Product</option>
                                    <option value="option-4">Project</option>
                                    <option value="option-4">Billing</option>
                                </select>
                            </div>
                     
                        </div>
                           -->
                    </div>


                </div>
                 

                @if (!$notification == null)
         

                @foreach ($notification as $noti)
                    <div class="app-card app-card-notification shadow-sm mb-4">
                        <div class="app-card-header px-4 py-3">
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-lg-auto text-center text-lg-left">
                                    <img class="profile-image" src="{{asset('admin/assets')}}/images/user.png" alt="">
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-auto text-center text-lg-left">
                                    <div class="notification-type mb-2"><span
                                            class="badge bg-{{ $noti->color }}">{{ $noti->name }}</span></div>
                                    <h4 class="notification-title mb-1">Admin</h4>

                                    <ul class="notification-meta list-inline mb-0">
                                        <li class="list-inline-item">
                                            {{ \Carbon\Carbon::parse($noti->created_at)->format('d/m/Y g:i:s') }}
                                        </li>
                                        <li class="list-inline-item">|</li>
                                        <li class="list-inline-item">Mesa Vip Koleji</li>
                                    </ul>

                                </div>
                                  <!--//col-->
                            </div>
                            <!--//row-->
                        </div>
                        <!--//app-card-header-->
                        <div class="app-card-body p-4">
                            <div class="notification-content">{{ $noti->notification }}</div>
                        </div>
                        <!--//app-card-body-->
                        <div class="app-card-footer px-4 py-3">
                          <a href="#" wire:click.prevent="deleteNotification({{ $noti->id }})">   Sil <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                <path
                                    d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                            </svg> </a> 

                       
                            
                            <div>
                           
                            </div>
                            <!--//app-card-footer-->
                        </div>
                       
                    </div>
                    <!--//app-card-->
                @endforeach


           
                @endif

                <div class="text-center mt-4"><a class="btn app-btn-secondary"
                        href="{{ route('admin.help') }}">Bildirimler Hakkında</a>
                </div>

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->


</main>

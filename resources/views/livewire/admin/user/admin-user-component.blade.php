<main>

    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Kullanıcı Yönetimi</h1>
				    </div>
				    
			    </div><!--//row-->
			   
			    
                <div class="col-auto">						    
                    <a class="btn app-btn-primary" href="{{route('admin.user.add')}}">
                
                      Yeni Kullanıcı Ekle
                    </a>
                </div>    @if (Session::has('message'))
				<div class="alert alert-success">
					<strong>{{ Session::get('message') }}</strong> 
				</div>
			@endif
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
                          
						    <div class="app-card-body">
                              
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">id</th>
												<th class="cell">Kullanıcı Adı</th>
												<th class="cell">Email</th>
												
												<th class="cell">Aksiyonlar</th>
												<th class="cell"></th>
											</tr>
										</thead>
										<tbody>
											@foreach ($user as $cat)
												
									
											<tr>
												<td class="cell">#{{$cat->id}}</td>
												<td class="cell">{{$cat->name}}</td>
												<td class="cell">{{$cat->email}}</td>

											
								
												<td class="cell"><a class="btn-sm app-btn-secondary" href="{{route('admin.user.edit' , ['user_id' => $cat->id])}}">Düzenle
												
												</a> 
												<a href="#" class="btn-sm app-btn-success"
												wire:click.prevent="deleteUser({{ $cat->id }})">
												Sil </a>
											</tr>
						@endforeach
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			
						
			        </div><!--//tab-pane-->
			        
			       
			        
			        
			         
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
</main>
<main><div>


    <div> 
   @if (Session::has('message'))
       
   <p style="color: green"> {{Session::get('message')}}</p>
   @endif
    </div>
    
<form wire:submit.prevent = "updateSetting()" > 
 
 
    <label>Name </label><br>

    <input wire:model = "name"  name="name"> 
<br>
 
     <button type="button" > Güncelle </button>


</form>
</div>

</main>

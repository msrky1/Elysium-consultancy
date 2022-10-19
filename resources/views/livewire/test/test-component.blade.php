<main>




    <div>
        Mahmut Sarıkaya <br>

    </div>
 <br>
     @foreach ($setting as $s)
          {{$s->name}}

           

         <a href="{{route('test.edit' , ['setting_id' => $s->id])}}" >  <button type="button" > Düzenle </button> </a>
     @endforeach
    </div>
    </div>
</main>

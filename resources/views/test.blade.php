Language: 
  <select name="target" class="target">
    <option>Select</option>
    <option value="bn">Bangla</option>
    <option value="en">English</option>
    <option value="zh-CN">Chinese</option>
    <option value="tr">Türkçe</option>
  </select><br>

  <p>
    {{ translateText("Hello World") }}
  </p>
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $('.target').on('change',function(){
          var target = $(this).val();
          $.ajax({
              url:"{{url('/setTarget')}}",
              type:"POST",
              dataType:'json',
              data:{"_token": "{{ csrf_token() }}","target":target},
              success: function(data) {
                location.reload();
              },
              error: function(e) {

              }
          });
      });
  </script>
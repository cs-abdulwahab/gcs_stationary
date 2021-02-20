<script>
$(document).ready(function(){
   @foreach(App\Category::all() as $catList) 
 $("#cat{{$catList->id}}").click(function(){
     var cat=$("#cat{{$catList->id}}").val();
     
     $.ajax({
         type:'get',
         dataType:'html',
         url:'{{url('/productsCat')}}',
         data:'cat_id=' +cat,
         success:function(response){
          $('#productData').html(response);
         }

     });
  
 });
 @endforeach
});
</script>
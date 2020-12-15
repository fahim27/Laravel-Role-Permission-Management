<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
       <div class="row">
           <div class="col-lg-8">
               <div class="card">
                   <div class="card-heading">
                       <h4 class="text-uppercase">Permission List</h4>
                   </div>
                   <div class="card-body">
                       <div class="row">
                           @foreach ($permissions as $k=> $permission)
                               
                           
                           <div class="col-lg-3">
                               {{ $k }}
                               <br>
                               <input type="checkbox"  class="{{ $k }}" onclick="groupCheck(event)">
                        </div>
                           <div class="col-lg-9">
                               @foreach ($permission as $item)
                                   <label for="{{ $item->name }}"><input class="{{ $k }}" value="{{ $item->id }}" name="permission_id[]"  type="checkbox" id="{{ $item->name }}"> {{ $item->name }}</label><br>
                               @endforeach
                                </div>
                                <hr>
                           @endforeach
                         
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   
  </body>

  <script>
      function groupCheck(event){
         let targetClass=event.target.className;

         //target event
         if(event.target.checked==true){
            event.target.checked=false
         }else{
             event.target.checked=true
         }


         let checkClass=document.getElementsByClassName(targetClass);

         for(let i = 0 ; i < checkClass.length ; i++){
            console.log(checkClass[i])
             if(checkClass[i].checked==false){
                
                checkClass[i].checked=true;

             }else{
                checkClass[i].checked=false;
             }
           
         }
      }
  </script>
</html>
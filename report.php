<!DOCTYPE html>
<html>
<head>
<title>Dr balcony - code test</title>
<link rel= stylesheet  href= style/styles.css >
<link rel= stylesheet  href= https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css >
<link href= DataTables/datatables.min.css  rel= stylesheet >
 

<script src= https://code.jquery.com/jquery-3.7.1.js  integrity= sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=  crossorigin= anonymous ></script>
<script src= DataTables/datatables.min.js ></script>
<script type= text/javascript  src= ./js/scripts.js ></script>

</head>
<body>


<nav class= sticky navbar >
	

	<input type= checkbox  id= nav  class= hidden  />
	<label for= nav  class= nav__open ><i></i><i></i><i></i></label>
	<div class= nav >
		<ul class= nav__items >
			<li class= nav__item ><a href= index.php  class= nav__link >Register</a></li>
			<li class= nav__item ><a href= Order.php  class= nav__link >Order form</a></li>
			<li class= nav__item ><a href= report.php  class= nav__link >Report</a></li>
		</ul>
	</div>
</nav>

<main>
	<section class= home  id= mainDiv >
    <table id= example  class= display  style= width:100% >
        <thead>
            <tr>
           
                <th>Id<th>
                <th>user name</th>
                <th>registration time</th>
                <th>number of purchases</th>
                <th>date of the last purchase</th>
                <th>Status</th>
               
            </tr>
        </thead>
       
    </table>
	</section>
	
</main>
<script>
    $().ready(function(){
     // //    ajax :  library.php?module=Report&submodule=index 
        $('#example').DataTable( {
             dom : 'Blfrtip',

             processing : true,
             serverSide : true,
             ordering : true,
             order : [[4    , 'desc']],
        
            
         ajax :
            {
                 url :   "library.php?module=Report&submodule=index",
                 type :  "POST" ,
                 datatype :  "json" ,
              
            },
           
            
    paging: true,

        } );
    });
    </script>



</body>
</html>
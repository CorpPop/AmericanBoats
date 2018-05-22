@extends("layouts.app")
@section("content")


<div class="row" style="height:90px"></div>
<div class="container" >
 	<div class="card col col l12 m1 s1 offset-l1" style="background-color:#606262;width:400px;top:0px;height:425px;position:relative; left: 650px ">
 		<div class="row">
 			<div class="container">
 			    <div class="col l12 m4 s12">
 			        <a  class="btn-large modal-trigger" href="#modal1" style="position:relative;top:20px;right:30px; width:350px;"><i class="material-icons right">navigate_next</i>CONTINUAR</a>
 			    </div>
 			    <div class="row"> 
						<p style="top:30px;right:10px; position:relative;color:white">RESUMEN DEL PEDIDO</p>
                       
 			    </div>
 			     
<table class="table table-bordered" style="position:relative;font-weight: bold;top:40px; width:350px;right:20px;background-color:white;box-shadow: 1px 1px 7px black;">
			<tbody class="center">
			
				<tr>
					<td>Cantidad</td>
					<td class="right"></td>
			            
				</tr>
				<tr>
					<td>Precio</td>
					<td class="right"></td>
				</tr>
				<tr>
					<td>Total</td>
					<td class="right">${{$total}}</td>
				</tr>
		
				<tr style="background-color:#ebebeb;">
					<td>Subtotal</td>
					<td class="right">${{$total}}</td>
				</tr>


			</tbody>
		</table>

 			   
            </div>
 		</div>
 	</div>
 </div>
<div class="row" style="left:100px; width:500px;top:200px;position:absolute;">
    <div class="container">
     @foreach($products as $product)
     
        <div class="card" style="width:660px;height:220px"> 
       <div class="row" style="top:10px; left:10px; position:relative;"><img style="float:left; width:200px;height:200px;" src="{{asset('img/wake3.jpg')}}">
        <p style="left:50px;top:10px; position:relative;">NOMBRE DEL PRODUCTO :</p>
        <p style="left:50px;top:10px; position:relative;">SEXO :</p>
        <p style="left:50px;top:10px; position:relative;">COLOR :</p>
        <p style="left:50px;top:10px; position:relative;">TALLA :</p>
       
        <a href="" style="left:50px;top:40px; position:relative;">Cancelar Compra</a>
        </div>
        </div>
      
        @endforeach
      </div>
</div>
 


  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <img style="width:100px;height:70px;float:left" src="{{asset('img/aler.png')}}"><p style="position:relative; top:20px;" >¿Seguro que desea continuar con su compra?</p> 
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Si</a>
       <a href="#!" class="modal-close waves-effect waves-green btn-flat">No</a>
    </div>
  </div>
<div class="row" style="height:90px"></div>
<script type="text/javascript">


$(document).ready(function(){

        $("#modal1").modal();

});
	 
</script>

@endsection 

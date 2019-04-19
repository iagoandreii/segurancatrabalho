<div class="modal fade bd-example-modal-lg" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			 <div class="modal-header">
				   <h5 class="modal-title" id="register">Cadastro</h5>
				   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 </div>
			 <div class="modal-body mod">
				@yield('modalregister')
				<input type="submit" value="Cadastrar" style="margin-top: 10px;" class="btn btn-warning btn-block text-white">
			 </div>
		 </div>
	 </div>
 </div>

<div class="modal fade bd-example-modal-lg" id="visualization" tabindex="-1" role="dialog" aria-labelledby="visualization" aria-hidden="true">
   	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style="margin-top: -10px;">
			<div class="modal-header">
	  			<h5 class="modal-title" id="visualization">Visualizar</h5>
	  			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body mod">
				@yield('modalvisualization')
			</div>
		</div>
	</div>
</div>

<div class="modal fade bd-example-modal-lg" id="change" tabindex="-1" role="dialog" aria-labelledby="change" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content" style="margin-top: -10px;">
			 <div class="modal-header">
				   <h5 class="modal-title" id="change">Alterar</h5>
				   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 </div>
			 <div class="modal-body mod">
				@yield('modalchange')
				<input type="submit" style="margin-top: 20px;" value="Alterar" class="btn btn-warning btn-block text-white">
			 </div>
		 </div>
	 </div>
 </div>
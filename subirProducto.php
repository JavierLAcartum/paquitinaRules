<form id='subirProducto' class="input-list style-2 clearfix" action='subastador.php' method='post' enctype="multipart/form-data" accept-charset='UTF-8'>
	<input type='text' name='nombreProducto' placeholder="Nombre del producto" maxlength="44" style="margin-left: 350px; margin-top: 300px;" required/>
	<br>
	<br>
	<textarea rows="4" cols="50" name="descripcionProducto" placeholder="Descripción del producto" maxlength = "200" form="subirProducto"  style="margin-left: 350px;" required></textarea>
	<br>
	<br>
	<label style="margin-left: 350px;">Si lo desea puede subir una imagen del producto:</label>
	<input type='file' name='imagenProducto'/>
	<br>
	<br>
	<input type='submit' name="subirProducto" style="margin-left: 350px;"/>
	<button onclick="location.href='subastador.php'"> Volver</button>
</form>


<form action="form/form8.php" method="POST">
	<fieldset>
		<legend>Sugestões</legend>
		<p>
			<label for="nome">Seu nome: </label><br/>
			<input type="text" id="nome" name="nome">
		</p>
		<p>
			<label for="email">Email: </label><br/>
			<input type="text" id="email" name="email">
		</p>
		<p>
			<label for="ano">Telefone: </label><br/>
			<input type="text" id="ano" name="ano">
		</p>
		O que achou do nosso site? Dê sua opinião:
		<input name="opiniao" type="radio" id="razoavel"/>
        <label for="razoavel">Razoavel</label>
		<input name="opiniao" type="radio" id="bom"/>
        <label for="bom">Bom</label>
        <input name="opiniao" type="radio" id="otimo"/>
        <label for="otimo">Otimo</label> <br/>
		<p>
			<label for="sugestao">Dê sua sugestão: </label><br/>
			<textarea name="sugestao" id="sugestao" cols="30" rows="10"></textarea>
		</p>
		<p>
			<button>Enviar</button>
		</p>
	</fieldset>
</form>
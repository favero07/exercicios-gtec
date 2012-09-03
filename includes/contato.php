      <form action="form/form8.php" method="POST">
        <fieldset>
          <legend>Cadastre uma Banda</legend>

          <p>
            <label for="band">Nome da Banda: </label><br/>
            <input type="text" id="band" name="band">
          </p>

          <p>
            <label for="player1">Player 1: </label><br/>
            <input type="text" id="player1" name="player1">
          </p>

          <p>
            <label for="player2">Player 2: </label><br/>
            <input type="text" id="player2" name="player2">
          </p>

          <p>
            <label for="email">Email: </label><br/>
            <input type="text" id="email" name="email">
          </p>

          <p>
            <label for="ano">Ano: </label><br/>
            <input type="text" id="ano" name="ano">
          </p>

          <p>
            <label for="musicas">Músicas: </label><br/>
            <textarea name="musicas" id="musicas" cols="30" rows="10"></textarea>
          </p>

          <p>
            <button>Enviar</button>
          </p>
          <div class="error">Mensagem</div>
        </fieldset>
      </form>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercicio 08</title>
    <style>
      .container{width:400px; margin:0 auto;}
      input, textarea{width: 100%;}
      .error{
        border:1px solid red;
        color:red;
        padding:10px 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Exercicio 08</h1>

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

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>
      $(function(){

        $('form').submit(function(el){
          el.preventDefault();
          // alert("olaee");

          // console.log($(this).attr("action"));
          console.log($(this).serialize());
          $.post({
            url: $(this).attr("action"),
            data: $(this).serialize()

          }).done(function(msg){
            $('.error').html(msg);
          });

        });
      });
    </script>
  </body>
</html>
        <h2 style="color: orange; margin-top: 5%;"> Cadastre-se aqui: </h2>
        <hr align="center" width="100%" size="1" color="orange">
  
<div class="corpinho">
    <div class="caixinha">
        <form action="" method="POST">
            <h3 style="color: orange;">Sobre:</h3>
            Nome:<br> <input type="text" name="nomec" ><br>
                CPF:<br> <input type="text" name="cpf" ><br>
                <br> <br>
                
                
                Sexo: <label> Feminino </label>
              <input type="radio" name="sexc" value="F">
              <label> Masculino </label>
               <input type="radio" name="sexc" value="M">
              <br><br>
                
                Data de Nascimento:<br> <input type="text" name="dataNc"><br>
                Endereço:<br>
                            <br><input type="text" name="rua"><br>
                            <br><input type="text" name="número"><br>
                            <br><input type="text" name="complemento"><br>
                            <br><input type="text" name="bairro"><br>
                            <br><input type="text" name="cidade"><br>
                            <br><input type="text" name="cep"><br>
                E-mail:<br> <input type="text" name="emailc"><br>
                Senha:<br> <input type="text" name="senhac"><br>
                Tipo de cliente:<br> <input type="text" name="tipoc"><br><br><br><br>

                <button type="submit">Cadastrar</button>
                <br><br><br><br>
                <a style="color: orange" href="./cliente/listar/">Ver clientes cadastrados</a>
                

        </form>
        
        
              <?php if(ehPost()){
             foreach ($errors as $erro){
                echo"$erro <br>";
            
 }
   }  
   ?>
    </div>
</div>
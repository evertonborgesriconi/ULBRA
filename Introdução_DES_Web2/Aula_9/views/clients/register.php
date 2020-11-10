<h2>Registro de clientes</h2>

<form action="?controller=clients&action=registerView" method="post">

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email">
    </div>

    <div class="form-group">
        <label>Interesse</label>
        <input type="text" name="interest">
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password">
    </div>

    <div class="form-group">  
    <label>Escolha um Veiculo</label><br>
        <input type="checkbox"  name="vehicle1" value="Bike">
        <label for="vehicle"> Bike</label>   
    </div>

    <div class="form-group">
    <label>Data de Aniversario</label><br>   
    <input type="date" id="birthday" name="birthday">
    </div>

    <div class="form-group">   
    <label>Sexo</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    </div>

    <div class="form-group">
    <label>Marca do Veiculo</label><br>
        <select name="cars">
            <option value="volvo">Volvo</option>
            <option value="saab">Porshe</option>
            <option value="opel">Tesla</option>
            <option value="audi">Audi</option>
        </select><br><br>
    </div>
     <br>

    <input type="submit" name="Registrar">

</form>
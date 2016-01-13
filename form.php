<form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php">
    <div>
        <div><label for="image_file">PLIK:</label></div>
        <div><input type="file" name="image_file" id="image_file"/></div>
        <div><label for="name">Imię</label></div>
        <div><input type="text" name="name" id="name"></div>
        <div><label for="password">Podaj hasło</label></div>
        <div><input type="password" name="password" id="password"></div>
        <div><label for="checkpass">Powtórz hasło</label></div>
        <div><input type="password" name="checkpass" id="checkpass"></div>
        <div>
            <label for="checkpass">Powtórz hasło</label>
            <input type="checkbox" name="vehicle" value="Bike"> Motor<br>
            <input type="checkbox" name="vehicle" value="Car" checked> Samochód<br>            
        </div>
        <div>
            <label for="checkpass">Powtórz hasło</label>
            <input type="radio" name="gender" value="male" checked> M<br>
            <input type="radio" name="gender" value="female"> F<br>
            <input type="radio" name="gender" value="other"> None            
        </div>
        <div><label for="message">Treść zapytania</label></div>
        <div><textarea name="message" id="message"></textarea></div>
        <input type="button" value="Upload" />
    </div>
</form>
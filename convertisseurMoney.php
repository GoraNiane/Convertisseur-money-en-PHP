<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Convertisseur de devises</title>

<style>
    body {
        font-family: "Poppins", sans-serif;
        background: linear-gradient(135deg, #74ABE2, #5563DE);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .converter-container {
        background: #fff;
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        text-align: center;
        width: 350px;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    input[type="number"], select {
        width: 100%;
        padding: 12px;
        margin: 10px 0;
        border-radius: 8px;
        border: 1px solid #ccc;
        font-size: 16px;
        outline: none;
        transition: 0.3s;
    }

    input[type="number"]:focus, select:focus {
        border-color: #5563DE;
        box-shadow: 0 0 5px rgba(85, 99, 222, 0.4);
    }

    input[type="submit"] {
        background: #5563DE;
        color: white;
        border: none;
        padding: 12px;
        width: 100%;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background 0.3s;
    }

    input[type="submit"]:hover {
        background: #4052c6;
    }

    h3 {
        color: #222;
        margin-top: 25px;
        font-weight: 500;
        background: #e9ecff;
        padding: 10px;
        border-radius: 8px;
    }
</style>
</head>

<body>

<div class="converter-container">
    <h2>💱 Convertisseur de devises</h2>
    <form action="" method="post">
        <input type="number" step="0.01" name="montant" placeholder="Donner le montant à convertir" required>
        
        <select name="devise" required>
            <option value="650">Euro</option>
            <option value="550">Dollar</option>
            <option value="200">Dirham</option>
        </select>
        
        <input type="submit" name="convertir" value="Convertir">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $montant = $_POST['montant'];
        $taux = $_POST['devise'];  // Récupération du taux sélectionné
        $montantConverti = $montant * $taux;
        
        echo "<h3>Le montant converti est : <br><strong>$montantConverti FCFA</strong></h3>";
    }
    ?>
</div>

</body>
</html>

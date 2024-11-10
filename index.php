<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Client</title>
    <style>
        /* Styles globaux pour le corps */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('usine.jpg') center/cover no-repeat;
            overflow: hidden;
        }

        /* Effet flou pour l'arrière-plan */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            filter: blur(8px);
            z-index: -1;
        }

        /* Conteneur de formulaire */
        .form-container {
            position: relative;
            width: 320px;
            padding: 20px;
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.9); /* semi-transparence */
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            z-index: 1;
        }

        /* Styles pour les éléments du formulaire */
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Bouton de soumission */
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        /* Messages d'erreur et succès */
        .error { color: red; font-size: 0.9em; margin-top: 5px; }
        .success { color: green; font-size: 1em; margin-top: 10px; }
    </style>
</head>
<body>

<div class="form-container">
    <form id="clientForm" action="./process/process_form.php" method="POST">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <div id="error-nom" class="error"></div>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <div id="error-prenom" class="error"></div>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <div id="error-email" class="error"></div>
        </div>
        <button type="submit">Soumettre</button>
    </form>
    <div id="success-message" class="success"></div>
</div>

</body>
</html>
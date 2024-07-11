<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Modification - ARD-818</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            color: #000; /* Ensure text is black */
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            color: #333; /* Slightly darker for emphasis */
            margin-bottom: 20px;
            text-align: center;
        }

        p {
            font-size: 16px;
            margin-bottom: 10px;
            color: #333;
        }

        .code {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            margin: 20px 0;
        }

        .note {
            color: red;
            font-style: italic;
        }

        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-align: center;
            display: block;
            width: 200px;
            margin: 20px auto;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #888;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Code de validation</h1>
    <p>Bonjour,</p>
    <p>Vous avez soumis une demande de modification de vos informations sur le réseau ARD-818. Veuillez entrer votre code et continuer le processus :</p>

    <div class="code">{{ $code }}</div>

    <p class="note">Ce code est valide pendant 30 minutes. Veuillez l'utiliser dans ce délai pour compléter la modification.</p>

    <p>Si vous n'êtes pas à l'origine de cette demande, veuillez simplement ignorer ce message.</p>

    <!-- Optional Button -->
    <!-- <a href="#" class="btn">Texte du bouton</a> -->

    <p>Merci,<br>{{ config('app.name') }}</p>

    <div class="footer">
        <p>&copy; Réseau ARD-818. Tous droits réservés.</p>
    </div>
</div>
</body>
</html>

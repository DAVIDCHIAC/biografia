<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Adolescencia</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap');

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            line-height: 1.7;
        }
        .card {
            background-color: #ffffff;
            padding: 45px 55px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
            max-width: 600px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.09);
        }
        h1 {
            color: #2c3e50;
            font-size: 2.4em;
            margin-bottom: 30px;
            font-weight: 300;
        }
        p {
            font-size: 1.1em;
            color: #555;
            text-align: justify;
        }
        .school {
            font-weight: 600;
            color: #2980b9;
        }
        .event {
            font-style: italic;
            color: #e74c3c;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Adolescencia</h1>
        <p>
            Luego, fui a un colegio llamado <span class="school">Jorge Ardila Duarte</span>, donde estudié con mi hermana hasta octavo grado. En ese colegio <span class="event">perdí noveno</span> y me cambiaron a otro, el <span class="school">Colegio Las Américas</span>, ubicado en el Álvarez. Allí terminé mi bachillerato.
        </p>
    </div>
</body>
</html>

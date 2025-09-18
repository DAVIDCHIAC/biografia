<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Actualidad</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        :root {
            --bg-color: #f2f2f2;
            --card-bg: #ffffff;
            --text-color: #333;
            --heading-color: #1a1a1a;
            --accent-gradient: linear-gradient(45deg, #6a11cb, #2575fc);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            box-sizing: border-box;
        }

        .timeline-card {
            background: var(--card-bg);
            max-width: 700px;
            border-radius: 20px;
            padding: 40px 50px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
            background-clip: padding-box;
        }

        .timeline-card::before {
            content: '';
            position: absolute;
            top: 0; right: 0; bottom: 0; left: 0;
            z-index: -1;
            margin: -2px;
            border-radius: inherit;
            background: var(--accent-gradient);
        }

        h1 {
            color: var(--heading-color);
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 35px;
            font-weight: 600;
        }

        .content p {
            font-size: 1.1em;
            line-height: 1.8;
            text-align: justify;
            opacity: 0; /* Initially hidden for JS animation */
            transform: translateY(20px); /* Start slightly lower for JS animation */
            animation: fadeIn 1s ease-out 0.5s forwards;
        }

        .highlight {
            font-weight: 600;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>

    <div class="timeline-card">
        <h1>Actualidad</h1>
        <div class="content">
            <p>
                Después del colegio, fui a trabajar a una <span class="highlight">mina de carbón</span> por un año mientras me inscribía en gastronomía. Terminé mis estudios de <span class="highlight">gastronomía</span> e hice mis prácticas en <span class="highlight">España</span> durante 3 años. Luego, regresé al país y me inscribí en la <span class="highlight">UNAB</span> en la carrera de Ingeniería de Sistemas. Hasta la fecha, sigo estudiando y voy cursando <span class="highlight">quinto semestre de Sistemas</span>.
            </p>
        </div>
    </div>

    <script>
        // Minimalist JS is handled by CSS animations triggered on load.
        // This ensures functionality even if JS is disabled and keeps it clean.
        document.addEventListener('DOMContentLoaded', (event) => {
            console.log('Page loaded and animations initiated.');
        });
    </script>

</body>
</html>

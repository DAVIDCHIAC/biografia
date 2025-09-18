<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primera Habilidad</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Nunito+Sans:wght@300;400&display=swap');

        :root {
            --bg-color: #f7f9fc;
            --card-bg: #ffffff;
            --text-color: #5a6175;
            --heading-color: #0a2540;
            --accent-color: #e67e22; /* Un tono naranja/dorado */
        }

        body {
            font-family: 'Nunito Sans', sans-serif;
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

        .card {
            background: var(--card-bg);
            max-width: 550px;
            width: 100%;
            border-radius: 12px;
            padding: 50px;
            box-shadow: 0 10px 40px rgba(42, 51, 83, 0.08);
            text-align: center;
            border-top: 5px solid var(--accent-color);
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out 0.3s forwards;
        }

        .icon {
            width: 50px;
            height: 50px;
            margin: 0 auto 20px;
            opacity: 0;
            transform: scale(0.8);
            animation: popIn 0.7s ease-out 0.8s forwards;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: var(--heading-color);
            font-size: 2.5em;
            margin: 0 0 20px 0;
            opacity: 0;
            transform: translateY(10px);
            animation: fadeInUp 0.8s ease-out 1s forwards;
        }

        p {
            font-size: 1.15em;
            line-height: 1.8;
            font-weight: 300;
            opacity: 0;
            transform: translateY(10px);
            animation: fadeInUp 0.8s ease-out 1.2s forwards;
        }

        .highlight {
            font-weight: 400;
            color: var(--accent-color);
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes popIn {
            to {
                opacity: 0.8;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" style="color: var(--accent-color);">
                <path d="M12 2 L2 7 L12 12 L22 7 L12 2 Z"></path>
                <path d="M2 17 L12 22 L22 17"></path>
                <path d="M2 12 L12 17 L22 12"></path>
            </svg>
        </div>
        <h1>Desarrollo Frontend</h1>
        <p>
            Poseo una sólida habilidad en <span class="highlight">desarrollo frontend</span>, creando interfaces de usuario interactivas y responsivas con <span class="highlight">HTML, CSS y JavaScript</span>. Me especializo en traducir diseños a código limpio y funcional.
        </p>
    </div>

</body>
</html>

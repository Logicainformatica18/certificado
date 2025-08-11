<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Intentos agotados</title>
</head>
<body>
  <h2>Intentos agotados - Solicitud de refuerzo presencial</h2>

  <p><strong>Estudiante:</strong> {{ $studentName }}</p>
  <p><strong>Email del estudiante:</strong> {{ $studentEmail }}</p>
  <p><strong>Certificación:</strong> {{ $certName }}</p>
  <p><strong>Intentos usados:</strong> {{ $used }} / {{ $allowed }}</p>

  <p>Se solicita programar un <strong>refuerzo presencial</strong> para el estudiante.</p>

  <br>
  <p>Gracias,</p>
  <p>Sistema de Evaluaciones</p>
</body>
</html>

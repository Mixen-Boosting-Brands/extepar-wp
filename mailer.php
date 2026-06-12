<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

ini_set("display_errors", 0);
error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(403);
    echo "Acceso no permitido.";
    exit();
}

require "./mailer-config.php";
require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

$form_type = strip_tags(trim($_POST["form_type"] ?? ""));
$nombre    = strip_tags(trim($_POST["nombre"]    ?? ""));
$correo    = filter_var(trim($_POST["correo"]    ?? ""), FILTER_SANITIZE_EMAIL);
$telefono  = strip_tags(trim($_POST["telefono"]  ?? ""));

if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo "Por favor introduce un correo electrónico válido.";
    exit();
}

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

$mail->isSMTP();
$mail->Host       = MAILER_SMTP_HOST;
$mail->SMTPAuth   = true;
$mail->Username   = MAILER_SMTP_USERNAME;
$mail->Password   = MAILER_SMTP_PASSWORD;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = MAILER_SMTP_PORT;
$mail->Timeout    = 30;
$mail->SMTPOptions = [
    "ssl" => [
        "verify_peer"      => false,
        "verify_peer_name" => false,
        "allow_self_signed" => true,
    ],
];

$mail->setFrom(MAILER_FROM_EMAIL, MAILER_FROM_NAME);
$mail->addAddress(MAILER_TO_EMAIL, MAILER_TO_NAME);
$mail->addReplyTo($correo, $nombre);
$mail->isHTML(true);

switch ($form_type) {

    // ── FORMULARIO A: Contacto / Hablemos de tu proyecto ─────────────────
    case "proyecto":
        if (empty($nombre) || empty($correo) || empty($telefono)) {
            http_response_code(400);
            echo "Por favor completa todos los campos obligatorios.";
            exit();
        }

        $empresa       = strip_tags(trim($_POST["empresa"]       ?? ""));
        $tipo_proyecto = strip_tags(trim($_POST["tipo_proyecto"] ?? ""));
        $cargo         = strip_tags(trim($_POST["cargo"]         ?? ""));
        $dimensiones   = strip_tags(trim($_POST["dimensiones"]   ?? ""));
        $informacion   = htmlspecialchars(trim($_POST["informacion"] ?? ""));

        $mail->Subject = "Nuevo contacto de proyecto – Extepar";
        $mail->Body = "
            <h2>Nueva solicitud de contacto</h2>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Empresa:</strong> {$empresa}</p>
            <p><strong>Tipo de proyecto:</strong> {$tipo_proyecto}</p>
            <p><strong>Cargo:</strong> {$cargo}</p>
            <p><strong>Dimensiones:</strong> {$dimensiones} m²</p>
            <p><strong>Teléfono:</strong> {$telefono}</p>
            <p><strong>Correo:</strong> {$correo}</p>
            <hr>
            <p><strong>Información adicional:</strong></p>
            <p>" . nl2br($informacion) . "</p>
        ";
        $mail->AltBody =
            "Nueva solicitud de contacto\n" .
            "Nombre: {$nombre}\nEmpresa: {$empresa}\nTipo de proyecto: {$tipo_proyecto}\n" .
            "Cargo: {$cargo}\nDimensiones: {$dimensiones} m²\nTeléfono: {$telefono}\nCorreo: {$correo}\n\n" .
            "Información adicional:\n{$informacion}";
        break;

    // ── FORMULARIO B: Evaluación técnica ─────────────────────────────────
    case "evaluacion":
        if (empty($nombre) || empty($correo) || empty($telefono)) {
            http_response_code(400);
            echo "Por favor completa todos los campos obligatorios.";
            exit();
        }

        $tipo_proyecto       = strip_tags(trim($_POST["tipo_proyecto"]       ?? ""));
        $ubicacion           = strip_tags(trim($_POST["ubicacion"]           ?? ""));
        $alcance             = strip_tags(trim($_POST["alcance"]             ?? ""));
        $etapa               = strip_tags(trim($_POST["etapa"]               ?? ""));
        $estudios_suelos     = strip_tags(trim($_POST["estudios_suelos"]     ?? ""));
        $condiciones_terreno = strip_tags(trim($_POST["condiciones_terreno"] ?? ""));
        $restricciones       = strip_tags(trim($_POST["restricciones"]       ?? ""));
        $empresa             = strip_tags(trim($_POST["empresa"]             ?? ""));
        $cargo               = strip_tags(trim($_POST["cargo"]               ?? ""));

        $mail->Subject = "Solicitud de evaluación técnica – Extepar";
        $mail->Body = "
            <h2>Solicitud de evaluación técnica</h2>
            <p><strong>Tipo de proyecto:</strong> {$tipo_proyecto}</p>
            <p><strong>Ubicación:</strong> {$ubicacion}</p>
            <p><strong>Alcance requerido:</strong> {$alcance}</p>
            <p><strong>Etapa del proyecto:</strong> {$etapa}</p>
            <hr>
            <p><strong>¿Estudio de mecánica de suelos?:</strong> {$estudios_suelos}</p>
            <p><strong>Condiciones del terreno:</strong> {$condiciones_terreno}</p>
            <p><strong>Restricciones:</strong> {$restricciones}</p>
            <hr>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Empresa:</strong> {$empresa}</p>
            <p><strong>Cargo:</strong> {$cargo}</p>
            <p><strong>Correo:</strong> {$correo}</p>
            <p><strong>Teléfono:</strong> {$telefono}</p>
        ";
        $mail->AltBody =
            "Solicitud de evaluación técnica\n" .
            "Tipo de proyecto: {$tipo_proyecto}\nUbicación: {$ubicacion}\n" .
            "Alcance: {$alcance}\nEtapa: {$etapa}\n" .
            "Estudio de suelos: {$estudios_suelos}\nCondiciones terreno: {$condiciones_terreno}\n" .
            "Restricciones: {$restricciones}\n" .
            "Nombre: {$nombre}\nEmpresa: {$empresa}\nCargo: {$cargo}\n" .
            "Correo: {$correo}\nTeléfono: {$telefono}";
        break;

    // ── FORMULARIO C: Talento / Únete al equipo ───────────────────────────
    case "talento":
        if (empty($nombre) || empty($correo) || empty($telefono)) {
            http_response_code(400);
            echo "Por favor completa todos los campos obligatorios.";
            exit();
        }

        $cargo = strip_tags(trim($_POST["cargo"] ?? ""));

        if (isset($_FILES["cv"]) && $_FILES["cv"]["error"] === UPLOAD_ERR_OK) {
            $allowed_types = [
                "application/pdf",
                "application/msword",
                "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                "image/jpeg",
                "image/png",
            ];
            $max_size = 5 * 1024 * 1024; // 5 MB

            if (!in_array($_FILES["cv"]["type"], $allowed_types)) {
                http_response_code(400);
                echo "Formato de archivo no permitido. Usa PDF, Word, JPG o PNG.";
                exit();
            }
            if ($_FILES["cv"]["size"] > $max_size) {
                http_response_code(400);
                echo "El archivo es demasiado grande. El máximo permitido es 5 MB.";
                exit();
            }

            $mail->addAttachment($_FILES["cv"]["tmp_name"], $_FILES["cv"]["name"]);
            $cv_label = "Sí (adjunto)";
        } else {
            $cv_label = "No";
        }

        $mail->Subject = "Nueva postulación – {$cargo} – Extepar";
        $mail->Body = "
            <h2>Nueva postulación de candidato</h2>
            <p><strong>Nombre:</strong> {$nombre}</p>
            <p><strong>Correo:</strong> {$correo}</p>
            <p><strong>Teléfono:</strong> {$telefono}</p>
            <p><strong>Área de interés:</strong> {$cargo}</p>
            <p><strong>CV adjunto:</strong> {$cv_label}</p>
        ";
        $mail->AltBody =
            "Nueva postulación\n" .
            "Nombre: {$nombre}\nCorreo: {$correo}\nTeléfono: {$telefono}\n" .
            "Área de interés: {$cargo}\nCV adjunto: {$cv_label}";
        break;

    default:
        http_response_code(400);
        echo "Tipo de formulario no reconocido.";
        exit();
}

try {
    $mail->send();
    http_response_code(200);
    echo "Gracias, tu mensaje fue enviado correctamente.";
} catch (Exception $e) {
    http_response_code(500);
    echo "Lo sentimos, ocurrió un error al enviar el mensaje. Intenta nuevamente más tarde.";
    error_log("PHPMailer Error: {$mail->ErrorInfo}");
}

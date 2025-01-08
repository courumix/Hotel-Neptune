<?php
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validate inputs
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Une adresse email valide est requise.";
    }
    
    if (empty($subject)) {
        $errors[] = "Le sujet est requis.";
    }
    
    if (empty($message)) {
        $errors[] = "Le message est requis.";
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        try {
            $stmt = $db->prepare("
                INSERT INTO contact_messages (name, email, phone, subject, message, created_at)
                VALUES (?, ?, ?, ?, ?, NOW())
            ");
            
            $stmt->execute([$name, $email, $phone, $subject, $message]);
            
            // Send email notification
            $to = "contact@hotel-neptune.fr";
            $email_subject = "Nouveau message de contact: " . $subject;
            $email_message = "Nom: $name\n";
            $email_message .= "Email: $email\n";
            $email_message .= "Téléphone: $phone\n\n";
            $email_message .= "Message:\n$message";
            
            $headers = "From: $email";
            
            mail($to, $email_subject, $email_message, $headers);
            
            // Redirect with success message
            $_SESSION['contact_success'] = "Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.";
            header("Location: contact.php");
            exit();
            
        } catch (PDOException $e) {
            $errors[] = "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer plus tard.";
        }
    }
    
    // If there are errors, store them in session and redirect back
    if (!empty($errors)) {
        $_SESSION['contact_errors'] = $errors;
        $_SESSION['contact_form_data'] = $_POST; // Store form data to repopulate
        header("Location: contact.php");
        exit();
    }
}
?>
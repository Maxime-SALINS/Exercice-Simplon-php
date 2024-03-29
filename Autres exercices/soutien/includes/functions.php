<?php


function selectUsers($pdo)
{
    $sql = "SELECT * FROM utilisateurs";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll();
}

function inscription($pdo, $nom, $email, $mot_de_passe)
{
    $sql = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    if ($stmt->fetch()) {
        return ['success' => false, 'message' => "Un utilisateur avec cet email existe déjà."];
    }

    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (:nom, :email, :mot_de_passe)";
    $stmt = $pdo->prepare($sql);
    $success = $stmt->execute(['nom' => $nom, 'email' => $email, 'mot_de_passe' => $mot_de_passe_hash]);

    if ($success) {
        return ['success' => true, 'message' => "L'utilisateur a été inscrit avec succès."];
    } else {
        return ['success' => false, 'message' => "Erreur lors de l'inscription de l'utilisateur."];
    }
}


function connexion($pdo, $email, $mot_de_passe)
{
    $sql = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email' => $email]);
    $utilisateur = $stmt->fetch();
    if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
        return $utilisateur;
    } else {
        return false;
    }
}

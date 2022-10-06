<?php


// AJOUTER UN CINEMA 
$addcinema = $bdd->prepare("INSERT INTO Cinéma(name, phone_cinéma, Zip_code, city, admin_id ) VALUES(?, ?, ?, ?, ?)");
$addcinema->execute(array($name, $phone_cinéma, $Zip_code, $city, $admin_id));
//SUPPRIMER UN CINEMA
$suppcinema = $bdd->prepare("DELETE FROM Cinéma WHERE Id_Cinéma = ?");
$statement->execute(array($Id_Cinéma));
// UPDATE UN CINEMA
$statement=$bdd->prepare("UPDATE Cinéma SET name, phone_cinéma, Zip_code, city, admin_id WHERE Id_Cinéma = ? ");
$statement->execute(array($name, $phone_cinéma, $Zip_code, $city, $admin_id, $Id_Cinéma));




// AJOUTER USER
$USER_info = $bdd->prepare("INSERT INTO USER_info(Firstname, Lastname, date_birth, email, password ) VALUES(?, ?, ?, ?, ?)");
$USER_info->execute(array($Firstname, $Lastname, $date_birth, $email, $password));
//SUPPRIMER UN USER
$DEL_USER_info = $bdd->prepare("DELETE FROM USER_info WHERE Id_USER_info = ?");
$DEL_USER_info->execute(array($Id_Cinéma));
// UPDATE UN USER
$statement=$bdd->prepare("UPDATE USER_info SET Firstname, Lastname, date_birth, email, password  WHERE Id_USER_info = ? ");
$statement->execute(array($Firstname, $Lastname, $date_birth, $email, $password, $Id_USER_info));




// AJOUTER COSTEMER
$customer = $bdd->prepare("INSERT INTO customer(type_payement, price_customer, user_id, Id_customer ) VALUES(?, ?, ?, ?)");
$customer->execute(array($type_payement, $price_customer, $user_id, $Id_customer));
//SUPPRIMER UN COSTEMER
$DEL_USER_info = $bdd->prepare("DELETE FROM customer WHERE Id_customer = ?");
$DEL_USER_info->execute(array($Id_customer));
// UPDATE UN COSTEMER
$statement=$bdd->prepare("UPDATE customer SET type_payement, price_customer, user_id, Id_customer  WHERE Id_customer = ? ");
$statement->execute(array($type_payement, $price_customer, $user_id, $Id_customer, $Id_customer));



// AJOUTER MOVIE
$movie = $bdd->prepare("INSERT INTO movie(genre, sceance_id, name, producteur ) VALUES(?, ?, ?, ?)");
$movie->execute(array($genre, $sceance_id, $name, $producteur));
//SUPPRIMER UN MOVIE
$DEL_movie = $bdd->prepare("DELETE FROM movie WHERE Id_movie = ?");
$DEL_movie->execute(array($Id_movie));
// UPDATE UN MOVIE
$statement=$bdd->prepare("UPDATE movie SET genre, sceance_id, name, producteur  WHERE Id_movie = ? ");
$statement->execute(array($genre, $sceance_id, $name, $producteur, $Id_movie));





// AJOUTER Admin
$Admin = $bdd->prepare("INSERT INTO Admin(user_id, Id_Cinéma) VALUES(?, ?)");
$Admin->execute(array($user_id, $Id_Cinéma));
//SUPPRIMER UN Admin
$DEL_USER_info = $bdd->prepare("DELETE FROM Admin WHERE Id_Admin = ?");
$DEL_admin->execute(array($Id_Admin));
// UPDATE UN Admin
$statement=$bdd->prepare("UPDATE Admin SET user_id, Id_Cinéma  WHERE Id_Admin = ? ");
$statement->execute(array($user_id, $Id_Cinéma, $Id_Admin));



// AJOUTER sceance
$sceance = $bdd->prepare("INSERT INTO sceance(Id_sceance, room_id_sceance, time_sceance, Id_movie) VALUES(?, ?, ?, ?)");
$sceance->execute(array($Id_sceance, $room_id_sceance, $time_sceance, $Id_movie));
//SUPPRIMER UNE sceance
$DEL_seance = $bdd->prepare("DELETE FROM sceance WHERE Id_sceance = ?");
$DEL_seance->execute(array($Id_sceance));
// UPDATE UNE sceance
$statement=$bdd->prepare("UPDATE sceance SET Id_sceance, room_id_sceance, time_sceance, Id_movie  WHERE Id_sceance = ? ");
$statement->execute(array($Id_sceance, $room_id_sceance, $time_sceance, $Id_movie, $Id_sceance));



// AJOUTER MovieRoom
$MovieRoom = $bdd->prepare("INSERT INTO MovieRoom(id_cinéma, nb_room, nb_place) VALUES(?, ?, ?)");
$MovieRoom->execute(array($id_cinéma, $nb_room, $nb_place));
//SUPPRIMER UNE MovieRoom
$DEL_USER_info = $bdd->prepare("DELETE FROM MovieRoom WHERE Id_MovieRoom = ?");
$DEL_room->execute(array($Id_MovieRoom));
// UPDATE UN Admin
$statement=$bdd->prepare("UPDATE MovieRoom SET id_cinéma, nb_room, nb_place  WHERE Id_MovieRoom = ? ");
$statement->execute(array($id_cinéma, $nb_room, $nb_place, $Id_MovieRoom));





?>
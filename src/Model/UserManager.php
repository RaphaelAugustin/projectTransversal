<?php
/**
 * Created by PhpStorm.
 * User: TaF
 * Date: 12/05/2015
 * Time: 10:16
 */

namespace Taf\Model;


use Symfony\Component\HttpFoundation\RedirectResponse;

class UserManager {

    protected $db;

    function __construct($connection) {
        $this->db = $connection;
    }
    function create_user(array $params)
    {

        //requete pour recupéré les info des comptes.
        $response = $this->db->query('SELECT login FROM users');


        //verify if username already exist.

        //C'est Sale !!!'
        while ($data = $response->fetch()) {
            foreach ($data AS $user) {
                if ($user == $params['username']) {
                    echo "Ce nom d'utilisateur existe déjà. Veuillez en choisir un autre.";
                    exit;
                }
            }
        }
        //cryptage password en SHA-1 (METTRE A JOUR EN SELL).

        $password_crypt = sha1($params['password']);

        if ($params['sex'] = "monsieur") {
            $gender = true;
        } else {
            $gender = false;
        }


        //requete preparé et exécution pour add pseudo et password dans la db.
        $req = $this->db->prepare("INSERT INTO users (login, password, gender, first_name, last_name, birthday, address, code_postal, city, country, phone_number, email, pin)
 VALUES (:login, :password, :gender, :first_name, :last_name, :birthday, :address, :code_postal, :city, :country, :phone_number, :email, :pin)");

        //bind des paramètre pour que SQL fasse les vérification de validité des chaine envoyées.

        $req->execute([
            'login' => $params['username'],
            'password' => $password_crypt,
            'gender' => $gender,
            'first_name' => $params['prenom'],
            'last_name' => $params['nom'],
            'birthday' => $params['anniversaire'],
            'address' => $params['adresse'],
            'code_postal' => $params['code'],
            'city' => $params['ville'],
            'country' => $params['pays'],
            'phone_number' => $params['telephone'],
            'email' => $params['mail'],
            'pin' => $params['code-pin']

        ]);

        echo "Votre compte à été crée";


    }

    //funcion for users connection.
    function connect_user($login, $password)
    {
        //use SHA-1 on password to crypt it.
        $password_crypt = sha1($password);


        //requete pour recupéré les info des comptes.
        $response = $this->db->query('SELECT id, login, password FROM users');
        //return $response;

        //verify if connect information is correct, if yes, create a Session.
        //Load home page when user login successful
        while ($data = $response->fetch()) {
            if ($data['login'] == $login && $data['password'] == $password_crypt) {
                $_SESSION['member'] = $login;
                $_SESSION['member_id'] = $data['id'];
            }
        }

    }



}
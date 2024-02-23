- EXERCICE 1: API SOAP
    LA QUÊTE DU TRÉSOR DES PIRATES
    Objectif : Développer un service web SOAP en PHP pour localiser les trésors cachés par les pirates. Cette tâche met en pratique la création d'un service web en utilisant le protocole SOAP, sans l'utilisation de frameworks.
    Définition du service :
    ● Fonctionnalité requise : Implémenter une fonction trouverTresor qui, étant donné le nom d'un pirate, renvoie les coordonnées (latitude et longitude) du trésor caché.
    ●  Implémentation : Utiliser PHP pour développer le service. La définition du service doit être explicitée dans un fichier WSDL.
    ● Test : Créer un client SOAP en PHP pour consommer le service développé et afficher les coordonnées des trésors trouvés.



Documentation : 

Messages:
- TreasureRequest:
    Description : Représente une requête pour trouver un trésor de pirate.
    Partie(s) :
    pirateName (type : xsd:string) - Le nom du pirate faisant la demande.

- TreasureResponse:
    Description : Représente la réponse contenant l'emplacement du trésor.
    Partie(s) :
    latitude (type : xsd:float) - Coordonnée de latitude de l'emplacement du trésor.
    longitude (type : xsd:float) - Coordonnée de longitude de l'emplacement du trésor.

- Type de Port:
    Nom : PirateTreasurePortType
    Opérations :
    trouverTresor :
    Description : Opération pour trouver un trésor de pirate.
    Entrée : Message TreasureRequest
    Sortie : Message TreasureResponse

- Binding:
    Nom : PirateTreasureBinding
    Type : PirateTreasurePortType
    Protocole : SOAP
    Style : Document
    Transport : HTTP

- Service:
    Nom : PirateTreasureService
    Ports :
    Nom : PirateTreasurePort
    Binding : PirateTreasureBinding
    Adresse : http://localhost:8000/piratetreasure/service.php




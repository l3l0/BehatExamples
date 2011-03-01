# language: pl

Właściwość: Zmiana danych użytkownika
  Jako użytkownik
  chcę zmienić dane w profilu

  Założenia:
    Zakładając że użytkownik jest "l3l0" w bazie
    I jestem na podstronie /user/profile/l3l0

  Scenariusz: Wypełniam wszystkie potrzebne pola
    Zakładając że wypełniam pole formularza "userProfile[firstname]" wartością "Leszek"
    I wypełniam pole formularza "userProfile[lastname]" wartością "Prabucki"
    I wypełniam pole formularza "userProfile[email]" wartością "leszek.prabucki@gmail.com"
    I wypełniam pole formularza "userProfile[age]" wartością "24"
    I wypełniam pole formularza "userProfile[job]" wartością "PHP developer"
    Jeżeli naciskam guzik "Save" z formularza userProfile
    Wtedy powinien pokazać się tekst "Your details is saved."
    I użytkownik "Leszek" "Prabucki" z mailiem "leszek.prabucki@gmail.com" powinnen zostać utworzony
 
  Scenariusz: Nie wypełniam wszystkich potrzebnych pól
    Zakładając że wypełniam pole formularza "userProfile[firstname]" wartością "Leszek"
    Jeżeli naciskam guzik "Save" z formularza userProfile;
    Wtedy powinien pokazać się tekst "You should fill all required fields."

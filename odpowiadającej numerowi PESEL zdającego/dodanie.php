<?php
    $nr_karetki = $_POST['nr_karetki'];
    $ratownik1 = $_POST['ratownik1'];
    $ratownik2 = $_POST['ratownik2'];
    $ratownik3 = $_POST['ratownik3'];

    $connect = mysqli_connect('localhost', 'root');
    mysqli_select_db($connect,'ee09');
    $zapytanie = "INSERT INTO ratownicy (nrKaretki,ratownik1,ratownik2,ratownik3) VALUES ($nr_karetki,'$ratownik1','$ratownik2','$ratownik3')";
    mysqli_query($connect,$zapytanie);

    echo "do bazy zostało wysłane zapytanie: $zapytanie";

    mysqli_close($connect);
?>
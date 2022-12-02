<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        table, th, td {
            border: 1px solid;
        }
    </style>

    <title>Mois de l'année</title>
</head>
<body>
    <table>
        <legend>Jours par mois</legend>
        <thead>
            <tr>
                <th>Mois</th>
                <th>Nombre de jours</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $mois_jours = array(
                    "Janvier" => 31,
                    "Février" => 28,
                    "Mars" => 31,
                    "Avril" => 30,
                    "Mai" => 31,
                    "Juin" => 30,
                    "Juillet" => 31,
                    "Août" => 30,
                    "Septembre" => 31,
                    "Octobre" => 30,
                    "Novembre" => 31,
                    "Decembre" => 30
                );

                asort($mois_jours);

                foreach($mois_jours as $mois => $jours) {
                    echo"
                        <tr>
                            <td>$mois</td>
                            <td>$jours</td>
                        </tr>
                        ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>

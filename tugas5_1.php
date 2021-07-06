<?php

$logika_1 = (false and false);
$logika_2 = (false and true);
$logika_3 = (true and false);
$logika_4 = (true and true);
$logika_5 = (false or false);
$logika_6 = (false or true);
$logika_7 = (true or false);
$logika_8 = (true or true);

printf(
    "Tabel Logika $logika_4$logika_6$logika_7$logika_8
    <table border='1'>
        <thead>
            <tr>
                <td>Input true</td>
                <td>Input 2</td>
                <td>AND</td>
                <td>OR</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>false</td>
                <td>false</td>
                <td>$logika_1</td>
                <td>$logika_5</td>
            </tr>
            <tr>
                <td>false</td>
                <td>true</td>
                <td>$logika_2</td>
                <td>$logika_6</td>
            </tr>
            <tr>
                <td>true</td>
                <td>false</td>
                <td>$logika_3</td>
                <td>$logika_7</td>
            </tr>
            <tr>
                <td>true</td>
                <td>true</td>
                <td>$logika_4</td>
                <td>$logika_8</td>
            </tr>
        </tbody>
    </table>"
);



?>
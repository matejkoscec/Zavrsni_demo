<?php

require './page_scripts/dbh.php';

$sql = 'SELECT * FROM settings_by_date WHERE date_active = \'' . date('Y-m-d', time()) . '\'';
$result = mysqli_query($conn, $sql);

if (!empty($result)) {

    $sbdRow = mysqli_fetch_assoc($result);

    $sql = 'SELECT * FROM active_setting WHERE id = 1';
    $result = mysqli_query($conn, $sql);

    if (!empty($result)) {

        $asRow = mysqli_fetch_assoc($result);

        if ($sbdRow['option_name'] != $asRow['option_name']) {

            $sql = "DELETE FROM active_setting WHERE id = 1";
            mysqli_query($conn, $sql);
            $sql = "INSERT INTO active_setting (id, option_name, time_string, ring_enable) VALUES (1, ?, ?, ?);";
            $stmt = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ./admin.php?error=sqlerror");
                exit();
            } else {
                mysqli_stmt_bind_param($stmt, "sss", $sbdRow['option_name'], $sbdRow['time_string'], $sbdRow['ring_enable']);
                mysqli_stmt_execute($stmt);
            }

            arduinoDataSetup();
        }
    } else {

        $sql = "INSERT INTO active_setting (id, option_name, time_string, ring_enable) VALUES (1, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ./admin.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "sss", $sbdRow['option_name'], $sbdRow['time_string'], $sbdRow['ring_enable']);
            mysqli_stmt_execute($stmt);
        }

        arduinoDataSetup();
    }
}

$sql = "SELECT * FROM arduino_command;";
$result = mysqli_query($conn, $sql);

if (!empty($result)) $row = mysqli_fetch_assoc($result);

echo '#' . $row['eeprom_action'] . $row['option_name'] . '?' . $row['time_string'] . '?' . $row['ring_enable'] . '#';



function arduinoDataSetup()
{
    require './page_scripts/dbh.php';

    $sql = "DELETE FROM arduino_command;";
    mysqli_query($conn, $sql);

    $sql = 'SELECT * FROM active_setting WHERE id = 1';
    $result = mysqli_query($conn, $sql);
    if (!empty($result)) $row = mysqli_fetch_assoc($result);

    $sql = "INSERT INTO arduino_command ( eeprom_action, option_name, time_string, ring_enable ) VALUES ('a', ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ./admin.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "sss", $row['option_name'], $row['time_string'], $row['ring_enable']);
        mysqli_stmt_execute($stmt);
    }
}

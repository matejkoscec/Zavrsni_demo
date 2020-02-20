<form action="save_to_db.php" method="post" id="time_set">
    <?php
    $i = 0;

    if (!empty($row['time_string'])) {
        $pm = substr($row['time_string'], -(int) (strlen($row['time_string']) / 2) - 1);
        $am = $row['time_string'];
        $am = str_replace($pm, '', $am);
    } else {
        $pm = substr($_SESSION['time-string'], -(int) (strlen($_SESSION['time-string']) / 2) - 1);
        $am = $_SESSION['time-string'];
        $am = str_replace($pm, '', $am);
    }

    ?>
    <h2>Naziv postavke</h2>
    <input class="option-name" type="text" maxlength="50" name="opn" placeholder="<?php
                                                                                    if (isset($_SESSION['selected-button-value-1'])) echo $_SESSION['selected-button-value-1'];
                                                                                    else if (isset($_SESSION['selected-button-value-2'])) echo $_SESSION['selected-button-value-2'];
                                                                                    else if (isset($_SESSION['selected-button-value-3'])) echo $_SESSION['selected-button-value-3'];
                                                                                    else if (isset($_SESSION['selected-button-value-4'])) echo $_SESSION['selected-button-value-4'];
                                                                                    else echo $_SESSION['option-name'];
                                                                                    ?>">
    <br>
    <table class="time-setup">
        <th>Jutarnja smjena</th>
        <th>Zvoni</th>
        <tr>
            <td>
                <h3>1. sat: </h3>
                <input type="text" name="u10" maxlength="2" min="00" max="24" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u11" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="u12" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u13" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="u1" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>2. sat: </h3>
                <input type="text" name="u20" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u21" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="u22" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u23" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="u2" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>3. sat: </h3>
                <input type="text" name="u30" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u31" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="u32" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u33" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="u3" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>4. sat: </h3>
                <input type="text" name="u40" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u41" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="u42" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u43" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="u4" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>5. sat: </h3>
                <input type="text" name="u50" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u51" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="u52" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u53" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="u5" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>6. sat: </h3>
                <input type="text" name="u60" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u61" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="u62" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u63" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="u6" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>7. sat: </h3>
                <input type="text" name="u70" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u71" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="u72" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="u73" maxlength="2" placeholder="<?php echo $am[$i] . $am[$i + 1];
                                                                            $i = 0; ?>">
            </td>
            <td><input type="checkbox" name="u7" value="1" checked></td>
        </tr>
    </table>

    <table class="time-setup">
        <th>Popodnevna smjena</th>
        <th>Zvoni</th>
        <th></th>
        <tr>
            <td>
                <h3>1. sat: </h3>
                <input type="text" name="p10" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p11" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="p12" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p13" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="p1" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>2. sat: </h3>
                <input type="text" name="p20" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p21" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="p22" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p23" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="p2" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>3. sat: </h3>
                <input type="text" name="p30" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p31" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="p32" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p33" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="p3" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>4. sat: </h3>
                <input type="text" name="p40" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p41" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="p42" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p43" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="p4" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>5. sat: </h3>
                <input type="text" name="p50" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p51" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="p52" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p53" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="p5" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>6. sat: </h3>
                <input type="text" name="p60" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p61" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="p62" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p63" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="p6" value="1" checked></td>
        </tr>
        <tr>
            <td>
                <h3>7. sat: </h3>
                <input type="text" name="p70" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p71" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3> - </h3>
                <input type="text" name="p72" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
                <h3>:</h3>
                <input type="text" name="p73" maxlength="2" placeholder="<?php echo $pm[$i] . $pm[$i + 1];
                                                                            $i += 2 ?>">
            </td>
            <td><input type="checkbox" name="p7" value="1" checked></td>
        </tr>
    </table>
</form>
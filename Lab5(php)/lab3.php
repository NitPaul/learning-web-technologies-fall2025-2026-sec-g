<!DOCTYPE html>
<html>
<head>
    <title>Lab 3.2 Solution</title>
</head>
<body>

    <form method="post">
        <table width="700">
            <tr>
                <td>
                    <fieldset>
                        <legend>Name</legend>
                        <table>
                            <tr><td>Name</td></tr>
                            <tr>
                                <td>
                                    <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>">
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </fieldset>
                    <input type="submit" name="btn_name" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['btn_name'])) {
        $name = $_POST['name'];
        if ($name == "") {
            echo "Null value";
        } else {
            // Check first char is letter
            if (!ctype_alpha($name[0])) {
                echo "Must start with letter";
            } else {
                // Check valid chars using manual loop
                $valid = true;
                for ($i = 0; $i < strlen($name); $i++) {
                    $c = $name[$i];
                    // Allowing letters, period, dash, and space
                    if (!ctype_alpha($c) && $c != '.' && $c != '-' && $c != ' ') {
                        echo "Invalid char: " . $c;
                        $valid = false;
                        break;
                    }
                }
                if ($valid) {
                    if (str_word_count($name) < 2)
                        echo "At least 2 words";
                    else
                        echo "<b>Valid Name:</b> $name";
                }
            }
        }
    }
    ?>

    <br>

    <form method="post">
        <table width="700">
            <tr>
                <td>
                    <fieldset>
                        <legend>Email</legend>
                        <table>
                            <tr><td>Email</td></tr>
                            <tr>
                                <td>
                                    <input type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                                    <button type="button" title="hint: sample@example.com">i</button>
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </fieldset>
                    <input type="submit" name="btn_email" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['btn_email'])) {
        $email = $_POST['email'];
        if ($email == "")
            echo "Null value";
        else {
            // Manual check for @ and . position
            $at = -1;
            $dot = -1;
            for ($i = 0; $i < strlen($email); $i++) {
                if ($email[$i] == '@')
                    $at = $i;
                if ($email[$i] == '.')
                    $dot = $i;
            }

            //  Must have @ and ., and . must come after @
            if ($at == -1 || $dot == -1 || $dot < $at)
                echo "Invalid email format";
            else
                echo "<b>Valid Email:</b> $email";
        }
    }
    ?>

    <br>

    <form method="post">
        <table width="700">
            <tr>
                <td>
                    <fieldset>
                        <legend>Date Of Birth</legend>
                        <table>
                            <tr>
                                <td>dd</td><td>mm</td><td>yyyy</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="dd" style="width:40px" value="<?php echo isset($_POST['dd']) ? $_POST['dd'] : ''; ?>"> /</td>
                                <td><input type="text" name="mm" style="width:40px" value="<?php echo isset($_POST['mm']) ? $_POST['mm'] : ''; ?>"> /</td>
                                <td><input type="text" name="yyyy" style="width:60px" value="<?php echo isset($_POST['yyyy']) ? $_POST['yyyy'] : ''; ?>"></td>
                            </tr>
                        </table>
                        <hr>
                    </fieldset>
                    <input type="submit" name="btn_dob" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['btn_dob'])) {
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];

        if ($dd == "" || $mm == "" || $yyyy == "") {
            echo "Null value";
        } elseif (!is_numeric($dd) || !is_numeric($mm) || !is_numeric($yyyy)) {
            echo "Must be valid numbers";
        } elseif ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1953 || $yyyy > 1998) {
            echo "Date out of valid range (1953-1998)";
        } else {
            echo "<b>Valid DOB:</b> $dd/$mm/$yyyy";
        }
    }
    ?>

    <br>

    <form method="post">
        <table width="250">
            <tr>
                <td>
                    <fieldset>
                        <legend>Gender</legend>
                        <table>
                            <tr>
                                <td>
                                    <input type="radio" name="gender" value="Male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Male') echo 'checked'; ?>> Male
                                    <input type="radio" name="gender" value="Female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Female') echo 'checked'; ?>> Female
                                    <input type="radio" name="gender" value="Other" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'Other') echo 'checked'; ?>> Other
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </fieldset>
                    <input type="submit" name="btn_gender" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['btn_gender'])) {
        if (!isset($_POST['gender']))
            echo "Select gender";
        else
            echo "<b>Gender:</b> " . $_POST['gender'];
    }
    ?>

    <br>

    <form method="post">
        <table width="250">
            <tr>
                <td>
                    <fieldset>
                        <legend>Degree</legend>
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" name="deg[]" value="SSC" <?php if (isset($_POST['deg']) && in_array('SSC', $_POST['deg'])) echo 'checked'; ?>>SSC
                                    <input type="checkbox" name="deg[]" value="HSC" <?php if (isset($_POST['deg']) && in_array('HSC', $_POST['deg'])) echo 'checked'; ?>>HSC
                                    <input type="checkbox" name="deg[]" value="BSc" <?php if (isset($_POST['deg']) && in_array('BSc', $_POST['deg'])) echo 'checked'; ?>>BSc
                                    <input type="checkbox" name="deg[]" value="MSc" <?php if (isset($_POST['deg']) && in_array('BSc', $_POST['deg'])) echo 'checked'; ?>>MSc
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </fieldset>
                    <input type="submit" name="btn_degree" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['btn_degree'])) {
        if (!isset($_POST['deg']) || count($_POST['deg']) < 2)
            echo "Select at least 2";
        else {
            echo "<b>Degrees:</b> ";
            foreach ($_POST['deg'] as $d)
                echo $d . " ";
        }
    }
    ?>

    <br>

    <form method="post">
        <table width="250">
            <tr>
                <td>
                    <fieldset>
                        <legend>Blood Group</legend>
                        <table>
                            <tr>
                                <td>Blood Group
                                    <select name="bg">
                                        <option value="">Select</option>
                                        <option value="A+" <?php if (isset($_POST['bg']) && $_POST['bg'] == 'A+') echo 'selected'; ?>>A+</option>
                                        <option value="A-" <?php if (isset($_POST['bg']) && $_POST['bg'] == 'A-') echo 'selected'; ?>>A-</option>
                                        <option value="B+" <?php if (isset($_POST['bg']) && $_POST['bg'] == 'B+') echo 'selected'; ?>>B+</option>
                                        <option value="O+" <?php if (isset($_POST['bg']) && $_POST['bg'] == 'O+') echo 'selected'; ?>>O+</option>
                                        <option value="O-" <?php if (isset($_POST['bg']) && $_POST['bg'] == 'O-') echo 'selected'; ?>>O-</option>
                                        <option value="AB+" <?php if (isset($_POST['bg']) && $_POST['bg'] == 'AB+') echo 'selected'; ?>>AB+</option>
                                        <option value="AB-" <?php if (isset($_POST['bg']) && $_POST['bg'] == 'AB-') echo 'selected'; ?>>AB-</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <hr>
                    </fieldset>
                    <input type="submit" name="btn_bg" value="Submit"/>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['btn_bg'])) {
        if ($_POST['bg'] == "")
            echo "Select Blood Group";
        else
            echo "<b>Blood Group:</b> " . $_POST['bg'];
    }
    ?>

</body>
</html>
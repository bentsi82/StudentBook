<div id="tabs_container">
    <ul class="tablist">
        <li id="current">צעד ראשון</li>
        <li class="seperators"></li>
        <li>צעד שני</li>
        <li class="seperators"></li>
        <li>סיום</li>
        <li class="seperators"></li>
        <li id="last"></li>
    </ul>
    <div id="content">
        <div id="step_1">
            <p class="profile_header">פרטי הפרופיל שלך</p>
            <table id="profile_table">
                <tr>
                    <td>שם פרטי</td>
                    <td><input class="profile_input" name="firstname" type="text" value="<?php echo $_POST['firstname'] ?>" disabled></td>
                </tr>
                <tr>
                    <td>שם משפחה</td>
                    <td><input class="profile_input" name="lastname" type="text" value="<?php echo $_POST['lastname'] ?>" disabled></td>
                </tr>
                <tr>
                    <td>שם משתמש</td>
                    <td><input class="profile_input" name="username" type="text" value="<?php echo $_POST['username'] ?>" disabled></td>
                </tr>
                <tr>
                    <td>תאריך לידה</td>
                    <td><input class="profile_input" name="birthdate" type="date"></td>
                </tr>
                <tr>
                    <td>כתובת</td>
                    <td><input class="profile_input" name="address" type="text" value="" maxlength="20"></td>
                </tr>
                <tr>
                    <td>מייל</td>
                    <td><input class="profile_input" name="email" type="email" value="<?php echo $_POST['email'] ?>" disabled></td>
                </tr>
            </table>
            <input class="common-submit welcome_submit" name="to_step_2" type="button" onclick="go_to_step2();" value="המשך">
        </div>
        <div id="step_2">
            <p class="profile_header">הכנס תמונת פרופיל</p>
            <div id="pic_area"></div>
            <input id="file_upload" name="file_upload" type="file"><br>
            <input class="common-submit welcome_submit" name="to_end" type="button" onclick="go_to_finish();" value="המשך"><br/>
            <span id="continue">במידה ואינך רוצה תמונת פרופיל , לחץ על "המשך"</span>
        </div>
        <div id="step_end">
            <p class="profile_header" id="welcome_start"><?php echo 'ברוך הבא, ' ;?> <span id="welcome_user"><?php echo $_POST["username"]; ?></span> </p><br/>
            <span id="welcome_end">הרשמתך הסתיימה בהצלחה , לחץ על "סיום" להמשך</span><br/>
            <input class="common-submit welcome_submit" name="endreg" type="button" onclick="aa();" value="סיום">
        </div>
    </div>
</div>

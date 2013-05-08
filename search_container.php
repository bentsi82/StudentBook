<form method="GET" action="search.php">
    <div id="search_container">
        <span>חפש סטודנט :</span>
        <input name="search_area" type="text" placeholder="הקלד שם לחיפוש">
        <input name="search_submit" type="submit" value="חפש">
    </div>
</form>

<div id="search_result">
    <?php 
        global $db;
        if (isset($_GET['search_area']))
        {
            echo $_GET['search_area'];
            sb_db_connect();
            
            $res = $db->query("SELECT username FROM users WHERE username LIKE '%" . $_GET['search_area'] . "%'");
            
            
            while ($row = $res->fetch_assoc())
            {
                echo $row['username'] . '<br/>';
            }
        }
    ?>
</div>
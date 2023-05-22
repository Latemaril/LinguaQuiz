<?php



add_action( 'template_redirect', 'reload_array_in_database' );

function reload_array_in_database() {

    $conn = database_connect();

// проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());
    $user_cart = array();

    $sql = "SELECT json_data FROM sum_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result)['json_data'];
        }else{
            return 0;
        }
        if(empty($row)){
//            echo "ПУСТО";
            return 0;
        }else{
            $user_cart = json_decode($row,true);
//            echo "JSON по пользователю: ".$row;
        }
    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    foreach ($user_cart as $key => $value) {
        $user_cart[$key] = 0;
    }
//    print_r($user_cart);
    $user_cart = json_encode($user_cart);

// выполнение SQL-запроса для обновления значения в столбце json_data по hash
    $sql = "UPDATE sum_per_user SET json_data = '$user_cart' WHERE hash = '$user_hash'";
    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце json_data успешно обнулено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }

    $sql = "UPDATE sum_per_user SET sum = '0', boxberry = '0', album_order = '0' WHERE hash = '$user_hash'";
    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце sum успешно обнулено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}


function database_connect(): bool|mysqli
{
    try {
        $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
        $dotenv->load();
        $db_name        = getenv('DB_NAME');
        $db_user        = getenv('DB_USER');
        $db_password    = getenv('DB_PASSWORD');
        $db_host        = getenv('DB_HOST');
    } catch (Exception $e){
        $db_name        = 'photobook';
        $db_user        = 'root';
        $db_password    = '';
        $db_host        = 'localhost';
    }

    return mysqli_connect($db_host, $db_user, $db_password, $db_name);
}

function updateAmount($collectionId, $newAmount) {

    $conn = database_connect();

// проверка соединения
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Селектим json по пользователю, если он есть
    $user_hash = md5(getUserIP());
    $user_cart = array();

//    echo 'Хеш пользователя: '.$user_hash;
    $sql = "SELECT json_data FROM sum_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result)['json_data'];
        if(empty($row)){
            CreateNewRecord($user_hash,$conn);
        }
    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

// выполнение SQL-запроса для обновления значения в столбце json_data по hash
    $id = collection_id($collectionId);
    $sql = "UPDATE collections_per_user SET $id = $newAmount WHERE hash = '$user_hash'";
    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце json_data успешно обновлено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function getParamValue($param_name) {

    $conn = database_connect();

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT value_param FROM settings where key_param = '$param_name'";
    $result = mysqli_query($conn, $sql);

// Check for errors in the query
    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);
    $key = $row["value_param"];

    mysqli_close($conn);

    return $key;
}

function setParamValue($param_name, $value){

    $conn = database_connect();

// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "UPDATE settings SET value_param='$value' WHERE key_param = '$param_name'";
    if (!mysqli_query($conn, $sql)) {
        echo "Ошибка обновления ${$param_name}";
    }

    mysqli_close($conn);
}

function collection_price() {

    $conn = database_connect();

// проверка соединения
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Получаем коллекцию с ценами
    $collection_price  = array();
    $sql = "SELECT price, pseudo_id FROM collection_price";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Получаем все коллекции
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[$row['pseudo_id']] = $row['price'];
        }
        $collection_price = $rows;
    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    return $collection_price;
}

function collection_price_discount() {

    $conn = database_connect();

// проверка соединения
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Получаем коллекцию с ценами
    $collection_price  = array();
    $sql = "SELECT discount_price, pseudo_id FROM collection_price";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Получаем все коллекции
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[$row['pseudo_id']] = $row['discount_price'];
        }
        $collection_price = $rows;
    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    return $collection_price;
}


function determine_cost($id, $sum) {

    switch ($id) {
        case '41318':
            if ($sum <= 24) {
                $collection_price = collection_price();
            } else {
                $collection_price = collection_price_discount();
            }
            break;
        case '62030':
            if ($sum <= 12) {
                $collection_price = collection_price();
            } else {
                $collection_price = collection_price_discount();
            }
            break;
        default:
            if ($sum <= 48) {
                $collection_price = collection_price();
            } else {
                $collection_price = collection_price_discount();
            }
            break;
    }

    return $collection_price;
}


function price_calculation() {

    $conn = database_connect();

// проверка соединения
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());
    $row = array();
    $sql = "SELECT col_11015, col_20913, col_37510, col_41318, col_57575, col_62030 FROM collections_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if(empty($row)){
            CreateNewRecord($user_hash,$conn);
        }
    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    $sum = 0;
    $id = null;
    foreach ($row as $collection_id => $value) {
        $collection_price = determine_cost($collection_id, $value);
        $sum += $collection_price[collection_pseudo_id($collection_id)] * $value;
    }


    $sql = "UPDATE sum_per_user SET album_order = '$sum', sum = '$sum' WHERE hash = '$user_hash'";
    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце sum успешно обновлено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    return $sum;
}

function collection_id($collection_id): ?string {

    $id = null;

    switch ($collection_id) {
        case '11015':
            $id = 'col_11015';
            break;
        case '20913':
            $id = 'col_20913';
            break;
        case '37510':
            $id = 'col_37510';
            break;
        case '41318':
            $id = 'col_41318';
            break;
        case '57575':
            $id = 'col_57575';
            break;
        case '62030':
            $id = 'col_62030';
            break;
    }

    return $id;
}

function collection_pseudo_id($collection_id): ?string {
    $id = null;
    switch ($collection_id) {
        case 'col_11015':
            $id = '11015';
            break;
        case 'col_20913':
            $id = '20913';
            break;
        case 'col_37510':
            $id = '37510';
            break;
        case 'col_41318':
            $id = '41318';
            break;
        case 'col_57575':
            $id = '57575';
            break;
        case 'col_62030':
            $id = '62030';
            break;
    }

    return $id;
}

function add_boxberry_price($bb_pvz) {

    $conn = database_connect();

// проверка соединения
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());

    $sql = "UPDATE sum_per_user SET boxberry = '$bb_pvz' WHERE hash = '$user_hash'";
    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце sum успешно обновлено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    return $bb_pvz;
}

function getUserIP() {
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function updateSum() {

    $conn = database_connect();

// проверка соединения
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $user_hash = md5(getUserIP());

    $album_order = get_order_sum_from_db();

    if ($album_order < 2000) {
        $sql = "UPDATE sum_per_user SET sum = boxberry + album_order WHERE hash = '$user_hash'";
    } else {
        $sql = "UPDATE sum_per_user SET sum = album_order WHERE hash = '$user_hash'";
    }

    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце sum успешно обновлено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function CreateNewRecord($hash, $conn){
    $json_empty  = array();
    $rows = array();

    $sql = "SELECT pseudo_id FROM collection_price";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Получаем все коллекции
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[$row['pseudo_id']] = 0;
        }
        $json_empty = $rows;

    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    $json_data = json_encode($json_empty);

    $sql = "INSERT into sum_per_user(hash, json_data)
            values ('$hash','$json_data')";
    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце sum успешно обновлено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }

    $sql = "INSERT into collections_per_user(hash)
            values ('$hash')";
    if (mysqli_query($conn, $sql)) {
//        echo "Значение в столбце sum успешно обновлено";
    } else {
        echo "Ошибка при обновлении значения: " . mysqli_error($conn);
    }
}

function get_collections() {

    $conn = database_connect();

// проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());
    $user_cart = array();

    $row = null;
    $sql = "SELECT col_11015, col_20913, col_37510, col_41318, col_57575, col_62030 FROM collections_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);

    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    mysqli_close($conn);

    return $row;
}

function get_json() {

    $conn = database_connect();

// проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());
    $user_cart = array();

    $row = null;
    $sql = "SELECT json_data FROM sum_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result)["json_data"];

    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    mysqli_close($conn);

    return $row;
}

function get_total_sum_from_db() {

    $conn = database_connect();

// проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());
    $user_cart = array();

    $sql = "SELECT sum FROM sum_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row["sum"];
    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function get_order_sum_from_db() {

    $conn = database_connect();

// проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());
    $user_cart = array();

    $sql = "SELECT album_order FROM sum_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row["album_order"];
    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    mysqli_close($conn);
}

function post_info($time, $id, $json, $sum, $name, $phone, $email, $city, $delivery, $comment) {

    try {
        $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
        $dotenv->load();
        $db_name        = getenv('DB_NAME');
        $db_user        = getenv('DB_USER');
        $db_password    = getenv('DB_PASSWORD');
        $db_host        = getenv('DB_HOST');
    } catch (Exception $e){
        $db_name        = 'photobook';
        $db_user        = 'root';
        $db_password    = '';
        $db_host        = 'localhost';
    }

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// проверяем соединение
    if ($conn->connect_error) {
        die("Connection failed: " . mysqli_error($conn));
    }

    $sql = "INSERT INTO payment_info (name, phone, email, city, delivery_address, comment, order_sum, order_json, order_id, date) VALUES ('$name', '$phone', '$email', '$city', '$delivery', '$comment', '$sum', '$json', '$id', '$time')";
    if ($conn->query($sql) === TRUE) {
        echo "Новая строка успешно создана";
    } else {
        echo "Ошибка при обновлении значения: " . $conn->error;
    }

    $conn->close();
}

function get_boxberry_cost() {

    $conn = database_connect();

// проверяем соединение
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_hash = md5(getUserIP());
    $user_cart = array();

    $row = null;

    $sql = "SELECT boxberry FROM sum_per_user WHERE hash = '$user_hash'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result)['boxberry'];

    } else {
        echo 'Ошибка выполнения запроса: ' . mysqli_error($conn);
    }

    mysqli_close($conn);

    return $row;
}

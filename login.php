<?php

$g_title = 'ログイン';
$js_array= ['js/login.js'];

$menu_code = 'login';

include 'inc_header.php';

?>

<main class="mx-auto border rounded-2 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">

    <form method="post" class="w-25 mt-5 m-auto" action="aaa.php">
        <img src="./images/logo.svg" width="72" alt="">
        <h1 class="h3 mb-3">ログイン</h1>
        <div class="form-floating mt-2">
            <input type="text" class="form-control" id="f_id" placeholder="ID入力" autocomplete="off">
            <label for="f_id">ID</label>
        </div>
        <div class="form-floating mt-2">
            <input type="password" class="form-control" id="f_pw" placeholder="パスワード入力">
            <label for="f_pw">パスワード</label>
        </div>
        <button class="w-100 mt-2 btn btn-lg btn-primary" id="btn_login" type="button">ログイン</button>
    </form>

</main>

<?php
include 'inc_footer.php'

?>
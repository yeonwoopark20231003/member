<?php

$g_title = '会員登録ありがとうございます。';
$js_array= ['js/member_success.js'];

$menu_code = 'member';

include 'inc_header.php';

?>

<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">

    <img src="images/logo.svg" class="w-50" alt="">
    <div>
    <h3>会員登録ありがとうございます。</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nam accusantium odit recusandae reprehenderit amet! Incidunt dolorum placeat repudiandae enim doloribus labore et numquam molestiae consequatur aliquid, nostrum saepe deleniti magni quo repellat iste modi odit sint nulla nobis nemo molestias hic maxime. Repudiandae facere amet quas veniam, ea voluptate.</p>
    <button class="btn btn-primary" id="btn_login">ログイン</button>
    </div>


</main>

<?php
include 'inc_footer.php'

?>
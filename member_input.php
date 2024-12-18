<?php
if(!isset($_POST['chk'])or$_POST['chk']!=1){
    //die("<script> alert('約款等を同意してから接近してください。') self.location.href=''; </script>");
}

$js_array=['js/member_input.js'];

$g_title='会員登録';

include 'inc_header.php';
?>
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>



<main class="w-50 mx-auto border rounded-5 p-5">
    <h1 class="text-center">会員登録</h1>
<form name="input_form" method="post" enctype="multipart/form-data" autocomplete="off" action="pg/member_process.php">
    <input type="hidden" name="mode" value="input">
    <input type="hidden" name="id_chk" value="0">
    <input type="hidden" name="email_chk" value="0">
    <div class="d-flex gap-2 align-items-end">
        <div>
         <label for="f_id" class="form-label">ID</label>
         <input type="text" name="id" class="form-control" id="f_id" placeholder="IDを入力してください。">    
        </div>   
        <button type="button" class="btn btn-secondary" id="btn_id_check">ID重複チェック</button>
    </div>

    <div class="d-flex mt-3 gap-2 align-items-end">
        <div>
         <label for="f_id" class="form-label">名前</label>
         <input type="text" name="name" class="form-control" id="f_name" placeholder=" 名前を入力してください。">    
        </div> 
    </div>

    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="w-50">
         <label for="f_password" class="form-label">パスワード</label>
         <input type="password" name="password" class="form-control" id="f_password" placeholder="パスワードを入力してください。">    
        </div>   
        <div class="w-50">
         <label for="f_password2" class="form-label">パスワード確認</label>
         <input type="password" name="password2" class="form-control" id="f_password2" placeholder="パスワードを入力してください。">    
        </div> 
    </div>

    <div class="d-flex mt-3 gap-2 align-items-end">
        <div class="flex-grow-1">
         <label for="f_email" class="form-label">メールアドレス</label>
         <input type="text" name="email" class="form-control" id="f_email" placeholder="メールアドレスを入力してください。">    
        </div>   
        <button type="button" id="btn_email_check" class="btn btn-secondary">メールアドレスの重複確認</button>
    </div>

    <div class=" mt-3 d-flex gap-2 align-items-end">
        <div>
            <label for="f_zipcode">郵便番号</label>
            <input type="text" name="zipcode" id="f_zipcode" readonly class="form-control" maxlength="5" minlength="5">
        </div>
        <button type="button" id="btn_zipcode" class="btn btn-secondary">郵便番号検索</button>
    </div>

    <div class="d-flex mt-3 gap-2 justify-content-between">
        <div class="w-50">
         <label for="f_addr1" class="form-label">住所</label>
         <input type="text" class="form-control" name="addr1" id="f_addr1" placeholder="">    
        </div>   
        <div class="w-50">
         <label for="f_addr2" class="form-label">詳細住所</label>
         <input type="text" class="form-control" name="addr2" id="f_addr2" placeholder="詳細住所を入力してください。">    
        </div> 
    </div>

    <div class="mt-3 d-flex gap-5">
        <div>
            <label for="f_photo" class="form-label">プロフィールイメージ</label>
            <input type="file" name="photo" id="f_photo" class="form-control">
        </div>
        <img src="images/person.jpg" id="f_preview" class="w-25" alt="profile image">
    </div>

    <div class="mt-3 d-flex gap-2">
        <button type="button" class="btn btn-primary w-50" id="btn_submit">加入</button>
        <button type="button" class="btn btn-secondary">キャンセル</button>
    </div>


    </form>
</main>


<?php
include 'inc_footer.php';
?>
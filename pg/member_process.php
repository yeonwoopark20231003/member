<?php
include '../inc/dbconfig.php';
include '../inc/member.php'; //member class正義のファイル

$mem = new Member($db);

$id       = (isset($_POST['id'      ])&&$_POST['id'      ]!=='')?$_POST['id'      ]:'';
$email    = (isset($_POST['email'   ])&&$_POST['email'   ]!=='')?$_POST['email'   ]:'';
$name     = (isset($_POST['name'    ])&&$_POST['name'    ]!=='')?$_POST['name'    ]:'';
$password = (isset($_POST['password'])&&$_POST['password']!=='')?$_POST['password']:'';
$zipcode  = (isset($_POST['zipcode' ])&&$_POST['zipcode' ]!=='')?$_POST['zipcode' ]:'';
$addr1    = (isset($_POST['addr1'   ])&&$_POST['addr1'   ]!=='')?$_POST['addr1'   ]:'';
$addr2    = (isset($_POST['addr2'   ])&&$_POST['addr2'   ]!=='')?$_POST['addr2'   ]:'';

$mode     = (isset($_POST['mode'    ])&&$_POST['mode'    ]!=='')?$_POST['mode'    ]:'';

//ID 重複チェック
if($mode =='id_chk'){

    if($id == ''){
        die(json_encode(['result'=>'empty_id']));
    }

    if($mem->id_exists($id)){
        //echo 'IDが重複しました。';
        die(json_encode(['result'=>'fail']));

    }else{
        //echo'使用可能なIDです。';
        die(json_encode(['result'=>'success']));
    }


    //email重複チェック
}else if($mode =='email_chk'){

    if($email == ''){
        die(json_encode(['result'=>'empty_email']));
    }

    //email形式チェック
    if($mem->email_format_check($email)==false){
        die(json_encode(['result'=>'email_format_wrong']));
    }


    if($mem->email_exists($email)){
        die(json_encode(['result'=>'fail']));

    }else{
        die(json_encode(['result'=>'success']));
    }

}else if($mode == 'input'){

    //profile image処理
    $tmparr = explode('.',$_FILES['photo']['name']); //['photo','JPG']
    $ext = end($tmparr);
    $photo = $id .'.'.$ext; //

    copy($_FILES['photo']['tmp_name'],"../data/profile".$photo);
 

    $arr = [
        'id' => $id,
        'email' => $email,
        'password'=> $password,
        'name' => $name,
        'zipcode' => $zipcode,
        'addr1' => $addr1,
        'addr2' => $addr2,
        'photo' => $photo
    ];

    $mem-> input($arr);

    echo "
    <script>
        self.location.href='../member_success.php'
    </script>
    ";

}

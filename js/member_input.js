document.addEventListener("DOMContentLoaded",()=>{


    //ID重複チェック
    const btn_id_check = document.querySelector("#btn_id_check")
    btn_id_check.addEventListener("click",()=>{
        const f_id = document.querySelector('#f_id')

        if(f_id.value==''){
            alert('IDを入力してください。')
            return false;
        }
        
        //AJAX
        const f1=new FormData()
        f1.append('id',f_id.value)
        f1.append('mode','id_chk')

        const xhr = new XMLHttpRequest()
        xhr.open("POST","./pg/member_process.php","true")
        xhr.send(f1)

        xhr.onload = () => {
            if(xhr.status==200){
                const data = JSON.parse(xhr.responseText)
                if(data.result=='success'){
                    alert('使用可能なIDです。')
                    document.input_form.id_chk.value = "1"
                }else if(data.result=='fail'){
                    document.input_form.id_chk.value = "0"
                    alert('使用中のIDです。違うIDを入力してください。')
                    f_id.value = ''
                    f_id.focus()
                }else if(data.result=='empty_id'){
                    alert('IDを入力してください。')
                    f_id.focus()
                }
            }
        }
        
    })

        //Email重複チェック
        const btn_email_check = document.querySelector("#btn_email_check")
        btn_email_check.addEventListener("click",()=>{
            const f_email = document.querySelector('#f_email')
    
            if(f_email.value==''){
                alert('Emailを入力してください。')
                return false;
            }
            
            //AJAX
            const f1=new FormData()
            f1.append('email',f_email.value)
            f1.append('mode','email_chk')
    
            const xhr = new XMLHttpRequest()
            xhr.open("POST","./pg/member_process.php","true")
            xhr.send(f1)
    
            xhr.onload = () => {
                if(xhr.status==200){
                    const data = JSON.parse(xhr.responseText)
                    if(data.result=='success'){
                        alert('使用可能なEmailです。')
                        //document.input_form.f_email_chk.value = "1"
                        document.input_form.email_chk.value = "1"
                        console.log(email_chk.value)
                    }else if(data.result=='fail'){
                        alert('使用中のEmailです。違うEmailを入力してください。');
                        f_email.value = ''
                        f_email.focus()
                    }else if(data.result=='empty_email'){
                        alert('Emailを入力してください。')
                        f_email.focus()
                    }else if(data.result=='email_format_wrong'){
                        alert('Emailの形式を確認してください。')
                        f_email.value='';
                        f_email.focus();
                    }
                }
            }
            
        })



    //加入ボタンクをリック
    const btn_submit = document.querySelector("#btn_submit")
    btn_submit.addEventListener("click",()=>{
        const f = document.input_form
        if (f.id.value==''){
            alert('IDを入力してください。')
            f.id.focus
            return false;
        }
        //IDの重複チェックの確認
        if(f.id_chk.value==0){
            alert('IDの重複チェックをしてください。')
            console.log("IDの重複チェックをしてください。")
            return false;
        }

        //名前入力チェック
        if (f.name.value==''){
            alert('名前を入力してください。')
            f.name.focus
            return false;
        }

        //password check
        if(f.password.value==''){
            alert("Passwordを入力してください。")
            f.password.focus()
            return false
        }

        if(f.password2.value==''){
            alert("確認用のPasswordを入力してください。")
            f.password2.focus()
            return false
        }

        //password一致確認
        if(f.password.value!==f.password2.value){
            alert("Passwordが一致しません。")
            f.password.value = '';
            f.password2.value = '';
            f.password.focus()
            return false;
        }

        //email入力の確認
        if(f.email.value==''){
            alert('Emailを入力してください。')
            f.email.focus()
            return false
        }

        //email重複チェックの確認
        if(f.email_chk.value==0){
            alert('Email重複チェックをしてください。')
            return false
        }

        //우편번호 입력 확인
        if(f.zipcode.value == ''){
            alert('郵便番号を入力してください。')
            return false
        }

        //주소입력 확인
        if(f.addr1.value == ''){
            alert('住所を入力してください。')
            f.addr1.focus()
            return false
        }
        if(f.addr2.value == ''){
            alert('詳細住所を入力してください。')
            f.addr2.focus()
            return false
        }

        f.submit()

    })

    //郵便番号検索

    const btn_zipcode = document.querySelector("#btn_zipcode")
    btn_zipcode.addEventListener("click",()=>{

        new daum.Postcode({
            oncomplete: function(data) {

                console.log(data)
                let addr = ''
                let extra_addr = ''

                if(data.userSelectedType == 'J'){
                    addr = data.jibunAddress
                }else if(data.userSelectedType == 'R'){
                    addr = data.roadAddress
                }

                if(data.bname != ''){
                    extra_addr = data.bname
                }

                if(data.buildingName!=''){
                    if(extra_addr==''){
                        extra_addr = data.buildingName
                    }else{
                        extra_addr += ','+data.buildingName
                    }
                    
                }

                if(extra_addr!=''){
                    extra_addr = ' ('+extra_addr+')'
                }
                    
                const f_addr1 = document.querySelector("#f_addr1")
                f_addr1.value = addr+extra_addr

                const f_zipcode = document.querySelector("#f_zipcode")
                f_zipcode.value = data.zonecode

                const f_addr2 = document.querySelector("#f_addr2")
                f_addr2.focus()

            }
        }).open();
    })

    const f_photo = document.querySelector("#f_photo")
    f_photo.addEventListener("change",(e)=>{
        //console.log(e)
        const reader = new FileReader()
        reader.readAsDataURL(e.target.files[0])

        reader.onload = function(event){
            //console.log(event)
            // const img = document.createElement("img")
            // img.setAttribute("src",event.target.result)
            // document.querySelector("#f_preview").appendChild(img)

            const f_preview = document.querySelector("#f_preview")
            f_preview.setAttribute("src",event.target.result)

        }
    })

//8.38
})
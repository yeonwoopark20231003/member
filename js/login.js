document.addEventListener("DOMContentLoaded",()=>{
    const btn_login = document.querySelector("#btn_login")
    btn_login.addEventListener("click",()=>{
        const f_id = document.querySelector('#f_id')
        if(f_id.value == ''){
            alert('IDを入力してください。')
            f_id.focus()
            return false
        }
        const f_pw = document.querySelector('#f_pw')
        if(f_pw.value==''){
            alert('パスワードを入力してください。')
            f_pw.focus()
            return false
        }

        //Ajax
        const xhr = new XMLHttpRequest()
        xhr.open("POST","./pg/login_process.php","true")

        const f1 = new FormData()
        f1.append("id",f_id.value)
        f1.append("pw",f_pw.value)

        xhr.send(f1)

        xhr.onload = () => {
            alert(xhr.status)
        
        }


    })

})
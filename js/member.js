document.addEventListener("DOMContentLoaded",()=>{
    const btn_member = document.querySelector("#btn_member")

    btn_member.addEventListener("click",()=>{
        const chk_member1 = document.querySelector("#chk_member1")
        if(chk_member1.checked !== true){
            alert('会員規約に同意していただかないと加入できません。');
            return false;
        }

        const chk_member2 = document.querySelector("#chk_member2")
        if(chk_member2.checked !== true){
            alert('会員情報取扱方針に同意していただかないと加入できません。');
            return false;
        }

        const f = document.stipulation_form
        f.chk.value = 1
        f.submit()

    })



})
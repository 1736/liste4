<h2 class="ct">會員註冊</h2>
<table class="all">
    <tr>
        <td class="tt ct">姓名</td>
        <td class="pp"><input type="text" name="name" id="name"></td>
    </tr>
    <tr>
        <td class="tt ct">帳號</td>
        <td class="pp"><input type="text" name="acc" id="acc"><input type="button" value="檢測帳號" onclick="chkAcc()"></td>
    </tr>
    <tr>
        <td class="tt ct">密碼</td>
        <td class="pp"><input type="text" name="pw" id="pw"></td>
    </tr>
    <tr>
        <td class="tt ct">電話</td>
        <td class="pp"><input type="text" name="tel" id="tel"></td>
    </tr>
    <tr>
        <td class="tt ct">住址</td>
        <td class="pp"><input type="text" name="addr" id="addr"></td>
    </tr>
    <tr>
        <td class="tt ct">電子信箱</td>
        <td class="pp"><input type="text" name="email" id="email"></td>
    </tr>
</table>
<div class="ct">
    <input type="button" value="註冊" onclick="reg()"><input type="reset" value="重置">
</div>
<script>
function chkAcc(){
    let acc=$("#acc").val();
    $.get("./api/chkacc.php",{acc},function(result){
        if(result=="1" || acc=='admin'){
            alert("此帳號已被使用")
        }else{
            alert("此帳號可以使用")
        }
    })
}
function reg(){
    let acc=$("#acc").val();
    let pw=$("#pw").val();
    let name=$("#name").val();  
    let email=$("#email").val();
    let tel=$("#tel").val();
    let addr=$("#addr").val();
    $.get("./api/chkacc.php",{acc},function(result){
        if(result=="1" || acc=='admin'){
            alert("此帳號已被使用")
        }else{
            $.post("./api/reg.php",{acc,pw,name,email,tel,addr},function(){

                alert("註冊成功，請登入後繼續購物")
                location.href="index.php?do=login";
            })
        }
    })
}
</script>
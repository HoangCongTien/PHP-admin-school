let show = document.querySelector("#show");
let all = document.querySelector(".all");
function showmmain() {
    let Main = document.querySelector(".all");
    if (Main.style.display == "none") {
        Main.style.display = "block";
        
    }
    else {
        Main.style.display = "none";
    }
}
show.addEventListener("click", showmmain);
all.addEventListener("dblclick", showmmain);

let icon = document.querySelector(".icon");
function showMenu() {
    let heading = document.querySelector(".header");
    let menu = document.querySelector(".menu-mobile");
    console.log(menu);
    // icon.innerHTML = ``;
    if (icon) {
        heading.innerHTML += `
        <label for="check"></label>
        <input type="checkbox" hidden name="" id="check">
        <div class="menu-mobile">
            <label for="check" class="hi">
                <img src="./img/Vector.png" alt="">
            </label>
            <div class="mau">

                <img src="./img/image 10.png" alt="">
                <div class="menu">
                    <div class="img_text">
                        <a href="./admintrangchu.html"><img src="./img/image 1.png" alt=""></a>
                        <a href="./admintrangchu.html" id="abc">Trang chủ</a>
                    </div>
                    <div class="img_text">
                        <a href="./adcoso.html"> <img src="./img/image 3.png" alt=""></a>
                        <a href="./adcoso.html" id="abc">Cơ Sở</a>
                    </div>
                    <div class="img_text">
                        <a href="./adhocsinh.html"> <img src="./img/image 2.png" alt=""></a>
                        <a href="./adhocsinh.html" id="abc">Học Sinh</a>
                    </div>
                    <div class="img_text">
                        <a href="./adgiaovien.html"><img src="./img/image 4.png" alt=""></a>
                        <a href="./adgiaovien.html" id="abc">Giao Viên</a>
                    </div>
                    <div class="img_text">
                        <a href="./adkhoahoc.html"><img src="./img/image 5.png" alt=""></a>
                        <a href="./adkhoahoc.html" id="abc">Khóa Học</a>
                    </div>

                </div>
            </div>
        </div>
        `;
        menu.style.width = "300px";
        menu.style.height = "300px";
        menu.style.overflow = "none";
    }
}
icon.addEventListener("click", showMenu); 



/* js logout */
function notify({ heading = "", notify = "", link = "", btnChose = "" }) {
    const box = document.querySelector(".box");

    const modals = document.createElement("div");
    modals.classList.add("modals");

    modals.innerHTML = `
    <div class="modals__inner">
            <div class="modals__header">
                    <p>Xác Nhận</p>
                    <i class="fas fa-times"></i>
            </div>
            <div class="modals__body">
                <h2>${heading}</h2>
                <p>${notify}</p>
            </div>
            <div class="modals__footer">
                <a href="http://localhost/workspace/minimart/${link}">${btnChose}</a>
                <button>Đóng</button>
            </div>
    </div>
    `;

    box.appendChild(modals);

    /* xóa thông báo ra khỏi DOM */
    deleteNotify();

    function deleteNotify() {
        const btnClose1 = document.querySelector(".modals__footer button");
        const iconClose = document.querySelector(".modals__header i");

        btnClose1.onclick = () => {
            box.removeChild(modals);
        };

        modals.onclick = (e) => {
            if (e.target == e.currentTarget) {
                box.removeChild(modals);
            }
        };

        iconClose.onclick = () => {
            box.removeChild(modals);
        }
    }

}

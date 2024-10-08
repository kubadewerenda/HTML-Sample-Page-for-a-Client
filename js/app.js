const IMGGS = document.querySelectorAll(".zdj img");
const PO = document.querySelector(".po");
const PO_CLOSE = document.querySelector(".po__close");
const PO_IMG = document.querySelector(".po__zdj");
const STRZ_L = document.querySelector(".po__strz--l");
const STRZ_P = document.querySelector(".po__strz--p");

let obecnyindex;
const next = () => {
    if(obecnyindex === IMGGS.length-1) {
        obecnyindex=0;
    }else{
        obecnyindex++;
    }
    PO_IMG.src = IMGGS[obecnyindex].src;

};

const prev = () => {
    if(obecnyindex===0){
        obecnyindex=0;
    } else {
        obecnyindex--;
    }
    PO_IMG.src = IMGGS[obecnyindex].src;
};

const close = () => {
    PO.classList.add("fade-out");
    setTimeout(() => {
        PO.classList.add("hidden");
        PO.classList.remove("fade-out");
    },300);
};

IMGGS.forEach((imgg, index) => {
    imgg.addEventListener("click",(e) => {
        PO.classList.remove("hidden");
        PO_IMG.src = e.target.src;
        obecnyindex = index;
    });   
});

PO_CLOSE.addEventListener("click",close);

STRZ_P.addEventListener("click",next);

STRZ_L.addEventListener("click",prev);

document.addEventListener("keydown",(e) => {
    if(!PO.classList.contains("hidden")) {
        if(e.key === "ArrowRight") {
            next();
        }
        if(e.key === "ArrowLeft") {
            prev();        
        }
        if(e.key ==="Escape") {
            close();
        }
    }
});

PO.addEventListener("click",(e) => {
    if(e.target === PO) {
        close();
    }
});



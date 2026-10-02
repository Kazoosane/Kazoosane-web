const code = `
{
    name: "Hadi Sumanjaya",
    role: "Fullstack Developer",
    learning: [
        "PHP",
        "Laravel",
        "JavaScript",
        "Node JS"
    ];
}
`

const codeAnimation = document.getElementById('code-animation')

let index = 0

function typeCode() {
    if(index < code.length) {

        codeAnimation.textContent += code.charAt(index)
        index++

        setTimeout(typeCode, 25)
    }
}


addEventListener('DOMContentLoaded', typeCode);
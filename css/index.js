const inputBar = document.querySelector("#input");
const rootDiv = document.querySelector("#comment");
const btn = document.querySelector("#submit");
function deleteComments(event) {
    const btn = event.target;
    const list = btn.parentNode.parentNode;
    rootDiv.removeChild(list);
}
function operTime() {
    const date = new Date();
    const year = date.getFullYear();
    const month = date.getMonth()+1;
    const wDate = date.getDate();
    const hour = date.getHours();
    const min = date.getMinutes();
    const sec = date.getSeconds();
    const time = year + '-' + month + '-' + wDate + ' ' + hour + ':' + min + ':' + sec;
    return time;
}
function operName() {
    let alphabet = 'abcdefghijklmnopqrstuvwxyz';
    var makeUsername = '';
    for (let i = 0; i < 2; i++) {
        let index = Math.floor(Math.random(10) * alphabet.length);
        makeUsername += alphabet[index];
    }
    for (let j = 0; j < 6; j++) {
        makeUsername += "*";
    }
    return makeUsername;
}

function showComment(comment){
const userName = document.createElement('div');
const inputValue = document.createElement('span');
const showTime = document.createElement('div');
const commentList = document.createElement('div');
const delBtn = document.createElement('button');
delBtn.className = "deleteComment";
delBtn.innerHTML = "삭제";
commentList.className = "eachComment";
userName.className = "name";
inputValue.className = "inputValue";
showTime.className = "time";
userName.innerHTML = operName();
userName.appendChild(delBtn);
inputValue.innerText = comment;
showTime.innerHTML = operTime();

commentList.appendChild(userName);
commentList.appendChild(inputValue);
commentList.appendChild(showTime);
rootDiv.prepend(commentList);
delBtn.addEventListener("click", deleteComments);
console.dir(rootDiv);
}
function pressBtn(){ 
    const currentVal = inputBar.value; 
    if(!currentVal.length){ 
        alert("댓글이 입력되지 않았습니다"); }
    else{ showComment(currentVal);
         mainCommentCount.innerHTML++; 
        inputBar.value =''; } 
    }
 btn.onclick = pressBtn;
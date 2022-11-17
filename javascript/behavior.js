
// METHOD THAT CLEARS ENTERED BLOG INFORMATION TO BE POSTED IF USE CLICKS CLEARS AND CONFIRMS
function doubleCheck(){
    let but1 = document.getElementById("titling");
    let but2 = document.getElementById('infostuff')
    let length1 = but1.value.length;
    let length2 = but2.value.length;
    let value1 = but1.value;
    let value2 = but2.value;
    if ((length1>0) || (length2>0)){
        if (window.confirm("Are you sure you want to clear the information entered?")){
            but1.value = "";
            but1.style.backgroundColor = 'white';
            but2.value = "";
            but2.style.backgroundColor = 'white';
        }
    }
}

//Method that highlights the fields that are left empty upon user clicking post(submit)
function highlightFields(t, writing){
    if (t.length==0){
        document.getElementById("titling").style.backgroundColor = 'red';
    }
    if (writing.length==0){
        document.getElementById("infostuff").style.backgroundColor = 'red';
    }
}

//function that checks if the fields are empty
function checkIfEmpty(e){
    let value1 = document.getElementById("titling").value.trim();
    let value2 = document.getElementById('infostuff').value.trim();
    if ((value1.length==0) || (value2.length==0)){
        e.preventDefault();
        highlightFields(value1, value2);
    }
}

var b = document.getElementById('trytosubmit');
b.addEventListener('click', checkIfEmpty);


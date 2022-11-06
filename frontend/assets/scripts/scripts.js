console.log("I'm working");
fetch('127.0.0.1/dashboard/')
.then(data => {
    console.log(data);
    return data => data.json();
})
.then(res => {
    console.log(res);
});
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    background: url(background5.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    min-height: 100vh;
    width: 100%;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;  
}
.form-box{
     position: relative;
     width: 400px;
     height: 550px;
    border: 2px solid rgba(255,255, 2550.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center ;
}
.form-box h2{
    color: #fff;
    text-align: center;
    font-size: 32px;
}
.form-box .input-box{
    position: relative;
    margin: 30px;
    width: 300px;
    border-bottom: 2px solid #fff;
}
.i{
    position: absolute;
    color: #fff;
    top:13px;
    right: 0;
}
.form-box.input-box input{
    width: 100%;
    height: 45px;
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    font-size: 16px;
}
.input:placeholder{
    color: #fff;
    
}
.btn{
    color: #fff;
    background: blue;
    width: 100%;
    height: 50px;
    border-radius: 5px;
    outline: none;
    border: none;
    font-size: 17px;
    cursor: pointer;
    box-shadow: 3px 0 10px rgba(0,0,0,.5);
}
.group{
    display: flex;
    justify-content: space-between;
}
.group span a{
    color: #fff;
    position: relative;
    top: 10px;
    text-decoration: none;
    font-weight: 500;
}
.group a:focus{
    text-decoration: underline;
}
</style>
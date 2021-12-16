<style>
body {
    margin: 0;
    padding: 0;
    background: f3f3f3;
}
.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
/* input[type="checkbox"]{
    position: relative;
    width: 80px;
    height: 40px;
    appearance: none;
    background: #c6c6c6;
    outline: none;
    border-radius: 20px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 20%);
    transition: 0.5s;
}
input:checked[type="checkbox"]{
    background: #03a9f4;
}
input[type="checkbox"]:before{
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    top: 0;
    left: 0;
    background: #fff;
    transform: scale (1.1);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 20%);
    transition: 0.5s;
}
input:checked[type="checkbox"]:before{
    left: 40px;
} */
.checkbox{
    position: relative;
    width: 80px;
    height: 40px;
    appearance: none;
    background: #c6c6c6;
    outline: none;
    border-radius: 20px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 20%);
    transition: 0.5s;
}
.checkbox:checked{
    background: #03a9f4;
}
.checkbox:before{
    content: '';
    position: absolute;
    width: 40px;
    height: 40px;
    border-radius: 20px;
    top: 0;
    left: 0;
    background: #fff;
    transform: scale (1.1);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 20%);
    transition: 0.5s;
} 
input:checked[type="checkbox"]:before{
    left: 40px;
} 


</style>

<div class="center">
    <input type="checkbox" name="" id=""class="checkbox">
</div>
